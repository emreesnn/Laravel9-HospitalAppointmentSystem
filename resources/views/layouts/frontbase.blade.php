<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield("title")</title>
    <meta name="description" content="@yield("description")">
    <meta name="keywords" content="@yield("keywords")">
    <meta name="author" content="Emre ESEN">
    <link rel="icon" type="image/x-icon" href="@yield("icon")">


    <!-- Font awesome -->
    <link href="{{asset('assets')}}/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('assets')}}/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/slick.css">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Theme color -->
    <link id="switcher" href="{{asset('assets')}}/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet">


    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield("head")
</head>
<body>

<!--START SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#">
    <i class="fa fa-angle-up"></i>
</a>
<!-- END SCROLL TOP BUTTON -->

@include("home.header")


@section('sidebar')
    @include("home.sidebar")
@show

@section('slider')
@show

@yield('content')

@include("home.footer")
@yield('foot')

</body>
</html>
