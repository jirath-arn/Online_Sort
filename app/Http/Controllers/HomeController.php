<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("home");
    }

    public function sortArray(Request $request)
    {
        if($request->input("text") == null)
        {
            return redirect("/");
        }

        $arr = explode("\n", $request->input("text"));
        sort($arr);
        
        return view("result")->with('sorted', $arr);
    }
}
