@extends('layouts.main')

@section('content')
<div class="container">
    <h3>Appointment Details</h3>
    <div class="card p-4">
        <p><strong>Patient:</strong> {{ $appointment->full_name }}</p>
        <p><strong>Date:</strong> {{ $appointment->appointment_date }}</p>
        <p><strong>Address:</strong> {{ $appointment->address }}</p>
        <p><strong>Concern:</strong> {{ $appointment->concern }}</p>
        <p><strong>Current Status:</strong> {{ $appointment->status }}</p>
        <a href="{{ route('admin.appointments') }}" class="btn btn-secondary">Back</a>
    </div>
</div>
@endsection