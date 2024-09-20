<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class studentController extends Controller
{
    public function index($std_id=NULL){
        $find = student::find($std_id);
        $stc = student::count();
        $st = student::all();
        return view("student", compact("st","stc","find"));

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
    public function delete($std_id){
        $deletestd = student::find($std_id);
        $deletestd->delete();
        return redirect()->back();
}

    public function updatedStudent(Request $request){
        $updatestd = student::find($request->stu_ID);
        $updatestd->stu_name = $request->stu_name;
        $updatestd->age = $request->age;
        $grade = "A";
        if($request->grade==2) $grade = "B";
        if($request->grade==3) $grade = "C";
        if($request->grade==4) $grade = "D";
        if($request->grade==0) $grade = "F";
        $updatestd->grade = $grade;
        $updatestd->save();
        return redirect()->route('student');
    }


}

