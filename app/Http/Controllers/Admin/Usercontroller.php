<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\Register;
use App\Http\Requests\UpdateUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Output\Output;

class Usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function __construct()
    {
        $username=Auth::user();
        view()->share('username',$username);    
    }
    public function index()
    {
        $all=User::all();
        $username=Auth::user();
        return view('admin.user.user',compact('all'),['username' => $username]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $username=Auth::user();
        return view('admin.user.adduser',['username' => $username]);
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
        $user->save();
        return redirect()->route('user.index');
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
        $username=Auth::user();
        return view('admin.user.updateuser',compact('user'),['username'=>$username]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUser $request, User $user)
    {
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
                                        @csrf   
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></button>
                                    </form>
                               </td>
                            </tr>';
                        }
                    }
                    return Response($output);
                }
}
