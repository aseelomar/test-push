<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AboutUsRequest;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends AdminController
{
    public function add()
    {
        $aboutInfo = AboutUs::first();
        return view('admin.aboutUs.add',compact('aboutInfo'));

    }

    public function store(AboutUsRequest $request)
    {
           $data =$request->all();
        IF($about = AboutUs::first()){
            }else{
            $about = new AboutUs();
            }
            $about->fill($data);
            if ($file = request()->file('image')){
                $aboutUsImage = time() . '.' . $file->getClientOriginalExtension();
                request()->file('image')->storeAs(
                    'public\aboutUS', $aboutUsImage
                );
            }
            $about->image = $aboutUsImage;

        $add = $about->save();

        if (!$add)
        {

            return $this->respondGeneral(true, 500, trans('حدث خطأ في الاضافة'),null,null );
        }
        return $this->respondGeneral(true, 200, trans('تم الاضافة بنجاح'), null,null);


    }



}
