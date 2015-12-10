@extends('layouts.master')

@section('content')
    <div class="row whiteBack sign-up">
        {!! Form::open(array('url'=>'addproduct','method'=>'POST', 'files'=>true)) !!}
            <div class="col-lg-12">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="title">نام محصول</label>
                        <input  name="title" type="text" class="form-control" id="title">
                    </div>
                    <div class="form-group">
                        <div>
                            <label for="body">توضیح محصول</label>
                        </div>
                        <input name="body" type="text" class="form-control" id="body">
                    </div>
                    <div class="form-group">
                        <div>
                            <label for="type">نوع محصول</label>
                        </div>
                        <select name="type" id="type">
                            <option value="book">کتاب</option>
                            <option value="mobile">موبایل</option>
                            <option value="notebook">لپتاپ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div>
                            <label for="quantity">تعداد</label>
                        </div>
                        <input name="quantity" type="text" class="form-control" id="quantity">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <div>
                            <label for="price">قیمت(تومان)</label>
                        </div>
                        <input name="price" type="text" class="form-control" id="price">
                    </div>
                    <div class="form-group">
                        <label for="available">وضعیت محصول</label>
                        <select name="available" class="form-control" id="available">
                            <option value="1">موجود</option>
                            <option value="1">ناموجود</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div>
                            <label for="image">عکس محصول</label>
                        </div>
                        <input name="image" type="file" class="form-control" id="image">
                    </div>
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-default">اضافه کردن محصول</button>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
@endsection