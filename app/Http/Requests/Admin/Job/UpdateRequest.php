<?php

namespace App\Http\Requests\Admin\Job;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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

                    'title'=>'required|string|min:6|max:255',
                    'description'=>'required',
                    'image'=>'mimes:jpeg,jpg,png',
                    'link' => 'required|url',

                ];
            case 'PUT':
            case 'PATCH':
                return [

                ];

            default:break;
        }
    }
}
