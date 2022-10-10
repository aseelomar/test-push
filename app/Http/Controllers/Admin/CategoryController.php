<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\Admin\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Yajra\DataTables\DataTables;

class CategoryController extends AdminController
{


    public function  index()
    {
        $category = Category::all();
        return view('admin.categories.view',compact('category'));
    }



    public function getCategory(){

        $categories = Category::query();

        $count = $categories->count();

        $datatable = Datatables::of($categories)->setTotalRecords($count);

        $datatable->editColumn('active', function ($row)
        {
            $data['active'] = $row->active;
            $data['id'] = $row->id;

            return view('admin.categories.parts.status', $data)->render();
        });

        $datatable->editColumn('user_id', function ($row)
        {
            return $row->user->name;
        });


        $datatable->editColumn('created_at', function ($row)
        {
            return $row->created_at->diffForHumans();
        });



        $datatable->addColumn('actions', function ($row)
        {
            $data['id_hash'] = $row->id;

            return view('admin.categories.parts.actions', $data)->render();
        });

        $datatable->filter(function ($query) {
            if (request()->has('name')) {
                $query->where('name', 'like', "%" . request('name') . "%");
            }
        }, true);


        $datatable->setRowId(function ($row) {
            return $row->id;
        });

        $datatable->escapeColumns(['*']);

        return $datatable->make(true);

    }


    public function store(CategoryRequest $request){
        $data=request()->all();
        if($request->id!== null){
            $id=$request->id;
            $category = Category::findOrFail($id);
            $category->fill($data);
            $update=$category->update();
            if (!$update)
            {
                return $this->respondGeneral(true, 500, 'حدث خطأ في تحديث البيانات,تأكد من بيانات المدخلة',null,null);
            }
            return $this->respondGeneral(true, 200, 'تم تحديث البيانات بنجاح ',  null);
        }else {
            $category = new Category();
            $category->fill($data);
            $category->user_id = Auth::id();
            $add = $category->save();

            if (!$add) {
                return $this->respondGeneral(true, 500,'خطأ في بيانات', null, null);
            }
            return $this->respondGeneral(true, 200,'تم اضافة بنجاح',null, null);
        }
    }


    public function   status($id)
{


    $category = Category::findOrFail($id);

    $category->update([
        'active' => ! $category->active
    ]);

    $saved = $category->save();

    if ($saved) {
        return $this->respondGeneral(true, 200, 'تم بنجاح تحديث الحالة ', null, null);
    }
}

    public function edit($id)
    {

        $category = Category::findOrFail($id);
        return response()->json($category);
    }
}
