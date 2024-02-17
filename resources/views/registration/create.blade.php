@extends('layouts.app', ['title' => 'Registration'])
<link rel="stylesheet" href="{{ asset('css/registration.css') }}">

@section('content')
    <div class="container">
        <h1 class="text-center col-12 text-uppercase">Registration</h1>
        <form class="registration-form" action="{{ route('registration.submit') }}" method="post">

            @csrf
            <div class="form-group">
                <label for="login">Login</label>
                <input onkeyup="validationForm()" type="text" class="form-control" id="login" name="login">
                <span id="login-error"></span>
            </div>
            <div class="form-group">
                <label for="password">Password <div id="show-password" type="button"></div></label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="repeat-password">Repeat your password</label>
                <input type="password" class="form-control" id="repeat-password" name="repeat-password"
                    onkeyup="validationForm()">
                <span id="password-match-status"></span>
            </div>

            <button type="submit" class="btn btn-primary" id="registration-button" disabled>Create account</button>

        </form>

        <div class="text-center">
            <a href="/login" class="btn btn-primary">Login</a>
        </div>
    </div>

    <script src="{{ asset('js/create.js') }}"></script>
@endsection
