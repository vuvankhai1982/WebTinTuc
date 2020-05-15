<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    public function __construct()
    {
    }

    public function show()
    {

    }

    public function index(Request $request)
    {
        $posts = Post::orderBy('id', 'desc')
            ->paginate(10);

        return response()->view('admin.post.index', compact('posts'));
    }


    public function create()
    {
        $post = new Post;
        $tags = Tag::all();

        return response()->view('admin.post.create', compact('post','tags'));
    }

//    public function store(Request $request)
//    {
//        $request['type_id'] = config('constant.post.types.tao moi');
//      $post= Post::create($request->all());
//
////        $this->updatePost($post, $request);
//
//        return redirect()->route('admin.posts.index', $post->id)->withSuccess('Tạo mới bài viết thành công!');
//    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=> 'required',
            'status_id'=> 'required',
            'type_id'=> 'required',
            'image_url'=> 'required',
            'tag_id'=> 'required',
            'short_content'=> 'required',
            'content'=> 'required',


        ]);
       $post = Post::create($request->all());
        return redirect()->route('admin.posts.index', $post->id)->withSuccess('Tạo mới bài viết thành công!');
    }

    public function edit(Post $post)
    {
        $tags = Tag::all();

        return response()->view('admin.post.edit',  compact('post', 'tags'));
    }

    public function update(Request $request, Post $post)
    {
//        $this->updatePost($post, $request);
        $post->update($request->all());

//        return redirect()->back()->withSuccess('Lưu bài viết thành công!');
        return back()->with('message', 'Lưu bài viết thành công');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return back()->with('message', 'Xóa bài viết thành công!');
//        return redirect()->back()->withSuccess('Xóa bài viết thành công!');
    }

//    private function updatePost(Post $post, Request $request)
//    {
//        $data = $request->all();
//
//        $post->update($data);
//        $this->syncTags($post, $request['tags'] ?? []);
//    }
//
//    private function syncTags($post, $allTags)
//    {
//        $allTagIds = [];
//        foreach ($allTags as $tagId) {
//            if (substr($tagId, 0, 4) == 'new:')
//            {
//                $newTag = Tag::create(['name' => substr($tagId, 4)]);
//                $allTagIds[] = $newTag->id;
//                continue;
//            }
//            $allTagIds[] = $tagId;
//        }
//
//        $post->tags()->sync($allTagIds);
//    }
}
