@extends('layout.app')

@section('content')
    <div class="container-fluid" style="margin-left:-80px">
        <nav class="navbar navbar-expand-lg navbar-light"
            style="background-color: #f8f9fa; border-bottom: 5px solid #C78C06; margin-bottom: 10px;">
            <h4 style="font-weight: bold; color: #343a40; margin: 0; padding: 10px;">WELCOME TO THE SECURITY PERSONNEL DUTY
                ALLOCATION SYSTEM USER DASHBOARD</h4>
        </nav>

        <div class="row" style="margin-top: 50px">
            <!-- Quick Stats Card -->
            <div class="col-md-4">
                <div class="card mb-4" >
                    <div class="card-header">
                        <h5 class="font-weight-bold">Quick Statistics</h5>
                    </div>
                    <div class="card-body">
                        <p class="font-weight-bold">Total Shifts Assigned: 50</p>
                        <p class="font-weight-bold">Shifts Completed: 30</p>
                        <p class="font-weight-bold">Incidents Handled: 5</p>
                        <!-- Add more quick stats as needed -->
                    </div>
                </div>
            </div>

            <!-- Recent Activities Card -->
            <div class="col-md-8">
                <div class="card mb-4" style="height: 210px">
                    <div class="card-header">
                        <h5 class="font-weight-bold">Recent Activities</h5>
                    </div>
                    <div class="card-body">
                        <ul class="font-weight-bold">
                            <li>Shift on Jan 15, 2024: Completed successfully</li>
                            <li>Incident on Jan 20, 2024: Resolved</li>
                            <!-- Add more activities as needed -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Upcoming Shifts Card -->
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="font-weight-bold">Upcoming Shifts</h5>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr class="font-weight-bold">
                            <th scope="col">Shift Date</th>
                            <th scope="col">Shift Time</th>
                            <th scope="col">Location</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="font-weight-bold">
                            <td>Jan 25, 2024</td>
                            <td>8:00 AM - 4:00 PM</td>
                            <td>Main Entrance</td>
                        </tr>
                        <tr class="font-weight-bold">
                            <td>Jan 30, 2024</td>
                            <td>10:00 PM - 6:00 AM</td>
                            <td>Building B</td>
                        </tr>
                        <!-- Add more upcoming shifts as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
