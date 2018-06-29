<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;
use Mail;

class ContactUSController extends Controller
{
    public function contactUS()
    {
        return view('contactUS');
    }
    /** * Show the application dashboard. * * @return \Illuminate\Http\Response */
    public function contactUSPost(Request $request)
    {
        $this->validate($request, [ 'name' => 'required', 'email' => 'required|email', 'message' => 'required' ]);
        ContactUS::create($request->all());

        Mail::send('guest.email',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')
            ), function($message)
            {
                $message->from('alperbult1@gmail.com');
                $message->to('bulut.alper2@gmail.com', 'Admin')->subject('Ziyaretçi İletişim Formu Gönderdi!');
            });

        // set flash data with success message
        Session::flash('success', 'Bizimle iletişime geçtiğiniz için teşekkür ederiz!');

        // redirect with flash data to posts.show
        return redirect()->route('guest.contact');
    }
}