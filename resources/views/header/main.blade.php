@extends('master')
@section('content')
    @foreach ($contents as $content)
        <ul style="background-color: #ffffff; text-align: center;">
        <li>{{ $content->title }}</li>
        <li>{{ $content->info }}</li>
        <li>{{ $content->author }}</li>
        </ul>
    @endforeach
@endsection