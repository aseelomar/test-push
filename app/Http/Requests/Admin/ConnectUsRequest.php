<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ConnectUsRequest extends FormRequest
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
                    'linkFacebook'      =>'required|url',
                    'linkTwitter'      =>'required|url',
                    'linkYoutube'      =>'required|url',
                    'address'         =>'required|string',
                    'aboutUs'         =>'required|string',
                    'phone'         =>'required|string',
                ];
            case 'PUT':
            case 'PATCH':
                return [

                ];

            default:break;
        }
    }
}
