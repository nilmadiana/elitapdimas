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

<style>
    .img-fluid {
        max-width: 40px;
        /* ubah sesuai ukuran yang diinginkan */
        height: auto;
        /* supaya proporsional */
    }

    .mobile-options i {
        font-size: 18px;
        /* sesuaikan ukuran ikon */
        line-height: 1;
        /* biar sejajar */
    }

    .mobile-options {
        padding: 5px;
        /* jarak di dalam tombol */
        margin-left: 10px;
        /* jarak dari logo */
    }

    .logo-with-text {
        display: flex;
        align-items: center;
        /* sejajarkan logo dan teks */
        text-decoration: none;
        /* hilangkan underline */
    }

    .logo-with-text img {
        width: 40px;
        /* perkecil logo */
        height: auto;
        margin-right: 8px;
        /* jarak antara logo dan teks */
    }

    .logo-text {
        font-size: 18px;
        font-weight: bold;
        color: #ffffff;
        /* warna teks */
    }

    /* Efek putar pada sumbu Y */
    .spinning-logo {
        animation: spinY 10s linear infinite;
        transform-style: preserve-3d;
    }

    @keyframes spinY {
        0% {
            transform: rotateY(0deg);
        }

        100% {
            transform: rotateY(360deg);
        }
    }

    .research-card {
        min-height: 320px;
        display: flex;
        flex-direction: column;
        border-radius: 12px;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        transition: transform .2s ease, box-shadow .2s ease;
    }

    .research-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
    }

    .research-cover {
        width: 100%;
        height: 190px;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .research-card:hover .research-cover {
        transform: scale(1.08);
    }
</style>

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
                                <a href="#!" class="waves-effect waves-light">
                                    <img src="assets/images/avatar-4.jpg" class="img-radius"
                                        alt="User-Profile-Image">
                                    <span>Nama Auth (Admin, penulis, dll)</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li class="waves-effect waves-light">
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
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="auth-normal-sign-in.html">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
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
                                        <span id="more-details">Nama Auth (Admin, penulis, dll)<i
                                                class="fa fa-caret-down"></i></span>
                                    </div>
                                </div>
                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                            <a href="#!"><i class="ti-settings"></i>Settings</a>
                                            <a href="auth-normal-sign-in.html"><i
                                                    class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pcoded-navigation-label">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="index.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <!-- Label: Penelitian -->
                            <div class="pcoded-navigation-label">Penelitian</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-id-badge"></i><b>P</b></span>
                                        <span class="pcoded-mtext">Manajemen Penelitian</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li>
                                            <a href="penelitian-dashboard.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-home"></i></span>
                                                <span class="pcoded-mtext">Beranda Penelitian</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="proposal-baru.html" class="waves-effect waves-dark">
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
                            </ul>
                            <!-- Label: Pengajuan Proposal -->
                            <div class="pcoded-navigation-label">Pengajuan Proposal</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="proposal-baru.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-file"></i></span>
                                        <span class="pcoded-mtext">Ajukan Proposal Baru</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="daftar-proposal.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-view-list"></i></span>
                                        <span class="pcoded-mtext">Daftar Proposal</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- Label: Monitoring -->
                            <div class="pcoded-navigation-label">Monitoring</div>
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
                            </ul>
                            <!-- Label: Laporan -->
                            <div class="pcoded-navigation-label">Laporan</div>
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
                            </ul>
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
                                            <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Bootstrap tab card start -->
                                                <div class="card">
                                                    <div class="card-block">
                                                        <!-- Row start -->
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="sub-title">Pilih Alur</div>
                                                                <!-- Nav tabs -->
                                                                <ul class="nav nav-tabs  tabs" role="tablist">
                                                                    <li class="nav-item">
                                                                        <a class="nav-link active" data-toggle="tab"
                                                                            href="#home1" role="tab">Pembiayaan
                                                                            Awal</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab"
                                                                            href="#profile1" role="tab">Pembiayaan
                                                                            Akhir</a>
                                                                    </li>
                                                                </ul>
                                                                <!-- Tab panes -->
                                                                <div class="tab-content tabs card-block">
                                                                    <div class="tab-pane active" id="home1"
                                                                        role="tabpanel">
                                                                        <p class="m-0">
                                                                            <strong>Pembiayaan Awal</strong> merupakan
                                                                            skema pendanaan yang diberikan sebelum
                                                                            kegiatan penelitian atau penulisan artikel
                                                                            ilmiah dilaksanakan.
                                                                            Dana ini digunakan untuk mendukung kebutuhan
                                                                            persiapan, seperti pengumpulan data awal,
                                                                            pembelian bahan atau peralatan penelitian,
                                                                            serta biaya operasional pendukung lainnya.
                                                                            Mekanisme pengembalian atau
                                                                            pertanggungjawaban dana dilakukan sesuai
                                                                            dengan jadwal dan prosedur yang telah
                                                                            ditetapkan oleh lembaga pengelola.
                                                                        </p>
                                                                    </div>
                                                                    <div class="tab-pane" id="profile1"
                                                                        role="tabpanel">
                                                                        <p class="m-0">
                                                                            <strong>Pembiayaan Akhir</strong> merupakan
                                                                            skema pendanaan yang disalurkan setelah
                                                                            kegiatan penelitian atau penulisan artikel
                                                                            ilmiah dinyatakan selesai.
                                                                            Dana ini biasanya dialokasikan untuk menutup
                                                                            kebutuhan akhir, seperti pembayaran jasa,
                                                                            pencetakan laporan, publikasi di jurnal
                                                                            ilmiah, atau kegiatan diseminasi hasil
                                                                            penelitian.
                                                                            Pencairan dana dilakukan berdasarkan laporan
                                                                            akhir dan bukti realisasi kegiatan yang
                                                                            telah diverifikasi oleh pihak berwenang.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Row end -->
                                                    </div>
                                                </div>
                                                <!-- Bootstrap tab card end -->
                                                <div class="col-xl-12 col-md-12">
                                                    <div class="row">
                                                        <!-- Card 1 -->
                                                        <div class="col-md-4">
                                                            <div
                                                                class="card text-center order-visitor-card research-card">
                                                                <img class="research-cover"
                                                                    src="https://picsum.photos/seed/proposal-1/800/400"
                                                                    alt="Sampul Proposal Penelitian">
                                                                <div class="card-block research-body">
                                                                    <h6 class="m-b-0 research-title">Judul Penelitian
                                                                    </h6>
                                                                    <div class="research-subtitle">Bidang: Teknologi
                                                                        Informasi • 2025</div>
                                                                    <p class="m-b-10 text-muted"
                                                                        style="font-size:.875rem;">
                                                                        Ringkasan singkat maks. 2–3 baris mengenai fokus
                                                                        penelitian atau tujuan utama studi.
                                                                    </p>
                                                                    <div class="research-actions">
                                                                        <button type="button"
                                                                            class="btn btn-primary btn-sm"
                                                                            data-toggle="modal"
                                                                            data-target="#modalDeskripsi1">
                                                                            <i class="fa fa-info-circle m-r-5"></i>
                                                                            Deskripsi
                                                                        </button>
                                                                        <a href="#view-jurnal-1"
                                                                            class="btn btn-outline-primary btn-sm">
                                                                            <i class="fa fa-book m-r-5"></i> View
                                                                            Jurnal
                                                                        </a>
                                                                        <a href="#current-issues-1"
                                                                            class="btn btn-outline-secondary btn-sm">
                                                                            <i class="fa fa-bullhorn m-r-5"></i>
                                                                            Current Issues
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Card 2 -->
                                                        <div class="col-md-4">
                                                            <div
                                                                class="card text-center order-visitor-card research-card">
                                                                <img class="research-cover"
                                                                    src="https://picsum.photos/seed/proposal-2/800/400"
                                                                    alt="Sampul Proposal Penelitian">
                                                                <div class="card-block research-body">
                                                                    <h6 class="m-b-0 research-title">Judul Penelitian
                                                                    </h6>
                                                                    <div class="research-subtitle">Bidang: Pendidikan •
                                                                        2025</div>
                                                                    <p class="m-b-10 text-muted"
                                                                        style="font-size:.875rem;">
                                                                        Ringkasan singkat maks. 2–3 baris mengenai
                                                                        metodologi atau luaran yang diharapkan.
                                                                    </p>
                                                                    <div class="research-actions">
                                                                        <button type="button"
                                                                            class="btn btn-primary btn-sm"
                                                                            data-toggle="modal"
                                                                            data-target="#modalDeskripsi2">
                                                                            <i class="fa fa-info-circle m-r-5"></i>
                                                                            Deskripsi
                                                                        </button>
                                                                        <a href="#view-jurnal-2"
                                                                            class="btn btn-outline-primary btn-sm">
                                                                            <i class="fa fa-book m-r-5"></i> View
                                                                            Jurnal
                                                                        </a>
                                                                        <a href="#current-issues-2"
                                                                            class="btn btn-outline-secondary btn-sm">
                                                                            <i class="fa fa-bullhorn m-r-5"></i>
                                                                            Current Issues
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Card 3 -->
                                                        <div class="col-md-4">
                                                            <div
                                                                class="card text-center order-visitor-card research-card">
                                                                <img class="research-cover"
                                                                    src="https://picsum.photos/seed/proposal-3/800/400"
                                                                    alt="Sampul Proposal Penelitian">
                                                                <div class="card-block research-body">
                                                                    <h6 class="m-b-0 research-title">Judul Penelitian
                                                                    </h6>
                                                                    <div class="research-subtitle">Bidang: Kesehatan •
                                                                        2025</div>
                                                                    <p class="m-b-10 text-muted"
                                                                        style="font-size:.875rem;">
                                                                        Ringkasan singkat maks. 2–3 baris tentang
                                                                        konteks, populasi, atau lokasi penelitian.
                                                                    </p>
                                                                    <div class="research-actions">
                                                                        <button type="button"
                                                                            class="btn btn-primary btn-sm"
                                                                            data-toggle="modal"
                                                                            data-target="#modalDeskripsi3">
                                                                            <i class="fa fa-info-circle m-r-5"></i>
                                                                            Deskripsi
                                                                        </button>
                                                                        <a href="#view-jurnal-3"
                                                                            class="btn btn-outline-primary btn-sm">
                                                                            <i class="fa fa-book m-r-5"></i> View
                                                                            Jurnal
                                                                        </a>
                                                                        <a href="#current-issues-3"
                                                                            class="btn btn-outline-secondary btn-sm">
                                                                            <i class="fa fa-bullhorn m-r-5"></i>
                                                                            Current Issues
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Card 4 -->
                                                        <div class="col-md-4">
                                                            <div
                                                                class="card text-center order-visitor-card research-card">
                                                                <img class="research-cover"
                                                                    src="https://picsum.photos/seed/proposal-4/800/400"
                                                                    alt="Sampul Proposal Penelitian">
                                                                <div class="card-block research-body">
                                                                    <h6 class="m-b-0 research-title">Judul Penelitian
                                                                    </h6>
                                                                    <div class="research-subtitle">Bidang: Ekonomi •
                                                                        2025</div>
                                                                    <p class="m-b-10 text-muted"
                                                                        style="font-size:.875rem;">
                                                                        Ringkasan singkat terkait masalah, tujuan, dan
                                                                        kontribusi teoretis/praktis.
                                                                    </p>
                                                                    <div class="research-actions">
                                                                        <button type="button"
                                                                            class="btn btn-primary btn-sm"
                                                                            data-toggle="modal"
                                                                            data-target="#modalDeskripsi4">
                                                                            <i class="fa fa-info-circle m-r-5"></i>
                                                                            Deskripsi
                                                                        </button>
                                                                        <a href="#view-jurnal-4"
                                                                            class="btn btn-outline-primary btn-sm">
                                                                            <i class="fa fa-book m-r-5"></i> View
                                                                            Jurnal
                                                                        </a>
                                                                        <a href="#current-issues-4"
                                                                            class="btn btn-outline-secondary btn-sm">
                                                                            <i class="fa fa-bullhorn m-r-5"></i>
                                                                            Current Issues
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Card 5 -->
                                                        <div class="col-md-4">
                                                            <div
                                                                class="card text-center order-visitor-card research-card">
                                                                <img class="research-cover"
                                                                    src="https://picsum.photos/seed/proposal-5/800/400"
                                                                    alt="Sampul Proposal Penelitian">
                                                                <div class="card-block research-body">
                                                                    <h6 class="m-b-0 research-title">Judul Penelitian
                                                                    </h6>
                                                                    <div class="research-subtitle">Bidang: Sosial •
                                                                        2025</div>
                                                                    <p class="m-b-10 text-muted"
                                                                        style="font-size:.875rem;">
                                                                        Ringkasan singkat capaian luaran: artikel,
                                                                        prosiding, HKI, atau prototipe.
                                                                    </p>
                                                                    <div class="research-actions">
                                                                        <button type="button"
                                                                            class="btn btn-primary btn-sm"
                                                                            data-toggle="modal"
                                                                            data-target="#modalDeskripsi5">
                                                                            <i class="fa fa-info-circle m-r-5"></i>
                                                                            Deskripsi
                                                                        </button>
                                                                        <a href="#view-jurnal-5"
                                                                            class="btn btn-outline-primary btn-sm">
                                                                            <i class="fa fa-book m-r-5"></i> View
                                                                            Jurnal
                                                                        </a>
                                                                        <a href="#current-issues-5"
                                                                            class="btn btn-outline-secondary btn-sm">
                                                                            <i class="fa fa-bullhorn m-r-5"></i>
                                                                            Current Issues
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Card 6 -->
                                                        <div class="col-md-4">
                                                            <div
                                                                class="card text-center order-visitor-card research-card">
                                                                <img class="research-cover"
                                                                    src="https://picsum.photos/seed/proposal-6/800/400"
                                                                    alt="Sampul Proposal Penelitian">
                                                                <div class="card-block research-body">
                                                                    <h6 class="m-b-0 research-title">Judul Penelitian
                                                                    </h6>
                                                                    <div class="research-subtitle">Bidang: Lingkungan •
                                                                        2025</div>
                                                                    <p class="m-b-10 text-muted"
                                                                        style="font-size:.875rem;">
                                                                        Ringkasan singkat terkait pendekatan/analisis
                                                                        dan dampak yang diharapkan.
                                                                    </p>
                                                                    <div class="research-actions">
                                                                        <button type="button"
                                                                            class="btn btn-primary btn-sm"
                                                                            data-toggle="modal"
                                                                            data-target="#modalDeskripsi6">
                                                                            <i class="fa fa-info-circle m-r-5"></i>
                                                                            Deskripsi
                                                                        </button>
                                                                        <a href="#view-jurnal-6"
                                                                            class="btn btn-outline-primary btn-sm">
                                                                            <i class="fa fa-book m-r-5"></i> View
                                                                            Jurnal
                                                                        </a>
                                                                        <a href="#current-issues-6"
                                                                            class="btn btn-outline-secondary btn-sm">
                                                                            <i class="fa fa-bullhorn m-r-5"></i>
                                                                            Current Issues
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Cards -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page body end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><div id="pcoded" class="pcoded">
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
                        <a href="index.html">
                            <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" />
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
                                <a href="#!" class="waves-effect waves-light">
                                    <img src="assets/images/avatar-4.jpg" class="img-radius"
                                        alt="User-Profile-Image">
                                    <span>John Doe</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li class="waves-effect waves-light">
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
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="auth-normal-sign-in.html">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
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
                                        <span id="more-details">John Doe<i class="fa fa-caret-down"></i></span>
                                    </div>
                                </div>
                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                            <a href="#!"><i class="ti-settings"></i>Settings</a>
                                            <a href="auth-normal-sign-in.html"><i
                                                    class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-15 p-b-0">
                                <form class="form-material">
                                    <div class="form-group form-primary">
                                        <input type="text" name="footer-email" class="form-control">
                                        <span class="form-bar"></span>
                                        <label class="float-label"><i class="fa fa-search m-r-10"></i>Search
                                            Friend</label>
                                    </div>
                                </form>
                            </div>
                            <div class="pcoded-navigation-label">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="index.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">UI Element</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">Basic</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="breadcrumb.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Breadcrumbs</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="button.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Button</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="accordion.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Accordion</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="tabs.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Tabs</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="color.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Color</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="label-badge.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Label Badge</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="tooltip.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Tooltip And Popover</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="typography.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Typography</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="notification.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Notifications</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">Forms</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="form-elements-component.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext">Form</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">Tables</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="bs-basic-table.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-receipt"></i><b>B</b></span>
                                        <span class="pcoded-mtext">Table</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">Chart And Maps</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="chart-morris.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-bar-chart-alt"></i><b>C</b></span>
                                        <span class="pcoded-mtext">Charts</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="map-google.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-map-alt"></i><b>M</b></span>
                                        <span class="pcoded-mtext">Maps</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label">Pages</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-id-badge"></i><b>A</b></span>
                                        <span class="pcoded-mtext">Pages</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="auth-normal-sign-in.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Login</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-sign-up.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Registration</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="sample-page.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i
                                                        class="ti-layout-sidebar-left"></i><b>S</b></span>
                                                <span class="pcoded-mtext">Sample Page</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Pembiayaan</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Dashboard</a>
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
                                            <div class="col-sm-12">
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Pembiayaan</h5>

                                                    </div>
                                                    <div class="card-block">
                                                        <form action="{{ route('pembiayaan.store') }}" method="POST">
                                                            @csrf
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Tema</label>
                                                                <div class="col-sm-10">
                                                                    <select class="form-control" name="tema_id">
                                                                        <option value="">-- Pilih Tema Pendidikan
                                                                            --</option>
                                                                        @foreach ($temas as $tema)
                                                                            <option value="{{ $tema->id }}">
                                                                                {{ $tema->tema }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jenis
                                                                    Penelitian</label>
                                                                <div class="col-sm-10">
                                                                    <select class="form-control"
                                                                        name="jenis_penelitian_id">
                                                                        <option value="">-- Pilih Jenis
                                                                            Penelitian
                                                                            --</option>
                                                                        @foreach ($jenis as $j)
                                                                            <option value="{{ $j->id }}">
                                                                                {{ $j->nama_jenis_penelitian }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Sumber
                                                                    Dana</label>
                                                                <div class="col-sm-10">
                                                                    <select class="form-control" name="sumber_id">
                                                                        <option value="">-- Pilih Sumber Dana
                                                                            Penelitian
                                                                            --</option>
                                                                        @foreach ($sumbers as $s)
                                                                            <option value="{{ $s->id }}">
                                                                                {{ $s->nama_sumber }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label"></label>
                                                                <div class="col-sm-10">
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Simpan</button>
                                                                    <a href="{{ route('proposal.index') }}"
                                                                        class="btn btn-secondary">Kembali</a>
                                                                </div>
                                                            </div>
                                                        </form>
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
