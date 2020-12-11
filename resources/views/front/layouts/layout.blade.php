<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/solid.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css?v=') . config('variables.cssVersion') }}">
    <link href="{{ asset('packages/lightpick/css/lightpick.css') }}" rel="stylesheet">

    <title>@section('title')| TestTask @show</title>
</head>
<body>
    <div class="wrapper-page">
        @include('front.layouts.includes.header')
        @include('front.layouts.includes.errors')
        @yield('content')
        @include('front.layouts.includes.footer')
    </div>
    <script src="{{ asset('js/libs/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js/main.js?v=') . config('variables.jsVersion') }}"></script>
    @stack('datePicker')
</body>
</html>
