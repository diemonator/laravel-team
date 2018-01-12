@extends('master')
@section('title')
    Subscriber
    @endsection
@section('content')
    <div class="container text-center" style="background-color: white;border-radius:25px;padding:40px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <h4>Sub Page</h4>
        <p>Exports our users to an .xls file. This is suitable only for our ADMIN. The subscriber blade is only accessible by certain people via a gate.</p><br>
{!! link_to_route('users', 
      'Export to Excel', null, 
      ['class' => 'btn btn-info']) 
!!}
</div>
@endsection
