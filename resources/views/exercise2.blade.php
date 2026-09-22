<!DOCTYPE html>
<html>
<head>
    <title>Exercise 2</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body class="bg-light">
<div class="container mt-4">
    <h2 class="mb-4">Exercise 2: Stat Cards</h2>
    <div class="row">
        <!-- Card 1 -->
        <div class="col-12 col-md-4 mb-3">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Enrolled Subjects: 6</h5>
                    <span class="badge bg-success">Active</span>
                </div>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col-12 col-md-4 mb-3">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Pending Tasks: 2</h5>
                    <span class="badge bg-warning text-dark">Due Soon</span>
                </div>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="col-12 col-md-4 mb-3">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Attendance: 98%</h5>
                    <span class="badge bg-info text-dark">Good</span>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>