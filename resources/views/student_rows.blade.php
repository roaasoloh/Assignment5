@foreach ($students as $student)
<tr>
    <td>{{ $student->name }}</td>
    <td>{{ $student->age }}</td>
    <td>
        <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm">Show</a>
        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>
        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>
    </td>
</tr>
@endforeach