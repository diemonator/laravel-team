@extends('master')
@section('content')
    @foreach ($contents as $content)
        <ul style="background-color: #ffffff; text-align: center;">
        <li>{{ $content->title }}</li>
        <li>{{ substr($content->info,0,20) }}</li>
        <li>{{ $content->author }}</li>
        </ul>
    @endforeach
@endsection