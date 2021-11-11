<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\YKienNguoiDung;
use Illuminate\Http\Request;

class Ykiencontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all=YKienNguoiDung::paginate(10);
        return view('admin.Ykien.ykien',compact('all'));
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
     * @param  \App\Models\YKienNguoiDung  $yKienNguoiDung
     * @return \Illuminate\Http\Response
     */
    public function show(YKienNguoiDung $yKienNguoiDung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\YKienNguoiDung  $yKienNguoiDung
     * @return \Illuminate\Http\Response
     */
    public function edit(YKienNguoiDung $yKienNguoiDung)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\YKienNguoiDung  $yKienNguoiDung
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, YKienNguoiDung $yKienNguoiDung)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\YKienNguoiDung  $yKienNguoiDung
     * @return \Illuminate\Http\Response
     */
    public function destroy(YKienNguoiDung $yKienNguoiDung)
    {
        $yKienNguoiDung->delete();
        return redirect('/admin/ykien');
    }
}
