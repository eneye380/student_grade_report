<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Subject;


class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.report');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subject = Subject::find($request->subject_id);

        $report = DB::table('student_subject')->where('subject_id',$request->subject_id)
                                            ->where('student_id',$request->student_id)
                                            ->where('class',$request->class)->first();
        if($report){
            return redirect()->back()->with(['error'=>"$subject->name already added for $request->class"]);
        }
        
        $data = array(
            'subject_id'=>$request->subject_id,
            'student_id'=>$request->student_id,
            'class'=>$request->class,
            'grade'=>$request->grade
        );
        DB::table('student_subject')->insert($data);
        return redirect()->back()->with(['success'=>"$subject->name - $request->grade added successfully"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
