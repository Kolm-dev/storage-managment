@extends('layouts.app')

@section('title', 'Admin Office')

@section('content')
    <h1>Добро пожаловать, {{ auth()->user()->name }}</h1>
    <p>Это административный дашборд.</p>
    <!-- Контент для админа -->
    {{-- <p><a href="{{ route('admin.users') }}">Управление пользователями</a></p> --}}
@endsection
