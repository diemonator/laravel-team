@extends('master')
@section('content')
    {!! Form::open() !!}
    {{Form::label('name','Type your Name',['class'=>'badge'])}}
    {{Form::text('name', null,['class'=>'form-control'])}}
    {{Form::label('email','Type your E-Mail',['class'=>'badge'])}}
    {{Form::email('email',null, ['class'=>'form-control'])}}
    <div style="text-align: center;">
    {{Form::label('password','Type your pass',['class'=>'badge'])}}
    {{Form::password('password',null, ['class'=>'form-control'])}}
    {{Form::label('password_confirmation','Type your pass again',['class'=>'badge'])}}
    {{Form::password('password_confirmation',null, ['class'=>'form-control'])}}
    </div>
    {{Form::submit('Register',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    @endsection