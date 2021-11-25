<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LandingController extends Controller
{
    //
    public function __construct()
    {

    }

    public function index()
    {
        return view('landing');
    }

    public function contact(Request $request)
    {
        $from_name = $request->name;

        $from_email = $request->email;
        $message_body = $request->message;
        $to_emails = ['tech@vuoz.io', 'x@vuoz.io', 'fae@vuoz.io', 'monarch717930@gmail.com'];
        $data = array(
            'name' => $from_name,
            'message_body' => $message_body
        );

        Mail::send('mail.landing', $data, function ($message) use ($from_name, $message_body, $from_email, $to_emails) {
            $message->to($to_emails, 'VUOZ Support')
                ->subject('Hello VUOZ!');
            $message->from($from_email, $from_name);
        });


        return back()->withErrors(['msg' => 'Thanks for contacting us, message sent!']);
    }

    public function subscribe(Request $request)
    {
        $from_email = $request->subscribe_email;
        $to_emails = ['tech@vuoz.io', 'x@vuoz.io', 'fae@vuoz.io', 'monarch717930@gmail.com'];
        $data = array(
            'name' => $from_email,
            'message_body' => 'Hi, Support, Could you please contact me via above email address?'
        );
        Mail::send('mail.landing', $data, function ($message) use ($from_email, $to_emails) {
            $message->to($to_emails, 'VUOZ Support')
                ->subject('Hello VUOZ!');
            $message->from($from_email, $from_email);
        });

        return back()->withErrors(['msg' => 'Thanks for contacting us, message sent!']);
    }
}

