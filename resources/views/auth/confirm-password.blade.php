<x-guest-layout>
    <div class="mb-4 text-muted small">
        This is a secure area of the application. Please confirm your password before continuing.
    </div>

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

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label fw-bold">Password</label>
            <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password">
        </div>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-danger">Confirm</button>
        </div>
    </form>
</x-guest-layout>