<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends AdminController
{
    public function index($id)
    {
        $publication = Publication::where('category_id',$id)->get();
        dd($publication);
        return view('admin.publications.view',compact('publication'));
    }

    public function getPublication()
    {

        $news = Publication::news()->query();

        $count = $news->count();
        $datatable = Datatables::of($news)->setTotalRecords($count);

        $datatable->editColumn('active', function ($row)
        {
            $data['active'] = $row->active;
            $data['id'] = $row->id_hash;

            return view('admin.news.parts.status', $data)->render();
        });

        $datatable->editColumn('user_id', function ($row)
        {
            return $row->user->name;
        });

        $datatable->editColumn('category_id', function ($row)
        {
            return $row->category->name;
        });

        $datatable->editColumn('image', function ($row)
        {
            $url= asset('storage/news/'.$row->image);

            return '<img src="'.$url.'" width="50" height="50" class="img-responsive" align="center" />';
        });


        $datatable->editColumn('created_at', function ($row)
        {
            return $row->created_at->diffForHumans();
        });

        $datatable->editColumn('description', function ($row)
        {

            return  str_limit($row->description, $limit = 50, $end = '....');
        });


        $datatable->addColumn('actions', function ($row)
        {
            $data['id_hash'] = $row->id_hash;

            return view('admin.news.parts.actions', $data)->render();
        });

        $datatable->filter(function ($query) {
            if (request()->has('title')) {
                $query->where('title', 'like', "%" . request('title') . "%");
            }

            if (request()->has('category_id') && !is_null(request('category_id'))) {
                $query->where('category_id', request('category_id'));
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

        return view('admin.publications.add');
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $publication = new Publication();
        $publication->fill($data);
        if ($file = request()->file('image')) {
            $publicationImage = time() . '.' . $file->getClientOriginalExtension();
            request()->file('image')->storeAs(
                'public\news', $publicationImage
            );
            $publication->image = $publicationImage;
        }


        $publication->user_id = Auth::id();

        $add = $publication->save();

        if (!$add)
        {
//            $message =$add->message();
            return $this->respondGeneral(true, 500, trans('alert.error'),trans('messages.add') );
        }
        return $this->respondGeneral(true, 200, trans('alert.success'), trans('messages.add'), null,null);

    }
}
