<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('home', ['students'=>$students]);
    }

    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->city = $request->city;
        $student->pincode = $request->pincode;

        $student->save();
        return redirect(route('home'))->with('added', 'Record Added Successfully!');
    }

    public function edit(string $id)
    {
        $student = Student::find($id);
        return view('update', ['student'=>$student]);
    }

    public function update(Request $request, string $id)
    {
        $student = Student::find($id);
        $student->name = $request->name;
        $student->city = $request->city;
        $student->pincode = $request->pincode;
        $student->save();
        return redirect(route('home'))->with('updated', 'Record Updated Successfully!');

    }

    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect(route('home'))->with('deleted', 'Record Deleted Successfully!');
    }
}
