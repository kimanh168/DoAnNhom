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
                            <div class="form-title">Sign up today!</div>
                                <x-guest-layout>
                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                <div class="form">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <!-- Name -->
                                    <p class="content-item">
                                                    <label for="name" :value="__('Name')">Name
                                                        <input id="name" class="block w-full" type="text" name="name" :value="old('name')" required autofocus />
                                                    </label>
                                    </p>
                                    <!-- Email Address -->
                                    <p class="content-item">
                                                    <label for="email" :value="__('Email')">Email address
                                                        <input id="email" class="block w-full" type="text" name="email" :value="old('email')" required />
                                                    </label>
                                    </p>
                                    <!-- Password -->
                                    <p class="content-item">
                                        <label  for="password" :value="__('Password')">Password
                                            <input id="password" class="block w-full" type="password" name="password" required autocomplete="new-password" />
                                        </label>
                                    </p>

                                    <!-- Confirm Password -->
                                    <p class="content-item">
                                        <label  for="password_confirmation" :value="__('Confirm Password')">Confirm Password
                                            <x-input id="password_confirmation" class="block w-full" type="password" name="password_confirmation" required />
                                        </label>
                                    </p>
                                    <div class="flex items-center justify-end mt-2 ">
                                        <a  href="{{ route('login') }}">
                                            {{ __('Already registered?') }}
                                        </a>
                                    
                                    </div>
                                    <div class="flex items-center justify-end ">
                                        <x-button type="submit"  class="signup"> {{ __('Register') }} </x-button>
                                        <a href="/login" class="login">Login</a>
                                    </div>  
                                </form>
                            </x-guest-layout>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

