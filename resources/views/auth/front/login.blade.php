@extends('layout.front-layout')
@section('title', 'Login')
@section('content')
    <div class="login-form-main position-relative">
        <div class="container container-c">
            <div class="row">
                <div class="col-10 mx-auto">
                    <div class="login-form p-login-page mb-24">
                        <div class="form-head d-flex flex-column justify-content-center align-items-center">
                            <h1 class="form-top-heading">Login</h1>
                            <p class="form-bottom-heading">Enter your email and password to sign in</p>
                            <button class="payment-button my-3"><img src="{{ asset('assets/user/images/fb.png') }}"
                                    class="img-fluid me-3"><span>Login with Facebook</span> </button>
                            <button class="payment-button my-3"><img src="{{ asset('assets/user/images/google.png') }}"
                                    class="img-fluid me-3"><span>Login with Facebook</span> </button>
                        </div>
                        <form action="{{ route('user.login') }}" method="POST" class="form">
                            @csrf
                            <label for="#" class="label-field my-3 ">Enter email *</label>
                            <input type="email" name="email" placeholder="Enter your Name" required
                                class="input-field my-3 py-3 px-4">
                            @error('email')
                                {{ $message }}
                            @enderror
                            <label for="#" class="label-field my-3 ">Enter password *</label>
                            <input type="password" name="password" placeholder="Enter your password" required
                                class="input-field my-3 py-3 px-4">
                            @error('password')
                                {{ $message }}
                            @enderror
                            <div class="links-wrapper d-flex justify-content-between">
                                <div class="remember my-3 d-flex align-items-center">
                                    <input type="checkbox">
                                    <span>Remember me</span>
                                </div>
                                <div class="forgot my-3">
                                    <a href="{{ route('user.forgot-password') }}" class="forget-btn">Forget Password</a>
                                </div>
                            </div>
                            <button type="submit" class="register-btn my-3">Login</button>
                            <a href="{{ route('user.register') }}" class="form-bottom-heading"
                                style="text-decoration: none;">Don't have an account? <span class="target-page"
                                    style="color: #F54D81;"> Sign up </span></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
