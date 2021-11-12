<?php

namespace App\Http\Controllers;

use App\Models\TinTimViec;
use App\Http\Requests\TaoTinTimViecRequest;
use App\Http\Requests\CapNhatTinTimViecRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class TinTimViecController extends Controller
{

    //select all
    public function index()
    {
        $tintimviecs = TinTimViec::where('user_id','=',Auth::user()->id)->paginate(10);
        return View::make('tintimviec.danhsach', compact('tintimviecs'));
    }
    //form luu
    public function create()
    {
        return view('tintimviec.them');
    }
    // Luu
    public function store(TaoTinTimViecRequest $request)
    {
        $data = $request->validated();
        $get_image = $request->file('anh');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('anh_tintimviec', $new_image);
            $data['anh'] = $new_image;
            TinTimViec::create($data);

            return redirect()->route('tintimviec1.list');
        }
        else{
            return back()->withInput();
        }
    }

    //form cap nhat
    public function edit($id)
    {
        $tintimviec = Tintimviec::find($id);
        if($tintimviec->user_id == Auth::user()->id || Auth::user()->role == 1){
            $tintimviec = TinTimViec::find($id);
            return View::make('tintimviec.capnhat', compact('tintimviec', 'id'));
        }else{
            return back();
        }
    }
    //cap nhat
    public function update(CapNhatTinTimViecRequest $request, $id)
    {
        $data = $request->validated();
        $get_image = $request->file('anh');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('anh_tintimviec', $new_image);
            $data['anh'] = $new_image;
            TinTimViec::find($id)->update($data);
            return redirect()->route('tintimviec1.list');
        }
        else{
            TinTimViec::find($id)->update($data);
            return redirect()->route('tintimviec1.list');
        }
    }

    //xoa
    public function destroy($id)
    {
        $tintimviec = Tintimviec::find($id);
        if($tintimviec->user_id == Auth::user()->id || Auth::user()->role == 1){
            TinTimViec::find($id)->delete();
        return redirect()->route('tintimviec1.list');
        }else{
            return back();
        }
    }
    //xoa nhieu
    public function destroyall(Request $request)
    {
        $ids = $request->ids;
        TinTimViec::whereIn('id', $ids)->delete();
        return redirect()->route('tintimviec1.list');
    }

     //khoi phuc TinTimViec da xoa
     public function restore()
     {
        TinTimViec::onlyTrashed()->restore();
        return redirect()->route('tintimviec1.list');
     }
     public function vieclamview(){
         return view('hoso.hoso');
     }
     public function chitiethoso($id){
         $data['hoso'] = TinTimViec::find($id);
         $data['user'] = TinTimViec::find($id)->user;
         return view('hoso.chi-tiet-ho-so', $data);
     }
}
