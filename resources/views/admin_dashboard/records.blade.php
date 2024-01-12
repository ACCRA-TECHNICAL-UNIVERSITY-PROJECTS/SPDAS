@extends('layouts.app')

@section('content')

<div class="container-fluid" style="margin-left:-80px">
    <nav class="navbar navbar-expand-lg navbar-light"
        style="background-color: #f8f9fa; border-bottom: 5px solid #C78C06; margin-bottom: 10px;">
        <h4 style="font-weight: bold; color: #343a40; margin: 0; padding: 10px;">RECORDS</h4>
    </nav>

    <!-- Reports Content -->
    <div class="row">

        <!-- General Reports Card -->
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="font-weight-bold">
                        <i class="fas fa-chart-bar"></i> General Reports
                    </h5>
                </div>
                <div class="card-body font-weight-bold">
                    <!-- Add general reports content here -->
                    <p>Total Staff: 100</p>
                    <p>Shifts Allocated: 500</p>
                    <p>Incidents Reported: 10</p>
                    <!-- Add more general reports as needed -->
                </div>
            </div>
        </div>

        <!-- Shift Reports Card -->
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="font-weight-bold">
                        <i class="fas fa-calendar-alt"></i> Shift Reports
                    </h5>
                </div>
                <div class="card-body font-weight-bold">
                    <!-- Add shift reports content here -->
                    <p>Shifts Today: 20</p>
                    <p>Shifts This Week: 150</p>
                    <p>Shifts This Month: 600</p>
                    <!-- Add more shift reports as needed -->
                </div>
            </div>
        </div>

        <!-- Incident Reports Card -->
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="font-weight-bold" style="color: red;">
                        <i class="fas fa-exclamation-triangle"></i> Incident Reports
                    </h5>
                </div>
                <div class="card-body">
                    <!-- Add incident reports content here -->
                    <ul class="font-weight-bold">
                        <li>Incident on Jan 5, 2024: Staff altercation</li>
                        <li>Incident on Jan 10, 2024: Unauthorized access</li>
                        <!-- Add more incident reports as needed -->
                    </ul>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection