<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tintuyendung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TuyenDungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all=TinTuyenDung::paginate(10);
        return view('admin.tintuyendung.tintuyendung',compact('all'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tintuyendung  $tintuyendung
     * @return \Illuminate\Http\Response
     */
    public function show(Tintuyendung $tintuyendung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tintuyendung  $tintuyendung
     * @return \Illuminate\Http\Response
     */
    public function edit(Tintuyendung $tintuyendung)
    {
        return view('admin.tintuyendung.updatetintuyendung',compact('tintuyendung'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tintuyendung  $tintuyendung
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tintuyendung $tintuyendung)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tintuyendung  $tintuyendung
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tintuyendung $tintuyendung)
    {
        $tintuyendung->delete();
        return redirect()->route('tintuyendung.index')->with('thongbao','Xóa Thành Công');
    }
    public function search(Request $request){
        if ($request->ajax()) {
            $output = '';
            $timtuyendungs=Tintuyendung::where('tieude','like','%'.$request->search.'%')
                        ->orwhere('nganhnghe','like','%'.$request->search.'%')->get();
            $i=1;
            foreach ($timtuyendungs as $key => $al) {
                                $output .= '<tr>
                                <td>'.$i++.'</td>
                                <td><img src="'.url('anh_tintuyendung/'.$al->anh).'" width="100px" class="img-flush" alt=""></td>
                                <td>'.$al->tieude.'</td>
                                <td>'.$al->nganhnghe.'</td>
                                <td>'.$al->soluong.'</td>
                                <td><a href="/vieclam/chi-tiet-viec-lam/'.$al->id.'"><button class="btn btn-primary"><i class="fas fa-eye"></i></button></a></td>
                                <td><a href="/tintuyendung/cap-nhat-tin-tuyen-dung/'.$al->id.'"><button class="btn btn-primary"><i class="fas fa-user-edit"></i></button></a></td>
                                <td>
                                        <form action="/admin/tintuyendung/'.$al->id.'" method="post">
                                            '.csrf_field().'
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
