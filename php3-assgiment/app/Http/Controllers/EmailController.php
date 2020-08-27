<?php

namespace App\Http\Controllers;

use App\Mail\MailNotify;
use Illuminate\Http\Request;
use Redirect, Response, DB, Config;
use Mail;


class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $details = [
            'email' => $request->email,
            'title' => 'Phản hồi từ khách hàng với tiêu đề: ' . $request->subject,
            'body' => 'Cảm ơn bạn đã phản hồi',
            'name' => $request->name
        ];

        Mail::to($request->email)->send(new MailNotify($details));
        return redirect()->route('page.contact')->with('msg', 'Cảm ơn bạn đã gửi phản hồi');
    }
}
