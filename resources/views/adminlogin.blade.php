@extends('layouts.master')

@section('content')
    <div class='col-lg-4 col-lg-offset-4 adminlogin'>

        @if ($errors->has())
            @foreach ($errors->all() as $error)
                <div class='bg-danger alert'>{{ $error }}</div>
            @endforeach
        @endif

        <h1><i class='fa fa-lock'></i> ورود</h1>

        {!! Form::open(['role' => 'form']) !!}
        <div class='form-group'>
            {!! Form::text('email',null, ['required','placeholder' => 'تام کاربری', 'class' => 'form-control']) !!}
        </div>

        <div class='form-group'>
            {!! Form::password('password', ['placeholder' => 'رمز عبور', 'class' => 'form-control']) !!}
        </div>

        <div class='form-group'>
            {!! Form::submit('ورود', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection