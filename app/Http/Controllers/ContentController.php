<?php
/**
 * Created by PhpStorm.
 * User: Emil Karamihov
 * Date: 11/29/2017
 * Time: 17:53
 */

namespace App\Http\Controllers;

use App\Content;
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
        return view('header.main')->withContents($contents);
    }
}