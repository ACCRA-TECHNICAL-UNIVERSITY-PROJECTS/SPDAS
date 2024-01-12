@extends('layout.app')

@section('content')

<div class="container-fluid" style="margin-left:-80px">
    <nav class="navbar navbar-expand-lg navbar-light"
        style="background-color: #f8f9fa; border-bottom: 5px solid #C78C06; margin-bottom: 10px;">
        <h4 style="font-weight: bold; color: #343a40; margin: 0; padding: 10px;">DUTY SCHEDULE</h4>
    </nav>

    <!-- User Duty Schedule Table -->
    <div class="card mb-4" style="margin-top: 50px">
        <div class="card-header">
            <h5 class="font-weight-bold">Your Duty Schedule</h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Shift Date</th>
                        <th scope="col">Shift Time</th>
                        <th scope="col">Location</th>
                        <th scope="col">Supervisor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Jan 25, 2024</td>
                        <td>8:00 AM - 4:00 PM</td>
                        <td>Main Entrance</td>
                        <td>John Doe</td>
                    </tr>
                    <tr>
                        <td>Jan 30, 2024</td>
                        <td>10:00 PM - 6:00 AM</td>
                        <td>Building B</td>
                        <td>Jane Smith</td>
                    </tr>
                    <!-- Add more duty schedule entries as needed -->
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection