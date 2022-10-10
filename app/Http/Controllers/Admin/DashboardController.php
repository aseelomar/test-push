<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    public function index()
    {

        return redirect()->route('admin.publications.all',\App\Models\Category::TYPE_NEWS);

    }

    public function getLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {

        Validator::make($request->only(['email', 'password']), [
            'email' => 'required|email',
            'password' => 'required',
        ]);


        $credentials = $request->only('email', 'password');

        if (auth()->guard('web')->attempt($credentials, true)) {
//            $user = User::query()->where('email', $request->input('email'))->first();
//            auth()->login($user);
//            return auth()->user()->email;
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route("admin.getLogin")->withErrors('Oppes! You have entered invalid credentials');

    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('admin.getLogin');


    }
}
