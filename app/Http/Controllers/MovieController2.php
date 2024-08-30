<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController2 extends Controller
{
    public function index(){
        $items = ["Deadpool & Wolverine", "Detective Conan: The Million-dollar Pentagram", "Alien: Romulus"];
        return view("movie", compact("items"));
}
}
