<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function export(){
        // return view('user.list');
    }
    public function delete(){
        // return view('user.list');
    }
    public function view1(){
        $reports = DB::table('reports')->get();
        // return view()-> with ('user.list', ['reports'=>$reports]);
        return view('user.list', compact('reports'));

    }


}
