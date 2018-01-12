@extends('master')
@section('content')
<div class="container" style="margin-bottom:40px; background-color: white;border-radius:25px;padding:40px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="col" >
        <h1>{{$content->title}}</h1>
            <img src="{{asset('storage/'.$content->img)}}" style="margin: 0 20px 10px 0; float:left; height: 250px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"><img>
        </div>
        <div class="col">

            <p>{{$content->info}}</p>
            <h2 style="float:right;">{{$content->author}}</h2>
        </div>
</div>
@endsection