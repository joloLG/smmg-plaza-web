<x-guest-layout>
    <div class="mb-4 text-muted small">
        Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.
    </div>

    <!-- Session Status -->
    @if (session('status') == 'verification-link-sent')
        <div class="alert alert-success mb-4 small">
            A new verification link has been sent to the email address you provided during registration.
        </div>
    @endif

    <div class="d-grid gap-2">
        <!-- Resend Email Button -->
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="btn btn-danger w-100">
                Resend Verification Email
            </button>
        </form>

        <!-- Logout Button -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-outline-secondary w-100">
                Log Out
            </button>
        </form>
    </div>
</x-guest-layout>