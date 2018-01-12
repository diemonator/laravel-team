@extends('master')
@section('title')
Post Editing
@endsection
@section('content')
    <div class="container" style="background-color: white;border-radius:25px;padding:40px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    {!! Form::open(['route'=>['update',$content->id],'method' => 'PATCH', 'class'=>'form-control','files'=>true]) !!}
    <h4>Write a review for a game of your choice</h4>
    <br>
    {{Form::label('title','Title: ',['class'=>'badge'])}}
    {{Form::text('title', $content->title,['class'=>'form-control'])}}
    <br>
    {{Form::label('info','Content: ',['class'=>'badge'])}}
    {{Form::textarea('info', $content->info,['class'=>'form-control'])}}
    <br>
    <img src={{asset('storage/'.$content->img)}}>
    {{Form::file('img', ['class'=>'btn btn-primary'])}}
    <br>
    {{Form::submit('Post',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
<div>
@endsection