<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="author" content="Array99">
<title>@yield('title')</title>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="login-layout-body">
<div class="container-fluid login-layout">
    <header class="row">
        @include('login.layout.header')
    </header>
    <div id="main" class="row">
            @yield('content')
    </div>
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>