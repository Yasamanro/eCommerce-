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
                                            <a href="cart" class="pull-left"><i class="fa fa-shopping-cart fa-2x"></i></a>
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
    @if(count($cart))
        <div class="row">
            <table class="table table-bordered whiteBack">
                <thead>
                <tr>
                    <th>شرح محصول</th>
                    <th>تعداد</th>
                    <th>قیمت واحد</th>
                    <th>قیمت کل</th>
                </tr>
                </thead>
                        <tbody>
                        @foreach($cart as $item)
                            <tr>
                                <td>
                                    <h4 style="color: black">{{$item->name}}</h4>
                                </td>
                                <td>
                                    <div>
                                        <a href="{{url("cart?product_id=$item->id&increment=1")}}" style="color:#000000"> + </a>
                                        <input type="text" name="quantity" value="{{$item->qty}}" autocomplete="off" size="2">
                                        <a href="{{url("cart?product_id=$item->id&decrease=1")}}" style="color:#000000"> - </a>
                                    </div>
                                </td>
                                <td>
                                    <p>{{$item->price}}</p>
                                </td>
                                <td><p>{{($item->price)*($item->qty)}}</p></td>
                            </tr>
                        @endforeach
                        @else
                            <p>هیچ محصولی در سبد خرید موجود نمی باشد.</p>
                        @endif
                        </tbody>
                </table>
        </div>
@endsection