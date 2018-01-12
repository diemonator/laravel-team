@extends('master')
@section('content')
    <div class="container" style="background-color: white;border-radius:25px;padding:40px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="text-center">
        <div >
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <div class="row">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="col-sm-4">
                    <img src="{{asset('storage/'.Auth::user()->avater)}}" style="border-radius: 50%; width: 150px; height: 150px;">
                    </div>
                     <div class="col-sm-8">
                    <p>You are logged in, {{ Auth::user()->name }}!<br>You can change your avatar here!</p>
                    </div>
                    {!! Form::open(['route'=>['home.store'],'method' => 'POST', 'class'=>'form-control', 'files'=>true]) !!}
                    {{Form::file('avater')}}
                    {{Form::submit('Change',['class'=>'btn btn-primary'])}}
                    {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
