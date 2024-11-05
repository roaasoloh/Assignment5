@foreach ($students as $student)
    <tr class="hover:bg-gray-100 border-b border-gray-200">
        <td class="py-3 px-6">{{ $student->name }}</td>
        <td class="py-3 px-6">{{ $student->age }}</td>
        <td class="py-3 px-6 text-center">
            <a href="{{ route('students.show', $student->id) }}"
                class="bg-brown-600 text-white py-1 px-3 rounded hover:bg-brown-400 transition duration-200 ease-in-out mx-1">Show</a>
            <a href="{{ route('students.edit', $student->id) }}"
                class="bg-yellow-500 text-white py-1 px-3 rounded hover:bg-yellow-600 transition duration-200 ease-in-out mx-1">Edit</a>
            <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="inline-block delete-form">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="bg-red-500 text-white py-1 px-3 rounded hover:bg-red-600 transition duration-200 ease-in-out mx-1">Delete</button>
            </form>
        </td>
    </tr>
@endforeach
