<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="author" content="Array99">
<title>@yield('title')</title>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="admin-layout-body">
<div class="container-fluid admin-layout">
    <div class="row">
    	@include('admin.layout.sidebar')
    	<div id="main" class="w-100">
    	    <div class="content">
    	    	@yield('content')
    	    </div>
    	</div>
    </div>
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>