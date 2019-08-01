@extends('layouts.app')

@section('content')

    <div class="text-right" dir="rtl">
        <h1><a href="{{route('posts.edit', $post->id)}}">{{$post->title}}</a></h1>
        <div>{{$post->content}}</div>
    </div>

@endsection