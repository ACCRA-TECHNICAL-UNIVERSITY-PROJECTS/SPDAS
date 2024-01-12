@extends('layout.app')

@section('content')

<div class="container-fluid" style="margin-left: -80px">
    <nav class="navbar navbar-expand-lg navbar-light"
        style="background-color: #f8f9fa; border-bottom: 5px solid #C78C06; margin-bottom: 10px;">
        <h4 style="font-weight: bold; color: #343a40; margin: 0; padding: 10px;">NOTIFICATIONS</h4>
    </nav>

    <!-- User Notifications -->
    <div class="card mb-4" style="margin-top: 50px">
        <div class="card-header">
            <h5 class="font-weight-bold mb-0">Your Notifications</h5>
        </div>
        <div class="card-body">
            <ul class="list-group font-weight-bold">
                <li class="list-group-item">
                    <span class="badge badge-info">Info</span>
                    New shift assigned for Jan 30, 2024, at Main Entrance.
                </li>
                <li class="list-group-item">
                    <span class="badge badge-danger">Critical</span>
                    Incident report submitted: Unauthorized access at Building B.
                </li>
                <!-- Add more notifications as needed -->
            </ul>
        </div>
    </div>
</div>

@endsection