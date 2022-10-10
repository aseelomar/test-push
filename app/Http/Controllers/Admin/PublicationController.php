<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\Publication\StorePublication;
use App\Http\Requests\Admin\Publication\UpdatePublication;
use App\Models\AboutUs;
use App\Models\Category;
use App\Models\Publication;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Yajra\DataTables\DataTables;


class PublicationController extends AdminController
{
    public function index($id)
    {
        //return bcrypt('Rr@2500101');

        $category =Category::findOrFail($id);
        $category->makeHidden(['user_id','update_id','active','created_at','updated_at','deleted_at']);
        return view('admin.publications.view',compact(['category']));
  }

    public function getPublication($category_id)
    {
        $publication = Publication::where('category_id',$category_id)->select();
        $count = $publication->count();
        $datatable = Datatables::of($publication)->setTotalRecords($count);
        $datatable->editColumn('active', function ($row)
        {
            $data['active'] = $row->active;
            $data['id'] = $row->id_hash;

            return view('admin.publications.parts.status', $data)->render();
        });

        $datatable->editColumn('user_id', function ($row)
        {
            return $row->user->name;
        });

        $datatable->editColumn('image', function ($row)
        {
            $url= asset('storage/publication/'.$row->image);

            return '<img src="'.$url.'" width="50" height="50" class="img-responsive" align="center" />';
        });

        $datatable->editColumn('created_at', function ($row)
        {
            return $row->created_at->diffForHumans();
        });

             $datatable->editColumn('title', function ($row)
        {

            return  str_limit($row->title, $limit = 30, $end = '....');
        });


        $datatable->addColumn('actions', function ($row)
        {
            $data['id_hash'] = $row->id_hash;

            return view('admin.publications.parts.actions', $data)->render();
        });

        $datatable->filter(function ($query) {
            if (request()->has('title')) {
                $query->where('title', 'like', "%" . request('title') . "%");
            }


            if(request()->has('active')&& !is_null(request('active'))){
                $query->where('active',request('active'));
            }

        }, true);

        $datatable->setRowId(function ($row) {
            return $row->id_hash;
        });

        $datatable->escapeColumns(['*']);

        return $datatable->make(true);

    }

    public function add($id)
    {

        $category = Category::where('id',$id)->first();
     $category->makeHidden(['user_id','update_id','active','created_at','updated_at','deleted_at']);

       return view('admin.publications.add',compact('category'));
    }


    public function store(StorePublication $request)
    {


        $data = $request->all();
        $publication = new Publication();
        $publication->fill($data);
        if ($file = request()->file('image')){
            $publicationImage = time() . '.' . $file->getClientOriginalExtension();
            request()->file('image')->storeAs(
                'public\publication', $publicationImage
            );
            $publication->image = $publicationImage;
        }

        if($request->showSlider) {
            $publication->showSlider = 1;
        }
        $publication->user_id = Auth::id();

        $add = $publication->save();

        if (!$add)
        {
//            $message =$add->message();
            return $this->respondGeneral(true, 500, trans('حدث خطأ') );
        }
        return $this->respondGeneral(true, 200, trans('تم الاضافة بنجاح'), null,null);

    }


    public function   status($id)
    {
        $id = Crypt::decryptString($id);

        $publication = Publication::findOrFail($id);

        $publication->update([
            'active' => ! $publication->active
        ]);

        $saved = $publication->save();

        if ($saved) {
            return $this->respondGeneral(true, 200, 'تم بنجاح تحديث الحالة ', null, null);
        }
    }

    public function   delete($id)
    {
        $id = Crypt::decryptString($id);

        $delete = Publication::findOrFail($id)->delete();

        if (!$delete)
        {
            return $this->respondGeneral(true, 500, trans('حدث خطأ'), null,null);
        }
        return $this->respondGeneral(true, 200, trans('تم الحذف بنجاح'), trans('messages.deleted'), null,null);

    }


    public function edit($id)
    {
        $id = Crypt::decryptString($id);
        $publication = Publication::findOrFail($id);
        return view('admin.publications.edit',compact('publication'));
    }

    public function update(UpdatePublication $request,$id)
    {
        $publication = Publication::findOrFail($id);
        $publication->fill($request->only([
            'title',
            'description',
            'goal'
        ]));

        if ($file = request()->file('image')) {
            $publicationImage = time() . '.' . $file->getClientOriginalExtension();
            request()->file('image')->storeAs(
                'public\publication', $publicationImage
            );
            $publication->image = $publicationImage;
        }
        if($request->showSlider) {
            $publication->showSlider = 1;
        }else {
            $publication->showSlider = 0;
        }
        $update=$publication->update();
        if (!$update)
        {
            return $this->respondGeneral(true, 500, trans('حدث خطأ '),  null,null);
        }
        return $this->respondGeneral(true, 200, trans('تم تحديث بنجاح'), null,null);
    }

    public function show($id){

        $id = Crypt::decryptString($id);
        $publication = Publication::where('id',$id)->with('category')->first();

        return view('admin.publications.show',compact('publication'));
    }
}
