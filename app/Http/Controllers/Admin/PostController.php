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
            ->where('type_id', config('constant.post.types.Bài viết'))
            ->paginate(10);

        return response()->view('admin.post.index', compact('posts'));
    }

    public function gioiThieu()
    {
        $post = Post::where('type_id', config('constant.post.types.Giới thiệu'))->first();

        $tags = Tag::all();

        return response()->view('admin.post.intro_contact', compact('post', 'tags'));
    }

    public function lienHe()
    {
        $post = Post::where('type_id', config('constant.post.types.Liên hệ'))->first();

        $tags = Tag::all();

        return response()->view('admin.post.intro_contact', compact('post', 'tags'));
    }

    public function create()
    {
        $post = new Post;
        $tagsOfPost = $post->tags;
        $tags = Tag::all();

        return response()->view('admin.post.create', compact('post', 'tagsOfPost', 'tags'));
    }

    public function store(Request $request)
    {
        $request['type_id'] = config('constant.post.types.Bài viết');

        $post = Post::create($request->all());

        $this->updatePost($post, $request);

        return redirect()->to(route('admin.posts.edit', $post->id))->withSuccess('Tạo mới bài viết thành công!');
    }

    public function edit(Post $post)
    {
        $tagsOfPost = $post->tags;
        $tags = Tag::all();

        return response()->view('admin.post.edit',  compact('post', 'tagsOfPost', 'tags'));
    }

    public function update(Request $request, Post $post)
    {
        $this->updatePost($post, $request);

        return redirect()->back()->withSuccess('Lưu bài viết thành công!');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->back()->withSuccess('Xóa bài viết thành công!');
    }

    private function updatePost(Post $post, Request $request)
    {
        $data = $request->all();

        $post->update($data);
        $this->syncTags($post, $request['tags'] ?? []);
    }

    private function syncTags($post, $allTags)
    {
        $allTagIds = [];
        foreach ($allTags as $tagId) {
            if (substr($tagId, 0, 4) == 'new:')
            {
                $newTag = Tag::create(['name' => substr($tagId, 4)]);
                $allTagIds[] = $newTag->id;
                continue;
            }
            $allTagIds[] = $tagId;
        }

        $post->tags()->sync($allTagIds);
    }
}
