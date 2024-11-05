@foreach ($students as $student)
<tr class="hover:bg-gray-50">
    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
        <p class="text-gray-900 whitespace-no-wrap">{{ $student->name }}</p>
    </td>
    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
        <p class="text-gray-900 whitespace-no-wrap">{{ $student->age }}</p>
    </td>
    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
        <a href="{{ route('students.show', $student->id) }}" class="text-blue-600 hover:text-blue-900 mr-2">Show</a>
        <a href="{{ route('students.edit', $student->id) }}" class="text-green-600 hover:text-green-900 mr-2">Edit</a>
        <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
        </form>
    </td>
</tr>
@endforeach
