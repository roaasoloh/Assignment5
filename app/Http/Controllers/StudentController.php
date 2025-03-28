<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
// Mahmoud Sidawi:20230159

class StudentController extends Controller
{
    // Display a list of students
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    // Show the form to create a new student
    public function create()
    {
        return view('students.create');
    }

    // Store a newly created student
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age'  => 'required|integer|min:1|max:100',
        ]);

        Student::create([
            'name' => $request->name,
            'age'  => $request->age,
        ]);

        return redirect()->route('students.index')->with('success', 'Student added successfully!');
    }

    public function search(Request $request)
    {
        $query = $request->input('search');
        $minAge = $request->input('min_age');
        $maxAge = $request->input('max_age');
    
        $students = Student::query();
    
        if ($query) {
            $students->where('name', 'like', '%' . $query . '%');
        }
    
        if ($minAge) {
            $students->where('age', '>=', $minAge);
        }
    
        if ($maxAge) {
            $students->where('age', '<=', $maxAge);
        }
    
        // Fetch students from the database
        $students = $students->get();
        if ($request->ajax()) {
            return view('students.student_table', compact('students'))->render();
        }
    
 
        return view('students.index', compact('students'));
    }
}
