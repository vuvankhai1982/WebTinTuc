@extends('admin.layout')

@section('content')
    @include('admin.post.base', [
        'route' => route('admin.posts.store'),
        'method' => 'post',
        'title' => 'Thêm mới bài viết',
        'type' => 'create',
    ])
@endsection



