<?php

namespace App\Http\Controllers;

use App\Models\TinTimViec;
use App\Http\Requests\TaoTinTimViecRequest;
use App\Http\Requests\CapNhatTinTimViecRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class TinTimViecController extends Controller
{

    //select all
    public function index()
    {
        $tintimviecs = User::find(Auth::user()->id)->tintimviecs;
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
        if(TinTimViec::create($data)){
            return redirect('/tintimviec/danhsach');
        }else{
            return back()->withInput()->with('thongbao',"No success.");
        }
    }

    //form cap nhat
    public function edit($id)
    {
        $tintimviec = TinTimViec::find(Auth::user()->id);
        $username=Auth::user();
        return View::make('tintimviec.capnhat', compact('tintimviec', 'id'));
    }
    //cap nhat
    public function update(CapNhatTinTimViecRequest $request, $id)
    {
        TinTimViec::find($id)->update($request->validated());
        return redirect()->route('tintimviec.list');
    }

    //xoa
    public function destroy($id)
    {
        TinTimViec::find($id)->delete();
        return redirect()->route('tintimviec.list');
    }
    //xoa nhieu
    public function destroyall(Request $request)
    {
        $ids = $request->ids;
        TinTimViec::whereIn('id', $ids)->delete();
        return redirect()->route('tintimviec.list');
    }

     //khoi phuc TinTimViec da xoa
     public function restore()
     {
        TinTimViec::onlyTrashed()->restore();
        return redirect()->route('tintimviec.list');
     }
}
