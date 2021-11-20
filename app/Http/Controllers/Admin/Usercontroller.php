<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\Register;
use App\Http\Requests\AdminCapNhatUserRequest;
use App\Http\Requests\CapNhatUserRequest;
use App\Http\Requests\DoiMatKhauRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Usercontroller extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function index()
    {
        $all=User::paginate(10);
        return view('admin.user.user',compact('all'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.adduser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Register $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password=bcrypt($request->password);
        $user->role=$request->role;
        $adduser=$user->save();
        if($adduser){
            return redirect()->route('user.index');
        }
        else{
            return back()->with($request->only('name,email'));
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.user.updateuser',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(AdminCapNhatUserRequest $request, User $user)
    {
        $request->validate(
            [
                'email'=>'unique:users,email,'.$user->id,
            ],
            [
                'email.unique'=>'Email đã tồn tại',
            ]
            );
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role=$request->role;
        $user->save();
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('thongbao','Xóa thành công');
    }
    public function search(Request $request){
        if ($request->ajax()) {
        $output = '';
        $users=User::where('name','like','%'.$request->search.'%')
                    ->orwhere('email',$request->search)->get();
        foreach ($users as $key => $al) {
                            $i=1;
                            $output .= '<tr>
                            <td>'.$al->id.'</td>
                            <td>'.$al->name.'</td>
                            <td>'.$al->email.'</td>
                            <td>'.$al->role.'</td>
                            <td><a href=""><button class="btn btn-primary"><i class="fas fa-eye"></i></button></a></td>
                            <td><a href="/admin/user/'.$al->id.'/edit"><button class="btn btn-primary"><i class="fas fa-user-edit"></i></button></a></td>
                            <td>
                                    <form action="/admin/user/'.$al->id.'" method="post">
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></button>
                                    </form>
                               </td>
                            </tr>';
                        }
                    }
                    return Response($output);
                }
    public function viewposttuyendung($user){
        $username=User::find($user);
        $userposttuyen=User::find($user)->tintuyendungs;
        $blog=User::find($user)->blogs;
        return view('admin.user.xembaidangtuyen',compact('userposttuyen','blog','username'));
    }
    public function viewposttimviec($user){
        $username=User::find($user);
        $userposttim=User::find($user)->tintimviecs;
        $blog=User::find($user)->blogs;
        return view('admin.user.xembaidangtim',compact('userposttim','blog','username'));
    }
    public function capnhatthongtin($id)
    {
        $user = User::find($id);
        return view('user.qltaikhoan',compact('user'));
    }
    public function capnhat(CapNhatUserRequest $request, $id)
    {
        $user = User::find($id);
        $data = $request->validate(
            [
                'email'=>'unique:users,email,'.$user->id,
                'name' => 'required',
            ],
            [
                'email.unique'=>'Email đã tồn tại',
            ]
            );
        $user->update($data);
        return back()->with('tb','Cập Nhật Thành Công');
    }

    public function doimatkhauthongtin($id)
    {
        $user = User::find($id);
        return view('user.doimatkhau',compact('user'));
    }
    public function doimatkhau(DoiMatKhauRequest $request, $id)
    {
        $request->validated();

        $user = Auth::user();

        if (!Hash::check($request->password, $user->password)) {

            return back()->with('loi','Mật khẩu hiện tại không đúng');

        }else{

            $user->password = bcrypt($request->newpassword);

            $user->save();

            return back()->with('tb','Đổi mật khẩu thành công');
        }

    }
}
