@extends('master')
@section('title')
    Games & Review
    @endsection
@section('content')
    @foreach ($contents as $content)
        <ul style="background-color: #ffffff; text-align: center; list-style: none;">
        <li>{{ $content->title }}</li>
        <li>{{ str_limit($content->info,100) }}</li>
        <li>{{ $content->author }}</li>
        <li><button><a href="{{route('gameReview',$content->id)}}"> >>More<< </a> </button></li>
        </ul>
    @endforeach
@endsection