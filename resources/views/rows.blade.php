@foreach ($students as $student)
<tr class="@if($loop->even) bg-gray-50 @else @endif hover:bg-gray-100 transition-colors">
    <td class="py-4 px-6 border-b border-gray-200">{{ $student->name }}</td>
    <td class="py-4 px-6 border-b border-gray-200">{{ $student->age }}</td>
    <td class="py-4 px-6 border-b border-gray-200 text-center">
        <div class="flex justify-center space-x-4 items-center">
            <a href="{{ route('students.show', $student->id) }}" class="text-green-500 hover:text-green-600 font-medium transition-colors flex items-center">
                📄 Show
            </a>
            <a href="{{ route('students.edit', $student->id) }}" class="text-blue-500 hover:text-blue-600 font-medium transition-colors flex items-center">
                ✏️ Edit
            </a>
            <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-500 hover:text-red-600 font-medium transition-colors flex items-center">
                    🗑️ Delete
                </button>
            </form>
        </div>
    </td>
</tr>
@endforeach

@if ($students->isEmpty())
<tr>
    <td colspan="3" class="text-center py-4">No students found.</td>
</tr>
@endif