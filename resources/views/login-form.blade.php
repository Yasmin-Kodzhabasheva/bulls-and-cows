<x-layout>
    <div class="d-flex flex-column align-items-center justify-content-center" style="height: 100vh">
        <h2>Login</h2>
        <form action="/login" method="POST" id="login-form" class="w-auto">
            @csrf
            <div class="form-group">
                <label for="username" class="text-muted mb-1"><small>Username</small></label>
                <input name="username" id="username" class="form-control" type="text" autocomplete="off" />
                @error('username')
                    <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="password" class="text-muted mb-1"><small>Password</small></label>
                <input name="password" id="password" class="form-control" type="password" autocomplete="off" />
                @error('password_confirmation')
                    <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="mt-4 btn btn-success">Login</button>
        </form>

        <div class="d-flex gap-5 m-4">
            <div>
                <a href="/register-form" class="text-decoration-none btn btn-primary">Register</a>
            </div>
            <div>
                <a href="/" class="text-decoration-none btn btn-primary">Back</a>
            </div>

        </div>
    </div>
</x-layout>
