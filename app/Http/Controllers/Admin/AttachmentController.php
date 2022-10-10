<?php

namespace App\Http\Controllers\Admin;

use App\Models\Attachment;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Yajra\DataTables\DataTables;

class AttachmentController extends AdminController
{
    public function index($id)
    {


        $category = Category::where('id', $id)->first(['name', 'id']);
        return view('admin.attachments.reportsPlans.view', compact('category'));

    }

    public function getAttachment($category_type_id)
    {


        $attachment = Attachment::where('category_id', $category_type_id)->select();

        $count = $attachment->count();
        $datatable = Datatables::of($attachment)->setTotalRecords($count);

        $datatable->editColumn('active', function ($row) {
            $data['active'] = $row->active;
            $data['id'] = $row->id;

            return view('admin.attachments.parts.status', $data)->render();
        });

        $datatable->editColumn('user_id', function ($row) {
            return $row->user->name;
        });


        $datatable->editColumn('link', function ($row) use ($category_type_id) {

            if ($category_type_id == Category::TYPE_IMAGE) {

                $url = asset('storage/attachment/media/' . $row->link);
                return '<img src="'.$url.'" width="50" height="50" class="img-responsive" align="center" />';

            } elseif (in_array($category_type_id, [Category::TYPE_STRATEGIC_PLAN, Category::TYPE_MANAGEMENT_REPORTS])) {
                $url = asset('storage/attachment/reportAndPlane/' . $row->link);
                return '<a href="' . $url . '" target="_blank" title="2021">اضغط هنا</a>';

            } elseif ($category_type_id == Category::TYPE_VIDEO) {

               $url = $row->link;
                return '<a href="' . $url . '" target="_blank" title="2021">اضغط هنا</a>';

            }

        });


        $datatable->editColumn('created_at', function ($row) {
            return $row->created_at->diffForHumans();
        });

        $datatable->editColumn('description', function ($row) {

            return str_limit($row->description, $limit = 30, $end = '....');
        });



        $datatable->addColumn('actions', function ($row) {
            $data['id_hash'] = $row->id;

            return view('admin.attachments.parts.actions', $data)->render();
        });

        $datatable->filter(function ($query) {
            if (request()->has('description')) {
                $query->where('description', 'like', "%" . request('description') . "%");
            }


            if (request()->has('active') && !is_null(request('active'))) {
                $query->where('active', request('active'));
            }

        }, true);

        $datatable->setRowId(function ($row) {
            return $row->id_hash;
        });

        $datatable->escapeColumns(['*']);

        return $datatable->make(true);

    }


    public function add($category_id)
    {
        $category = Category::where('id', $category_id)->first('name');
        if ($category_id == Category::TYPE_STRATEGIC_PLAN || $category_id == Category::TYPE_MANAGEMENT_REPORTS) {
            return view('admin.attachments.reportsPlans.addReportPlane', compact('category', 'category_id'));
        } elseif ($category_id == Category::TYPE_MUNICIPAL_STRUCTURE) {
            $attachment = Attachment::where('category_id',$category_id)->first('link');
            return view('admin.attachments.reportsPlans.addFileHierarchy', compact('category','attachment', 'category_id'));
        } elseif ($category_id == Category::TYPE_IMAGE) {
            return view('admin.attachments.media.image.addImage', compact('category', 'category_id'));
        } elseif ($category_id == Category::TYPE_VIDEO) {
            return view('admin.attachments.media.video.addVideo', compact('category', 'category_id'));
        }
    }


    public function store(Request $request)
    {
        $category = $request->category_id;
        $data = $request->all();
        $attachment = new Attachment();
        if ($category == Category::TYPE_MANAGEMENT_REPORTS || $category == Category::TYPE_STRATEGIC_PLAN||$category == Category::TYPE_MUNICIPAL_STRUCTURE) {
            $request->validate([

                'description' => 'required|min:3',
                'link' => 'required|mimes:pdf'
            ]);
            $attachment->fill($data);
            if ($file = request()->file('link')) {
                $attachmentLink = time() . '.' . $file->getClientOriginalExtension();
                request()->file('link')->storeAs(
                    'public\attachment\reportAndPlane', $attachmentLink
                );
                $attachment->link = $attachmentLink;
            }
        } elseif ($category == Category::TYPE_IMAGE) {
            $request->validate([

                'description' => 'required|min:3',
                'image' => 'required|mimes:jpeg,jpg,png'
            ]);
            $attachment->fill($data);

            if ($file = request()->file('image')) {
                $attachmentLink = time() . '.' . $file->getClientOriginalExtension();
                request()->file('image')->storeAs(
                    'public\attachment\media', $attachmentLink
                );
                $attachment->link = $attachmentLink;

            }
        } elseif ($category == Category::TYPE_VIDEO) {
            $request->validate([
                'description' => 'required|min:3',
                'link' => 'required|url',
                'image'=>'required|mimes:jpeg,jpg,png'
            ]);
            $attachment->fill($data);
            if ($file = request()->file('image')) {
                $videoImage = time() . '.' . $file->getClientOriginalExtension();
                request()->file('image')->storeAs(
                    'public\attachment\video', $videoImage
                );
                $attachment->image = $videoImage;

            }
        }
        $attachment->user_id = Auth::id();
        $attachment->category_id = $request->category_id;

        $add = $attachment->save();

        if (!$add) {
//            $message =$add->message();
            return $this->respondGeneral(true, 500, trans('حدث خطأ بالاضافة'),null);
        }
        return $this->respondGeneral(true, 200, trans('تم الأضافة بنجاخ'), null, null);

    }


    public function edit($id){

        $attachment = Attachment::where('id',$id)->with('category')->first();
        if ($attachment->category->id == Category::TYPE_STRATEGIC_PLAN || $attachment->category->id == Category::TYPE_MANAGEMENT_REPORTS) {
            return view('admin.attachments.reportsPlans.editReportPlane', compact('attachment'));
        } elseif ($attachment->category->id == Category::TYPE_MUNICIPAL_STRUCTURE) {
//            return view('admin.attachments.reportsPlans.editFileHierarchy', compact('category', 'category_id'));
        } elseif ($attachment->category->id == Category::TYPE_IMAGE) {
            return view('admin.attachments.media.image.editImage', compact('attachment'));
        } elseif ($attachment->category->id == Category::TYPE_VIDEO) {
            return view('admin.attachments.media.video.editVideo', compact('attachment'));
        }
    }


    public function update(Request $request,$id){

        $data = $request->all();
        $attachment = Attachment::findOrFail($id);
        if ($attachment->category_id == Category::TYPE_MANAGEMENT_REPORTS || $attachment->category_id == Category::TYPE_STRATEGIC_PLAN||$attachment->category_id == Category::TYPE_MUNICIPAL_STRUCTURE) {
            $request->validate([

                'description' => 'required|min:3',
                'link' => 'mimes:pdf'
            ]);
            $attachment->fill($data);
            if ($file = request()->file('link')) {
                $attachmentLink = time() . '.' . $file->getClientOriginalExtension();
                request()->file('link')->storeAs(
                    'public\attachment\reportAndPlane', $attachmentLink
                );
                $attachment->link = $attachmentLink;
            }
        } elseif ($attachment->category_id == Category::TYPE_IMAGE) {
            $request->validate([

                'description' => 'required|min:3',
                'image' => 'nullable|mimes:jpeg,jpg,png'
            ]);
            $attachment->fill($data);

            if ($file = request()->file('image')) {
                $attachmentLink = time() . '.' . $file->getClientOriginalExtension();
                request()->file('image')->storeAs(
                    'public\attachment\media', $attachmentLink
                );
                $attachment->link = $attachmentLink;

            }
        } elseif ($attachment->category_id == Category::TYPE_VIDEO) {
            $request->validate([
                'description' => 'required|min:3',
                'link' => 'required|url',
                'image' => 'nullable|mimes:jpeg,jpg,png'

            ]);
            $attachment->fill($data);
            if ($file = request()->file('image')) {
                $videoImage = time() . '.' . $file->getClientOriginalExtension();
                request()->file('image')->storeAs(
                    'public\attachment\video', $videoImage
                );
                $attachment->image = $videoImage;

            }

        }
        $attachment->user_id = Auth::id();
        $attachment->category_id = $request->category_id;

        $update = $attachment->update();

        if (!$update) {
//            $message =$add->message();
            return $this->respondGeneral(true, 500, trans('حدث خطأ بتحديث البيانات'));
        }
        return $this->respondGeneral(true, 200, trans('تم تحديث بنجاح'),  null, null);

    }


    public function   delete($id)
    {


        $delete = Attachment::findOrFail($id)->delete();

        if (!$delete)
        {
            return $this->respondGeneral(true, 500, trans('حدث خطأ بالحذف'), null,null);
        }
        return $this->respondGeneral(true, 200, trans('تم الحذف بنجاح'),  null,null);

    }

    public function   status($id)
    {


        $attachment = Attachment::findOrFail($id);

        $attachment->update([
            'active' => ! $attachment->active
        ]);

        $saved = $attachment->save();

        if ($saved) {
            return $this->respondGeneral(true, 200, 'تم بنجاح تحديث الحالة ', null, null);
        }
    }
}
