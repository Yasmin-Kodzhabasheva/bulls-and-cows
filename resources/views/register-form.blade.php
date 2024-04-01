<x-layout>
    <div class="d-flex flex-column align-items-center justify-content-center" style="height: 100vh">
        <h2>Register</h2>
        <form action="/register" method="POST" id="registration-form" class="w-auto">
            @csrf
            <div class="form-group">
                <label for="username-register" class="text-muted mb-1"><small>Username</small></label>
                <input name="username" id="username-register" class="form-control" type="text"
                    placeholder="Pick a username" autocomplete="off" />
            </div>

            <div class="form-group">
                <label for="email-register" class="text-muted mb-1"><small>Email</small></label>
                <input name="email" id="email-register" class="form-control" type="text"
                    placeholder="you@example.com" autocomplete="off" />
            </div>

            <div class="form-group">
                <label for="password-register" class="text-muted mb-1"><small>Password</small></label>
                <input name="password" id="password-register" class="form-control" type="password"
                    placeholder="Create a password" autocomplete="off" />
            </div>

            <div class="form-group">
                <label for="password-register-confirm" class="text-muted mb-1"><small>Confirm Password</small></label>
                <input name="password_confirmation" id="password-register-confirm" class="form-control" type="password"
                    placeholder="Confirm password" autocomplete="off" />
            </div>
            <button type="submit" class="mt-4 btn btn-success">Register</button>
        </form>
        <div class="d-flex gap-5 m-4">
            <div>
                <a href="/login-form" class="text-decoration-none btn btn-primary">Login</a>
            </div>
            <div>
                <a href="/" class="text-decoration-none btn btn-primary">Back</a>
            </div>

        </div>
    </div>
</x-layout>