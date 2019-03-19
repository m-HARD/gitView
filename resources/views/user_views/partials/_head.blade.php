<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('images/avatar/cat.png') }}">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/bootstrap.min.css')}}" />
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/font-awesome.min.css')}}" />
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/animate.css')}}" />
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/main.css')}}" />
        @yield('stylesheet')
    
</head>