<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMMG Medical Plaza</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome for Icons (Optional but good) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body { display: flex; min-height: 100vh; overflow-x: hidden; background-color: #f0f2f5; }
        
        /* Sidebar Styling */
        #sidebar { 
            min-width: 250px; 
            max-width: 250px; 
            background: #2c3e50; 
            color: #fff; 
            min-height: 100vh;
        }
        #sidebar .nav-link { 
            color: #cfd8dc; 
            margin-bottom: 10px; 
            font-size: 16px;
        }
        #sidebar .nav-link:hover, #sidebar .nav-link.active { 
            color: #fff; 
            background: #34495e; 
            border-left: 4px solid #3498db;
        }
        
        /* Content Styling */
        #content { 
            width: 100%; 
            padding: 20px; 
        }
    </style>
    @yield('styles')
</head>
<body>

    <!-- Sidebar -->
    <nav id="sidebar" class="d-flex flex-column p-3">
        <h4 class="text-center mb-4 py-2 border-bottom">SMMG Plaza</h4>
        
        <ul class="nav nav-pills flex-column mb-auto">
            @if(Auth::check() && Auth::user()->usertype == 'admin')
                <!-- ADMIN LINKS -->
                <li><a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a></li>
                <li><a href="{{ route('admin.appointments') }}" class="nav-link">See Appointments</a></li>
                <li><a href="{{ route('admin.users') }}" class="nav-link">Manage Users</a></li>
            @elseif(Auth::check())
                <!-- USER LINKS -->
                <li><a href="{{ route('dashboard') }}" class="nav-link">Home Dashboard</a></li>
                <li><a href="{{ route('user.chatbot') }}" class="nav-link">Chatbot</a></li>
                <li><a href="{{ route('user.appointment') }}" class="nav-link">Scheduling</a></li>
                <li><a href="{{ route('user.history') }}" class="nav-link">Medical History</a></li>
                <li><a href="{{ route('user.about') }}" class="nav-link">About SMMG</a></li>
            @endif
        </ul>
        
        <hr>
        
        <!-- Logout Button -->
        <div class="mt-auto">
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <strong>{{ Auth::user()->name ?? 'User' }}</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">Sign out</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content Area -->
    <div id="content">
        <!-- Mobile Toggle Button (Optional) -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4 rounded shadow-sm d-md-none">
            <div class="container-fluid">
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                    <i class="fas fa-bars"></i> Menu
                </button>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>