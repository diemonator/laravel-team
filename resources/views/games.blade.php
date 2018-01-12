@extends('master')
@section('title')
    Games & Review
    @endsection
@section('content')
    <div class="container text-center" style="background-color: #FFFF; border-radius:25px;padding:40px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <h1>Our Games</h1>
    <div class="row">
    @foreach ($contents as $content)
    <div class="col-sm" style="margin-bottom: 20px;">
        <div class="card" style="width: 20rem; height: 435px; padding:15px;background-color: #dddddd;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <img class="card-img-top" src="{{asset('storage/'.$content->img)}}" alt="Card image cap" style="height: 180px; width: 290px; margin-bottom: 5px;">
        <div class="card-block">
        <h4 class="card-title">{{$content->title}}</h4>
            <p class="card-text">{{str_limit($content->info,100)}}<br><b>{{$content->author}}</b></p>
            <a href="{{route('gameReview', $content->id)}}" class="btn btn-info text-center">More</a>
        </div>
    </div>
    </div>
    @endforeach
    </div>
    </div>
@endsection