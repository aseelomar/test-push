<?php

namespace App\Http\Requests\Admin;

use App\Models\SocialMedia;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MunicipalMemberRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
                return [

                    'name'         =>'required|string|min:6|max:255',
                    'certification' =>'required|string',
                    'category_member_id'   =>'required|integer',
                    'facebook'      =>'required|url',
                    'twitter'      =>'required|url',
                    'instagram'      =>'required|url',
                    'linkedin'      =>'required|url',
                    'description'=>'required',
                    'image'=>'required|mimes:jpeg,jpg,png',

                ];
            case 'PUT':
            case 'PATCH':
                return [

                ];

            default:break;
        }
    }
}
