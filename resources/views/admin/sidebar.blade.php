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
                        <div>Jonny <strong>Deen</strong></div>
                        <div class="user-text-online">
                            <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
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
                <a href="/admin"><i class="fa fa-home fa-fw"></i>Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-calendar fa-fw"></i>Appointment<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="flot.html">Upcoming Appointment</a>
                    </li>
                    <li>
                        <a href="morris.html">Unconfirmed Appointment</a>
                    </li>

                </ul>
                <!-- second-level-items -->
            </li>
            <li class="">
                <a href="/admin/category"><i class="fa fa-th fa-fw" style="color:#FFFF00"></i>Categories</a>
            </li>
            <li class="">
                <a href="/admin/polyclinics"><i class="fa fa-stethoscope fa-fw"></i>Polyclinics</a>
            </li>
            <li class="">
                <a href="/admin/comments"><i class="fa fa-comment fa-fw"></i>Comments</a>
            </li>
            <li class="">
                <a href="/admin/faq"><i class="fa fa-question-circle fa-fw"></i>FAQ</a>
            </li>
            <li class="">
                <a href="/admin/messages"><i class="fa fa-envelope fa-fw"></i>Messages</a>
            </li>
            <li class="">
                <a href="/admin/user"><i class="fa fa-users fa-fw"></i>Users</a>
            </li>
            <li class="">
                <a href="/admin/social"><i class="fa fa-dashboard fa-fw"></i>Social </a>
            </li>
            <li class="">
                <ion-icon name="settings-outline"></ion-icon>
                <a href="/admin/settings"><i class="fa fa-gears fa-fw"></i>Settings</a>
            </li>
        </ul>
        <!-- end side-menu -->
    </div>
    <!-- end sidebar-collapse -->
</nav>
<!-- end navbar side -->
