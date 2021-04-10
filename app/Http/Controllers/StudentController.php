<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $students = Student::paginate(5);
        $students->withPath('/home/student');
        // dd($students);
        return view('student/index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'mhsnim'=>'required',
            'mhsnama'=>'required',
            'mhstgllahir'=>'required']);
        
        Student::create($request->all());
        return redirect('/student')->with('status', 'Student added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('student/show', compact('student'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('student/edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'mhsnim'=>'required',
            'mhsnama'=>'required',
            'mhstgllahir'=>'required']);
        
        Student::where('mhsnim', $student->mhsnim)
                ->update([
                    'mhsnama'=> $request->mhsnama,
                    'mhstgllahir'=> $request->mhstgllahir
                ]);

        return redirect('/student')->with('status', 'Student edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->mhsnim);
        return redirect('/student')->with('status', 'Student deleted successfully');
    }
}
