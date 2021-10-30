<?php

namespace App\Http\Controllers;

use App\Http\Requests\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Authcontroller extends Controller
{

    public function indexhome(){
        $username = Auth::user();
        return view('admin.index');
    }
    public function index()
    {
        return view('dangnhap');
    }
    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $username = Auth::user();
            $role = Auth::user()->role;
            if($role==2){
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
    // public function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'role' => $data['role'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }
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
        return redirect()->route('relogin');
    }
}
