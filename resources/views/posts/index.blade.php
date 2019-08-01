@extends('layouts.app')

@section('content')

    <div class="text-right" dir="rtl">
        <ul>
            @foreach($posts as $post)
                <div class="col-lg-2">
                    <img src="{{$post->path}}" alt="" class="embed-responsive">
                </div>
                <li><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a>
                <span>{{$post->user->name}}</span>
                </li>
            @endforeach
        </ul>
    </div>

@endsection