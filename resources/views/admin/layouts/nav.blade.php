	<!-- fixed-top-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-light navbar-border">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a>
                </li>
                <li class="nav-item"> <a class="navbar-brand" href="{{ url('dashboard') }}"> <img class="brand-logo img-fluid" alt="stack admin logo" src="{{ url('storage/images/logo.png') }}"> </a> </li>
                <li class="nav-item d-md-none"> <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a> </li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                </ul>
                <ul class="nav navbar-nav float-right">
                	<li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i> <span class="badge badge-pill badge-default badge-danger badge-default badge-up">5</span> </a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <!--li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0"> <span class="grey darken-2">Notifications</span> <span class="notification-tag badge badge-default badge-danger float-right m-0">5 New</span> </h6>
                            </li-->
                            <li class="scrollable-container media-list ps-container ps-theme-dark ps-active-y" data-ps-id="75e644f2-605d-3ecc-f100-72d86e4a64d8">
                                <a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left align-self-center"><i class="fa fa-bell"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading">You have new notification!</h6>
                                            <small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">OCT 22, 2020</time>
                                            </small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-menu-footer">
                                <a class="dropdown-item text-center" href="notifications.php">View all</a>
                            </li>
                        </ul>
					</li>
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <span class="avatar avatar-online">  </span>
                            <span class="user-name"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{ url('profile') }} "><i class="fa fa-user-circle"></i>My Profile</a>
                            <a href="{{ url('logout') }}" class="dropdown-item" ><i class="fa fa-sign-out-alt"></i>LogOut</a>
                        </div>
                    </li>
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

	<!--menu start here-->
<div class="main-menu menu-fixed menu-light menu-accordion" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            @php
               $pg = Request::segment(1);

            @endphp
            <li class="nav-item <?php if ($pg == "") {echo "active";} else {echo "";} ?>"><a href="{{ url('/') }}"><i class="fa fa-chart-area"></i><span class="menu-title" data-i18n="">Orders </span></a></li>
            <li class="nav-item <?php if ($pg == "payment") {echo "active";} else {echo "";} ?>"><a href="{{ url('payment') }}"><i class="fa fa-chart-area"></i><span class="menu-title" data-i18n="">Payments </span></a></li>

        </ul>
    </div>
</div>

	<!--menu end here-->
