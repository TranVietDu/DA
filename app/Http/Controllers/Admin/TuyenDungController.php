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
        $all=Tintuyendung::paginate(5);
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
}
