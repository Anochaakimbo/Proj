<?php

namespace App\Http\Controllers;
use App\Models\companies;
use Illuminate\Http\Request;
use App\Models\User;

class companyController extends Controller
{
    public function index(){
        $users = User::all();
        $companies = companies::all();
        return view("company",compact('users','companies'));

    }
}
