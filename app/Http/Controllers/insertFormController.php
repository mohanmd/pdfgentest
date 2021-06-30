<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class insertFormController extends Controller
{
    public function index(Request $request)
    {
           echo "<pre>";
           print_r($request->all());
        return view('user.list');
    }

    public function insert(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');
        $contact = $request->input('contact');
        $message = $request->input('message');
        $data = ['name'=>$name, 'email'=>$email, 'contact'=>$contact, 'message'=>$message];
        // DB::insert('insert into reports (name,email) values',($name, $email));
        DB::table('reports')->insert($data); // Query Builder approach
        // getList();
        return view('/home');
     }


}
