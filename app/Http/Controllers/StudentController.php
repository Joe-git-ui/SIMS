<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // Display a list of students
    public function index()
    {
         $students = Student::all(); // fetch all students from database
    return view('students', compact('students'));
    }

    // Show form to create a new student
    public function create()
    {
        return view('students.create');
    }

    // Store a new student
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students',
            'phone' => 'nullable|string|max:20',
        ]);

        Student::create($request->all());
        return redirect()->route('students.index')->with('success', 'Student added successfully.');
    }

    // Show form to edit an existing student
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    // Update an existing student
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $student->id,
            'phone' => 'nullable|string|max:20',
        ]);

        $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    // Delete a student
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
