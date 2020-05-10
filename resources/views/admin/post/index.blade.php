@extends('admin.layout')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                {{ Form::open(array('url' => route('admin.posts.index'), 'method' => 'get')) }}
                <div class="card-header">
                    <h3 class="card-title">Quản lý bài viết</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 300px;">
                            {{ Form::text('search_term', Request::get('search_term'), ['class' => 'form-control float-right', 'placeholder' => 'Tìm kiếm']) }}

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                {{ Form::close() }}
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Hình ảnh</th>
                                <th>Tiêu đề</th>
                                <th>Tình trạng</th>
                                <th>Tags</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>#{{ $post->id }}</td>
                                    <td><img src="{{ $post->image }}" alt="" style="width: 150px"></td>
                                    <td>{{ $post->tieu_de }}</td>
                                    <td>{{ array_flip(config('constant.post.status'))[$post->status_id] ?? '' }}</td>
                                    <td>{{ $post->tagNames }}</td>
                                    <td style="width: 100px">
                                        <a href="{{ route('admin.posts.edit', $post->id) }}" style="margin-bottom: 5px" class="btn btn-sm btn-warning glyphicon glyphicon-pencil">
                                            <span><i class="fas fa-edit"></i></span>&nbsp; Sửa
                                        </a>
                                        {{ Form::open(array('url' => route('admin.posts.destroy', $post->id), 'method' => 'delete')) }}
                                            <button type="button" class="btn btn-sm btn-danger glyphicon glyphicon-trash delete-button">
                                                <span><i class="fas fa-trash"></i></span>&nbsp; Xóa
                                            </button>
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    <div>
        {{ $posts->links() }}
    </div>
@endsection
