<x-guest-layout>
    <h5 class="text-center text-secondary mb-4">Create Patient Account</h5>

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

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="mb-3">
            <label for="name" class="form-label fw-bold">Full Name</label>
            <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="Enter your full name">
        </div>

        <!-- Email Address -->
        <div class="mb-3">
            <label for="email" class="form-label fw-bold">Email Address</label>
            <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" placeholder="name@example.com">
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label fw-bold">Password</label>
            <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password">
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
            <label for="password_confirmation" class="form-label fw-bold">Confirm Password</label>
            <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password">
        </div>

        <!-- Register Button -->
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-danger btn-lg">Register</button>
        </div>

        <!-- Login Link -->
        <div class="text-center mt-4">
            <p>Already have an account? <a href="{{ route('login') }}" class="text-danger fw-bold">Login here</a></p>
        </div>
    </form>
</x-guest-layout>