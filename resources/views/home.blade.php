@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    This Page is your personal Profile page you can change your profile data which you have provided us!

                    You are logged in, {{ Auth::user()->name }}!
                        <br>
                    <div> Edit Profile
                        {!! Form::model($user,['route'=>['home.update', $user->id],'method' => 'PATCH']) !!}
                        {{Form::label('name','Current Name: ',['class'=>'badge'])}}
                        {{ Auth::user()->name }}
                        {{Form::text('name', null,['class'=>'form-control'])}}
                        {{Form::label('email','Current E-Mail: ',['class'=>'badge'])}}
                        {{ Auth::user()->email }}
                        {{Form::email('email',null, ['class'=>'form-control'])}}
                        {{Form::submit('Change',['class'=>'btn btn-primary'])}}
                        {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
