@extends('master')
@section('title')
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

                        {{ Form::open(array('action' => 'HomeController@updatePic','files'=>true)) }}
                        {{Form::file('profilePic')}}
                        {{Form::submit('Update Profile Pic',['class'=>'btn btn-primary'])}}
                        {{Form::close()}}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
