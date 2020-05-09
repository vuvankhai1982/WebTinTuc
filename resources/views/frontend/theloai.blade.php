@extends('frontend.layout')
@section('content')
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            @include('frontend.menu')

            <div class="col-md-9 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#337AB7; color:white;">
                        <h4><b>Danh Sách Bài Viết</b></h4>
                    </div>

                    <div class="row-item row">
                        @foreach($posts as $post)
                        <div class="col-md-3">

                            <a href="{{route('baiviet')}}">
                                <br>
                                <img width="200px" height="200px" class="img-responsive" src="{{$post->image_url}}" alt="">
                            </a>
                        </div>

                        <div class="col-md-9">
                            <h3>{{$post->tieu_de}}</h3>
                            <p>{{$post->tom_tat}}</p>
                            <a class="btn btn-primary" href="{{route('baiviet')}}">Chi tiet <span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
                        <div class="break"></div>
                            @endforeach
                    </div>


                    <!-- Pagination -->
{{--                    <div class="row">--}}
{{--                        {{ $posts->links() }}--}}
{{--                    </div>--}}
                    <!-- /.row -->

                </div>
            </div>

        </div>

    </div>
    <!-- end Page Content -->
@endsection
