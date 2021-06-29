<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header class="header">
        <div class="header-brand">
            Coding School
        </div>
        <div class="header-links">
            <a href="/">Home</a>
            <a href="/home/about">About</a>
            <a href="/home/services">Services</a>
            <a href="/home/contact">Contact</a>
        </div>
    </header>
    <section>
        <div class="container w-50 mx-auto">
            @yield('content')
        </div>
    </section>
    <footer class="d-flex justify-content-center fixed-bottom align-items-center bg-secondary bg-gradient">
        <p class="text-white m-0 py-3">Copyright your exercice 2020</p>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
