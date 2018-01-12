@extends('master')
@section('title')
    Contacts
    @endsection
    @section('content')
        <div class="container" style="background-color: white;border-radius:25px;padding:40px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <h4 class="text-center">Contacts</h4>
            <div class="row text-center">
                <div class="col"><img src="{{asset('storage/FacePic.png')}}" style="max-width:150px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)";><b><br>Nikolay Kolev</b><br>Email:nikoe5@abv.bg<br>Telephone:0897637676<br>Adress: Bul.Vladislav Varnenchik 107, Varna,Bulgaria</div>
                <div class="col"><img src="{{asset('storage/FacePicEmo.jpg')}}" style="max-width:150px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"><br><b>Emil Karamihov</b><br>Email:emo5@abv.bg<br>Telephone:012343155<br>Adress: Boyana 104, Sofia, Bulgaria</div>
            </div>
    </div>
    @endsection