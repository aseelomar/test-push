<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\ConnectUsRequest;
use App\Models\ConnectUs;
use Illuminate\Http\Request;

class ConnectUsController extends AdminController
{

    public function add()
    {
        $connectInfo = ConnectUs::first();

        return view('admin.connectUs.add',compact('connectInfo'));
    }

    public function store(ConnectUsRequest $request)
    {
        $data = $request->all();
        if($connectUs = ConnectUs::first()){
        }else{
            $connectUs = new ConnectUs();
        }
        $connectUs->fill($data);
        $add = $connectUs->save();
        if (!$add) {
            return $this->respondGeneral(true, 500,'خطأ في بيانات', null, null);
        }
        return $this->respondGeneral(true, 200,'تم اضافة بنجاح',null, null);

    }

}
