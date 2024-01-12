@extends('layouts.app')

@section('content')

<div class="container-fluid" style="margin-left:-80px">
    <nav class="navbar navbar-expand-lg navbar-light"
        style="background-color: #f8f9fa; border-bottom: 5px solid #C78C06; margin-bottom: 10px;">
        <h4 style="font-weight: bold; color: #343a40; margin: 0; padding: 10px;">DUTY ALLOCATION</h4>
    </nav>

    <!-- Duty Allocation Content -->
    <div class="row" style="margin-top: 50px">

        <!-- Duty Allocation Table Card -->
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="font-weight-bold">
                        <i class="fas fa-calendar"></i> Duty Allocation Table
                    </h5>
                </div>
                <div class="card-body">
                    <!-- Duty Allocation Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Staff</th>
                                <th scope="col">Shift Start</th>
                                <th scope="col">Shift End</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Doe</td>
                                <td>2024-01-01 08:00 AM</td>
                                <td>2024-01-01 05:00 PM</td>
                                <td>
                                    <!-- Add action buttons here -->
                                    <button class="btn btn-sm text-white" style="background: #000080">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <!-- Add more duty allocation rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Add New Duty Assignment Card -->
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="font-weight-bold">
                        <i class="fas fa-plus-circle"></i> Add New Duty Assignment
                    </h5>
                </div>
                <div class="card-body">
                    <!-- Form for adding new duty assignment -->
                    <form>
                        <!-- Add form fields for duty assignment details -->
                        <div class="form-group">
                            <label for="staff">Select Staff:</label>
                            <select class="form-control" id="staff" name="staff">
                                <option value="1">John Doe</option>
                                <option value="2">Jane Smith</option>
                                <!-- Add more staff options as needed -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="staff">Select Post:</label>
                            <select class="form-control" id="staff" name="staff">
                                <option value="1">Front Gate</option>
                                <option value="2">Back Gate</option>
                                <!-- Add more staff options as needed -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="shiftStart">Shift Start:</label>
                            <input type="datetime-local" class="form-control" id="shiftStart" name="shiftStart">
                        </div>
                        <div class="form-group">
                            <label for="shiftEnd">Shift End:</label>
                            <input type="datetime-local" class="form-control" id="shiftEnd" name="shiftEnd">
                        </div>
                        <button type="submit" class="btn text-white" style="background: #000080">Add Duty Assignment</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection