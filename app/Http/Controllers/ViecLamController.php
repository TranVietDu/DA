<?php

namespace App\Http\Controllers;

use App\Models\TinTuyenDung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class ViecLamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vieclams = TinTuyenDung::all();
        $username=Auth::user();
        return view('index', compact('vieclams'),['username'=>$username]);

    }
    public function vieclam()
    {
        $vieclams = TinTuyenDung::simplePaginate(10);
        return View::make('vieclam.vieclam', compact('vieclams'));
    }

    public function chitietvieclam($id)
    {
        $vieclam = TinTuyenDung::find($id);
        return View::make('vieclam.chi-tiet-viec-lam', compact('vieclam'));
    }
    public function search(Request $request)
    {
        $keywords = $request->keywords_submit;

        $search_vieclam = DB::table('TinTuyenDung')->where('tieude','like','%'.$keywords.'%')->orWhere('luong','like','%'.$keywords.'%')
        ->orWhere('nganhnghe','like','%'.$keywords.'%')->orWhere('diachi','like','%'.$keywords.'%')->orWhere('thoigian','like','%'.$keywords.'%')->get();

        return view('timkiem')->with('search_vieclam',$search_vieclam);
    }
}
