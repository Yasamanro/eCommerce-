@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="container">
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
                                        <li><a href="#">ثبت نام کنید</a></li>
                                        <li>
                                            @if(Auth::check())
                                                <a href="logout">خروج</a>
                                            @else
                                                <a href="login">ورود به سایت</a>
                                            @endif
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <form class="navbar-form navbar-left" role="search" action="search">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="جستجو">
                                                </div>
                                                <button type="submit" class="btn btn-default">جستجو</button>
                                            </form>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <a href="#" class="pull-left"><i data-toggle="modal" data-target="#myModal2" class="fa fa-shopping-cart fa-2x"></i></a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="myModal2" role="dialog">
                                                <div class="modal-dialog">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h4 class="modal-title">سبد خرید شما در فاندو</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p class="red">هیچ محصولی در سبد خرید موجود نمی باشد.</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
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
                                                    <form role="form" action="login" method="post">
                                                        <div class="form-group">
                                                            <div>
                                                                <label for="email">ایمیل:</label>
                                                            </div>
                                                            <input  type="email" name="email" class="form-control" id="email">
                                                        </div>
                                                        <div class="form-group">
                                                            <div>
                                                                <label for="pwd">رمز ورود:</label>
                                                            </div>
                                                            <input name="password" type="password" class="form-control" id="pwd">
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
                                                    <a href="login"><button type="button" class="btn btn-default">ورود</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <!--<br>-->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">

                    <div class="item active">
                        <img src="1621821c-8365-4c2b-b3de-bfa51faf986b.jpg" alt="Chania" width="460" height="345">
                    </div>

                    <div class="item">
                        <img src="027932f7-7741-4eed-909a-670f2e00c593.jpg" alt="Chania" width="460" height="345">
                    </div>

                    <div class="item">
                        <img src="6a90e760-c2f5-42ce-8a87-a74e4920c78f.jpg" alt="Flower" width="460" height="345">
                    </div>

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="row"><br></div>
    <div class="row"><br></div>
    <!--<div class="row"><br></div>-->
    <div class="row whiteBack">
        <h3 class="header">محصولات موجود</h3>
        <hr>
    </div>

    <div class="row whiteBack">
        <br>
        <h4 class="header">انواع موبایل</h4>
        <br>
        @foreach($mobiles as $product)
            <div class="col-lg-3 mahsool">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="img">
                                <img src="{{$product->imgAddress}}">
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <p>{{$product->title}}</p>
                        </div>
                    </div>

                    <div class="row greenBack">
                        <div class="col-lg-10 col-lg-offset-1">
                            <strong><p>{{$product->price}} &nbsp; تومان</p></strong>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <a href=""><button class="btn myBtn" >بیشتر</button></a>
                        </div>

                        <div class="col-lg-10 col-lg-offset-1  basket">
                            <a href="#"><i class="fa fa-cart-plus  fa-4x"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row whiteBack">
        <br>
        <h4 class="header">انواع کتاب</h4>
        <br>
        @foreach($books as $product)
            <div class="col-lg-3 mahsool">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="img">
                                <img src="{{$product->imgAddress}}">
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <p>{{$product->title}}</p>
                        </div>
                    </div>

                    <div class="row greenBack">
                        <div class="col-lg-10 col-lg-offset-1">
                            <strong><p>{{$product->price}} &nbsp; تومان</p></strong>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <a href=""><button class="btn myBtn" >بیشتر</button></a>
                        </div>

                        <div class="col-lg-10 col-lg-offset-1  basket">
                            <a href="#"><i class="fa fa-cart-plus  fa-4x"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row whiteBack">
        <br>
        <h4 class="header">انواع لپتاپ</h4>
        <br>
        @foreach($notebooks as $product)
            <div class="col-lg-3 mahsool">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="img">
                                <img src="{{$product->imgAddress}}">
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <p>{{$product->title}}</p>
                        </div>
                    </div>

                    <div class="row greenBack">
                        <div class="col-lg-10 col-lg-offset-1">
                            <strong><p>{{$product->price}} &nbsp; تومان</p></strong>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <a href=""><button class="btn myBtn" >بیشتر</button></a>
                        </div>

                        <div class="col-lg-10 col-lg-offset-1  basket">
                            <a href="#"><i class="fa fa-cart-plus  fa-4x"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row"><br></div>
    <div class="row"><br></div>
    <div class="row"><br></div>
    <div class="row"><br></div>
    <div class="row"><br></div>
    <div class="row"><br></div>
    <div class="row whiteBack">
        <div class="col-lg-12">
            <br>
            <p>کلیه حقوق سایت متعلق به فاندو می باشد.</p>
            <br>
        </div>
    </div>
</div>
@endsection