<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="XT1HwjFEyEoi7F2VUQKZydPI18hC7ul3U1HnMGot">

    <title>Gameshop</title>

    <!-- Scripts -->
    <script src="/js/pagecontrolls.js" defer></script>
    @yield('scriptLink')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/css/app.css" rel="stylesheet"> -->
    <link href="/css/custom.css" rel="stylesheet">
</head>
<body>
    <x-topnav></x-topnav>
    @yield('content')

    <!-- <script>
        @yield('scriptDeclarations')
        @yield('scriptEventListeners')
        @yield('scriptFunctions')
    </script> -->
</body>
