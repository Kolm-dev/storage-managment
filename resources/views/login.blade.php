@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">


@section('content')
    <div class="container-md">
        <form class="mt-5 login-form" action="{{ route('login.submit') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="login">Login</label>
                <input type="text" class="form-control" id="login" name="login">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit">Login</button>
        </form>
        <div class="container-md mt-5 d-flex justify-content-center align-items-center flex-column">
            <p class="text-center">Don't have an account?</p>
            <a href="/registration" class="btn btn-outline-danger">Registration</a>
        </div>
    </div>
@endsection
