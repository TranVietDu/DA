<?php

namespace App\Http\Controllers;

use App\Models\TinTuyenDung;
use App\Http\Requests\TaoTinTuyenDungRequest;
use App\Http\Requests\CapNhatTinTuyenDungRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;


class TinTuyenDungController extends Controller
{

    //select all
    public function list()
    {
        $tintuyendungs = TinTuyenDung::where('user_id', '=', Auth::user()->id)->paginate(10);
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
        } else {
            return redirect()->route('tintuyendung1.create')->withInput();
        }
    }

    //form cap nhat
    public function edit($id)
    {
        $tintuyendung = TinTuyenDung::find($id);
        if ($tintuyendung->user_id == Auth::user()->id  || Auth::user()->role == 1) {
            $tintuyendung = TinTuyenDung::find($id);
            return View::make('tintuyendung.capnhat', compact('tintuyendung', 'id'));
        } else {
            return view('404');
        }
    }
    //cap nhat
    public function update(CapNhatTinTuyenDungRequest $request, $id)
    {
        $tintuyendung = TinTuyenDung::find($id);
        if ($tintuyendung->user_id == Auth::user()->id  || Auth::user()->role == 1) {
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
            } else {
                TinTuyenDung::find($id)->update($data);

                return redirect()->route('tintuyendung1.list');
            }
        } else {
            return view('404');
        }
    }

    //xoa
    public function destroy($id)
    {
        $tintuyendung = TinTuyenDung::find($id);
        if ($tintuyendung->user_id == Auth::user()->id  || Auth::user()->role == 1) {
            TinTuyenDung::find($id)->delete();
            return redirect()->route('tintuyendung1.list');
        } else {
            return view('404');
        }
    }
    //xoa nhieu
    public function destroyall(Request $request)
    {
        if(TinTuyenDung::where('user_id', '=', Auth::user()->id)){
            $ids = $request->ids;
            TinTuyenDung::whereIn('id', $ids)->delete();
            return redirect()->route('tintuyendung1.list');
        }else{
            return back();
        }
    }

    //khoi phuc tin da xoa
    public function restore()
    {
        TinTuyenDung::onlyTrashed()->restore();
        return redirect()->route('tintuyendung1.list');
    }
    public function vieclam(Request $request)
    {
        $vieclams = DB::table('tintuyendungs')->orderByDesc('id')->paginate(9);    
		$data = '';
		if ($request->ajax()) {
			foreach ($vieclams as $val) {
				$data.='
                <div class="col-md-4">
                <div class="product-item">
                <a href="vieclam/chi-tiet-viec-lam/'.$val->id.'">
                <img src="'.url('anh_tintuyendung/'.$val->anh).'" style="width:100%; height:200px; padding: 8px;" alt="">
                <div style="height: 200px;" class="down-content">
                  <h4 style="color: blue;">'.$val->tieude.'</h4>
                  <p>
                    <i class="fas fa-dollar-sign"></i> Lương: '.$val->luong.'
                  </p>
                  <h5 style="color: black;"><small><i class="fa fa-briefcase"></i> '.$val->nganhnghe.'<br> <i class="fa fa-building"></i> '.$val->tenquan.'</small></h5>
                </div>
              </a>
            </div>
          </div>
                ';
			}
			return $data;
		}
        return view('vieclam.vieclam',compact('vieclams'));
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
        $data['search_vieclam'] = DB::table('tintuyendungs')->where('tieude', 'like', '%' . $keywords . '%')
            ->orWhere('nganhnghe', 'like', '%' . $keywords . '%')->orWhere('diachi', 'like', '%' . $keywords . '%')->orWhere('thoigian', 'like', '%' . $keywords . '%')->get();
        $data['search_hoso'] =  DB::table('tintimviecs')->where('ten', 'like', '%' . $keywords . '%')
            ->orWhere('nganhnghe', 'like', '%' . $keywords . '%')->orWhere('diachi', 'like', '%' . $keywords . '%')->get();

        return view('tim-kiem', $data);
    }
    public function index()
    {
        return view('index');
    }
    public function filter(Request $request){
        $tintuyendung = TinTuyenDung::query();

    if ($request->has('diadiem')) {
        $tintuyendung->where('diachi', 'LIKE', '%' . $request->diadiem . '%');
    }
    if ($request->has('nganhnghe')) {
        $tintuyendung->where('nganhnghe', 'LIKE', '%' . $request->nganhnghe . '%');
    }
    if ($request->has('thoigian')) {
        $tintuyendung->where('thoigian', 'LIKE', '%' . $request->thoigian . '%');
    }

    return view('vieclam.vieclamfilter')->with('vieclam',$tintuyendung->get());
    }
}
