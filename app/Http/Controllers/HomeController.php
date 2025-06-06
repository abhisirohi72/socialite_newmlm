<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(Request $request) : View
    {
        $title= "Home";
        return view('home', [
            "title" =>  $title
        ]);
    }
}
