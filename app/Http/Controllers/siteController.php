<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Session;

class siteController extends Controller
{
    public function index(){
        $status = "";
        if (Session::get('status')){
            $status = Session::get('status');
        }
        $started_working = date_create('2016-04-01');
        $today = date_create(date('Y-m-d'));
        $diff = date_diff($started_working, $today);
        $months = $diff->m + 12*$diff->y;
        return view('index', ['months' => $months, 'status' => $status]);
    }

    public function sendMail(Request $request){
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'text' => $request->message
        ];
        Mail::send('email', $data, function($message) use ($data){
            $message->to('luke.taylor11@hotmail.com')
                ->subject("Contact via luke-taylor.com");
        });

        $request->session()->flash('status', 'success');
        return redirect('/');
    }
}
