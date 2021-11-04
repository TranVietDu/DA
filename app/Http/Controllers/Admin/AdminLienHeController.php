<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lienhe;
use Illuminate\Http\Request;

class AdminLienHeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lienhe=Lienhe::all();
        return view('admin.Adminlienhe.lienhe',compact('lienhe'));
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
     * @param  \App\Models\Lienhe  $lienhe
     * @return \Illuminate\Http\Response
     */
    public function show(Lienhe $lienhe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lienhe  $lienhe
     * @return \Illuminate\Http\Response
     */
    public function edit(Lienhe $lienhe)
    {
        return view('admin.AdminLienHe.updatelienhe',compact('lienhe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lienhe  $lienhe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lienhe $lienhe)
    {
        $lienhe->diachi=$request->diachi;
        $lienhe->gioithieu=$request->gioithieu;
        $lienhe->tieude=$request->tieude;
        $lienhe->facebook=$request->facebook;
        $lienhe->twitter=$request->twitter;
        $lienhe->in=$request->in;
        $lienhe->be=$request->be;
        $lienhe->save();
        return redirect('/admin/lienhe');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lienhe  $lienhe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lienhe $lienhe)
    {
        $lienhe->delete();
        return redirect('admin/lienhe');
    }
}
