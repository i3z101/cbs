<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieValidation extends FormRequest
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
    public function rules($mood)
    {
        if($mood==true){
            return [
            'mName'=> 'required|min:3|max:25|string',
            'mDesc'=>'required|min:5|max:280|string',
            'mCreator' => 'required|min:3|max:30|string',
            'mGuide' => 'required|string',
            'mGenre' => 'required|array',
            'mTime' => 'required|array',
            'mPoster' => 'required|mimes:png,jpg,jpeg|max:5000',
            'mRating'=>'required|string',
            'cinema'=>'required'
            ];
        }

        if($mood==false){
            return [
            'mName'=> 'required|min:3|max:25|string',
            'mDesc'=>'required|min:5|max:280|string',
            'mCreator' => 'required|min:3|max:30|string',
            'mGuide' => 'required|string',
            'mGenre' => 'required|array',
            'mTime' => 'required|array',
            'mPoster' => 'mimes:png,jpg,jpeg|max:5000'
            ];
        }
        
    }
}
