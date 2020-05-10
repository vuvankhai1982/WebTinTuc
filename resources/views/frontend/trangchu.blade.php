@extends('frontend.layout')
@section('content')
<!-- Page Content -->
<div class="container">

    <!-- slider -->
    <div class="row carousel-holder">
        <div class="col-md-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img class="slide-image" src="/frontend/image/800x300.png" alt="">
                    </div>
                    <div class="item">
                        <img class="slide-image" src="/frontend/image/800x300.png" alt="">
                    </div>
                    <div class="item">
                        <img class="slide-image" src="/frontend/image/800x300.png" alt="">
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>
    <!-- end slide -->

    <div class="space20"></div>


    <div class="row main-left">
       @include('frontend.menu')

        <div class="col-md-9">
            <?php
                $moiNhat = $baiVietGiaoDuc->slice(0, 1)->first();
                $baiVietNoiBat = $baiVietGiaoDuc->slice(1);
            ?>
            <div class="row"> <h2>{{ $giaoDucTag->name }}</h2></div>
            <div class="row">
                <div class="col-md-9"> {{$moiNhat->title}}</div>
                <div  class="col-md-3">
                    @foreach($baiVietNoiBat as $key => $baiviet)
                        {{ $loop->index }} :
                        {{ $baiviet->title }} <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- /.row -->
</div>
<!-- end Page Content -->
@endsection
