<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Traits\ResponseTrait;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller as BaseController;


class AdminController extends BaseController
{

    use  ResponseTrait,AuthorizesRequests;

    public static $data = [];
    public $action;

    /////////////////////////
    public function __construct()
    {

        self::$data['active_menu'] = '';
        self::$data['active_sub_menu'] = '';
        self::$data['menu_color'] = 'm--font-brand';
        ////////////////////////////////////
        self::$data['btn_action'] = 'brand';
        self::$data['btn_edit'] = 'brand';
        self::$data['btn_cancel'] = 'secondary';
        self::$data['btn_change_password'] = 'accent';
        self::$data['btn_permission'] = 'warning';
        //$categories = Category::all();
    }

}
