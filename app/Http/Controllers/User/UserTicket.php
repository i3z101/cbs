<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\TicketValidation;
use App\Models\Cinema;
use App\Models\Ticket;
use Illuminate\Http\Request;


class UserTicket extends Controller
{
    public function complete(Request $request){
        $ticketValidation= new TicketValidation();
        $request->validate($ticketValidation->rules());
        $ticketInfo= json_encode([
            'name' => $request->input('name'),
            'phone'=>$request->input('phone'),
            'email'=>$request->input('email'),
            'mName'=>$request->input('mName'),
            'cName'=>$request->input('cName'),
            'amount'=>substr($request->input('amount'), 1)
        ]);
        session(['ticketInfo' => $ticketInfo]);
        return view('user.payment', ['amount'=>substr($request->input('amount') , 1) * 100 ]); //Times 100 is just for testing because testing mode in payment not accept any value lower than 99
    }

    public function completePayment(Request $request){
        $ticketInfo= json_decode($request->session()->get('ticketInfo'));
        Ticket::create([
            'username' => $ticketInfo->name,
            'phone'    => $ticketInfo->phone,
            'email'    => $ticketInfo->email,
            'movieName'=> $ticketInfo->mName,
            'cinemaName'=>$ticketInfo->cName,
            'amount'   => $ticketInfo->amount
        ]);

        $request->session()->forget('ticketInfo');

        return redirect('/movies')->with('message', 'Payment successfully done');
    }
}
