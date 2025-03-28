@extends('layouts.app')

@section('title', 'User List')

@section('content')

<!-- Total Users Card -->
<div class="row g-3 mb-3">
    <div class="col-md-6 col-xxl-3">
        <div class="card h-md-100 ecommerce-card-min-width">
            <div class="card-header pb-0">
                <h6 class="mb-0 mt-2 d-flex align-items-center">Total Users</h6>
            </div>
            <div class="card-body d-flex flex-column justify-content-end">
                <div class="row">
                    <div class="col">
                        <p class="font-sans-serif lh-1 mb-1 fs-5">{{ $data['usercount'] }}</p>
                    </div>
                    <div class="col-auto ps-0">
                        <div class="echart-bar-weekly-sales h-100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- User List Table -->
<div class="card">
    <div class="card-header">
        <h6 class="mb-0">User List</h6>
    </div>
    <div class="card-body">
        <table id="userTable" class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Admin</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data['userlist'] as $u)
                <tr>
                    <td>{{ $u->id }}</td>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->email }}</td>
                    <td>{{ $u->is_admin }}</td>
                    <td>{{ $u->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- User Goals Table -->
<div class="card mt-4">
    <div class="card-header">
        <h6 class="mb-0">User Savings Goals</h6>
    </div>
    <div class="card-body">
        <table id="goalTable" class="table table-striped">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Goal Name</th>
                    <th>Target Amount</th>
                    <th>Saved Amount</th>
                    <th>Deadline</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data['usergoals'] as $goal)
                <tr>
                    <td>{{ $goal->username }}</td>
                    <td>{{ $goal->goalname }}</td>
                    <td>${{ number_format($goal->target_amount, 2) }}</td>
                    <td>${{ number_format($goal->saved_amount, 2) }}</td>
                    <td>{{ $goal->deadline }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

@section('scripts')
<!-- Include jQuery and DataTables -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

<script>
    $(document).ready(function() {
        // Initialize the DataTables for user list
        $('#userTable').DataTable({
            "paging": true,  // Enable paging
            "searching": true,  // Enable searching
            "ordering": true,  // Enable sorting
            "info": true  // Show info (e.g. "Showing 1 to 10 of 50 entries")
        });

        // Initialize the DataTables for user goals
        $('#goalTable').DataTable({
            "paging": true,  // Enable paging
            "searching": true,  // Enable searching
            "ordering": true,  // Enable sorting
            "info": true  // Show info (e.g. "Showing 1 to 10 of 50 entries")
        });
    });
</script>
@endsection
