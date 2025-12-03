<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMMG Medical Plaza</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { display: flex; min-height: 100vh; overflow-x: hidden; }
        #sidebar { min-width: 250px; max-width: 250px; background: #2c3e50; color: #fff; transition: all 0.3s; }
        #sidebar .nav-link { color: #cfd8dc; margin-bottom: 10px; }
        #sidebar .nav-link:hover { color: #fff; background: #34495e; }
        #content { width: 100%; padding: 20px; }
    </style>
    @yield('styles')
</head>
<body>

    <!-- Sidebar -->
    <nav id="sidebar" class="d-flex flex-column p-3">
        <h4 class="text-center mb-4">SMMG System</h4>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            @if(Auth::user()->usertype == 'admin')
                <li><a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a></li>
                <li><a href="{{ route('admin.appointments') }}" class="nav-link">See Appointments</a></li>
                <li><a href="{{ route('admin.users') }}" class="nav-link">Manage Users</a></li>
            @else
                <li><a href="{{ route('dashboard') }}" class="nav-link">Home</a></li>
                <li><a href="{{ route('user.chatbot') }}" class="nav-link">Chatbot</a></li>
                <li><a href="{{ route('user.appointment') }}" class="nav-link">Schedule Appointment</a></li>
                <li><a href="{{ route('user.history') }}" class="nav-link">Medical History</a></li>
                <li><a href="{{ route('user.about') }}" class="nav-link">About</a></li>
            @endif
        </ul>
        <hr>
        <!-- Logout Form -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger w-100">Logout</button>
        </form>
    </nav>

    <!-- Main Content -->
    <div id="content">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>