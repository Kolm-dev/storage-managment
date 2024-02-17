@extends('layouts.app')
<title>{{ $title }}</title>


@section('content')
    <div class="container-md">
        <h1 class="text-center">All users @php
            echo $users->count() + 1;
        @endphp</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Role</th>
                    <th>Name</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->role }}</td>
                        <td>{{ $user->login }}</td>
                        <td>{{ $user->created_at->format('d-m-Y') }}</td>
                        <td>{{ $user->updated_at->format('d-m-Y') }}</td>

                    </tr>
                @endforeach
            </tbody>
    </div>
@endsection
