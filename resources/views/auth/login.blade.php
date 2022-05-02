<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
<link href="{{ asset('/css/bootstrap.min.css') }} " rel="stylesheet">
<div class="content-wrapper">
        <div class="content">
            <div class="signup-wrapper shadow-box">
                <div class="company-details ">
                    <div class="shadow"></div>
                        <div class="wrapper-1">
                            <a href="/">
                                <div class="logo">
                                    <div class="icon-food">
                                    </div>
                                </div>
                            </a>
                            <h1 class="title">Delicious</h1>
                            <div class="slogan">We deliver cakes to you.</div>
                        </div>
                    </div>
                    <div class="signup-form ">
                        <div class="wrapper-2">
                            <div class="form-title">Login to cakes world</div>
                                <x-guest-layout>
                                        <!-- Session Status -->
                                        <x-auth-session-status class="mb-4" :status="session('status')" />

                                        <!-- Validation Errors -->
                                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                        <div class="form">
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf

                                                <!-- Email Address -->
                                                <p class="content-item">
                                                                <label for="email" :value="__('Email')">Email address
                                                                    <input id="email" class="block w-full" type="text" name="email" :value="old('email')" required autofocus/>
                                                                </label>
                                                </p>

                                                <!-- Password -->
                                                <p class="content-item">
                                                    <label  for="password" :value="__('Password')">Password
                                                        <input id="password" class="block w-full" type="password" name="password" required autocomplete="current-password" />
                                                    </label>
                                                </p>

                                                <!-- Remember Me -->
                                                <div class="block mt-4">
                                                    <label for="remember_me" class="inline-flex items-center">
                                                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                                    </label>
                                                </div>

                                                <div class="flex items-center justify-end mt-4">
                                                    @if (Route::has('password.request'))
                                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                            {{ __('Forgot your password?') }}
                                                        </a>
                                                    @endif

                                                    <x-button class="signup">
                                                        {{ __('Log in') }} 
                                                    </x-button>
                                                    <a href="{{route('register')}}" class="login">Register</a>
                                                </div>
                                            </form>
                                        </div>
                                </x-guest-layout>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
