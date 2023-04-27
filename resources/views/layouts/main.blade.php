<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- Connect to css framework: tailwind --}}
	@vite('resources/css/app.css')

    {{-- Meta description.... --}}
    <meta name="description" content="@yield('description')">

    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="box-border antialiased text-gray-900 leading-normal tracking-wider bg-cover bg-orange-50">
    @yield('container')
</body>
</html>
