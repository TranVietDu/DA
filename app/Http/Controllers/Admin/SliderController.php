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
        $sliders = Slider::paginate(10);
        return view('admin.slider.slider', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.addslider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'anh' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $get_image = $request->file('anh');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('slider', $new_image);

            $slider = new Slider();
            $slider->name = $request->ten;
            $slider->image = $new_image;
            $slider->mota = $request->mota;
            $slider->trangthai = $request->status;
            $slider->save();
            return redirect()->route('slider.index');
        }
        else{
            return redirect()->route('slider.create');
        }
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
        return view('admin.slider.updateslider',compact('slider'));
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
        $request->validate([
            'anh' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $get_image = $request->file('anh');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('slider', $new_image);
            $slider->image=$new_image;
            $slider->name = $request->ten;
            $slider->mota = $request->mota;
            $slider->trangthai = $request->status;
            $slider->save();
            return redirect()->route('slider.index');
        }
        else{
            $slider->name = $request->ten;
            $slider->mota = $request->mota;
            $slider->trangthai = $request->status;
            $slider->save();
            return redirect()->route('slider.index');
        }
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(slider $slider)
    {
        $slider->delete();
        return redirect()->route('slider.index',)->with('thongbao', 'Xóa Thành Công');
    }
}
