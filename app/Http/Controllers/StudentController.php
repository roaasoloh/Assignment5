<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('index', compact('students'));
    }

    public function create()
    {
        return view('create');
    }

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

    public function show(string $id)
    {
        $student = Student::findOrFail($id);
        return view('show', compact('student'));
    }

    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view('edit', compact('student'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'age' => 'required|integer|min:1'
        ]);

        $student = Student::findOrFail($id);
        $student->update($request->only(['name', 'age']));
        return redirect()->route('students.index')->with('success', 'Student updated successfully');
    }

    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully');
    }

    public function search(Request $request)
{
    $query = Student::query();

    // Filter by name if a search term is provided
    if ($request->filled('search')) {
        $query->where('name', 'like', '%' . $request->search . '%');
    }

    // Filter by age range if both min and max are provided
    if ($request->filled('age_min') && $request->filled('age_max')) {
        $query->whereBetween('age', [$request->age_min, $request->age_max]);
    }

    $students = $query->get();

    // Render the partial view with the filtered students and return as HTML
    return view('partials.students_rows', compact('students'))->render();
}


}
