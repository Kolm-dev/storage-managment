<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page - Storage Management Project</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

</head>

<body>
    <div class="container hero-section border-info">
        <h1>Welcome to the Storage Management Project</h1>
        <p class="text card p-5">

            Introducing a streamlined web application crafted to empower businesses and individuals with the ultimate
            solution for managing their storage spaces with utmost efficiency. This application is your go-to resource
            for enhancing warehouse organization, meticulous inventory tracking, and seamlessly organizing your personal
            storage spaces. With a suite of intuitive tools and valuable insights, our application ensures that your
            storage management is as effortless as it is effective. Welcome to the future of storage optimization –
            where convenience meets functionality.

        </p>

        @guest
            <div class="text-center">
                <a href="/login" class="btn btn-primary">Login</a>
                <a href="/registration" class="btn btn-success">Register</a>
            </div>
        @endguest
        @auth
            <div class="text-center">
                <a href="/office" class="btn btn-primary">My Storages</a>
                <a href="/logout" class="btn btn-danger">Logout</a>
            </div>
        @endauth

    </div>
</body>

</html>
