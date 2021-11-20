<?php

namespace App\Http\Controllers;

use App\Mail\Mail as MailMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\TinTuyenDung;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\User;

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
    public function quen_mat_khau()
    {
        return view('matkhau.quenmatkhau');
    }

    // public function khoiphucmatkhau(Request $request)
    // {
    //     $data = $request->all();
    //     $to_name = 'Huu Thuong';
    //     $to_email = $request->email;

    //     $data = array("name"=>"Mail gui tu thuong", "body"=>"Nguyen Huu Thuong");

    //     Mail::send('sendmail', $data, function($message) use ($to_name, $to_email){
    //         $message->to($to_email)->subject('Quen mat khau');
    //         $message->from($to_email,$to_name);
    //     });
    //     return back();
    // }

    public function khoi_phuc_mat_khau(Request $request)
    {
        $data = $request->all();

        $now = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y');
        $title_mail = "Đặt lại mật khẩu".' '.$now;

        $user = User::where('email','=',$data['email'])->get();
        foreach ($user as $val){
            $id = $val->id;
        }

        if($user)
        {
            $count_user = $user->count();
            if($count_user==0)
            {
                return redirect()->back()->with('ms1','Email này chưa được đăng kí');
            }else{
                $token_random = Str::random();
                $user = User::find($id);
                $user->user_token = $token_random;
                $user->save();

                //gui mail
                $to_email = $data['email'];
                $link_reset_password = url('/cap-nhat-mat-khau-moi?email='.$to_email.'&token='.$token_random);
                $data = array("name"=>$title_mail, "body"=>$link_reset_password,'email'=>$data['email']);

                Mail::send('matkhau.thongbaoquenmatkhau', ['data'=>$data], function($message) use ($title_mail, $data){
                $message->to($data['email'])->subject($title_mail);
                $message->from($data['email'], $title_mail);
                });

                return redirect()->back()->with('ms2','Vui lòng kiểm tra Gmail để đặt lại mật khẩu');
            }
        }
    }
    public function mat_khau_moi()
    {
        return view('matkhau.matkhaumoi');
    }

    public function dat_lai_mat_khau(Request $request)
    {
        $data = $request->all();
        $token_random = Str::random();
        $user = User::where('email', '=', $data['email'])->where('user_token', '=', $data['token'])->get();
        $count = $user->count();
        if($count > 0){
            foreach($user as $val){
                $id = $val->id;
            }
            $reset = User::find($id);
            $reset->password = bcrypt($data['password']);
            $reset->user_token = $token_random;
            $reset->save();
            return redirect('dangnhap')->with('ms3', 'Đặt lại mật khẩu thành công');
        }else{
            return redirect()->back()->with('ms4', 'Đã hết hạn đặt lại mật khẩu');
        }
    }

}
