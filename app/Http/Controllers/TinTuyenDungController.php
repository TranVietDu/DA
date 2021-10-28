<?php

namespace App\Http\Controllers;

use App\Models\TinTuyenDung;
use App\Http\Requests\TaoTinTuyenDungRequest;
use App\Http\Requests\CapNhatTinTuyenDungRequest;
use Illuminate\Support\Facades\View;

class TinTuyenDungController extends Controller
{

    //select all
    public function index()
    {
        $tintuyendungs = TinTuyenDung::all();
        return View::make('tintuyendung.danhsach', compact('tintuyendungs'));
    }
    //form luu
    public function create()
    {
        return view('tintuyendung.them');
    }
    // Luu
    public function store(TaoTinTuyenDungRequest $request)
    {
        $data = $request->validated();
        if(TinTuyenDung::create($data)){
            return redirect('/tintuyendung/danhsach');
        }else{
            return back()->withInput()->with('thongbao1',"Mật khẩu và xác nhận mật khẩu không giống nhau.");
        }
    }

    //form cap nhat
    public function edit($id)
    {
        $tintuyendung = TinTuyenDung::find($id);
        return View::make('tintuyendung.capnhat', compact('tintuyendung', 'id'));
    }
    //cap nhat
    public function update(CapNhatTinTuyenDungRequest $request, $id)
    {
        TinTuyenDung::find($id)->update($request->validated());
        return redirect()->route('tintuyendung.list');
    }

    //xoa
    public function destroy($id)
    {
        TinTuyenDung::find($id)->delete();
        return redirect()->route('tintuyendung.list');
    }

     //khoi phuc tin da xoa
     public function restore()
     {
        TinTuyenDung::onlyTrashed()->restore();
         return redirect()->route('tintuyendung.list');
     }
}
