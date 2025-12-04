<x-guest-layout>
    <h5 class="text-center text-secondary mb-4">Reset Password</h5>

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

    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div class="mb-3">
            <label for="email" class="form-label fw-bold">Email</label>
            <input id="email" class="form-control" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username">
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label fw-bold">New Password</label>
            <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password">
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
            <label for="password_confirmation" class="form-label fw-bold">Confirm Password</label>
            <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password">
        </div>

        <!-- Reset Button -->
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-danger btn-lg">Reset Password</button>
        </div>

        <!-- Login Link -->
        <div class="text-center mt-4">
            <p>Remember your password? <a href="{{ route('login') }}" class="text-danger fw-bold">Login here</a></p>
        </div>
    </form>
</x-guest-layout>
