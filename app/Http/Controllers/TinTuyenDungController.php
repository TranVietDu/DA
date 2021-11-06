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
        $get_image = $request->file('anh');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('anh_tintuyendung', $new_image);
            $data['anh'] = $new_image;
            TinTuyenDung::create($data);

            return redirect()->route('tintuyendung1.list');
        }
        else{
            return redirect()->route('tintuyendung1.create')->withInput();
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
        $data = $request->validated();
        $get_image = $request->file('anh');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('anh_tintuyendung', $new_image);
            $data['anh'] = $new_image;
            TinTuyenDung::find($id)->update($data);

            return redirect()->route('tintuyendung1.list');
        }
        else{
            return back()->with('tb', 'Cập nhật không thành công');
        }
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
         $data['search_vieclam'] = DB::table('tintuyendungs')->where('tieude','like','%'.$keywords.'%')
         ->orWhere('nganhnghe','like','%'.$keywords.'%')->orWhere('diachi','like','%'.$keywords.'%')->orWhere('thoigian','like','%'.$keywords.'%')->get();
         $data['search_hoso'] =  DB::table('tintimviecs')->where('ten','like','%'.$keywords.'%')
        ->orWhere('nganhnghe','like','%'.$keywords.'%')->orWhere('diachi','like','%'.$keywords.'%')->get();

        return view('tim-kiem', $data);
     }

}
