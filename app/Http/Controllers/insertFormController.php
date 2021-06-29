<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class insertFormController extends Controller
{
    public function index(Request $request)
    {
           echo "<pre>";
           print_r($request->all());
        //return view('form');
    }
}
