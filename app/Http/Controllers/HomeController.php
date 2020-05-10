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
//
//    public function trangchu()
//    {
//        $email = "khien";
//
//        $posts = Post::select('id', 'title')->whereHas('user', function ($query) use ($email) {
//            $query->where('email', 'like', "%$email%");
//        })->get();
//
//        echo "<pre>";
//        var_dump($posts->toArray()); die();
//
//
//        $posts = Post::select('id', 'status_id')->whereNotBetween ('status_id', [2,5])->get();
//
//        echo "<pre>";
//        var_dump($posts->toArray()); die();
//
//        $posts = Post::select('id', 'status_id')->whereBetween('status_id', [4,5])->get();
//
//        echo "<pre>";
//        var_dump($posts->toArray()); die();
//
//        $posts = Post::select('id', 'status_id')->where('status_id', '>', 2)->where('status_id', '<=', 5)->get();
//
//        echo "<pre>";
//        var_dump($posts->toArray()); die();
//
//        $posts = Post::select('id', 'title')->where('short_content', '>', 10)->orWhere('id', '>', 48)->get();
//
//        echo "<pre>";
//        var_dump($posts->toArray()); die();
//
//        $posts = Post::select('id', 'title')->where('short_content', '>', 10)->get();
//
//        echo "<pre>";
//        var_dump($posts->toArray()); die();
//
//        $posts = Post::select('id', 'title')->whereNull('image_url')->get();
//
//        echo "<pre>";
//        var_dump($posts->toArray()); die();
//
//        $posts = Post::select('id', 'title')->whereHas('user', function ($query) {
//            $query->where('email', 'like', '%pckhien%');
//        })->get();
//
//        echo "<pre>";
//        var_dump($posts->toArray()); die();
//
//        // https://laravel.com/docs/7.x/queries#where-clauses
//        $posts = Post::whereIn('status_id', [7, 5])->get();
//
//        echo "<pre>";
//        var_dump($posts->toArray()); die();
//
//
//        $posts = Post::where('status_id', 7)->orWhere('status_id', 5)->get();
//
//        echo "<pre>";
//        var_dump($posts->toArray()); die();
//
//        /*----------------------------------------------------------*/
//        $posts = Post::whereDate('created_at', '=', '2020-05-09')->get();
//
//        echo "<pre>";
//        var_dump($posts->toArray()); die();
//
//
//        $posts = Post::where('title', 'like',  '%numquam unde%')->get();
//
//        echo "<pre>";
//        var_dump($posts->toArray()); die();
//
//        $posts = Post::where('status_id', 2)->get();
//
//        echo "<pre>";
//        var_dump($posts->toArray()); die();
//        /*--------------------------*/
//        $giaoDucTag = Tag::find(2);
//        $baiVietGiaoDuc = Post::whereHas('tags', function ($query) {
//            $query->where('tag_id', 2);
//        })->orderBy('created_at', 'desc')->limit(4)->get();

          public function trangchu()
          {
        $baiVietGiaiTri = Post::whereHas('tags', function ($query) {
            $query->where('tag_id', 1);
        })->orderBy('created_at', 'desc')->limit(4)->get();

        return view('frontend.trangchu', compact('baiVietGiaoDuc', 'baiVietGiaiTri', 'giaoDucTag'));
    }

    public function theloai()
    {
        $posts = Post::where('status_id', 1)->get();

        $posts = Post::where('title','like', '%foo%')->get();

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
