<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class facultyController extends Controller
{
    public function index(){
        $ie = DB::select("SELECT * FROM faculties");
        return view("faculty", compact("ie"));
}
}
