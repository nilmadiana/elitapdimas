<!DOCTYPE html>
<html lang="en">

<head>
    <title>Penelitian Dosen Staima</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords"
        content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />

    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

    <!-- waves.css -->
    <link rel="stylesheet" href="{{ asset('assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all">

    <!-- Required Framework -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap/css/bootstrap.min.css') }}">

    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/themify-icons/themify-icons.css') }}">

    <!-- font-awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome-n.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">

    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.mCustomScrollbar.css') }}">

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
                       <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close"><i
                                                class="ti-close input-group-text"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn"><i
                                                class="ti-search input-group-text"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="index.html" class="logo-with-text">
                            <img class="img-fluid spinning-logo" src="assets/images/logo1.jpeg" alt="Theme-Logo" />
                            <span class="logo-text">E-Litapdimas</span>
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()"
                                    class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <i class="ti-bell"></i>
                                    <span class="badge bg-c-red"></span>
                                </a>
                                <ul class="show-notification">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius"
                                                src="assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                    elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius"
                                                src="assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                    elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius"
                                                src="assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                    elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="user-profile header-notification">
                                @auth
                                    <a href="#" class="waves-effect waves-light">
                                        <img src="{{ asset('assets/images/avatar-4.jpg') }}" class="img-radius"
                                            alt="User-Profile-Image">
                                        <span>{{ auth()->user()->username }}</span>
                                        <i class="ti-angle-down"></i>
                                    </a>
                                    <ul class="show-notification profile-notification">
                                        {{-- <li class="waves-effect waves-light">
                                            <a href="#!">
                                                <i class="ti-settings"></i> Settings
                                            </a>
                                        </li>
                                        <li class="waves-effect waves-light">
                                            <a href="user-profile.html">
                                                <i class="ti-user"></i> Profile
                                            </a>
                                        </li>
                                        <li class="waves-effect waves-light">
                                            <a href="email-inbox.html">
                                                <i class="ti-email"></i> My Messages
                                            </a>
                                        </li>
                                        <li class="waves-effect waves-light">
                                            <a href="auth-lock-screen.html">
                                                <i class="ti-lock"></i> Lock Screen
                                            </a>
                                        </li> --}}
                                        <li class="waves-effect waves-light">
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <i class="ti-layout-sidebar-left"></i> Logout
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                @else
                                    <a href="{{ route('login') }}" class="waves-effect waves-light">
                                        <img src="{{ asset('assets/images/avatar-4.jpg') }}" class="img-radius"
                                            alt="User-Profile-Image">
                                        <span>Login</span>
                                    </a>
                                @endauth
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-80 img-radius" src="assets/images/avatar-4.jpg"
                                        alt="User-Profile-Image">
                                    <div class="user-details">
                                        @auth
                                            <span id="more-details">{{ auth()->user()->username }}
                                                <br>
                                                {{ implode(', ', auth()->user()->role) }}<i
                                                    class="fa fa-caret-down"></i></span>

                                        @endauth
                                    </div>
                                </div>
                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            {{-- <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                            <a href="#!"><i class="ti-settings"></i>Settings</a> --}}
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <i class="ti-layout-sidebar-left"></i> Logout
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pcoded-navigation-label">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="{{ route('index') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>

                            <!-- Label: Penelitian -->
                            {{-- <div class="pcoded-navigation-label">Penelitian</div> --}}

                            {{-- <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-id-badge"></i><b>P</b></span>
                                        <span class="pcoded-mtext">Manajemen Penelitian</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li>
                                            <a href="{{ route('proposal.index') }}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-home"></i></span>
                                                <span class="pcoded-mtext">Beranda Penelitian</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('proposal.index') }}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-plus"></i></span>
                                                <span class="pcoded-mtext">Ajukan Proposal</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="daftar-proposal.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-list"></i></span>
                                                <span class="pcoded-mtext">Daftar Proposal</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="monitoring-penelitian.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-eye"></i></span>
                                                <span class="pcoded-mtext">Monitoring Penelitian</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="laporan-penelitian.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-agenda"></i></span>
                                                <span class="pcoded-mtext">Laporan Penelitian</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="arsip-penelitian.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-archive"></i></span>
                                                <span class="pcoded-mtext">Arsip Penelitian</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul> --}}

                            <!-- Label: Pengajuan Proposal -->
                            <div class="pcoded-navigation-label">Pengajuan Proposal</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="{{ route('proposal.index') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-file"></i></span>
                                        <span class="pcoded-mtext">Ajukan Proposal Baru</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('proposal.index') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-view-list"></i></span>
                                        <span class="pcoded-mtext">Daftar Proposal</span>
                                    </a>
                                </li>
                            </ul>

                            <!-- Label: Tema -->
                            <div class="pcoded-navigation-label">Tema</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="{{ route('tema.index') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-bar-chart"></i></span>
                                        <span class="pcoded-mtext">Daftar Tema</span>
                                    </a>
                                </li>
                            </ul>

                            <!-- Label: Pembiayaan -->
                            <div class="pcoded-navigation-label">Sumber Pembiayaan</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="{{ route('sumber.index') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-bar-chart"></i></span>
                                        <span class="pcoded-mtext">Daftar Sumber Pembiayaan Penelitian</span>
                                    </a>
                                </li>
                            </ul>

                            <!-- Label: Jenis Penelitian -->
                            <div class="pcoded-navigation-label">Jenis Penelitian</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="{{ route('jenis.index') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-bar-chart"></i></span>
                                        <span class="pcoded-mtext">Daftar Jenis Penelitian</span>
                                    </a>
                                </li>
                            </ul>

                            <!-- Label: Monitoring -->
                            {{-- <div class="pcoded-navigation-label">Monitoring</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="progress-penelitian.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-bar-chart"></i></span>
                                        <span class="pcoded-mtext">Progress Penelitian</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="feedback.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-comments"></i></span>
                                        <span class="pcoded-mtext">Feedback Reviewer</span>
                                    </a>
                                </li>
                            </ul> --}}

                            <!-- Label: Laporan -->
                            {{-- <div class="pcoded-navigation-label">Laporan</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="laporan-akhir.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-clipboard"></i></span>
                                        <span class="pcoded-mtext">Laporan Akhir</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="arsip-laporan.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-archive"></i></span>
                                        <span class="pcoded-mtext">Arsip Laporan</span>
                                    </a>
                                </li>
                            </ul> --}}

                            <!-- Label: User -->
                            @auth
                                @php
                                    $roles = auth()->user()->role;
                                @endphp

                               @if (in_array('Admin', $roles) || in_array('Jurnal Manager', $roles))
                                    <div class="pcoded-navigation-label">User</div>
                                    <ul class="pcoded-item pcoded-left-item">
                                        <li>
                                            <a href="{{ route('user.index') }}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-clipboard"></i></span>
                                                <span class="pcoded-mtext">Daftar User</span>
                                            </a>
                                        </li>
                                    </ul>
                                @endif
                            @endauth

                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Dashboard</h5>
                                            <p class="m-b-0">Welcome to E-Litapdimas</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Dashboard</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->

                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                @php
                                                    $user = auth()->user();
                                                    $allowedRoles = ['Admin', 'Jurnal Manager'];

                                                    // default kosong kalau belum login
                                                    $userRoles = [];

                                                    if ($user) {
                                                        $userRoles = is_array($user->role)
                                                            ? $user->role
                                                            : json_decode($user->role, true);
                                                    }

                                                    $isAllowed = !empty(array_intersect($userRoles, $allowedRoles));
                                                @endphp

                                                @if ($isAllowed)
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5>Tambahkan Jenis Penelitian</h5>
                                                        </div>
                                                        <div class="card-block">
                                                            <form action="{{ route('jenis.store') }}" method="POST">
                                                                @csrf
                                                                <div class="form-group row">
                                                                    <label
                                                                        class="col-sm-2 col-form-label">Jenis</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control"
                                                                            name="nama_jenis_penelitian"
                                                                            placeholder="Masukkan Jenis Penelitian">
                                                                    </div>
                                                                </div>
                                                                <!-- Tombol Simpan dan Kembali -->
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label"></label>
                                                                    <div class="col-sm-10">
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Simpan</button>
                                                                        <a href="#"
                                                                            class="btn btn-secondary">Kembali</a>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="font-weight-bold">Tabel Jenis Penelitian</h5>
                                                    </div>
                                                    <div class="card-block table-border-style">
                                                        <div class="table-responsive">
                                                            <table class="table table-striped table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th style="width: 50px; text-align: center;">No
                                                                        </th>
                                                                        <th>Jenis</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($jenis as $index => $jenis)
                                                                        <tr>
                                                                            <td class="text-center">
                                                                                {{ $index + 1 }}
                                                                            </td>
                                                                            <td>{{ $jenis->nama_jenis_penelitian }}
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page body end -->
                                </div>
                                <div id="styleSelector"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Jquery -->
    <script src="{{ asset('assets/js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- waves js -->
    <script src="{{ asset('assets/pages/waves/js/waves.min.js') }}"></script>

    <!-- jquery slimscroll js -->
    <script src="{{ asset('assets/js/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- slimscroll js -->
    <script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>

    <!-- menu js -->
    <script src="{{ asset('assets/js/pcoded.min.js') }}"></script>
    <script src="{{ asset('assets/js/vertical/vertical-layout.min.js') }}"></script>

    <!-- custom script -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
