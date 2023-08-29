<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>@yield('title', env('APP_NAME'))</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('asset/images/favo-icons/logo-no-words.png') }}">
    <!-- Fontfaces CSS-->
    <link href="{{ asset('asset/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('asset/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('asset/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('asset/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet"
        media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('asset/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('asset/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('asset/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet"
        media="all">
    <link href="{{ asset('asset/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('asset/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('asset/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('asset/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('asset/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('asset/css/theme.css') }}" rel="stylesheet" media="all">

    <!-- SWEETALERT2 CSS-->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css" rel="stylesheet">

    @yield('css')
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo px-4" href="index.html">
                            <img style="height: 50px"
                                src="{{ asset('asset/images/favo-icons/logo-no-background.svg') }}" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled p-4">
                        <x-admin-sidebar></x-admin-sidebar>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="px-2">
                <a href="#" class="p-2">
                    <img width="60%" class="d-block mx-auto"
                        src="{{ asset('asset/images/favo-icons/logo-no-background.svg') }}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <x-admin-sidebar></x-admin-sidebar>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop" style="max-height: 75px">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="header-button ml-auto mt-0">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="{{ asset('asset/images/icon/avatar-06.jpg') }}"
                                                        alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="{{ asset('asset/images/icon/avatar-04.jpg') }}"
                                                        alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="{{ 'https://ui-avatars.com/api/?name=' . str_replace(' ', '+', Auth::guard('admin')->user()->name) . '&background=random&' }}"
                                                alt="{{ Auth::guard('admin')->user()->name }}" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn"
                                                href="#">{{ Auth::guard('admin')->user()->name }}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="{{ 'https://ui-avatars.com/api/?name=' . str_replace(' ', '+', Auth::guard('admin')->user()->name) . '&background=random&' }}"
                                                            alt="{{ Auth::guard('admin')->user()->name }}" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">{{ Auth::guard('admin')->user()->name }}</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                            </div>
                                            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                @csrf
                                            </form>
                                            <div class="account-dropdown__footer">
                                                <a href=""
                                                    onclick="event.preventDefault();
                                                document.querySelector('#logout-form').submit();">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('asset/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('asset/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('asset/vendor/slick/slick.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/counter-up/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('asset/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/select2/select2.min.js') }}"></script>


    <!-- Main JS-->
    <script src="{{ asset('asset/js/main.js') }}"></script>

    @yield('js')
</body>

</html>
<!-- end document-->
