<ul class="list-group">
    @foreach ($students as $student)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <div>
            <strong>{{ $student->name }}</strong> ({{ $student->age }} years old)
        </div>
        <div>
            <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm me-2">Show</a>
            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm me-2">Edit</a>
            <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
            </form>
        </div>
    </li>
    @endforeach
</ul>
