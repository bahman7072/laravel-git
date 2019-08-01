@extends('layouts.app')

@section('content')

   <div class="text-right" dir="rtl">
       @if($errors->any)
           @foreach($errors->all() as $error)
               <div class="alert alert-danger">
                   {{$error}} <br>
               </div>
           @endforeach
       @endif

       {!! Form::open(['method'=>'POST', 'action'=>'PostsController@store', 'files'=>true]) !!}
       <div class="form-group">
           {!! Form::label('title', 'عنوان مطلب') !!}
           {!! Form::text('title', null, ['placeholder'=>'عنوان','class'=> 'form-control']) !!}
       </div>
       <div class="form-group">
           {!! Form::label('description', 'توضیحات مطلب') !!}
           {!! Form::textarea('description', null, ['placeholder'=>'توضیحات','class'=> 'form-control']) !!}
       </div>
       <div class="form-group">
           {!! Form::label('file', 'تصویر اصلی') !!}
           {!! Form::file('file', ['class'=> 'form-control']) !!}
       </div>
       <div class="form-group">
           {!! Form::submit('ذخیره', ['class'=> 'btn btn-primary']) !!}
       </div>
       {!! Form::close() !!}
   </div>

    {{--<form method="post" action="/posts">--}}
        {{--@csrf--}}
        {{--<input type="text" name="title" placeholder="عنوان">--}}
        {{--<br>--}}
        {{--<input type="text" name="description">--}}
        {{--<br>--}}
        {{--<input type="submit" name="submit" value="ثبت">--}}
    {{--</form>--}}

@endsection