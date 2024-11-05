<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $students = $this->filterStudents($request);


        if ($request->ajax()) {
            return view('student_rows', compact('students')); // Adjusted to match your structure
        }

        return view('index', compact('students'));
    }

    /**
     * Filter students based on search and age.
     *
     * @param Request $request
     * @return \Illuminate\Database\Eloquent\Collection
     */
    private function filterStudents(Request $request)
    {
        $query = Student::query();


        $this->applySearch($query, $request->input('search'));


        $this->applyAgeFilter($query, $request->input('age'));


        return $query->get();
    }

    /**
     * Apply search criteria to the query.
     *
     * @param $query
     * @param string|null $search
     */
    private function applySearch($query, ?string $search)
    {
        if ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        }
    }

    /**
     * Apply age filter to the query.
     *
     * @param $query
     * @param int|null $age
     */
    private function applyAgeFilter($query, ?int $age)
    {
        if ($age !== null) {
            $query->where('age', $age);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validateStudent($request);

        Student::create($request->only(['name', 'age']));

        return redirect()->route('students.index')->with('success', 'Student added successfully');
    }

    /**
     * Display the specified resource.
     */
    /**
     * Display the specified resource.
     */
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
        $this->validateStudent($request);

        $student = Student::findOrFail($id);
        $student->update($request->only(['name', 'age']));

        return redirect()->route('students.index')->with('success', 'Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }

    /**
     * Validate student input.
     *
     * @param Request $request
     */
    private function validateStudent(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'age' => 'required|integer|min:1'
        ]);
    }
}
