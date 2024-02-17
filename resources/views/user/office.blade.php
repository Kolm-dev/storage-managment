@extends('layouts.app')

@section('title', 'User Office')

@section('content')
    <h1>Добро пожаловать, {{ auth()->user()->name }}</h1>
    <p>Это пользовательский дашборд.</p>
    <!-- Контент для пользователя -->
@endsection
