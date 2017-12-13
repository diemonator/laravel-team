<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function updatePic(Request $request)
    {
        $path = $request->file('profilePic')->storePublicly('public/avatars');
        $img = \Intervention\Image\Facades\Image::make(Storage::get($path))->resize(50,50)->stream('jpg',100);
        Storage::put($path,$img);

        DB::table('users')
            ->where('id', Auth::User()->id)
            ->update(['profilePicUrl' => $path]);


        return back();
    }
}
