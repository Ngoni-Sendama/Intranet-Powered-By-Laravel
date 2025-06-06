<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <meta http-equiv="refresh" content="10"> --}}

    <title>Anmack Mining Intranet</title>

    <link rel="shortcut icon"
        href="https://vacancybox.co.zw/wp-content/uploads/2024/07/Anmack-Mining-Pvt-Ltd-Sabi-Gold-Mine-150x150.jpeg" />
    <link rel="stylesheet" href="{{ asset('assets/css/libs.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/socialv.css?v=4.0.0') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/remixicon/fonts/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/vanillajs-datepicker/dist/css/datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome-line-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') }}">
    @livewireStyles
    @livewireScripts
</head>

<body class="  ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
        <div class="iq-sidebar  sidebar-default ">
            <div id="sidebar-scrollbar">
                <nav class="iq-sidebar-menu">
                    <ul id="iq-sidebar-toggle" class="iq-menu">
                        <li class="active">
                            <a href="{{ route('dashboard') }}" class=" ">
                                <i class="las la-newspaper"></i><span>Newsfeed</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('profile.show') }}" class=" ">
                                <i class="las la-user"></i><span>Profile</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="p-5"></div>
            </div>
        </div>

        <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <div class="iq-navbar-logo d-flex justify-content-between">
                        <a href="{{ route('dashboard') }}">
                            <img src="https://vacancybox.co.zw/wp-content/uploads/2024/07/Anmack-Mining-Pvt-Ltd-Sabi-Gold-Mine-150x150.jpeg"
                                class="img-fluid" alt="">
                            <span>Anmack Mine</span>
                        </a>
                        <div class="iq-menu-bt align-self-center">
                            <div class="wrapper-menu">
                                <div class="main-circle"><i class="ri-menu-line"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="iq-search-bar device-search">
                        <form action="#" class="searchbox">
                            <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                            <input type="text" class="text search-input" placeholder="Search here...">
                        </form>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-label="Toggle navigation">
                        <i class="ri-menu-3-line"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  ms-auto navbar-list">
                            <li>
                                <a href="../dashboard/index.html" class="  d-flex align-items-center">
                                    <i class="ri-home-line"></i>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="dropdown-toggle" id="group-drop" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"><i class="ri-group-line"></i></a>
                                <div class="sub-drop sub-drop-large dropdown-menu" aria-labelledby="group-drop">
                                    <div class="card shadow-none m-0">
                                        <div class="card-header d-flex justify-content-between bg-primary">
                                            <div class="header-title">
                                                <h5 class="mb-0 text-white">Friend Request</h5>
                                            </div>
                                            <small class="badge  bg-light text-dark ">4</small>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="iq-friend-request">
                                                <div
                                                    class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <img class="avatar-40 rounded"
                                                            src="../assets/images/user/01.jpg" alt="">
                                                        <div class="ms-3">
                                                            <h6 class="mb-0 ">Jaques Amole</h6>
                                                            <p class="mb-0">40 friends</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <a href="javascript:void();"
                                                            class="me-3 btn btn-primary rounded">Confirm</a>
                                                        <a href="javascript:void();"
                                                            class="me-3 btn btn-secondary rounded">Delete Request</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="iq-friend-request">
                                                <div
                                                    class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <img class="avatar-40 rounded"
                                                            src="../assets/images/user/02.jpg" alt="">
                                                        <div class="ms-3">
                                                            <h6 class="mb-0 ">Lucy Tania</h6>
                                                            <p class="mb-0">12 friends</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <a href="javascript:void();"
                                                            class="me-3 btn btn-primary rounded">Confirm</a>
                                                        <a href="javascript:void();"
                                                            class="me-3 btn btn-secondary rounded">Delete Request</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="iq-friend-request">
                                                <div
                                                    class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <img class="avatar-40 rounded"
                                                            src="../assets/images/user/03.jpg" alt="">
                                                        <div class=" ms-3">
                                                            <h6 class="mb-0 ">Manny Petty</h6>
                                                            <p class="mb-0">3 friends</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <a href="javascript:void();"
                                                            class="me-3 btn btn-primary rounded">Confirm</a>
                                                        <a href="javascript:void();"
                                                            class="me-3 btn btn-secondary rounded">Delete Request</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="iq-friend-request">
                                                <div
                                                    class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <img class="avatar-40 rounded"
                                                            src="../assets/images/user/04.jpg" alt="">
                                                        <div class="ms-3">
                                                            <h6 class="mb-0 ">Marsha Mello</h6>
                                                            <p class="mb-0">15 friends</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <a href="javascript:void();"
                                                            class="me-3 btn btn-primary rounded">Confirm</a>
                                                        <a href="javascript:void();"
                                                            class="me-3 btn btn-secondary rounded">Delete Request</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <a href="#" class=" btn text-primary">View More Request</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="search-toggle   dropdown-toggle" id="notification-drop"
                                    data-bs-toggle="dropdown">
                                    <i class="ri-notification-4-line"></i>
                                </a>
                                <div class="sub-drop dropdown-menu" aria-labelledby="notification-drop">
                                    <div class="card shadow-none m-0">
                                        <div class="card-header d-flex justify-content-between bg-primary">
                                            <div class="header-title bg-primary">
                                                <h5 class="mb-0 text-white">All Notifications</h5>
                                            </div>
                                            <small class="badge  bg-light text-dark">4</small>
                                        </div>
                                        <div class="card-body p-0">
                                            <a href="#" class="iq-sub-card">
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded"
                                                            src="../assets/images/user/01.jpg" alt="">
                                                    </div>
                                                    <div class="ms-3 w-100">
                                                        <h6 class="mb-0 ">Emma Watson Bni</h6>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0">95 MB</p>
                                                            <small class="float-right font-size-12">Just Now</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded"
                                                            src="../assets/images/user/02.jpg" alt="">
                                                    </div>
                                                    <div class="ms-3 w-100">
                                                        <h6 class="mb-0 ">New customer is join</h6>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0">Cyst Bni</p>
                                                            <small class="float-right font-size-12">5 days ago</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded"
                                                            src="../assets/images/user/03.jpg" alt="">
                                                    </div>
                                                    <div class="ms-3 w-100">
                                                        <h6 class="mb-0 ">Two customer is left</h6>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0">Cyst Bni</p>
                                                            <small class="float-right font-size-12">2 days ago</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded"
                                                            src="../assets/images/user/04.jpg" alt="">
                                                    </div>
                                                    <div class="w-100 ms-3">
                                                        <h6 class="mb-0 ">New Mail from Fenny</h6>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0">Cyst Bni</p>
                                                            <small class="float-right font-size-12">3 days ago</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="dropdown-toggle" id="mail-drop" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="ri-mail-line"></i>
                                </a>
                                <div class="sub-drop dropdown-menu" aria-labelledby="mail-drop">
                                    <div class="card shadow-none m-0">
                                        <div class="card-header d-flex justify-content-between bg-primary">
                                            <div class="header-title bg-primary">
                                                <h5 class="mb-0 text-white">All Message</h5>
                                            </div>
                                            <small class="badge bg-light text-dark">4</small>
                                        </div>
                                        <div class="card-body p-0 ">
                                            <a href="#" class="iq-sub-card">
                                                <div class="d-flex  align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded"
                                                            src="../assets/images/user/01.jpg" alt="">
                                                    </div>
                                                    <div class=" w-100 ms-3">
                                                        <h6 class="mb-0 ">Bni Emma Watson</h6>
                                                        <small class="float-left font-size-12">13 Jun</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded"
                                                            src="../assets/images/user/02.jpg" alt="">
                                                    </div>
                                                    <div class="ms-3">
                                                        <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                                        <small class="float-left font-size-12">20 Apr</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded"
                                                            src="../assets/images/user/03.jpg" alt="">
                                                    </div>
                                                    <div class="ms-3">
                                                        <h6 class="mb-0 ">Why do we use it?</h6>
                                                        <small class="float-left font-size-12">30 Jun</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded"
                                                            src="../assets/images/user/04.jpg" alt="">
                                                    </div>
                                                    <div class="ms-3">
                                                        <h6 class="mb-0 ">Variations Passages</h6>
                                                        <small class="float-left font-size-12">12 Sep</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded"
                                                            src="../assets/images/user/05.jpg" alt="">
                                                    </div>
                                                    <div class="ms-3">
                                                        <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                                        <small class="float-left font-size-12">5 Dec</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="{{ route('profile.show') }}"
                                    class="d-flex align-items-center dropdown-toggle" id="drop-down-arrow">
                                    <img src="{{ Auth::user()->profile_photo_url }}"
                                        class="img-fluid rounded-circle me-3" alt="user">
                                    <div class="caption">
                                        <h6 class="mb-0 line-height">{{ Auth::user()->name }}</h6>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="right-sidebar-mini right-sidebar">
            <div class="right-sidebar-panel p-0">
                <div class="card shadow-none">
                    <div class="card-body p-0">
                        <div class="media-height p-3" data-scrollbar="init">
                            @php
                                use Illuminate\Support\Facades\Auth;
                                use App\Models\User;

                                $users = User::where('id', '!=', Auth::id())->get();
                            @endphp
                            @foreach ($users as $user)
                            <div class="d-flex align-items-center mb-4">
                                <div class="iq-profile-avatar status-online">
                                    <img class="rounded-circle avatar-50" src="{{$user->profile_photo_path}}"
                                        alt="" />
                                </div>
                                <div class="ms-3">
                                    <h6 class="mb-0">{{ $user->name }}</h6>
                                    <a href="/chatify/{{$user->id}}" target="_blank" class="mb-0">Chat Now</a>
                                </div>
                            </div>
                              @endforeach

                        </div>
                        <div class="right-sidebar-toggle bg-primary text-white mt-3">
                            <i class="ri-arrow-left-line side-left-icon"></i>
                            <i class="ri-arrow-right-line side-right-icon"><span class="ms-3 d-inline-block">Close
                                    Menu</span></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="content-page" class="content-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 row m-0 p-0">
                        <div class="col-sm-12">
                            <div id="post-modal-data" class="card card-block card-stretch card-height">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Create Post</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="user-img">
                                            <img src="{{ Auth::user()->profile_photo_url }}" alt="userimg"
                                                class="avatar-60 rounded-circle">
                                        </div>
                                        <form class="post-text ms-3 w-100 " data-bs-toggle="modal"
                                            data-bs-target="#post-modal" action="javascript:void();">
                                            <input type="text" class="form-control rounded"
                                                placeholder="Write something here..." style="border:none;">
                                        </form>
                                    </div>
                                </div>
                                <div class="modal fade" id="post-modal" tabindex="-1"
                                    aria-labelledby="post-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog   modal-fullscreen-sm-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="post-modalLabel">Create Post</h5>
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal"><i class="ri-close-fill"></i></button>
                                            </div>
                                            {{-- <div class="modal-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="user-img">
                                                        <img src="{{ Auth::user()->profile_photo_url }}"
                                                            alt="userimg" class="avatar-60 rounded-circle img-fluid">
                                                    </div>
                                                    <form class="post-text ms-3 w-100" action="javascript:void();">
                                                        <input type="text" class="form-control rounded"
                                                            placeholder="Write something here..."
                                                            style="border:none;">
                                                    </form>
                                                </div>
                                                <hr>
                                                <div class="d-flex flex-wrap align-items-center">
                                                    <p>Upload COntent</p>
                                                </div>
                                                <hr>
                                                <button type="submit"
                                                    class="btn btn-primary d-block w-100 mt-3">Post</button>
                                            </div> --}}
                                            @livewire('create-post')

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @livewire('dashboard-posts')
                    </div>

                    <div class="col-sm-12 text-center">
                        <img src="../assets/images/page-img/page-load-loader.gif" alt="loader"
                            style="height: 100px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Wrapper End-->
    <footer class="iq-footer bg-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="../dashboard/privacy-policy.html">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item"><a href="../dashboard/terms-of-service.html">Terms of Use</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                    Copyright 2020 <a href="#">SocialV</a> All Rights Reserved.
                </div>
            </div>
        </div>
    </footer> <!-- Backend Bundle JavaScript -->
    <script>
        Livewire.on('post-created', () => {
            const modal = bootstrap.Modal.getInstance(document.getElementById('post-modal'));
            modal.hide();
        });
    </script>

    <script src="{{ asset('assets/js/libs.min.js') }}"></script>
    <!-- slider JavaScript -->
    <script src="{{ asset('assets/js/slider.js') }}"></script>
    <!-- masonry JavaScript -->
    <script src="{{ asset('assets/js/masonry.pkgd.min.js') }}"></script>
    <!-- SweetAlert JavaScript -->
    <script src="{{ asset('assets/js/enchanter.js') }}"></script>
    <!-- SweetAlert JavaScript -->
    <script src="{{ asset('assets/js/sweetalert.js') }}"></script>
    <!-- app JavaScript -->
    <script src="{{ asset('assets/js/charts/weather-chart.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('vendor/vanillajs-datepicker/dist/js/datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/lottie.js') }}"></script>


    <!-- offcanvas start -->

    <div class="offcanvas offcanvas-bottom share-offcanvas" tabindex="-1" id="share-btn"
        aria-labelledby="shareBottomLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="shareBottomLabel">Share</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body small">
            <div class="d-flex flex-wrap align-items-center">
                <div class="text-center me-3 mb-3">
                    <img src="../assets/images/icon/08.png" class="img-fluid rounded mb-2" alt="">
                    <h6>Facebook</h6>
                </div>
                <div class="text-center me-3 mb-3">
                    <img src="../assets/images/icon/09.png" class="img-fluid rounded mb-2" alt="">
                    <h6>Twitter</h6>
                </div>
                <div class="text-center me-3 mb-3">
                    <img src="../assets/images/icon/10.png" class="img-fluid rounded mb-2" alt="">
                    <h6>Instagram</h6>
                </div>
                <div class="text-center me-3 mb-3">
                    <img src="../assets/images/icon/11.png" class="img-fluid rounded mb-2" alt="">
                    <h6>Google Plus</h6>
                </div>
                <div class="text-center me-3 mb-3">
                    <img src="../assets/images/icon/13.png" class="img-fluid rounded mb-2" alt="">
                    <h6>In</h6>
                </div>
                <div class="text-center me-3 mb-3">
                    <img src="../assets/images/icon/12.png" class="img-fluid rounded mb-2" alt="">
                    <h6>YouTube</h6>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
