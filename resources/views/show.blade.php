<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Student Details</title>
</head>
<body class="bg-light">

    <div class="container my-5">
        <div class="card shadow-sm">
            <div class="card-header text-center">
                <h2 class="card-title mb-0">{{ $student->name }}</h2>
            </div>
            <div class="card-body text-center">
                <p class="card-text"><strong>Age:</strong> {{ $student->age }}</p>
            </div>
            <div class="card-footer text-center">
                <a href="{{ route('students.index') }}" class="btn btn-primary">Back to Student List</a>
            </div>
        </div>
    </div>

</body>
</html>
