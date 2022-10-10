<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\MunicipalMemberRequest;
use App\Models\CategoryMember;
use App\Models\MunicipalCouncilMember;
use App\Models\SocialMedia;
use App\Models\SocialMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class MunicipalCouncilMemberController extends AdminController
{
    public function index(){

        return view('admin.municipalMember.view');
    }

    public function getMunicipal()
    {
        $municipalMembers = MunicipalCouncilMember::query();
        $count = $municipalMembers->count();
        $datatable = Datatables::of($municipalMembers)->setTotalRecords($count);

        $datatable->editColumn('active', function ($row)
        {
            $data['active'] = $row->active;
            $data['id'] = $row->id;

            return view('admin.municipalMember.parts.status', $data)->render();
        });


        $datatable->editColumn('image', function ($row)
        {
            $url= asset('storage/municipalMember/'.$row->image);

            return '<img src="'.$url.'" width="50" height="50" class="img-responsive" align="center" />';
        });

        $datatable->editColumn('created_at', function ($row)
        {
            return $row->created_at->diffForHumans();
        });
        $datatable->editColumn('category_member_id', function ($row)
        {
            return $row->categoryMember->name;
        });

        $datatable->addColumn('actions', function ($row)
        {
            $data['id'] = $row->id;

            return view('admin.municipalMember.parts.actions', $data)->render();
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
     $social = SocialMedia::all();
     $category_members = CategoryMember::all();

        return view('admin.municipalMember.add',compact(['social','category_members']));
    }

    public function store(MunicipalMemberRequest $request){
        $data        = $request->all();
        $newMember   = new MunicipalCouncilMember();
        $newMember->fill($data);
        if ($file = request()->file('image')){
            $municipalMemberImage = time() . '.' . $file->getClientOriginalExtension();
            request()->file('image')->storeAs(
                'public\municipalMember', $municipalMemberImage
            );
            $newMember->image = $municipalMemberImage;
        }
        $newMember->user_id = Auth::id();
        $newMember->save();
        $idMember = $newMember->id;
//        $count =count($request->social);
//        for ($i =1; $i <= $count; $i++)
//         {
//            $socialMember = new SocialMember();
//             $socialMember->municipal_council_member_id = $idMember;
//             $socialMember->social_media_id             = $i;
//             $socialMember->link                        =$request->social[$i];
//             $socialMember->save();
//        }
        if (!$newMember->save() ) {
            return $this->respondGeneral(true, 500,'خطأ في بيانات', null, null);
        }
        return $this->respondGeneral(true, 200,'تم اضافة بنجاح',null, null);
    }

    public function   status($id)
    {



        $getMunicipal = MunicipalCouncilMember::findOrFail($id);

        $getMunicipal->update([
            'active' => ! $getMunicipal->active
        ]);

        $saved = $getMunicipal->save();

        if ($saved) {
            return $this->respondGeneral(true, 200, 'تم بنجاح تحديث الحالة ', null, null);
        }
    }

    public function   delete($id)
    {

        $delete = MunicipalCouncilMember::findOrFail($id)->delete();

        if (!$delete)
        {
            return $this->respondGeneral(true, 500, trans('حدث خطأ بالحذف '), null,null);
        }
        return $this->respondGeneral(true, 200, trans('تم حذف بنجاح'), trans('messages.deleted'), null,null);

    }

    public function show($id){

        $getMunicipalMember = MunicipalCouncilMember::where('id',$id)->with(['categoryMember'])->first();
        $socialLinks      = SocialMember::where('municipal_council_member_id',$id)->get();
//        if($socialLink[0]->social_media_id === SocialMedia::TYPE_FACEBOOK){
//            return 'aseel';
//        }
      return view('admin.municipalMember.show',compact(['getMunicipalMember','socialLinks']));
    }

    public function edit($id){
        $category_members = CategoryMember::all();
        $getMunicipalMember = MunicipalCouncilMember::where('id',$id)->with(['categoryMember'])->first();
        $socialLinks      = SocialMember::where('municipal_council_member_id',$id)->get();

      return view('admin.municipalMember.edit',compact(['getMunicipalMember','socialLinks','category_members']));
    }

    public function update(Request $request,$id){
        $data        = $request->all();
        $updateMember   =MunicipalCouncilMember::findOrFail($id);
        $updateMember->fill($data);
        if ($file = request()->file('image')){
            $municipalMemberImage = time() . '.' . $file->getClientOriginalExtension();
            request()->file('image')->storeAs(
                'public\municipalMember', $municipalMemberImage
            );
            $updateMember->image = $municipalMemberImage;
        }
        $updateMember->user_id = Auth::id();
        $updateMember->update();

//        $count =count($request->social);
//        for ($i =1; $i <= $count; $i++)
//        {
//            $socialLink = SocialMember::where(['municipal_council_member_id'=>$id,'social_media_id'=>$i] )->first();
//            $socialLink->update([
//                $socialLink->link  =$request->social[$i]
//            ]);
//        }
        if (!$updateMember->update()) {
            return $this->respondGeneral(true, 500,'خطأ في بيانات', null, null);
        }
        return $this->respondGeneral(true, 200,'تم تحديث بنجاح',null, null);


    }
}
