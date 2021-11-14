<?php

namespace App\Http\Controllers;

use App\Mail\Mail as MailMail;
use Illuminate\Http\Request;
use App\Mail\Mail;
use App\Models\TinTuyenDung;

class MailController extends Controller
{
    public function index($id){
        $username = TinTuyenDung::find($id)->user;
        return view('mail.form',compact('username'));

    }
    public function sendmail(Request $request){
        $data=[
            'file' => $request->file('file')
        ];
        $email=$request->email;
        \Mail::to($email)->send(new Mail($data));
        return back()->with('thongbao','Gửi CV Thành Công, Vui Lòng Chờ Nhà Tuyển Dụng Liên Hệ');
    }
} 