@forelse ($students as $student)
<tr>
    <td>{{ $student->name }}</td>
    <td>{{ $student->age }}</td>
    <td>
        <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm text-white">Show</a>
        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm text-white">Edit</a>
        <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
    </td>
</tr>
@empty
<tr>
    <td colspan="3" class="text-center">No students found.</td>
</tr>
@endforelse