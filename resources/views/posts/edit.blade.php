@extends('layouts.app')

@section('content')

    <div class="text-right" dir="rtl">
        <h3>ویرایش فرم</h3>

        @can('update', $post)

            {!! Form::model($post, ['method'=>'PATCH', 'action'=>['PostsController@update', $post->id]]) !!}
            <div class="form-group">
                {!! Form::label('title', 'عنوان مطلب') !!}
                {!! Form::text('title', $post->title, ['class'=> 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description', 'توضیحات مطلب') !!}
                {!! Form::textarea('description', $post->content, ['class'=> 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('بروزرسانی', ['class'=> 'btn btn-warning']) !!}
            </div>
            {!! Form::close() !!}

            {!! Form::model($post, ['method'=>'DELETE', 'action'=>['PostsController@destroy', $post->id]]) !!}
            {!! Form::submit('حذف', ['class'=> 'btn btn-danger']) !!}
            {!! Form::close() !!}
        @endcan
    </div>

    {{--<h3>ویرایش فرم</h3>--}}
    {{--<form method="post" action="/posts/{{$post->id}}">--}}
        {{--@csrf--}}
        {{--<input type="hidden" name="_method" value="PATCH">--}}
        {{--<input type="text" name="title" placeholder="عنوان" value="{{$post->title}}">--}}
        {{--<br>--}}
        {{--<input type="text" name="description" value="{{$post->content}}">--}}
        {{--<br>--}}
        {{--<input type="submit" name="submit" value="بروزرسانی">--}}
    {{--</form>--}}
    {{--<form method="post" action="/posts/{{$post->id}}">--}}
        {{--@csrf--}}
        {{--<input type="hidden" name="_method" value="DELETE">--}}
        {{--<br>--}}
        {{--<input type="submit" name="submit" value="حذف">--}}
    {{--</form>--}}

@endsection