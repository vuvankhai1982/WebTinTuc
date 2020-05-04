@extends('frontend.layout')
@section('content')
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-3 ">
                <ul class="list-group" id="menu">
                    <li href="#" class="list-group-item menu1 active">
                        Menu
                    </li>
                    <li href="#" class="list-group-item menu1">
                        <a href="#">Giải Trí</a>
                    </li>
                    <li href="#" class="list-group-item menu1">
                        <a href="#">Giáo Dục</a>
                    </li>
                    <li href="#" class="list-group-item menu1">
                        <a href="#">Thể Thao</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-9 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#337AB7; color:white;">
                        <h4><b>Danh Sách Bài Viết</b></h4>
                    </div>

                    <div class="row-item row">
                        <div class="col-md-3">

                            <a href="detail.html">
                                <br>
                                <img width="200px" height="200px" class="img-responsive" src="/frontend/image/320x150.png" alt="">
                            </a>
                        </div>

                        <div class="col-md-9">
                            <h3>Project Five</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident .</p>
                            <a class="btn btn-primary" href="detail.html">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
                        <div class="break"></div>
                    </div>


                    <!-- Pagination -->
                    <div class="row text-center">
                        <div class="col-lg-12">
                            <ul class="pagination">
                                <li>
                                    <a href="#">&laquo;</a>
                                </li>
                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a href="#">4</a>
                                </li>
                                <li>
                                    <a href="#">5</a>
                                </li>
                                <li>
                                    <a href="#">&raquo;</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->

                </div>
            </div>

        </div>

    </div>
    <!-- end Page Content -->
@endsection
