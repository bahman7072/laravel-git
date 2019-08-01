@extends('layouts.app')

@section('content')
    <h1> آی دی: {{ $id }}</h1>
    <h1> نام: {{ $name }}</h1>
    <h1> نام خانوادگی: {{ $family }}</h1>
    @endsection
@section('footer')
    <h3>در این قسمت بعدا فوتر قرار میگیرد.</h3>
    @endsection