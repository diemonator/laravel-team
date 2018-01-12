<?php
/**
 * Created by PhpStorm.
 * User: Emil Karamihov
 * Date: 11/29/2017
 * Time: 17:53
 */

namespace App\Http\Controllers;

use App\Content;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Storage;
use Image;
use PDF;

class ContentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = Content::all();
        return view('games')
            ->withContents($contents);
    }

    public function postIndex()
    {
        $contents = DB::table('content')->where('author', Auth::User()->email)->get();
        return view('posts')
            ->withContents($contents);
    }

    public function get_view($id) {

        $content = Content::find($id);
        return view('gamereview')->withContent($content);
    }
    
    public function delete($id)
    {
        $content = Content::find($id);
        $content->delete();
        return redirect()->route('posts');

    }

    public function insert(Request $request)
    {
        $this->validate($request, [
            'img'=>'required',
            'title'=>'required|max:100',
            'info'=>'required',
        ]);
        $content = new Content;
        $content->title = $request->title;
        $content->info = $request->info;
        $content->author = Auth::User()->email;
        if($request->hasFile('img'))
        {
            $image = $request->file('img');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = storage_path('app/public/'.$filename);
            $wlocation = storage_path('app/public/JPG.jpg');
            Image::make($image)->resize(640,480)->insert($wlocation)->save($location);
            $content->img = $filename;
        }
        
        $content->save();
        return redirect()->route('posts');
    }

    public function edit($id) {
        $content = Content::find($id);
        return view('postedit')->withContent($content);
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'title'=>'required|max:100',
            'info'=>'required',
        ]);
        $content = Content::find($id);
        if($request->hasFile('img'))
        {
            $image = $request->file('img');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = storage_path('app/public/'.$filename);
            $wlocation = storage_path('app/public/JPG.jpg');
            $oldfilename = $content->img;
            Storage::delete($oldfilename);
            $newImg = Image::make($image)->resize(640,480)->insert($wlocation);          
            $newImg->save($location);
            $content->img = $filename;
        }
        $content->title = $request->title;
        $content->info = $request->info;
        $content->author = Auth::User()->email;
        $content->save();
        return redirect()->route('posts');
    }

}