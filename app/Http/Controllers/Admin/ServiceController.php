<?php

namespace App\Http\Controllers\Admin;



use App\Http\Requests\Admin\ServiceRequest;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Yajra\DataTables\DataTables;

class ServiceController extends AdminController
{
    public function index()
    {
        return view('admin.services.view');
    }

    public function getService()
    {
        $service= Service::query();
        $count = $service->count();
        $datatable = Datatables::of($service)->setTotalRecords($count);

        $datatable->editColumn('active', function ($row)
        {
            $data['active'] = $row->active;
            $data['id'] = $row->id;

            return view('admin.services.parts.status', $data)->render();
        });

        $datatable->editColumn('user_id', function ($row)
        {
            return $row->user->name;
        });

        $datatable->editColumn('created_at', function ($row)
        {
            return $row->created_at->diffForHumans();
        });

        $datatable->editColumn('description', function ($row)
        {

            return  str_limit($row->description, $limit = 30, $end = '....');
        });


        $datatable->addColumn('actions', function ($row)
        {
            $data['id'] = $row->id;

            return view('admin.services.parts.actions', $data)->render();
        });

        $datatable->filter(function ($query) {
            if (request()->has('name')) {
                $query->where('name', 'like', "%" . request('name') . "%");
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

    public function add()
    {
        return view('admin.services.add');
    }

    public function store(ServiceRequest $request)
    {
        $data             = $request->all();
        $service          =  new Service();
        $service->user_id = Auth::id();
        $service->fill($data);

        $add = $service->save();
        if (!$add) {
            return $this->respondGeneral(true, 500,'خطأ في بيانات', null, null);
        }
        return $this->respondGeneral(true, 200,'تم اضافة بنجاح',null, null);

    }

    public function   status($id)
    {

        $getServices = Service::findOrFail($id);
        $getServices->update([
            'active' => ! $getServices->active
        ]);

        $saved = $getServices->save();

        if ($saved) {
            return $this->respondGeneral(true, 200, 'تم بنجاح تحديث الحالة ', null, null);
        }
    }

    public function   delete($id)
    {

        $delete = Service::findOrFail($id)->delete();

        if (!$delete)
        {
            return $this->respondGeneral(true, 500, trans('حدث خطأ بالحذف'), null,null);
        }
        return $this->respondGeneral(true, 200, trans('تم الحذف بنجاح'), trans('messages.deleted'), null,null);

    }

    public function show($id){

        $service = Service::findOrFail($id);

        return view('admin.services.show',compact(['service']));
    }

    public function edit($id){

        $service = Service::findOrFail($id);
        return view('admin.services.edit',compact(['service']));
    }

   public function update(ServiceRequest $request,$id){
          $data        = $request->all();
          $updateService   =Service::findOrFail($id);
          $updateService->fill($data);
             $update=$updateService->update();
        if (!$update) {
            return $this->respondGeneral(true, 500,'خطأ في بيانات', null, null);
        }
        return $this->respondGeneral(true, 200,'تم اضافة بنجاح',null, null);


   }
}
