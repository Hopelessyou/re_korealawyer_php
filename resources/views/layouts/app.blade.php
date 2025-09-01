<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', '변호사닷컴')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    @if(request()->routeIs('wiki.*'))
        <link rel="stylesheet" href="{{ asset('css/wiki.css') }}?v={{ time() }}">
    @endif
    @yield('styles')
</head>
<body>
    @include('components.header')

    <main class="main">
        @yield('content')
    </main>

    @include('components.footer')
</body>
</html>
