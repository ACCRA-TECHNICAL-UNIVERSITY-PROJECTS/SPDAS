@extends('layouts.app')

@section('content')

<div class="container-fluid" style="margin-left:-80px">
    <nav class="navbar navbar-expand-lg navbar-light"
        style="background-color: #f8f9fa; border-bottom: 5px solid #C78C06; margin-bottom: 10px;">
        <h4 style="font-weight: bold; color: #343a40; margin: 0; padding: 10px;">STAFF MANAGEMENT</h4>
    </nav>

    <!-- Staff Management Content -->
    <div class="row" style="margin-top: 50px">

        <!-- Staff List Card -->
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="font-weight-bold">
                        <i class="fas fa-users"></i> Staff List
                        <!-- Excel file icon for import -->
                    <a href="#" class="btn btn-success btn-sm" style="margin-left: 540px">
                        <i class="far fa-file-excel"></i> Import Excel
                    </a>
                    </h5>
                </div>
                <div class="card-body">
                    <!-- Staff Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">STAFF ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Position</th>
                                <th scope="col">Email</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>001100</td>
                                <td>John Doe</td>
                                <td>Security Officer</td>
                                <td>john.doe@example.com</td>
                                <td>
                                    <!-- Add action buttons here -->
                                    <button class="btn btn-sm text-white" style="background: #000080">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                           
                            <!-- Add more staff rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Add New Staff Card -->
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="font-weight-bold">
                        <i class="fas fa-user-plus"></i> Add New Staff
                    </h5>
                </div>
                <div class="card-body">
                    <!-- Form for adding new staff -->
                    <form>
                        <!-- Add form fields for new staff details -->
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="name">ID:</label>
                            <input type="text" class="form-control" id="id" name="id">
                        </div>
                        <div class="form-group">
                            <label for="position">Position:</label>
                            <input type="text" class="form-control" id="position" name="position">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <button type="submit" class="btn text-white" style="background: #000080">Add Staff</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection