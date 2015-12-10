@extends('layouts.master')

@section('content')
    @if(Auth::check())
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.html">
                                <b>فاندو</b>
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav">
                                <li><a href="home">خانه</a></li>
                                <li><a href="#">محصولات</a></li>
                                <li><a href="#">تماس با ما</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right pull-left">
                                <li><a href="#"><i class="fa fa-cog fa-2x"></i></a></li>
                                <li><a href="logout">خروج</a></li>
                            </ul>
                            <ul>
                                <li>
                                    <form class="navbar-form navbar-left" role="search">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="جستجو">
                                        </div>
                                        <button type="submit" class="btn btn-default">جستجو</button>
                                    </form>
                                </li>
                            </ul>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">ورود به سایت</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form">
                                                <div class="form-group">
                                                    <div>
                                                        <label for="email">ایمیل:</label>
                                                    </div>
                                                    <input  type="email" name="email" class="form-control" id="email" value="sampleUser">
                                                </div>
                                                <div class="form-group">
                                                    <div>
                                                        <label for="pwd">رمز ورود:</label>
                                                    </div>
                                                    <input name="password" type="password" class="form-control" id="pwd" value="sample">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
                                            <a href="login.html"><button type="button" class="btn btn-default">ورود</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <a href="addproduct" class="btn btn-info">اضافه کردن محصول</a>
            </div>
        </div>
    @else
        <a href="adminlogin"><button type="button" class="btn btn-default">لطفا وارد شوید</button></a>
    @endif
@endsection