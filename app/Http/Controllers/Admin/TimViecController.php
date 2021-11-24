<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TinTimViec;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TimViecController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all=TinTimViec::paginate(10);
        return view('admin.tintimviec.tintimviec',compact('all'));
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
     * @param  \App\Models\TinTimViec  $tinTimViec
     * @return \Illuminate\Http\Response
     */
    public function show(TinTimViec $tinTimViec)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TinTimViec  $tinTimViec
     * @return \Illuminate\Http\Response
     */
    public function edit(TinTimViec $tinTimViec)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TinTimViec  $tinTimViec
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TinTimViec $tinTimViec)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TinTimViec  $tinTimViec
     * @return \Illuminate\Http\Response
     */
    public function destroy(TinTimViec $tinTimViec)
    {
        $tinTimViec->delete();
        return redirect('/admin/tintimviec')->with('thongbao','Xóa Thành Công');
    }
    public function search(Request $request){
        if ($request->ajax()) {
            $output = '';
            $tintimviecs=TinTimViec::where('ten','like','%'.$request->search.'%')
                        ->orwhere('nganhnghe','like','%'.$request->search.'%')
                        ->orwhere('gioitinh','like','%'.$request->search.'%')->get();
            $i=1;
            foreach ($tintimviecs as $key => $al) {
                                $output .= '
                                <tr>
                                <td>'.$i++.'</td>
                                <td><img src="'.url('anh_tintimviec/'.$al->anh).'" width="100px" class="img-flush" alt=""></td>
                                <td>'.$al->ten.'</td>
                                <td>'.$al->gioitinh.'</td>
                                <td>'.$al->nganhnghe.'</td>
                                <td><a href="/hoso/chi-tiet-ho-so/'.$al->id.'"><button class="btn btn-primary"><i class="fas fa-eye"></i></button></a></td>
                                <td><a href="/tintimviec/cap-nhat-tin-tim-viec/'.$al->id.'"><button class="btn btn-primary"><i class="fas fa-user-edit"></i></button></a></td>
                                <td>
                                    <form action="/admin/tintimviec/'.$al->id.'" method="post">
                                        '.@csrf_field().'
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
