<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login</title>
</head>
<link href="{{ asset('user/css/login.css') }}" rel="stylesheet">
<body>
    @yield('content')
</body>
</html>