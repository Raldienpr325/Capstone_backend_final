@extends('maintemplate')
@section('content')
    <div class="login-form">
        <form action="{{ route('register-user') }}" method="post">
            @csrf
            <div class="container">
                <h1>SIGN UP</h1>
                <input type="text" placeholder="Enter your name" name="name" required
                    class="@error('name') is-invalid @enderror">
                <input type="email" placeholder="Enter your email" name="email" required>
                <p>Must be at least 8 characters</p>
                <div class="password">
                    <input type="password" placeholder="Enter your password" name="password" id="pw" required>
                    <button type="button">
                        <i class="fa-regular fa-eye"></i>
                    </button>
                </div>
                <button type="submit">SIGN UP</button>
                <button type="button">
                    <img src="{{ asset('img/google-logo.webp') }}" alt="" width="22px" height="22px">
                    <span>Sign up With Google</span>
                </button>
            </div>
        </form>
        <p>Already have an account ?&nbsp; <a href="{{ route('login-user') }}">Sign in</a></p>
    </div>
@endsection
