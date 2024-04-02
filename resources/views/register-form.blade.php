<x-layout>
    <x-navigation></x-navigation>
    <div class="d-flex flex-column align-items-center justify-content-center" style="height: 100vh">
        <div class="d-flex flex-column gap-3 bg-info p-3 rounded">
            <h2 class="text-white text-center">Register</h2>
            <form action="/register" method="POST" id="registration-form" class="w-auto">
                @csrf
                <div class="form-group">
                    <label for="username-register" class="text-white mb-1"><small>Username</small></label>
                    <input name="username" id="username-register" class="form-control" type="text"
                        placeholder="Pick a username" autocomplete="off" />
                </div>

                <div class="form-group">
                    <label for="email-register" class="text-white mb-1"><small>Email</small></label>
                    <input name="email" id="email-register" class="form-control" type="text"
                        placeholder="you@example.com" autocomplete="off" />
                </div>

                <div class="form-group">
                    <label for="password-register" class="text-white mb-1"><small>Password</small></label>
                    <input name="password" id="password-register" class="form-control" type="password"
                        placeholder="Create a password" autocomplete="off" />
                </div>

                <div class="form-group">
                    <label for="password-register-confirm" class="text-white mb-1"><small>Confirm
                            Password</small></label>
                    <input name="password_confirmation" id="password-register-confirm" class="form-control"
                        type="password" placeholder="Confirm password" autocomplete="off" />
                </div>
                <button type="submit" class="mt-4 btn btn-light">Register</button>
            </form>
            <p class="text-white">Already have an account? Login
                <a href="/login-form" class=" text-white">here</a>
            </p>

        </div>
    </div>
</x-layout>