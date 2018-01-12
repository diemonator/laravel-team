@extends('master')
@section('title')
Post editing
@endsection
@section('content')
    <div class="container" style="background-color: #FFFF; border-radius:25px;padding:40px;">
    <h1>My Reviews</h1>
    {!! Form::open(['route'=>['insert'],'method' => 'POST', 'class'=>'form-control','style'=>'margin-bottom:15px;padding:15px;','files'=>true]) !!}
    <h4>Write a review for a game of your choice</h4>
    <br>
    {{Form::label('title','Title: ',['class'=>'badge'])}}
    {{Form::text('title', null,['class'=>'form-control'])}}
    <br>
    {{Form::label('info','Content: ',['class'=>'badge'])}}
    {{Form::textarea('info', null,['class'=>'form-control'])}}
    <br>
    {{Form::file('img'),['class'=>'btn btn-info']}}
    {{Form::submit('Post',['class'=>'btn btn-info', 'style'=>'float:right;padding-bottom:-10px;'])}}
    {!! Form::close() !!}
    <div class="row">
    @foreach ($contents as $content)
    <div class="col-sm text-center" style="margin-bottom: 20px;">
        <div class="card" style="width: 20rem; height: 435px; padding:15px;background-color: #dddddd">
            <img class="card-img-top" src="{{asset('storage/'.$content->img)}}" alt="Card image cap" style="height: 180px; width: 290px; margin-bottom: 5px;">
        <div class="card-block">
        <h4 class="card-title">{{$content->title}}</h4>
            <p class="card-text">{{str_limit($content->info,100)}}<br><b>{{$content->author}}</b></p>
        <div class="text-center">
        <a href="{{route('gameReview', $content->id)}}" class="btn btn-success" style="margin-bottom: 5px;">More</a>
        <a href="{{route('edit', $content->id)}}" class="btn btn-info" style="margin-bottom: 5px;">Edit</a>
        @if($content->author == Auth::User()->email)
            {!! Form::open(['route' => ['deleteContent', $content->id], 'method' => 'DELETE']) !!}
            {{ Form::submit("Delete",['class'=>'btn btn-danger']) }}
                {!! Form::close() !!}
            @endif
        </div>
        </div>
    </div>
    </div>
    @endforeach
    </div>
    </div>
@endsection