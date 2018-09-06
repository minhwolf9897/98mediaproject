<header>
    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav sn-bg-4 fixed">
        <ul class="custom-scrollbar">
            <!-- Logo -->
            <li>
                <div class="logo-wrapper waves-light">
                    <a href="#"><img src="{{asset('img/logo 1.png')}}" class="img-fluid flex-center "></a>
                </div>
            </li>
            <!--/. Logo -->
            <!--Social-->
            <li>
                <ul class="social">
                    <li><a href="#" class="icons-sm fb-ic"><i class="fab fa-facebook-square"></i></a></li>
                </ul>
            </li>
            <!--/Social-->
            <!--Search Form-->
            <li>
                <form class="search-form" role="search">
                    <div class="form-group md-form mt-0 pt-1 waves-light">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </form>
            </li>
            <!--/.Search Form-->
            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-chevron-right"></i> Quản lý
                            <i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="{{route('admin.category.index')}}" class="waves-effect">Danh mục sản phẩm
                                    </a>
                                </li>
                                <li><a href="{{route('admin.product.index')}}" class="waves-effect">Sản phẩm</a>
                                </li>
                                <li><a href="#" class="waves-effect">Item</a>
                                </li>
                            </ul>
                        </div>
                    </li>


                </ul>
            </li>
            <!--/. Side navigation links -->
        </ul>
        <div class="sidenav-bg mask-strong"></div>
    </div>
    <!--/. Sidebar navigation -->
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav ">
        <!-- SideNav slide-out button -->
        <div class="float-left">
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
        </div>
        <!-- Breadcrumb-->
        <div class="breadcrumb-dn mr-auto">
            <p>98 Media Viet Nam Admin</p>
        </div>
        <ul class="nav navbar-nav nav-flex-icons ml-auto">
            @guest
            <li class="nav-item">
                <a class="nav-link waves-effect" href="{{ route('login') }}">
                    <i class="fas fa-sign-in-alt mr-1"></i>Đăng nhập
                </a>
            </li>
            @else
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user"></i> {{Auth::user()->username}}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="post" style="display:none;">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>
    </nav>
    <!-- /.Navbar -->
</header>