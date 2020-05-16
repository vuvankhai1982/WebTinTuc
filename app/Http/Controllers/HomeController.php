<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;

class HomeController extends Controller
{
    public function __construct()
    {
        $tags = Tag::all();
        view()->share(compact('tags'));
    }

    public function trangchu()
    {
        $tags = Tag::all();
        $posts = Post::all();

        return view('frontend.trangchu', compact('posts', 'tags'));
    }

    public function theloai($id)
    {
        $tags = Tag::find($id);
        $posts = Post::where('tag_id', $id)->paginate(5);

        return view('frontend.theloai', compact('posts', 'tags'));
    }

    public function baiviet($id)
    {
        $posts = Post::find($id);
        $postsNew = Post::where('type_id', config('constant.post.types.Bài viết'))->take(3)->get();
        $postsRelated = Post::where('tag_id', $posts->tag_id)->take(3)->get();

        return view('frontend.baiviet', compact('posts', 'postsNew', 'postsRelated'));
    }

    public function lienhe()
    {
        return view('frontend.lienhe');
    }

    public function gioithieu()
    {
        return view('frontend.gioithieu');
    }
}
