<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username'=>'required|min:3|max:20|string',
            'email' => 'required|email|string',
            'userPhone'=>'required|min:10|max:12|string',
            'userType'=>'required|numeric|min:0|max:1'
        ];
    }
}
