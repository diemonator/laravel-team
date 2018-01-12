<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Image;
use Illuminate\Support\Facades\Auth;
use DB;
use App\User;
use Excel;

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
        return redirect()->route('home.show',Auth::id());
    }

    public function export(){
        $users = DB::table('users')
        ->select('name','email','sub')
        ->get();
        $datas = json_decode(json_encode($users),true);
        
        $usersArray = [];

        $usersArray = [['name','email','sub']];

    
        foreach ($datas as $data) {
            $usersArray[] = $data;
        }
        Excel::create('users', function($excel) use ($usersArray) {
        $excel->setTitle('users');
        $excel->setCreator('Emil')->setCompany('WJ Gilmore, LLC');
        $excel->setDescription('users file');
        $excel->sheet('sheet1', function($sheet) use ($usersArray) {
            
            $sheet->fromArray($usersArray, null, 'A1', false, false);
        });
    })->download('xlsx');
        }

    public function store(Request $request) {
        $this->validate($request, [
            'avater'=>'required'
        ]);
        if($request->hasFile('avater'))
        {
            $image = $request->file('avater');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = storage_path('app/public/'.$filename);
            Image::make($image)->resize(640,480)->save($location);
            $user = Auth::User();
            $user->avater = $filename;
            $user->save();
            return redirect()->route('home.show', $user->id);
        }
    }

    public function show($id) {
        $user = User::find($id);
        return view('home')->withUser($user);
    }
}
