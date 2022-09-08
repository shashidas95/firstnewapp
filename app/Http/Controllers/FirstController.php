<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    //__index method--//
 public function index(){
    return view('contact');

 }
//  public function store(Request $request)
//     {
//        dd($request->all());

//         //
//     }




//__form validation store contact--//

public function store(Request $request){
    //dd($request->all());
    $validated = $request->validate([
        'name' => 'required|max:25',
        'email' => 'required|unique:users|email|max:55',
        'password' => 'required|min:06|max:8',
    ]);


}
}
