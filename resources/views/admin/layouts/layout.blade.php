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
    <link rel="stylesheet" href="{{ asset('admin/css/main.css?v=') . config('variables.cssVersionAdmin') }}">

    <title>@section('title')| AdminPanel @show</title>
</head>
<body>
    <div class="wrapper-page">
        @include('admin.layouts.includes.header')
        @include('admin.layouts.includes.errors')
        @yield('content')
    </div>
    <script src="{{ asset('js/libs/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('admin/js/main.js?=') . config('variables.jsVersionAdmin') }}"></script>
</body>
</html>
