<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    return view('frontend.index');
    }
    public function category(){
        return view('frontend.category');
    }

    public function detail(){
        return view('frontend.detail');
    }
    public function lienhe(){
        return view('frontend.lienhe');
    }
    public function gioithieu(){
        return view('frontend.gioithieu');
    }
}
