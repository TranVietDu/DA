<?php

namespace App\Http\Controllers;

use App\Models\TinTuyenDung;
use App\Http\Requests\TaoTinTuyenDungRequest;
use App\Http\Requests\CapNhatTinTuyenDungRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TinTuyenDungController extends Controller
{

    //select all
    public function list()
    {
        $tintuyendungs = User::find(Auth::user()->id)->tintuyendungs;
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
            return back()->withInput();
        }
    }

    //form cap nhat
    public function edit($id)
    {
        $tintuyendung = TinTuyenDung::find(Auth::user()->id);
        return View::make('tintuyendung.capnhat', compact('tintuyendung', 'id'));
    }
    //cap nhat
    public function update(CapNhatTinTuyenDungRequest $request, $id)
    {
        TinTuyenDung::find($id)->update($request->validated());
        return redirect()->route('tintuyendung1.list');
    }

    //xoa
    public function destroy($id)
    {
        TinTuyenDung::find($id)->delete();
        return redirect()->route('tintuyendung1.list');
    }
    //xoa nhieu
    public function destroyall(Request $request)
    {
        $ids = $request->ids;
        TinTuyenDung::whereIn('id', $ids)->delete();
        return redirect()->route('tintuyendung1.list');
    }

     //khoi phuc tin da xoa
     public function restore()
     {
        TinTuyenDung::onlyTrashed()->restore();
         return redirect()->route('tintuyendung1.list');
     }

     public function index()
     {
         $vieclams = TinTuyenDung::limit('6')->get();
         return view('index', compact('vieclams'));

     }
     public function vieclam()
     {
            $vieclams = TinTuyenDung::simplePaginate(10);
        return view('vieclam.vieclam')->with('vieclams', $vieclams);
     }

     public function chitietvieclam($id)
     {
         $data['vieclam'] = TinTuyenDung::find($id);
         $data['user'] = TinTuyenDung::find($id)->user;
         return view('vieclam.chi-tiet-viec-lam', $data);
     }

     public function search(Request $request)
     {
         $keywords = $request->keywords_submit;
         $search_vieclam = DB::table('tintuyendungs')->where('tieude','like','%'.$keywords.'%')
         ->orWhere('nganhnghe','like','%'.$keywords.'%')->orWhere('diachi','like','%'.$keywords.'%')->orWhere('thoigian','like','%'.$keywords.'%')->get();

         return view('timkiem')->with('search_vieclam',$search_vieclam);
     }

}
