<?php

namespace App\Http\Controllers;

use App\Models\TinTimViec;
use App\Http\Requests\TaoTinTimViecRequest;
use App\Http\Requests\CapNhatTinTimViecRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TinTimViecController extends Controller
{

    //select all
    public function index()
    {
        $tintimviecs = TinTimViec::where('user_id',Auth::id())->sortable()->paginate(10);
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
        } else {
            return back()->withInput();
        }
    }

    //form cap nhat
    public function edit($id)
    {
        $tintimviec = TinTimViec::find($id);
        if ($tintimviec->user_id == Auth::user()->id  || Auth::user()->role == 1) {
            $username = Auth::user();
            return View::make('tintimviec.capnhat', compact('tintimviec', 'id'));
        } else {
            return view('404');
        }
    }
    //cap nhat
    public function update(CapNhatTinTimViecRequest $request, $id)
    {
        $tintimviec = TinTimViec::find($id);
        if ($tintimviec->user_id == Auth::user()->id  || Auth::user()->role == 1) {
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
            } else {
                TinTimViec::find($id)->update($data);
                return redirect()->route('tintimviec1.list');
            }
        } else {
            return view('404');
        }
    }

    //xoa
    public function destroy($id)
    {
        $tintimviec = TinTimViec::find($id);
        if ($tintimviec->user_id == Auth::user()->id  || Auth::user()->role == 1) {
            TinTimViec::find($id)->delete();
            return redirect()->back()->with('tb_xoa', 'Đã chuyển vào thùng rác');
        } else {
            return view('404');
        }
    }
    //xoa nhieu
    public function destroyAll(Request $request)
    {
        if(TinTimViec::where('user_id', Auth::user()->id)){
            $ids = $request->ids;
            TinTimViec::whereIn('id', $ids)->delete();
            return redirect()->back()->with('tb_xoa', 'Đã chuyển vào thùng rác');
        }else{
            return view('404');
        }
    }
    //thung rac
    public function tinTimViecTrash()
    {
        $tintimviecs_trash = TinTimViec::onlyTrashed()->where('user_id',Auth::id())->sortable()->paginate(10);
        return View::make('tintimviec.tintimviecs_trash', compact('tintimviecs_trash'));
    }
    //khoi phuc
    public function tinTimViecUnTrash($id)
    {
        $tintimviec = TinTimViec::onlyTrashed()->where('user_id',Auth::id())->find($id);
        $tintimviec->restore();
        return redirect()->route('tintimviec1.list')->with('tb_khoiphuc', 'Khôi phục thành công');
    }
    //xoa vinh vien
    public function tinTimViecForceDelete($id)
    {
        $tintimviec = TinTimViec::onlyTrashed()->where('user_id', Auth::id())->find($id);
        $tintimviec->forceDelete();
        return redirect()->back()->with('tb_xoa', 'Xóa thành công');
    }
    //khoi phuc tat cả TinTimViec da xoa
    public function restore()
    {
        TinTimViec::onlyTrashed()->where('user_id',Auth::id())->restore();
        return redirect()->route('tintimviec1.list')->with('tb_khoiphuc', 'Khôi phục thành công');
    }
    public function vieclamview(Request $request)
    {
        $timviecs = DB::table('tintimviecs')->where('deleted_at',NULL)->orderByDesc('id')->paginate(6);        
		$data = '';
		if ($request->ajax()) {
			foreach ($timviecs as $al) {
				                    $data.='
                <div class="col-lg-6">
                        <div class="product-item">
                            <a href="/hoso/chi-tiet-ho-so/'.$al->id.'">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="anhcanhan">
                                            <img height="200px" style="border-radius: 20px" src="'.url('anh_tintimviec/'.$al->anh).'" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="thongtin">
                                            <h4 style="padding-bottom: 60px; padding-top: 10px;">'.$al->ten.'</h4>
                                            <p><i class="fas fa-venus-mars"></i> Giới tính: '.$al->gioitinh.'</p>
                                            <p><i class="fas fa-briefcase"></i> Ngành nghề: '.$al->nganhnghe.'</p>
                                            <p><i class="fas fa-calendar-alt"></i> Ngày đăng:  '.\Carbon\Carbon::parse($al->created_at)->format('d/m/Y').'</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                ';
			}
			return $data;
		}
        return view('hoso.hoso',compact('timviecs'));
    }
    public function chiTietHoSo($id)
    {
        $hoso = TinTimViec::find($id);
        return view('hoso.chi-tiet-ho-so', compact('hoso'));
    }


    public function search(Request $request)
    {
        $keywords = $request->keywords_submit;
        $search_hoso = DB::table('tintimviecs')->where('ten', 'like', '%' . $keywords . '%')
            ->orWhere('nganhnghe', 'like', '%' . $keywords . '%')->orWhere('diachi', 'like', '%' . $keywords . '%')->get();

        return view('tim-kiem')->with('search_hoso', $search_hoso);
    }
    public function filter(Request $request){
        $tintimviec = TinTimViec::query();
        if ($request->has('gioitinh')) {
            $tintimviec->where('gioitinh',$request->gioitinh);
        }
        if ($request->has('nganhnghe')) {
            $tintimviec->where('nganhnghe', 'LIKE', '%' . $request->nganhnghe . '%');
        }
        // if ($request->has('birthday')) {
        //     $user->whereDate('birthday', $request->birthday);
        // }
        return view('hoso.hosofilter')->with('timviec',$tintimviec->get());
        }
}
