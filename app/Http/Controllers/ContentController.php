<?php
/**
 * Created by PhpStorm.
 * User: Emil Karamihov
 * Date: 11/29/2017
 * Time: 17:53
 */

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ContentController
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
        return view('header.main')
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
        return redirect()->route('all');

    }
    public function insert(Request $request)
    {
//        $this->validate([
//         'title' => ''
//        ]);
        $content = new Content;
        $content->title = $request->title;
        $content->info = $request->info;
        $content->author = Auth::User()->name;
        $content->save();
        return redirect()->route('get_view',$content->id);
    }
}