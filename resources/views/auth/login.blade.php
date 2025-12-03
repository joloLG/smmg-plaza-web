<x-guest-layout>
    <!-- Session Status -->
    @if(session('status'))
        <div class="alert alert-success mb-3">
            {{ session('status') }}
        </div>
    @endif

    <!-- Validation Errors -->
    @if ($errors->any())
        <div class="alert alert-danger mb-3">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="mb-3">
            <label for="email" class="form-label fw-bold">Email</label>
            <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label fw-bold">Password</label>
            <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password">
        </div>

        <!-- Remember Me -->
        <div class="form-check mb-3">
            <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
            <label for="remember_me" class="form-check-label text-sm text-gray-600">Remember me</label>
        </div>

        <!-- Login Button -->
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-danger btn-lg">Log in</button>
        </div>

        <!-- Register Link -->
        <div class="text-center mt-4">
            <p>Don't have an account? <a href="{{ route('register') }}" class="text-danger fw-bold">Register here</a></p>
        </div>
        
        <!-- Optional: Forgot Password Link -->
        @if (Route::has('password.request'))
            <div class="text-center mt-2">
                <a class="text-muted small text-decoration-none" href="{{ route('password.request') }}">
                    Forgot your password?
                </a>
            </div>
        @endif
    </form>
</x-guest-layout>