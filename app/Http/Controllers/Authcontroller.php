<?php

namespace App\Http\Controllers;

use App\Http\Requests\Register;
use App\Models\Blog;
use App\Models\TinTimViec;
use App\Models\TinTuyenDung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Support\Facades\Cookie;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Authcontroller extends Controller
{

    public function indexhome(){
        $data['user']=User::count();
        $data['tintuyendung']=TinTuyenDung::count();
        $data['tintimviec']=TinTimViec::count();
        $data['blog']=Blog::count();
        $data['nhatuyendung']=DB::table('users')->where('role',2)->count();
        $data['nguoitimviec']=DB::table('users')->where('role',3)->count();
        return view('admin.index',$data);
    }
    public function index()
    {
        return view('dangnhap');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if($request->has('rememberme')){
                Cookie::queue('email',$request->email, 101);
                Cookie::queue('password',$request->password, 101);
            }else{
                Cookie::queue(Cookie::forget('email'));
                Cookie::queue(Cookie::forget('password'));
            }
            $role = Auth::user()->role;
            if($role==2 || $role==3){
                return redirect()->route('home');
            }
            if($role==1){
                return redirect()->route('adminhome');
            }
        }
        else {
            return back()->withInput(
                $request->only('email')
            )->with('thongbao', 'Email hoặc mật khẩu không đúng');
        }
    }
    public function register(Register $request)
    {
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->role=$request->role;
        $usersave=$user->save();
        if ($usersave) {
            return redirect("dangnhap")->with('thongbao1', 'Đăng kí thành công');
        } else {
            return back()->withInput(
                $request->only('email', 'name')
            );
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('dangnhap');
    }

}
