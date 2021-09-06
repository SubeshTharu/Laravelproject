<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function create(Request $request){
        $name = $request-> name;
        $address =$request-> address;
        $contact = $request-> contact;
        $email =$request-> email;
        $profile =$request->profile;

        return view('demo',compact('name','address','contact','email','profile'));
    }
}
