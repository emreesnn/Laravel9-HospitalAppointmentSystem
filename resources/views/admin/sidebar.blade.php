<!-- navbar side -->
<nav class="navbar-default navbar-static-side" role="navigation">
    <!-- sidebar-collapse -->
    <div class="sidebar-collapse">
        <!-- side-menu -->
        <ul class="nav" id="side-menu">
            <li>
                <!-- user image section-->
                <div class="user-section">
                    <div class="user-section-inner">
                        <img src="{{asset('assets')}}/adminassets/img/user.jpg" alt="">
                    </div>
                    <div class="user-info">

                        <div>{{ Auth::user()->name}}</div>
                        <div class="user-text-online">
                            <span><a href="/logoutuser" >Oturumu Kapat</a> </span>
                        </div>

                    </div>
                </div>
                <!--end user image section-->
            </li>
            <li class="sidebar-search">
                <!-- search section-->
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                </div>
                <!--end search section-->
            </li>

            <li class="">
                <a href="{{route('admin.index')}}"><i class="fa fa-home fa-fw" style="color: #FF0000;font-size: 22px;padding-right:30px;"></i>Home</a>
            </li>
            <li class="">
                <a href="{{route('admin.appointment.index')}}"><i class="fa fa-calendar fa-fw" style="color:#FFFF00;font-size:22px;padding-right:30px;"></i>Appointment</a>
            </li>
                <!-- second-level-items -->
            </li>
            <li class="">
                <a href="/admin/category"><i class="fa fa-th fa-fw" style="color:#FFFF00;font-size:22px;padding-right:30px;"></i>Categories</a>
            </li>
            <li class="">
                <a href="/admin/policlinic"><i class="fa fa-stethoscope fa-fw" style="font-size:22px;padding-right:30px;"></i>Polyclinics</a>
            </li>
            <li class="">
                <a href="{{route('admin.comment.index')}}"><i class="fa fa-comment fa-fw" style="font-size:22px;padding-right:30px;"></i>Comments</a>
            </li>
            <li class="">
                <a href="{{route('admin.faq.index')}}"><i class="fa fa-question-circle fa-fw" style="font-size:22px;padding-right:30px;"></i>FAQ</a>
            </li>
            <li class="">
                <a href="{{route('admin.message.index')}}"><i class="fa fa-envelope fa-fw" style="font-size:22px;padding-right:30px;"></i>Messages</a>
            </li>
            <li class="">
                <a href="/admin/user"><i class="fa fa-user fa-fw" style="color:#0000FF; font-size:22px;padding-right:30px;" ></i>Users</a>
            </li>
            <li class="">
                <a href="/admin/social"><i class="fa fa-dashboard fa-fw" style="font-size:22px;padding-right:30px;"></i>Social </a>
            </li>
            <li class="">
                <ion-icon name="settings-outline"></ion-icon>
                <a href="/admin/setting"><i class="fa fa-gears fa-fw" style="font-size:22px;padding-right:30px;"></i>Settings</a>
            </li>
        </ul>
        <!-- end side-menu -->
    </div>
    <!-- end sidebar-collapse -->
</nav>
<!-- end navbar side -->
