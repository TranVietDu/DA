<?php

namespace App\Http\Controllers\Admin;

use App\Models\slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders=Slider::all();
        $username=Auth::user();
        return view('admin.slider.slider',compact('sliders'),['username'=>$username]);

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
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(slider $slider)
    {
        //
    }
}
