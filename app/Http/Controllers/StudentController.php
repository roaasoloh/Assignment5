<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource with search and filter functionality.
     */
    public function index(Request $request)
    {
        // Start building the query for retrieving students
        $query = Student::query();

        // Apply search functionality
        if ($request->has('search') && !empty($request->search)) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Apply age filter functionality
        if ($request->has('age') && !empty($request->age)) {
            $query->where('age', $request->age);
        }

        // Retrieve the students based on the constructed query
        $students = $query->get();

        // Pass the students and the current search/age values to the view
        return view('students.index', compact('students'))
            ->with('search', $request->search)
            ->with('age', $request->age);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'age' => 'required|integer|min:1'
        ]);

        Student::create([
            'name' => $request->name,
            'age' => $request->age
        ]);

        return redirect()->route('students.index')->with('success', 'Student added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'age' => 'required|integer|min:1'
        ]);

        $student = Student::findOrFail($id);
        $student->update([
            'name' => $request->name,
            'age' => $request->age
        ]);

        return redirect()->route('students.index')->with('success', 'Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted successfully');
    }
}
