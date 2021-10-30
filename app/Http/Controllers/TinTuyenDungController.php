<?php

namespace App\Http\Controllers;

use App\Models\TinTuyenDung;
use App\Http\Requests\TaoTinTuyenDungRequest;
use App\Http\Requests\CapNhatTinTuyenDungRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TinTuyenDungController extends Controller
{

    //select all
    public function index()
    {
        $username=Auth::user();
        $tintuyendungs = DB::table('TinTuyenDung')->where('user_id','=', $username->id)->get();
        return View::make('tintuyendung.danhsach', compact('tintuyendungs'));
    }
    //form luu
    public function create()
    {
        $username=Auth::user();
        return view('tintuyendung.them');
    }
    // Luu
    public function store(TaoTinTuyenDungRequest $request)
    {
        $data = $request->validated();
        if(TinTuyenDung::create($data)){
            return redirect('/tintuyendung/danhsach');
        }else{
            return back()->withInput();
        }
    }

    //form cap nhat
    public function edit($id)
    {
        $tintuyendung = TinTuyenDung::find($id);
        $username=Auth::user();
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
    //xoa nhieu
    public function destroyall(Request $request)
    {
        $ids = $request->ids;
        TinTuyenDung::whereIn('id', $ids)->delete();
        return redirect()->route('tintuyendung.list');
    }

     //khoi phuc tin da xoa
     public function restore()
     {
        TinTuyenDung::onlyTrashed()->restore();
         return redirect()->route('tintuyendung.list');
     }
}
