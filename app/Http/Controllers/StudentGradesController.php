<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Subject;
use DB;

class StudentGradesController extends Controller
{
    public function student($id){
        $student = Student::find($id);
        $reports = array();
        $subjects = Subject::all();
        $grades = DB::table('student_subject')->where('student_id',$student->id)
                                                ->where('class',$student->class)->get();
foreach($grades as $grade){
    $subject = Subject::find($grade->subject_id);

    array_push($reports,    array(
        'id'=>$subject->sub_id,
        'name'=>$subject->name,
        'grade'=>$grade->grade,
        'subject_id'=>$grade->subject_id,
        'student_id'=>$grade->student_id,
        'class'=>$student->class
    ));
}                                                
        return view('dashboard.grades')->with(compact('student'))->with(compact('reports'))->with(compact('subjects'));
    }

    public function report($id){
        $student = Student::find($id);
        $reports = array();
        $subjects = Subject::all();
        $grades = DB::table('student_subject')->where('student_id',$student->id)
                                                ->where('class',$student->class)->get();
foreach($grades as $grade){
    $subject = Subject::find($grade->subject_id);

    array_push($reports,    array(
        'id'=>$subject->sub_id,
        'name'=>$subject->name,
        'grade'=>$grade->grade,
        'subject_id'=>$grade->subject_id,
        'student_id'=>$grade->student_id,
        'class'=>$student->class
    ));
}                                                
        return view('dashboard.report')->with(compact('student'))->with(compact('reports'))->with(compact('subjects'));
    }
    public function remove(Request $request){
        
        $grade = DB::table('student_subject')->where('student_id',$request->student_id)
                                                ->where('subject_id',$request->subject_id)
                                                ->where('class',$request->class)->delete();
       
return redirect()->back()->with(['success'=>"removed successfully"]);                                       
    }
}
