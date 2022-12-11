@extends('maintemplate')
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissable fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissable fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="login-form">
        <form action="{{ route('authenticated') }}" method="post">
            @csrf
            <div class="container">
                <h1>SIGN IN</h1>
                <input type="email" placeholder="Enter your email" name="email" required>
                <div class="password">
                    <input type="password" placeholder="Enter your password" name="password" id="pw" required>
                    <button type="button">
                        <i class="fa-regular fa-eye"></i>
                    </button>
                </div>

                <div class="forgot-password">
                    <label>
                        <input type="checkbox" name="remember" checked> Remember me
                    </label>
                    <a href="">Forgot Password ?</a>
                </div>
                <button type="submit">SIGN IN</button>
                <button type="button">
                    <img src="{{ asset('img/google-logo.webp') }}" alt="" width="22px" height="22px">
                    <span>Sign in With Google</span>
                </button>
            </div>
        </form>
        <p>Don't have an account ?&nbsp; <a href="{{ route('sign-up') }}">Sign Up</a></p>
    </div>
@endsection
