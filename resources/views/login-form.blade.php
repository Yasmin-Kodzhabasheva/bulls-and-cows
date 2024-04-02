<x-layout>
    <x-navigation></x-navigation>
    <div class="d-flex flex-column align-items-center justify-content-center" style="height: 100vh">

        <div class="d-flex flex-column gap-3 bg-info p-3 rounded">
            <h2 class="text-white text-center">Login</h2>
            <form action="/login" method="POST" id="login-form" class="w-auto">
                @csrf
                <div class="form-group">
                    <label for="username" class="text-white mb-1"><small>Username</small></label>
                    <input name="username" id="username" class="form-control" type="text" autocomplete="off" />
                </div>

                <div class="form-group">
                    <label for="password" class="text-white mb-1"><small>Password</small></label>
                    <input name="password" id="password" class="form-control" type="password" autocomplete="off" />
                </div>

                <button type="submit" class="mt-4 btn btn-light">Login</button>
            </form>

            <p class="text-white">Haven't registered yet? Do it
                <a href="/register-form" class="text-white">here</a>
            </p>

        </div>
    </div>
</x-layout>