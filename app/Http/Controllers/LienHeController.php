<?php

namespace App\Http\Controllers;

use App\Models\LienHe;
use Illuminate\Support\Facades\View;

class LienHeController extends Controller
{
    //select all
    public function index()
    {
        $lienhes = LienHe::all();
        return View::make('lienhe', compact('lienhes'));
    }
}
