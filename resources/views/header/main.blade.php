@extends('master')
@section('title')
    Games & Review
    @endsection
@section('content')
    {!! Form::open(['route'   =>['insert'],'method' => 'POST']) !!}
    {{Form::label('title','Title: ',['class'=>'badge'])}}
    {{Form::text('title', null,['class'=>'form-control'])}}

    {{Form::label('info','Content: ',['class'=>'badge'])}}
    {{Form::text('info', null,['class'=>'form-control'])}}

    {{Form::label('author','Author: ',['class'=>'badge'])}}
    {{Form::text('author', null,['class'=>'form-control'])}}

    {{Form::submit('Change',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    @foreach ($contents as $content)
        <ul style="background-color: #ffffff; text-align: center; list-style: none;">
        <li>{{ $content->title }}</li>
        <li>{{ str_limit($content->info,100) }}</li>
        <li>{{ $content->author }}</li>
            <li><button><a href="{{route('gameReview',$content->id)}}"> >>More<< </a> </button></li>
        @if($content->author == Auth::User()->name)
            {!! Form::open(['route' => ['deleteContent', $content->id], 'method' => 'DELETE']) !!}
            {{ Form::submit("Delete") }}
                {!! Form::close() !!}
            @endif

        </ul>
    @endforeach
@endsection