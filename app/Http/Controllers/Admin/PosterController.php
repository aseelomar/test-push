<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\Poster\StorePosterRequest;
use App\Http\Requests\Admin\Poster\UpdatePosterRequest;
use App\Models\Poster;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class PosterController extends AdminController
{
    public function index(){
        return view('admin.poster.view');
    }

    public function getPoster()
    {
        $poster = Poster::query();
        $count = $poster->count();
        $datatable = Datatables::of($poster)->setTotalRecords($count);


        $datatable->editColumn('active', function ($row)
        {
            $data['active'] = $row->active;
            $data['id'] = $row->id;

            return view('admin.poster.parts.status', $data)->render();
        });
        $datatable->editColumn('description', function ($row)
        {

            return  str_limit($row->description, $limit = 30, $end = '....');
        });


        $datatable->editColumn('image', function ($row)
        {
            $url= asset('storage/poster/'.$row->image);

            return '<img src="'.$url.'" width="50" height="50" class="img-responsive" align="center" />';
        });

        $datatable->editColumn('created_at', function ($row)
        {
            return $row->created_at->diffForHumans();
        });

        $datatable->addColumn('actions', function ($row)
        {
            $data['id'] = $row->id;

            return view('admin.poster.parts.actions', $data)->render();
        });

        $datatable->filter(function ($query) {
            if (request()->has('title')) {
                $query->where('title', 'like', "%" . request('title') . "%");
            }

            if(request()->has('active')&& !is_null(request('active'))){
                $query->where('active',request('active'));
            }

        }, true);

//        $datatable->setRowId(function ($row) {
//            return $row->id;
//        });

        $datatable->escapeColumns(['*']);

        return $datatable->make(true);

    }

    public function add()
    {
        return view('admin.poster.add');
    }

    public function store(StorePosterRequest $request )
    {
        $data =$request->all();
        $poster = new Poster();
        $poster->fill($data);
        if ($file = request()->file('image')){
            $posterImage = time() . '.' . $file->getClientOriginalExtension();
            request()->file('image')->storeAs(
                'public\poster', $posterImage
            );
            $poster->image = $posterImage;
        }
        $poster->user_id = Auth::id();
        $add = $poster->save();
        if (!$add) {
            return $this->respondGeneral(true, 500,'خطأ في بيانات', null, null);
        }
        return $this->respondGeneral(true, 200,'تم اضافة بنجاح',null, null);

    }

    public function   status($id)
    {


        $poster = Poster::findOrFail($id);

        $poster->update([
            'active' => ! $poster->active
        ]);

        $saved = $poster->save();

        if ($saved) {
            return $this->respondGeneral(true, 200, 'تم بنجاح تحديث الحالة ', null, null);
        }
    }

    public function   delete($id)
    {


        $delete = Poster::findOrFail($id)->delete();

        if (!$delete)
        {
            return $this->respondGeneral(true, 500, trans('حدث خطأ بحذف البيانت'), null,null);
        }
        return $this->respondGeneral(true, 200, trans('تم الحذف بنجاح'),  null,null);

    }

    public function edit($id)
    {
        $poster = Poster::findOrFail($id);
        return view('admin.poster.edit',compact('poster'));
    }

    public function update(UpdatePosterRequest $request,$id)
    {
        $poster = Poster::findOrFail($id);
        $poster->fill($request->all());

        if ($file = request()->file('image')){
            $posterImage = time() . '.' . $file->getClientOriginalExtension();
            request()->file('image')->storeAs(
                'public\poster', $posterImage
            );
            $poster->image = $posterImage;
        }

        $update=$poster->update();
        if (!$update)
        {
            return $this->respondGeneral(true, 500, trans('حدث خطأ بتعديل'), null,null);
        }
        return $this->respondGeneral(true, 200, trans('تم التعديل بنجاح'), null,null);
   }
    public function show($id)
    {
        $poster = Poster::findOrFail($id);
        return view('admin.poster.show',compact('poster'));
    }
}
