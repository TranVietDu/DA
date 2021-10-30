<?php

namespace App\Http\Controllers;

use App\Models\LienHe;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class LienHeController extends Controller
{
    //select all
    public function index()
    {
        $lienhes = LienHe::all();
        $username=Auth::user();
        return View::make('lienhe', compact('lienhes'),['username'=>$username]);
    }
}
