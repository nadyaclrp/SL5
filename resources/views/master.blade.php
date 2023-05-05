<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- import vite tailwind --}}
    @vite('resources/css/app.css')

    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="/assets/logo.jpeg">

    <title>@yield('tittle')</title>

    {{-- style --}}
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
    <h3 class="text-center font-bold text-navy text-3xl">@yield('titlePage')</h3>
    @yield('body')
</body>
</html>
