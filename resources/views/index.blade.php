<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 5</title>
</head>
<body>
    <h1>Students List</h1>
    <a href="{{route('create')}}">Add New Student</a>
    <ul>
        @foreach ($students as $student)
        <li> {{$student->name}} ({{$student->age}}) 
            <a href="{{route('show', $student->id)}}">Show</a>
            <a href="{{route('edit', $student->id)}}">Edit</a>
            <form action="{{route('destroy',$student->id)}}" method="POST">
        @csrf
        @method('Delete')
       <button type="submit">Delete</button>
       </form>

        </li>
        @endforeach
    </ul>
</body>
</html>