<?php

namespace App\Http\Controllers;

use App\Models\TinTuyenDung;
use App\Http\Requests\TaoTinTuyenDungRequest;
use App\Http\Requests\CapNhatTinTuyenDungRequest;
use App\Models\User;
use App\Models\ViecLamDaLuu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;


class TinTuyenDungController extends Controller
{

    //select all
    public function list()
    {
        $tintuyendungs = TinTuyenDung::where('user_id', Auth::id())->sortable()->paginate(10);
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
            return redirect()->back()->with('tb_xoa', 'Đã chuyển vào thùng rác');
        } else {
            return view('404');
        }
    }
    //xoa nhieu
    public function destroyAll(Request $request)
    {
        if (TinTuyenDung::where('user_id', Auth::user()->id)) {
            $ids = $request->ids;
            TinTuyenDung::whereIn('id', $ids)->delete();
            return redirect()->back()->with('tb_xoa', 'Đã chuyển vào thùng rác');
        } else {
            return view('404');
        }
    }
    //thung rac
    public function tinTuyenDungTrash()
    {
        $tintuyendungs_trash = TinTuyenDung::onlyTrashed()->where('user_id', Auth::id())->sortable()->paginate(10);
        return View::make('tintuyendung.tintuyendungs_trash', compact('tintuyendungs_trash'));
    }
    //khoi phuc
    public function tinTuyenDungUnTrash($id)
    {
        $tintuyendung = TinTuyenDung::onlyTrashed()->where('user_id', Auth::id())->find($id);
        $tintuyendung->restore();
        return redirect()->route('tintuyendung1.list')->with('tb_khoiphuc', 'Khôi phục thành công');
    }
    //xoa vinh vien
    public function tinTuyenDungForceDelete($id)
    {
        $tintuyendung = TinTuyenDung::onlyTrashed()->where('user_id', Auth::id())->find($id);
        $tintuyendung->forceDelete();
        return redirect()->back()->with('tb_xoa', 'Xóa thành công');
    }
    //khoi phuc tat ca tin da xoa
    public function restore()
    {
        TinTuyenDung::onlyTrashed()->where('user_id', Auth::id())->restore();
        return redirect()->route('tintuyendung1.list')->with('tb_khoiphuc', 'Khôi phục thành công');
    }
    public function vieclam(Request $request)
    {
        $vieclams = DB::table('tintuyendungs')->where('deleted_at', NULL)->orderByDesc('id')->paginate(9);
        $data = '';
        if ($request->ajax()) {
            foreach ($vieclams as $val) {
                $data .= '
                    <div class="col-lg-4">
                <div class="product-item">
                <a id="wistlish_url' . $val->id . '" href="vieclam/chi-tiet-viec-lam/' . $val->id . '">
                <img id="wistlish_anh' . $val->id . '" src="' . url('anh_tintuyendung/' . $val->anh) . '" style="width:100%; height:200px; padding: 8px;border-radius: 20px" alt="">
                <div class="down-content">
                  <h4 id="wistlish_tieude' . $val->id . '" style="color: blue;">' . $val->tieude . '</h4>
                  <p>
                    <i class="fas fa-dollar-sign"></i> Lương: ' . $val->luong . '
                  </p>
                  <h5 id="wistlish_nghe' . $val->id . '" style="color: black;"><small><i class="fa fa-briefcase"></i> ' . $val->nganhnghe . '<br> <i class="fa fa-building"></i> ' . $val->tenquan . '</small></h5>
                </div>
              </a>
              <div class="row">
                    <div class=" col-12 text-center">
                        <form action="vieclam/luu-viec-lam/' . $val->id . '" method="post">
                        ' . csrf_field() . '
                                <button type="submit" class="btn btn-xs btn-outline-danger btn-flat" data-toggle="tooltip"><i class="far fa-save"> Lưu việc làm</i></button>
                        </form>
                        </div>
                    </div>
              </div>
          </div>
                ';
            }
            return $data;
        }
        return view('vieclam.vieclam', compact('vieclams'));
    }

    public function chiTietViecLam($id)
    {
        // $data['vieclam'] = TinTuyenDung::find($id);
        // $data['user'] = TinTuyenDung::find($id)->user;
        $vieclam = TinTuyenDung::find($id);
        return view('vieclam.chi-tiet-viec-lam', compact('vieclam'));
    }

    public function search(Request $request)
    {
        $keywords = $request->keywords_submit;
        if ($keywords) {
            $data['search_vieclam'] = DB::table('tintuyendungs')->where('tieude', 'like', '%' . $keywords . '%')
                ->orWhere('nganhnghe', 'like', '%' . $keywords . '%')->orWhere('diachi', 'like', '%' . $keywords . '%')->orWhere('thoigian', 'like', '%' . $keywords . '%')->get();
            $data['search_hoso'] =  DB::table('tintimviecs')->where('ten', 'like', '%' . $keywords . '%')
                ->orWhere('nganhnghe', 'like', '%' . $keywords . '%')->orWhere('diachi', 'like', '%' . $keywords . '%')->get();

            return view('tim-kiem', $data);
        } else {
            return redirect()->back();
        }
    }
    public function index()
    {
        return view('index');
    }
    public function filter(Request $request)
    {
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

        return view('vieclam.vieclamfilter')->with('vieclam', $tintuyendung->get());
    }
    public function viecLamUngTuyen()
    {
        $user_id = Auth::user()->id;
        $vieclamuts = User::find($user_id)->vieclamdaungtuyens;
        return view('tintuyendung.vieclamdaungtuyen', compact('vieclamuts'));
    }

    public function luu_viec_lam($id)
    {
        $userid = Auth::user()->id;
        $vieclam = TinTuyenDung::find($id);
        $vlyt = ViecLamDaLuu::where('id', $id, 'and')->where('user_id', $userid)->count();
        if ($vlyt > 0) {
            return back()->with('tbloi', 'Bạn đã lưu công việc này trước đây');
        } else {
            $vieclamluu = new ViecLamDaLuu();
            $vieclamluu->id = $vieclam->id;
            $vieclamluu->user_id = Auth::user()->id;
            $vieclamluu->tieude = $vieclam->tieude;
            $vieclamluu->tenquan = $vieclam->tenquan;
            $vieclamluu->diachi = $vieclam->diachi;
            $vieclamluu->soluong = $vieclam->soluong;
            $vieclamluu->nganhnghe = $vieclam->nganhnghe;
            $vieclamluu->luong = $vieclam->luong;
            $vieclamluu->thoigian = $vieclam->thoigian;
            $vieclamluu->mota = $vieclam->mota;
            $vieclamluu->anh = $vieclam->anh;
            $vieclamluu->ngayhethan = $vieclam->ngayhethan;
            $vieclamluu->save();

            return redirect()->back()->with('tbluu', 'Đã lưu việc làm');
        }
    }
    public function viec_lam_da_luu()
    {
        $data = ViecLamDaLuu::where('user_id', Auth::id())->paginate(5);
        return view('vieclam.viec-lam-da-luu', compact('data'));
    }
    //xoa
    public function xoa_viec_lam_da_luu($id)
    {
        $vieclamdaluu = ViecLamDaLuu::find($id);
        if (ViecLamDaLuu::where('user_id', Auth::id())) {
            $vieclamdaluu->forceDelete();
            return redirect()->back()->with('tb_xoa', 'Đã xóa thành công');
        } else {
            return view('404');
        }
    }
}