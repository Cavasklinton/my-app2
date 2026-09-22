<!DOCTYPE html>
<html>
<head>
    <title>Exercise 4</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-dark bg-primary">
    <div class="container">
        <span class="navbar-brand mb-0 h1">ACT Student Portal</span>
    </div>
</nav>

<div class="container mt-4">

    <!-- Stat Cards -->
    <div class="row mb-3">
        <div class="col-12 col-md-4 mb-3">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Enrolled Subjects: 6</h5>
                    <span class="badge bg-success">Active</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-3">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Pending Tasks: 2</h5>
                    <span class="badge bg-warning text-dark">Due Soon</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-3">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Attendance: 98%</h5>
                    <span class="badge bg-info text-dark">Good</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Schedule + Sidebar -->
    <div class="row mb-3">
        <div class="col-12 col-md-8 mb-3">
            <div class="card">
                <div class="card-header">Class Schedule</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Subject</th>
                                <th>Schedule</th>
                                <th>Room</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Web Dev</td>
                                <td>MWF 8:00 AM</td>
                                <td>Lab 1</td>
                                <td><span class="badge bg-success">Ongoing</span></td>
                            </tr>
                            <tr>
                                <td>Database</td>
                                <td>TTh 10:00 AM</td>
                                <td>Lab 2</td>
                                <td><span class="badge bg-warning text-dark">Upcoming</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-3">
            <div class="card">
                <div class="card-header">Announcements</div>
                <div class="card-body">
                    <div class="alert alert-info">Reminder: Asynchronous session today!</div>
                    <ul class="list-group">
                        <li class="list-group-item">Enrollment opens next week</li>
                        <li class="list-group-item">Submit project proposal by Friday</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Action Bar -->
    <div class="row mb-4">
        <div class="col-12 col-md-6 mb-3">
            <button class="btn btn-primary w-100">Download Official Schedule PDF</button>
        </div>
        <div class="col-12 col-md-6 mb-3">
            <button class="btn btn-outline-danger w-100">Report a Portal Issue</button>
        </div>
    </div>

</div>
</body>
</html>