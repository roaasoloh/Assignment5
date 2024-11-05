public function index(Request $request)
{
    $query = Student::query();

    if ($request->filled('search')) {
        $query->where('name', 'like', '%' . $request->search . '%');
    }

    if ($request->filled('age')) {
        $query->where('age', $request->age);
    }

    $students = $query->get();

    return view('students.index', compact('students'));
}
