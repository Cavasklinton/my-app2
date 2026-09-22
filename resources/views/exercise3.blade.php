<!DOCTYPE html>
<html>
<head>
    <title>Exercise 3</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body class="bg-light">
<div class="container mt-4">
    <h2 class="mb-4">Exercise 3: Schedule & Sidebar</h2>
    <div class="row">
        <!-- Main Area -->
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
        <!-- Sidebar -->
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
</div>
</body>
</html>