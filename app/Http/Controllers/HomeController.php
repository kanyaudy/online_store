<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Online Store";
        return view('home.index')->with("viewData", $viewData);
    }
    
    public function about()
    {
        $data1 = "About us - Online Store";
        $data2 = "About us";
        $description = "Latihan membuat online store sepatu vans Laravel";
        $author = "Developed by: kanya audy";
        return view('home.about')->with("title", $data1)
        ->with("subtitle", $data2)
        ->with("description", $description)
        ->with("author", $author);
    }
}
