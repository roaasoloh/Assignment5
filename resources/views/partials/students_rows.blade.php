@foreach ($students as $student)
<tr>
    <td class="border px-4 py-2">{{ $student->name }}</td>
    <td class="border px-4 py-2">{{ $student->age }}</td>
    <td class="border px-4 py-2">
        <a href="{{ route('students.show', $student->id) }}" class="text-blue-600">Show</a> |
        <a href="{{ route('students.edit', $student->id) }}" class="text-green-600">Edit</a> |
        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-600">Delete</button>
        </form>
    </td>
</tr>
@endforeach
