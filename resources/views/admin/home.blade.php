@extends('layouts.main')

@section('content')
<div class="container">
    <h2>Admin Dashboard</h2>
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Total Users</div>
                <div class="card-body">
                    <h1 class="card-title">{{ $total_users }}</h1>
                    <p class="card-text">Registered Patients</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Total Appointments</div>
                <div class="card-body">
                    <h1 class="card-title">{{ $total_appointments }}</h1>
                    <p class="card-text">All time bookings</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection