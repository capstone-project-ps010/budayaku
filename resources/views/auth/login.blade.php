<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('build/assets/logo/logo12.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('build/assets/style.css') }}" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script
      src="https://kit.fontawesome.com/f5ed80d948.js"
      crossorigin="anonymous"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <title>BudayaKu</title>
  </head>
  <body class="body-login">
    <div class="container-login">
      <h1>Log In to BudayaKu</h1>
      <div class="login-item">
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"
              >Email address</label
            >
            <input
              type="email"
              name="email"
              class="form-control"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
              autofocus
              required />
              <x-input-error :messages="$errors->get('email')" class="mt-2" />
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"
              >Password</label
            >
            <input
              type="password"
              name="password"
              class="form-control"
              id="exampleInputPassword1"
              required />
              <x-input-error :messages="$errors->get('password')" class="mt-2" />
          </div>
          <div class="mb-3">
            <button type="submit" class="login-register__submit">Log In</button>
          </div>
          <p>
            Belum punya Akun?
            <a class="login-register__now" href="{{ route('register') }}"
              >Daftar Sekarang</a
            >
          </p>
        </form>
        <div class="login-line"></div>
        <div class="login-auth">
          <button class="login-google">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="25"
              viewBox="0 0 24 25"
              fill="none">
              <path
                d="M23.8281 12.3926C23.8281 19.3018 19.0967 24.2188 12.1094 24.2188C5.41016 24.2188 0 18.8086 0 12.1094C0 5.41016 5.41016 0 12.1094 0C15.3711 0 18.1152 1.19629 20.2295 3.16895L16.9336 6.33789C12.6221 2.17773 4.60449 5.30273 4.60449 12.1094C4.60449 16.333 7.97852 19.7559 12.1094 19.7559C16.9043 19.7559 18.7012 16.3184 18.9844 14.5361H12.1094V10.3711H23.6377C23.75 10.9912 23.8281 11.5869 23.8281 12.3926Z"
                fill="white" />
            </svg>
            Log In with Google
          </button>
        </div>
        <a href="{{ route('dashboard') }}">Dashboard</a>
      </div>
    </div>
  </body>
</html>




{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
