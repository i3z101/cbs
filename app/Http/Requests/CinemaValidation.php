<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CinemaValidation extends FormRequest
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
            'cName'=>'required|min:3|string',
            'cAddress'=>'required|min:3|string',
            'cOperation'=>'required|min:14|max:16|string',
            'cBranches'=>'required|min:2|string',
            'cRating'=>'required|string'
        ];
    }
}
