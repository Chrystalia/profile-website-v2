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
</head>
<body>
    @yield('container')
</body>
</html>
