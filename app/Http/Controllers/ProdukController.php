<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function foodbeverage()
    {
        return view('food-beverage');
    }
    public function beautyhealth()
    {
        return view('beauty-health');
    }
    public function homecare()
    {
        return view('home-care');
    }
    public function babykid()
    {
        return view('baby-kid');
    }
}
