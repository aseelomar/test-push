<?php

namespace App\Http\Controllers\Admin;

use App\Models\Albums;
use App\Models\Photos;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class AlbumsController extends AdminController
{
    public function index(){
        return view('admin.albums.view');
    }

    public function add()
    {
        return view('admin.albums.add');
    }

    public function getAlbums()

    {
        $albums = Albums::query();
        $count = $albums->count();
        $datatable = Datatables::of($albums)->setTotalRecords($count);


        $datatable->editColumn('active', function ($row)
        {
            $data['active'] = $row->active;
            $data['id'] = $row->id;

            return view('admin.albums.parts.status', $data)->render();
        });
        $datatable->editColumn('description', function ($row)
        {

            return  str_limit($row->description, $limit = 30, $end = '....');
        });


        $datatable->editColumn('cover_photo', function ($row)
        {
            $url= asset('storage/albums/'.$row->cover_photo);

            return '<img src="'.$url.'" width="50" height="50" class="img-responsive" align="center" />';
        });

        $datatable->editColumn('created_at', function ($row)
        {
            return $row->created_at->diffForHumans();
        });

        $datatable->addColumn('actions', function ($row)
        {
            $data['id'] = $row->id;

            return view('admin.albums.parts.actions', $data)->render();
        });

        $datatable->filter(function ($query) {
            if (request()->has('description')) {
                $query->where('description', 'like', "%" . request('description') . "%");
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

    public function store(Request $request)
    {

        $file = $request->file('cover_photo');
        $random_name = str_random(8);
        $extension = $file->getClientOriginalExtension();
        $filename = $random_name . '_cover.' . $extension;

        $file->storeAs(
            'public\albums', $filename
        );
        if($request->show_in_home){
            $showInHome= 1;
        }else
         {
             $showInHome=0;
         }


        $album = Albums::query()->create([
            'description' => $request->input('description'),
            'cover_photo' => $filename,
            'active' => 1,
            'show_in_home' => $showInHome,
            'user_id' => auth()->id()
        ]);

        foreach ($request->file('albumPhoto') as $index => $photo) {
            $random_name = str_random(8);
            $extension = $photo->getClientOriginalExtension();
            $filename = $random_name . '_photo.' . $extension;

            $photo->storeAs(
                'public\albums\photos', $filename
            );

            Photos::query()->create([
                'album_id' => $album->id,
                'link' => $filename,
                'active' => 1,
            ]);
        }

        if (!$album) {
            return $this->respondGeneral(true, 500,'خطأ في بيانات', null, null);
        }
        return $this->respondGeneral(true, 200,'تم اضافة بنجاح',null, null);
    }

    public function edit($id)
    {
        $album = Albums::with('photos')->findOrFail($id);

        return view('admin.albums.edit', compact('album'));
    }

    public function update(Request $request, $id)
    {
        $album = Albums::query()->findOrFail($id);

        // edit album data and cover photo
        // here

        if ($request->hasFile('cover_photo')) {
            $file = $request->file('cover_photo');
            $random_name = str_random(8);
            $extension = $file->getClientOriginalExtension();
            $filename = $random_name . '_cover.' . $extension;

            $file->storeAs(
                'public\albums', $filename
            );
        }
        if($request->show_in_home){
            $showInHome= 1;
        }else
        {
            $showInHome=0;
        }
        $album->fill($request->only(['description', 'active']));
        if($request->show_in_home){
            $album->show_in_home= 1;
        }else
        {
            $album->show_in_home=0;
        }
        $album->user_id = auth()->id();

        $update=$album->update();


        // add new photos to photos table if there is a new photos in request

        if ($request->hasFile('albumPhoto')) {
            foreach ($request->file('albumPhoto') as $index => $photo) {
                $random_name = str_random(8);
                $extension = $photo->getClientOriginalExtension();
                $filename = $random_name . '_photo.' . $extension;

                $photo->storeAs(
                    'public\albums\photos', $filename
                );

                Photos::query()->create([
                    'album_id' => $album->id,
                    'link' => $filename,
                    'active' => 1,
                ]);
            }

        }

        if (! $update) {
            return $this->respondGeneral(true, 500,'خطأ في بيانات', null, null);
        }
        return $this->respondGeneral(true, 200,'تم تحديث بنجاح',null, null);



    }

    public function deletePhoto($photo_id)
    {
        Photos::query()->findOrFail($photo_id)->delete();

        return 'deleted';
    }

    public function show($id)
    {
        $album = Albums::with('photos')->findOrFail($id);

        return view('admin.albums.show', compact('album'));
    }
     public function delete($id)
     {
         $albums = Albums::with('photos')->findOrFail($id);
         $photos= $albums->photos;
         return $photos;
            foreach ($photos as $photo){

               //$photo = Photos::where('album_id',$albums->id);

                $photo->delete();

            }
            $delete = $albums->delete();
         if (!$delete)
         {
             return $this->respondGeneral(true, 500, trans('حدث خطأ'), null,null);
         }
         return $this->respondGeneral(true, 200, trans('تم الحذف بنجاح'), trans('messages.deleted'), null,null);

     }

    public function   status($id)
    {


        $album = Albums::findOrFail($id);

        $album->update([
            'active' => ! $album->active
        ]);

        $saved = $album->save();

        if ($saved) {
            return $this->respondGeneral(true, 200, 'تم بنجاح تحديث الحالة ', null, null);
        }
    }

}
