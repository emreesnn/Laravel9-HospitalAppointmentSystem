<!-- Start search box -->
<div id="mu-search">
    <div class="mu-search-area">
        <button class="mu-search-close"><span class="fa fa-close"></span></button>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="mu-search-form">
                        <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End search box -->
<!-- Start menu -->
<section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            @php
                $mainCategories = \App\Http\Controllers\HomeController::maincategorylist();
            @endphp
            <div class="navbar-header">
                <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- LOGO -->
                <!-- TEXT BASED LOGO -->
                <a class="navbar-brand" href={{route('home')}}><i class="fa fa-hospital-o"></i><span>Hastane</span></a>
                <!-- IMG BASED LOGO  -->
                <!-- <a class="navbar-brand" href="index.html"><img src="{{asset('assets')}}/img/logo.png" alt="logo"></a> -->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                    <li class="active"><a href={{route('home')}}>Ana Sayfa</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hastanemiz <span class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            @foreach($mainCategories as $rs)
                            <li><a href={{route('bolumler')}}>{{$rs->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{route('appointment')}}">E-Randevu</a></li>
                    <li><a href="{{route('contact')}}">İletişim</a></li>
                    <li><a href="{{route('about')}}">Hakkımızda</a></li>
                    <li><a href="{{route('references')}}">Referanslar</a></li>
                    <!--button class="dropdown mu-read-more-btn" style="background-color: #204d74"-->
                    <li class="dropdown">
                        @auth
                            <a href="/login" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-user"></span><span> {{Auth::user()->name}}</span> </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{route('userpanel.index')}}">Profil</a></li>
                                <li><a href="{{route('userpanel.appointments')}}">Randevularım</a></li>
                                <li><a href="{{route('userpanel.reviews')}}">Yorumlarım</a></li>
                                <li><a href="/logoutuser">Oturumu Kapat</a></li>
                            </ul>
                        @endauth
                        @guest
                            <a href="/login" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-user"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/loginuser">Giriş Yap</a> </li>
                                <li><a href="/registeruser">Kaydol</a> </li>
                            </ul>
                        @endguest
                    </li>

                    <!--/button-->
                    <li><a href="#" id="mu-search-icon"><i class="fa fa-search"></i></a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
</section>
<!-- End menu -->
