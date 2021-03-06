<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="description" content="main-page">
    <meta name="keywords" content="main">
    <!-- Custom fonts for this template-->
    <link href="{{asset('admin-panel/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{asset('admin-panel/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <title>@yield('admin')</title>

</head>
<body>
<body class="bg-gradient-primary">

@yield('contents')

<!-- Bootstrap core JavaScript-->
<script src="{{asset('admin-panel/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admin-panel/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('admin-panel/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('admin-panel/js/sb-admin-2.min.js')}}"></script>

</body>

</body>
</html>
