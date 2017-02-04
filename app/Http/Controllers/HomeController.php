<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
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
    public function getHome()
    {
        //return view('home');
        if  (Auth::check()) {
        return  redirect()->action('CatalogController@getIndex');
        } else {
        return  redirect()->action('Controller@home');
        }
    }
}
