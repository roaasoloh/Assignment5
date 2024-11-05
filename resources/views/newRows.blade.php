@foreach($students as $student)
    <tr>
        <td class="border border-gray-300 p-2">{{ $student->name }}</td>
        <td class="border border-gray-300 p-2">{{ $student->age }}</td>
    </tr>
@endforeach
