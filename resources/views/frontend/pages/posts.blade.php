@extends('frontend.layouts.default')


@section('title')
    {{$category->title.' - Posts'}}
@endsection


@section('body.wrapper.content')
    <h1>POST list {{$category->title}}</h1>
@endsection