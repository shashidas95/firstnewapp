<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    //__index method--//
 public function index(){
    return view('contact');

 }
 public function store(Request $request)
    {
       dd($request->all());

        //
    }
}
