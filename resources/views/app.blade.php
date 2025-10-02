<!DOCTYPE html>
<html lang="zxx" dir="ltr" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Dashcode - HTML Template</title>
    <link rel="icon" type="image/png" href="{{ asset('template_assets/images/logo/favicon.svg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" href="{{ asset('template_assets/css/rt-plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('template_assets/css/app.css') }}">
    <!-- End : Theme CSS -->

    <!-- Start : theme-store js -->
    <script src="{{ asset('template_assets/js/store.js') }}" sync></script>
    <!-- End : theme-store js -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class=" font-inter dashcode-app" id="body_class">
    <!-- [if IE]> <p class="browserupgrade"> You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security. </p> <![endif] -->

    <div id="app"></div>

    <script src="{{ asset('template_assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('template_assets/js/rt-plugins.js') }}"></script>
    <script src="{{ asset('template_assets/js/app.js') }}"></script>

</body>

</html>
