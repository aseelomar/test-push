<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Job\StoreRequest;
use App\Http\Requests\Admin\Job\UpdateRequest;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class JobController extends AdminController
{
    public function index(){
        return view('admin.jobs.view');
    }

    public function getJobs()
    {

        $job = Job::query();

        $count = $job->count();
        $datatable = Datatables::of($job)->setTotalRecords($count);

        $datatable->editColumn('active', function ($row) {
            $data['active'] = $row->active;
            $data['id'] = $row->id;

            return view('admin.jobs.parts.status', $data)->render();
        });

        $datatable->editColumn('user_id', function ($row) {
            return $row->user->name;
        });
        $datatable->editColumn('link', function ($row) {
            $url = $row->link;
            return '<a href="' . $url . '" target="_blank" title="2021">اضغط هنا</a>';
        });




        $datatable->editColumn('created_at', function ($row) {
            return $row->created_at->diffForHumans();
        });


        $datatable->addColumn('actions', function ($row) {
            $data['id_hash'] = $row->id;

            return view('admin.jobs.parts.actions', $data)->render();
        });

        $datatable->filter(function ($query) {
            if (request()->has('title')) {
                $query->where('title', 'like', "%" . request('title') . "%");
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

    public function store(StoreRequest $request)
    {

        $data =$request->all();
        $job = new Job();
        $job->fill($data);
        if ($file = request()->file('image')){
            $jobImage = time() . '.' . $file->getClientOriginalExtension();
            request()->file('image')->storeAs(
                'public\job', $jobImage
            );
            $job->image = $jobImage;
        }
        $job->user_id = Auth::id();
        $add = $job->save();
        if (!$add) {
            return $this->respondGeneral(true, 500,'خطأ في بيانات', null, null);
        }
        return $this->respondGeneral(true, 200,'تم اضافة بنجاح',null, null);

    }

    public function add(){
        return view('admin.jobs.add');
    }

    public function   status($id)
    {


        $job = Job::findOrFail($id);

        $job->update([
            'active' => ! $job->active
        ]);

        $saved = $job->save();

        if ($saved) {
            return $this->respondGeneral(true, 200, 'تم بنجاح تحديث الحالة ', null, null);
        }
    }

    public function   delete($id)
    {


        $delete = Job::findOrFail($id)->delete();

        if (!$delete)
        {
            return $this->respondGeneral(true, 500, trans('حدث خطأ بحذف البيانت'), null,null);
        }
        return $this->respondGeneral(true, 200, trans('تم الحذف بنجاح'), null,null);

    }

    public function edit($id)
    {
        $job = job::findOrFail($id);
        return view('admin.jobs.edit',compact('job'));
    }

    public function show($id)
    {
        $job = job::findOrFail($id);
        return view('admin.jobs.show',compact('job'));
    }
    public function update(UpdateRequest $request,$id)
    {
        $job = Job::findOrFail($id);
        $job->fill($request->all());

        if ($file = request()->file('image')){
            $jobImage = time() . '.' . $file->getClientOriginalExtension();
            request()->file('image')->storeAs(
                'public\job', $jobImage
            );
            $job->image = $jobImage;
        }

        $update=$job->update();
        if (!$update)
        {
            return $this->respondGeneral(true, 500, trans('حدث خطأ بتعديل'),  null,null);
        }
        return $this->respondGeneral(true, 200, trans('تم التعديل بنجاح'), null,null);
    }

}
