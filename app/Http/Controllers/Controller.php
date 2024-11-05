<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
   

    public function search(Request $request)
    {
        $query = Student::query();

        
        if ($request->has('name') && $request->name != '') {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        if ($request->has('min_age') && $request->min_age != '') {
            $query->where('age', '>=', $request->min_age);
        }

        if ($request->has('max_age') && $request->max_age != '') {
            $query->where('age', '<=', $request->max_age);
        }

        $students = $query->get();
        return view('index', compact('students'));
    }
}
