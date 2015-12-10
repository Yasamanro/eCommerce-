@extends('layouts.master')
@section('content')
    <div class="col-lg-4 col-lg-offset-4 adminlogin">
        @if ($errors->has())
            @foreach ($errors->all() as $error)
                <div class='bg-danger alert'>{{ $error }}</div>
            @endforeach
        @endif

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
            {{ csrf_field() }}
            <button type="submit" class="btn btn-default">ورود</button>
        </form>
    </div>
@endsection