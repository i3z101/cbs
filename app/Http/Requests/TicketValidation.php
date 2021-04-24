<?php

namespace App\Http\Requests;

class TicketValidation extends UserValidation{
    

    public function rules()
    {
        return[
            'name' => 'required|min:3|max:30|string',
            'phone'=>'required|min:10|max:12|string',
            'email'=>'required|email|string',
            'mName'=>'required|min:3|max:25|string',
            'cName'=>'required|min:3|string',
            'amount'=>'required|string'
        ];
    }

}