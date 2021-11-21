<?php

namespace App\Http\Controllers;

use App\Models\LienHe;
use Illuminate\Http\Request;
use App\Models\YKienNguoiDung;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class LienHeController extends Controller
{
    //select all
    public function index()
    {
        $lienhes = LienHe::all();
        return View::make('lienhe', compact('lienhes'));
    }

    public function dangYKien(Request $request)
    {
        $ykien = new YKienNguoiDung;
        $ykien->user_id = Auth::user()->id;
        $ykien->ten = Auth::user()->name;
        $ykien->noidung = $request->noidung;
        $ykien->save();

        return back()->with('thongbao', 'Ý kiến của bạn đã được lưu !');
    }
}
