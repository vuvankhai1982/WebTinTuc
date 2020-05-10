<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $tags=Tag::all();
        view()->share(compact('tags'));
        $posts=Post::all();
        view()->share(compact('posts'));
    }

    public function trangchu()
    {
        $giaoDucTag = Tag::find(2);
        $baiVietGiaoDuc = Post::whereHas('tags', function ($query) {
            $query->where('tag_id', 2);
        })->orderBy('created_at', 'desc')->limit(4)->get();

        $baiVietGiaiTri = Post::whereHas('tags', function ($query) {
            $query->where('tag_id', 1);
        })->orderBy('created_at', 'desc')->limit(4)->get();

        return view('frontend.trangchu', compact('baiVietGiaoDuc', 'baiVietGiaiTri', 'giaoDucTag'));
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
