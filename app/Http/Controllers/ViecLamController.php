<?php

namespace App\Http\Controllers;

use App\Models\TinTuyenDung;
use Illuminate\Http\Request;
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
}
