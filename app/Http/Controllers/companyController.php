<?php

namespace App\Http\Controllers;
use App\Models\companies;
use Illuminate\Http\Request;
use App\Models\User;

class companyController extends Controller
{
    public function index()
    {
        $companies = Companies::with('users')->get();
        return view("company", compact('companies'));
    }
}
