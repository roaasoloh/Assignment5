<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px; 
            border-radius: 5px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            padding: 20px; 
            background-color: white; 
        }
        .back-link {
            margin-top: 20px; 
            display: inline-block; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">{{ $student->name }}</h1>
        <p class="text-center">Age: {{ $student->age }}</p>
        <div class="text-center">
            <a href="{{ route('students.index') }}" class="btn btn-primary back-link">Back to Student List</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
