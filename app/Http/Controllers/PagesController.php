<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    function home() {
        return view('pages.index');
    }
    function contact() {
        return view('pages.contact');
    }
    function about() {
        return view('pages.about');
    }
    function store(Request $request) {

        $name = $request->name;
        // $email = $request->email;
        // $message = $request->message;

        // $local_vars = array('name' => $name, 'email' => $email, 'message' => $message);

        //dd($local_vars);
        // dd($request);

        return redirect()->route('thanks',['name' => $name]);
        // return redirect()->route('thanks',[implode(" ", $local_vars)]);
    }
    function thanks($name) {

        return view('pages.thankyou')->with(compact('name'));
    }
}
