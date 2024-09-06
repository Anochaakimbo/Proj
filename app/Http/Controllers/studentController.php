<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class studentController extends Controller
{
    public function index(){
        $stc = student::count();
        $st = DB::select("SELECT * FROM students");
        return view("student", compact("st","stc"));
    
}
    public function insert(Request $request){
        $new_student = new student;
        $new_student->stu_name = $request->stu_name;
        $new_student->age = $request->age;
        $grade = "A";
        if($request->grade==2) $grade = "B";
        if($request->grade==3) $grade = "C";
        if($request->grade==4) $grade = "D";
        $new_student->grade = $grade;
        $new_student->save();
        return redirect()->back();
}

}
