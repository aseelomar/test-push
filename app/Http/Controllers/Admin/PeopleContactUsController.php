<?php

namespace App\Http\Controllers\Admin;


use App\Models\PeopleContactUs;
use Yajra\DataTables\DataTables;

class PeopleContactUsController extends AdminController
{
    public function index()
    {
        return view('admin.peopleContactUs.view');

    }
    public function getPeopleContactUs()
    {

        $peopleContactUs = PeopleContactUs::query();

        $count = $peopleContactUs->count();
        $datatable = Datatables::of($peopleContactUs)->setTotalRecords($count);

        $datatable->editColumn('message', function ($row)
        {

            return  str_limit($row->message, $limit = 30, $end = '....');
        });




        $datatable->editColumn('created_at', function ($row)
        {
            return $row->created_at->diffForHumans();
        });

        $datatable->addColumn('actions', function ($row)
        {
            $data['id'] = $row->id;

            return view('admin.peopleContactUs.parts.actions', $data)->render();
        });

        $datatable->filter(function ($query) {
            if (request()->has('name')) {
                $query->where('name', 'like', "%" . request('name') . "%");
            }




        }, true);

//        $datatable->setRowId(function ($row) {
//            return $row->id;
//        });

        $datatable->escapeColumns(['*']);

        return $datatable->make(true);
    }
    public function show($id)
    {
        $infoContactUs = PeopleContactUs::findOrFail($id);

        return view('admin.peopleContactUs.show',compact(['infoContactUs']));

    }

}
