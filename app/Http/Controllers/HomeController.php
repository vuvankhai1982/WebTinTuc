<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
public  function 
    public function trangchu()
    {
        $tags=Tag::all();
        $posts=Post::all();

       return view('frontend.trangchu', compact('tags', 'posts'));
    }

    public function theloai()
    {
        return view('frontend.theloai');
    }

    public function baiviet(){
        return view('frontend.baiviet');
    }

    public function lienhe(){
        return view('frontend.lienhe');
    }

    public function gioithieu(){
        return view('frontend.gioithieu');
    }
}
