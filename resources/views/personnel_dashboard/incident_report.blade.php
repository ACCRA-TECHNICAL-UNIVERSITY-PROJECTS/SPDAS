@extends('layout.app')

@section('content')

<div class="container-fluid" style="margin-left: -80px">
    <nav class="navbar navbar-expand-lg navbar-light"
        style="background-color: #f8f9fa; border-bottom: 5px solid #C78C06; margin-bottom: 10px;">
        <h4 style="font-weight: bold; color: #343a40; margin: 0; padding: 10px;">REPORT INCIDENT</h4>
    </nav>

    <!-- Incident Reporting Form -->
    <div class="card mb-4" style="margin-top: 50px">
        <div class="card-header">
            <h5 class="font-weight-bold mb-0">Incident Reporting Form</h5>
        </div>
        <div class="card-body">
            <!-- Incident Reporting Form -->
            <form>
                <div class="form-group">
                    <label for="incidentDate">Incident Date</label>
                    <input type="date" class="form-control" id="incidentDate" name="incidentDate">
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" id="location" name="location">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
                <button type="submit" class="btn text-white" style="background: #000080">Submit Report</button>
            </form>
        </div>
    </div>
</div>

@endsection