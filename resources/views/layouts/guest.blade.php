<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SMMG Medical Plaza - Portal</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome for the Heart Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            /* Light Red Background */
            background-color: #ffe6e6; 
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .auth-card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 450px;
        }
        .heart-icon {
            font-size: 3rem;
            color: #dc3545; /* Bootstrap Danger/Red color */
            animation: beat 1s infinite alternate;
        }
        @keyframes beat {
            to { transform: scale(1.1); }
        }
    </style>
</head>
<body>

    <div class="auth-card text-center">
        <!-- Logo / Header Section -->
        <div class="mb-4">
            <i class="fas fa-heart heart-icon"></i>
            <h4 class="mt-3 text-dark fw-bold">Welcome to SMMG Medical Plaza Portal</h4>
        </div>

        <!-- The Slot is where the Login/Register form appears -->
        <div class="text-start">
            {{ $slot }}
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>