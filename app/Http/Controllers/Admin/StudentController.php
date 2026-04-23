<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\DanceClass;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::with('danceClass')->latest()->get();
        return view('admin.students.index', compact('students'));
    }

    public function create()
    {
        $classes = DanceClass::all();
        return view('admin.students.create', compact('classes'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable',
            'dance_class_id' => 'nullable|exists:dance_classes,id',
            'status' => 'required',
            'notes' => 'nullable'
        ]);

        Student::create($data);
        return redirect()->route('admin.students.index')->with('success', 'Student added successfully.');
    }

    public function show(Student $student)
    {
        return view('admin.students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        $classes = DanceClass::all();
        return view('admin.students.edit', compact('student', 'classes'));
    }

    public function update(Request $request, Student $student)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable',
            'dance_class_id' => 'nullable|exists:dance_classes,id',
            'status' => 'required',
            'notes' => 'nullable'
        ]);

        $student->update($data);
        return redirect()->route('admin.students.index')->with('success', 'Student updated successfully.');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('admin.students.index')->with('success', 'Student deleted successfully.');
    }
}
