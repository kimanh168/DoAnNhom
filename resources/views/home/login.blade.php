<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
<link href="{{ asset('/css/bootstrap.min.css') }} " rel="stylesheet">
<x-guest-layout>
<div class="content-wrapper">
        <div class="content">
            <div class="signup-wrapper shadow-box">
                <div class="company-details ">
                    <div class="shadow"></div>
                        <div class="wrapper-1">
                            <a href="{{ route('home.index') }}">
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
                                <div class="form">
                                    <form method="post" action="" role="form">
                                    @csrf
                                        <!-- Email Address -->
                                        <p class="content-item">
                                            <label for="email" >Email address
                                                <input id="email" class="block w-full" type="text" name="email" />
                                            </label>
                                            @if($errors->has('email'))
                                                <p style="color:red"> {{$errors->first('email') }} !!!</p>
                                            @endif
                                        </p>

                                        <!-- Password -->
                                       <p class="content-item">
                                            <label  for="password">Password
                                                <input id="password" class="block w-full" type="password" name="password"/>
                                            </label>
                                            @if($errors->has('password'))
                                                <p style="color:red"> {{$errors->first('password') }} !!!</p>
                                            @endif
                                        </p>

                                        <!-- Remember Me -->
                                        <div class="block mt-4">
                                            <label for="remember_me" class="inline-flex items-center">
                                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"  value="remember" value="1">
                                                <span class="ml-2 text-sm text-gray-600">Remember me</span>
                                            </label>
                                        </div>
                                        @if(session()->has('error'))
                                        <div class="alert alert-danger d-flex align-items-center mt-3" role="alert">
                                            <div>
                                                <strong>X</strong>  {{ session()->get('error') }}
                                            </div>
                                        </div>
                                        @endif
                                        <div class="flex items-center justify-end ">
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}"></a>
                                            <button type="submit" class="signup">Login</button>
                                            <a href="{{route('home.register')}}" class="login">Register</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
</x-guest-layout>
