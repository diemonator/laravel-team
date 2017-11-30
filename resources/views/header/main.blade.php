@extends('master')
@section('content')
    @foreach ($contents as $content)
        {{ $content->info }}
    @endforeach
@endsection