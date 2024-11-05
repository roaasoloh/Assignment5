<table class="min-w-full bg-white rounded-md shadow-md">
    <thead>
        <tr>
            <th class="py-2 px-4 border-b border-gray-200 text-left">Name</th>
            <th class="py-2 px-4 border-b border-gray-200 text-left">Age</th>
            <th class="py-2 px-4 border-b border-gray-200 text-left">Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($students as $student)
            <tr>
                <td class="py-2 px-4 border-b">{{ $student->name }}</td>
                <td class="py-2 px-4 border-b">{{ $student->age }}</td>
                
                <td class="py-2 px-4 border-b">
                    <a href="{{ route('students.show', $student->id) }}" class="text-blue-500 hover:underline">Show</a>
                    <a href="{{ route('students.edit', $student->id) }}" class="text-yellow-500 hover:underline mx-2">Edit</a>
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="inline" onsubmit="return confirmDelete()">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline">Delete</button>
                    </form>
                </td>

                <script>
                    function confirmDelete() {
                        return confirm('Are you sure you want to delete this student?');
                    }
                </script>

        @empty
            <tr>
                <td colspan="3" class="py-2 px-4 border-b text-center">No students found</td>
            </tr>
        @endforelse
    </tbody>
</table>
