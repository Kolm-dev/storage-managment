@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column justify-start align-items-center">
        <h1>Welcome, {{ $user->login }}!</h1>
        <p>Thank you for using our storage management system.</p>
        <p>Now you redirected to the main page.</p>
        <p>Click <a href="/users">here</a> for redirect now</p>
    </div>
@endsection



<script src="{{ asset('js/login.js') }}"></script>
