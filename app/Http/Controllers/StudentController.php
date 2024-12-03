<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $students = Student::all();
        return view('index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('create');
    }
    public function showLoginForm(){
        return view('login');
    }
public function login(Request $request){
      // Validate the request data
      $request->validate([
        'name' => 'required|string',
    ]);

    // Attempt to find the student by name
    $student = Student::where('name', $request->name)->first();

    if ($student) {
        // Log in the student using Laravel's Auth
        Auth::login($student);

        // Redirect to the intended page or dashboard
        return redirect()->intended('/graduate');
    }

    // Redirect back with an error message if login fails
    return back()->withErrors(['name' => 'Student not found']);

}
public function logout()
{
    Auth::logout();
    return redirect('/login');
}
public function graduate(){
        return view('graduate');
}
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|string|max:50',
            'age' => 'required|integer|min:1'
        ]);
        Student::create([
            'name' => $request->name,
            'age' => $request->age
        ]);
        return redirect()->route('index')->with('success','Student added successfully');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $student = Student::findOrFail($id);
        return view('show', compact("student"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $student = Student::findOrFail($id);
        return view('edit', compact("student"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name' => 'required|string|max:50',
            'age' => 'required|integer|min:1'
        ]);
        $student = Student::findOrFail($id);
        $student->update([
            'name' => $request->name,
            'age' => $request->age
        ]);
        return redirect()->route('index')->with('success','Student Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('index')->with('success', 'Student deleted successfully.');

    }
}
