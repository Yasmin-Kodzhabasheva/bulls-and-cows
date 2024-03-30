<x-layout>

  <div class="d-flex flex-column align-items-center justify-content-center" style="height: 100vh">
      <h2>Register</h2>
      <form action="/register" method="POST" id="registration-form" class="w-25">
          @csrf
          <div class="form-group">
              <label for="username-register" class="text-muted mb-1"><small>Username</small></label>
              <input value="{{ old('username') }}" name="username" id="username-register" class="form-control"
                  type="text" placeholder="Pick a username" autocomplete="off" />
              @error('username')
                  <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
              @enderror
          </div>

          <div class="form-group">
              <label for="email-register" class="text-muted mb-1"><small>Email</small></label>
              <input value="{{ old('email') }}" name="email" id="email-register" class="form-control"
                  type="text" placeholder="you@example.com" autocomplete="off" />
              @error('email')
                  <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
              @enderror
          </div>

          <div class="form-group">
              <label for="password-register" class="text-muted mb-1"><small>Password</small></label>
              <input name="password" id="password-register" class="form-control" type="password"
                  placeholder="Create a password" autocomplete="off" />
              @error('password')
                  <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
              @enderror
          </div>

          <div class="form-group">
              <label for="password-register-confirm" class="text-muted mb-1"><small>Confirm Password</small></label>
              <input name="password_confirmation" id="password-register-confirm" class="form-control" type="password"
                  placeholder="Confirm password" autocomplete="off" />
              @error('password_confirmation')
                  <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
              @enderror
          </div>
          <button type="submit" class="mt-4 btn btn-success">Register</button>
      </form>
      <a href="/" class="text-dark text-decoration-none btn btn-sm btn">Back</a>
  </div>
</x-layout>