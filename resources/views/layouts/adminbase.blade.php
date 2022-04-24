<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    <!-- Core CSS - Include with every page -->
    <link href="{{asset('assets')}}/adminassets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/adminassets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/adminassets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/adminassets/css/style.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/adminassets/css/main-style.css" rel="stylesheet" />
    @yield("head")
</head>
<body>

@include("admin.header")

@section('sidebar')
    @include("admin.sidebar")
@show

@yield('content')

@include("admin.footer")
@yield('foot')

</body>
</html>
