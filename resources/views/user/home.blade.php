@extends('layouts.main')

@section('content')
<div class="container">
    <h2>Welcome, {{ Auth::user()->name }}</h2>
    <div class="card my-4 p-4 shadow-sm bg-light">
        <h4>Benefits of Social Media in Healthcare</h4>
        <p>Social media enhances patient engagement, provides a platform for health education, allows for real-time crisis communication, and fosters a community of support for patients with similar conditions.</p>
    </div>

    <div class="row">
        <div class="col-md-4">
            <a href="{{ route('user.chatbot') }}" class="btn btn-primary w-100 py-4">Chatbot Access</a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('user.appointment') }}" class="btn btn-success w-100 py-4">Schedule Appointment</a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('user.history') }}" class="btn btn-info w-100 py-4 text-white">Medical History</a>
        </div>
    </div>
</div>
@endsection