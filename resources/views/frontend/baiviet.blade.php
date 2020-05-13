@extends('frontend.layout')
@section('content')
    <!-- Page Content -->
    <div class="container">
        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-9">

                <!-- Blog Post -->

                <!-- Title -->
                <h1>{{$posts->title}}</h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#">{{$posts->short_content}}</a>
                </p>

                <!-- Preview Image -->
                <img class="img-responsive" src="{{$posts->image_url}}" alt="">

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span>{{$posts->created_at}}</p>
                <hr>

                <!-- Post Content -->
                <p class="lead">{!!$posts->content!!}</p>

                 </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-3">

                <div class="panel panel-default">
                    <div class="panel-heading"><b>Tin liên quan</b></div>
                    <div class="panel-body">
                        @foreach($postsRelated as $lq)
                        <!-- item -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="{{$lq->id}}">
                                    <img class="img-responsive" src="{{$lq->image_url}}" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="{{$lq->id}}"><b>{{$lq->title}}</b></a>
                            </div>
                            <p style="padding-left: 15px;">{{$lq->short_content}}</p>
                            <div class="break"></div>
                        </div>
                        <!-- end item -->
                     @endforeach
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading"><b>Tin nổi bật</b></div>
                    <div class="panel-body">
                    @foreach($postsNew as $nb)
                        <!-- item -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="{{$nb->id}}">
                                    <img class="img-responsive" src="{{$nb->image_url}}" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="{{$nb->id}}"><b>{{$nb->title}}</b></a>
                            </div>
                            <p style="padding-left: 15px;">{{$nb->short_content}}</p>
                            <div class="break"></div>
                        </div>
                        <!-- end item -->
                        @endforeach
                    </div>
                </div>

            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->
@endsection
