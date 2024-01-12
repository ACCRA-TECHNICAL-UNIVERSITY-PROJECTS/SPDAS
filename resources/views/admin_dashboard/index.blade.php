@extends('layouts.app')

@section('content')
    <div class="container-fluid" style="margin-left:-80px">
        <nav class="navbar navbar-expand-lg navbar-light"
            style="background-color: #f8f9fa; border-bottom: 5px solid #C78C06; margin-bottom: 10px;">
            <h4 style="font-weight: bold; color: #343a40; margin: 0; padding: 10px;">WELCOME TO THE SECURITY PERSONNEL DUTY
                ALLOCATION SYSTEM ADMIN DASHBOARD</h4>
        </nav>

        <!-- Page Content -->
        <div class="row" style="margin-top: 50px">

            <!-- Quick Stats Card -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="font-weight-bold">Quick Statistics</h5>
                    </div>
                    <div class="card-body">
                        <p class="font-weight-bold">Total Staff: 100</p>
                        <p class="font-weight-bold">Upcoming Shifts: 20</p>
                        <!-- Add more quick stats as needed -->
                    </div>
                </div>
            </div>

            <!-- Recent Activities Card -->
            <div class="col-md-6">
                <div class="card mb-4" style="height: 180px">
                    <div class="card-header">
                        <h5 class="font-weight-bold">Recent Activities</h5>
                    </div>
                    <div class="card-body">
                        <!-- Add recent activities content here -->
                        <ul class="font-weight-bold">
                            <li>Staff member added on Jan 1, 2024</li>
                            <li>Duty schedule modified on Jan 5, 2024</li>
                            <!-- Add more activities as needed -->
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Duty Roster Card -->
            <div class="col-md-10">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="font-weight-bold">Duty Allocation Table</h5>
                    </div>
                    <div class="card-body">
                        <!-- Table for Duty Roster -->
                        <table class="table">
                            <thead>
                                <tr class="font-weight-bold">
                                    <th scope="col">Staff Name</th>
                                    <th scope="col">Post</th>
                                    <th scope="col">Shift Start</th>
                                    <th scope="col">Shift End</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="font-weight-bold">
                                    <td>John Doe</td>
                                    <td>Security Officer</td>
                                    <td>2024-01-10 09:00:00</td>
                                    <td>2024-01-10 17:00:00</td>
                                </tr>
                                <tr class="font-weight-bold">
                                    <td>Jane Smith</td>
                                    <td>Supervisor</td>
                                    <td>2024-01-15 13:00:00</td>
                                    <td>2024-01-15 21:00:00</td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            

            <!-- Notifications Card -->
            {{-- <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="font-weight-bold">Notifications</h5>
                    </div>
                    <div class="card-body">
                        <!-- Add notifications content here -->
                        <ul class="font-weight-bold">
                            <li>Shift overlap detected</li>
                            <li>New incident reported</li>
                            <!-- Add more notifications as needed -->
                        </ul>
                    </div>
                </div>
            </div> --}}

        </div>

    </div>
@endsection
