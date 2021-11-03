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
        $username=Auth::user();
        return view('admin.tintimviec.tintimviec');
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
        //
    }
}
