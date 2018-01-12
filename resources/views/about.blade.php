@extends('master')
@section('title')
    About Us
    @endsection
    @section('content')
        <div class="container text-center" style="background-color: white;border-radius:25px;padding:40px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <h4>About Us</h4>

            We are the leading Internet media company focused on the video game and entertainment enthusiast markets. IGN caters to more than 68 million monthly users on our website and in our apps. Our English-language programming is followed by over 9 million subscribers on YouTube and 16 million fans on social networks. Our Snapchat edition reaches millions more each month.
            <img src="{{asset('storage/hl.jpg')}}" style="max-width:80%;">
    </div>
    @endsection