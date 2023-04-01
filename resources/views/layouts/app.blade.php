<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <title>{{ $page_tittle ?? 'Mre Laravel Starter Kit' }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Global stylesheets -->
    <link href="{{url('/')}}/assets/fonts/inter/inter.css" rel="stylesheet" type="text/css">
    <link href="{{url('/')}}/assets/icons/phosphor/styles.min.css" rel="stylesheet" type="text/css">
    <link href="{{url('/')}}/assets/css/all.min.css" id="stylesheet" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{url('/')}}/assets/demo/demo_configurator.js"></script>
    <script src="{{url('/')}}/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- /core JS files -->

    <script src="{{url('/')}}/assets/js/app.js"></script>
    <!-- /theme JS files -->
    @livewireStyles

</head>

<body>

    <!-- Main navbar -->
    <div class="navbar navbar-dark navbar-expand-lg navbar-static border-bottom border-bottom-white border-opacity-10">
        <div class="container-fluid">
            <div class="d-flex d-lg-none me-2">
                <button type="button" class="navbar-toggler sidebar-mobile-main-toggle rounded-pill">
                    <i class="ph-list"></i>
                </button>
            </div>

            <div class="navbar-brand flex-1 flex-lg-0">
                <a href="index.html" class="d-inline-flex align-items-center">
                    <img src="{{url('/')}}/assets/images/logo_icon.svg" alt="">
                    <img src="{{url('/')}}/assets/images/logo_text_light.svg"
                        class="d-none d-sm-inline-block h-16px ms-3" alt="">
                </a>
            </div>

            <ul class="nav flex-row">
                {{-- <li class="nav-item d-lg-none">
                    <a href="#navbar_search" class="navbar-nav-link navbar-nav-link-icon rounded-pill"
                        data-bs-toggle="collapse">
                        <i class="ph-magnifying-glass"></i>
                    </a>
                </li> --}}
            </ul>

            <ul class="nav flex-row justify-content-end order-1 order-lg-2">
                <li class="nav-item ms-lg-2">
                    <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded-pill" data-bs-toggle="offcanvas"
                        data-bs-target="#notifications">
                        <i class="ph-bell"></i>
                        <span
                            class="badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top zindex-1 rounded-pill mt-1 me-1">2</span>
                    </a>
                </li>

                <li class="nav-item nav-item-dropdown-lg dropdown ms-lg-2">
                    <a href="#" class="navbar-nav-link align-items-center rounded-pill p-1" data-bs-toggle="dropdown">
                        <div class="status-indicator-container">
                            <img src="{{url('/')}}/assets/images/demo/users/face11.jpg"
                                class="w-32px h-32px rounded-pill" alt="">
                            <span class="status-indicator bg-success"></span>
                        </div>
                        <span class="d-none d-lg-inline-block mx-lg-2">Victoria</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-end">
                        <a href="#" class="dropdown-item">
                            <i class="ph-user-circle me-2"></i>
                            My profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#demo_config">
                            <i class="ph-gear me-2"></i>
                            Settings
                        </a>
                        <a href="{{ route('logout') }}" class="dropdown-item">
                            <i class="ph-sign-out me-2"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->


    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

            <!-- Sidebar content -->
            <div class="sidebar-content">

                <!-- Sidebar header -->
                <div class="sidebar-section">
                    <div class="sidebar-section-body d-flex justify-content-center">
                        <h5 class="sidebar-resize-hide flex-grow-1 my-auto">Navigation</h5>

                        <div>
                            <button type="button"
                                class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                                <i class="ph-arrows-left-right"></i>
                            </button>

                            <button type="button"
                                class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
                                <i class="ph-x"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- /sidebar header -->


                <!-- Main navigation -->
                <div class="sidebar-section">
                    <ul class="nav nav-sidebar" data-nav-type="accordion">
                        @foreach($menu as $level1)
                        @if($level1['level'] == 1)
                        <li class="nav-item-header pt-0">
                            <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">{{$level1['name']}}
                            </div>
                            <i class="ph-dots-three sidebar-resize-show"></i>
                        </li>
                        @foreach($level1['child'] as $level2)
                        @if($level2['level']==2)
                        @if(count($level2['child'])>0)
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="{{$level2['icon']}}"></i>
                                <span>{{$level2['name']}}</span></a>
                            <ul class="nav-group-sub collapse">
                                @foreach($level2['child'] as $level3)
                                @if($level3['level']==3)
                                @if(count($level3['child'])>0)
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">{{$level3['name']}}</a>
                                    <ul class="nav-group-sub collapse">
                                        @foreach($level3['child'] as $level4)
                                        @if($level4['level']==4)
                                        @if(count($level3['child'])>0)
                                        <li class="nav-item nav-item-submenu">
                                            <a href="#" class="nav-link">{{$level4['name']}}</a>
                                            <ul class="nav-group-sub collapse">
                                                @foreach($level4['child'] as $level5)
                                                @if($level5['level']==5)
                                                <li class="nav-item"><a href="{{url('/')}}/{{$level5['route']}}"
                                                        class="nav-link">{{$level5['name']}}</a></li>
                                                @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                        @else
                                        <li class="nav-item"><a href="{{url('/')}}/{{$level4['route']}}"
                                                class="nav-link">{{$level4['name']}}</a></li>

                                        @endif
                                        @endif
                                        @endforeach
                                    </ul>
                                </li>
                                @else
                                <li class="nav-item"><a href="{{url('/')}}/{{$level3['route']}}"
                                        class="nav-link">{{$level3['name']}}</a></li>
                                @endif
                                @endif
                                @endforeach
                            </ul>
                        </li>
                        @else
                        <li class="nav-item">
                            <a href="{{url('/')}}/{{$level2['route']}}" class="nav-link">
                                <i class="{{$level2['icon']}}"></i>
                                <span>
                                    {{$level2['name']}}
                                    <span class="d-block fw-normal opacity-50">No pending orders</span>
                                </span>
                            </a>
                        </li>
                        @endif
                        @endif
                        @endforeach
                        @endif
                        @endforeach
                        <!-- Main -->
                        <li class="nav-item-header pt-0">
                            <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Main</div>
                            <i class="ph-dots-three sidebar-resize-show"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ph-house"></i>
                                <span>
                                    Dashboard
                                    <span class="d-block fw-normal opacity-50">No pending orders</span>
                                </span>
                            </a>
                        </li>
                        <!-- Layout -->
                        <li class="nav-item-header">
                            <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Layout</div>
                            <i class="ph-dots-three sidebar-resize-show"></i>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="ph-arrow-elbow-down-right"></i> <span>Menu
                                    levels</span></a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item"><a href="#" class="nav-link">Second level</a></li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Second level with child</a>
                                    <ul class="nav-group-sub collapse">
                                        <li class="nav-item"><a href="#" class="nav-link">Third level</a></li>
                                        <li class="nav-item nav-item-submenu">
                                            <a href="#" class="nav-link">Third level with child</a>
                                            <ul class="nav-group-sub collapse">
                                                <li class="nav-item"><a href="#" class="nav-link">Fourth level</a></li>
                                                <li class="nav-item"><a href="#" class="nav-link">Fourth level</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item"><a href="#" class="nav-link">Third level</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="#" class="nav-link">Second level</a></li>
                            </ul>
                        </li>
                        <!-- /layout -->

                    </ul>
                </div>
                <!-- /main navigation -->

            </div>
            <!-- /sidebar content -->

        </div>
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            <div class="page-header page-header-light page-header-static shadow">
                <div class="page-header-content d-lg-flex border-bottom">
                    <div class="d-flex">
                        <div class="breadcrumb py-2">
                            <a href="/" class="breadcrumb-item"><i class="ph-house pe-2"></i> {{$page ?? ''}}</a>
                            <span class="breadcrumb-item active">{{$page_active ?? ''}}</span>
                        </div>

                        <a href="#breadcrumb_elements"
                            class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                            data-bs-toggle="collapse">
                            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                        </a>
                    </div>

                    <div class="collapse d-lg-block ms-lg-auto" id="breadcrumb_elements">
                        <div class="d-lg-flex mb-2 mb-lg-0">
                            <a href="#" class="d-flex align-items-center text-body py-2">
                                <i class="ph-lifebuoy me-2"></i>
                                Support
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page header -->


            <!-- Inner content -->
            <div class="content-inner">

                <!-- Content area -->
                <div class="content">
                    @yield('content')
                </div>
                <!-- /content area -->


                <!-- Footer -->
                <div class="navbar navbar-sm navbar-footer border-top">
                    <div class="container-fluid">
                        <span>&copy; 2022 <a
                                href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328">Limitless
                                Web App
                                Kit</a></span>

                        <ul class="nav">
                            <li class="nav-item">
                                <a href="https://kopyov.ticksy.com/"
                                    class="navbar-nav-link navbar-nav-link-icon rounded" target="_blank">
                                    <div class="d-flex align-items-center mx-md-1">
                                        <i class="ph-lifebuoy"></i>
                                        <span class="d-none d-md-inline-block ms-2">Support</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item ms-md-1">
                                <a href="https://demo.interface.club/limitless/demo/Documentation/index.html"
                                    class="navbar-nav-link navbar-nav-link-icon rounded" target="_blank">
                                    <div class="d-flex align-items-center mx-md-1">
                                        <i class="ph-file-text"></i>
                                        <span class="d-none d-md-inline-block ms-2">Docs</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item ms-md-1">
                                <a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov"
                                    class="navbar-nav-link navbar-nav-link-icon text-primary bg-primary bg-opacity-10 fw-semibold rounded"
                                    target="_blank">
                                    <div class="d-flex align-items-center mx-md-1">
                                        <i class="ph-shopping-cart"></i>
                                        <span class="d-none d-md-inline-block ms-2">Purchase</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /footer -->

            </div>
            <!-- /inner content -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->


    <!-- Notifications -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="notifications">
        <div class="offcanvas-header py-0">
            <h5 class="offcanvas-title py-3">Activity</h5>
            <button type="button" class="btn btn-light btn-sm btn-icon border-transparent rounded-pill"
                data-bs-dismiss="offcanvas">
                <i class="ph-x"></i>
            </button>
        </div>

        <div class="offcanvas-body p-0">
            <div class="bg-light fw-medium py-2 px-3">New notifications</div>
            <div class="p-3">
                <div class="d-flex align-items-start mb-3">
                    <a href="#" class="status-indicator-container me-3">
                        <img src="../../../assets/images/demo/users/face1.jpg" class="w-40px h-40px rounded-pill"
                            alt="">
                        <span class="status-indicator bg-success"></span>
                    </a>
                    <div class="flex-fill">
                        <a href="#" class="fw-semibold">James</a> has completed the task <a href="#">Submit
                            documents</a>
                        from <a href="#">Onboarding</a> list

                        <div class="bg-light rounded p-2 my-2">
                            <label class="form-check ms-1">
                                <input type="checkbox" class="form-check-input" checked disabled>
                                <del class="form-check-label">Submit personal documents</del>
                            </label>
                        </div>

                        <div class="fs-sm text-muted mt-1">2 hours ago</div>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-3">
                    <a href="#" class="status-indicator-container me-3">
                        <img src="../../../assets/images/demo/users/face3.jpg" class="w-40px h-40px rounded-pill"
                            alt="">
                        <span class="status-indicator bg-warning"></span>
                    </a>
                    <div class="flex-fill">
                        <a href="#" class="fw-semibold">Margo</a> has added 4 users to <span
                            class="fw-semibold">Customer
                            enablement</span> channel

                        <div class="d-flex my-2">
                            <a href="#" class="status-indicator-container me-1">
                                <img src="../../../assets/images/demo/users/face10.jpg"
                                    class="w-32px h-32px rounded-pill" alt="">
                                <span class="status-indicator bg-danger"></span>
                            </a>
                            <a href="#" class="status-indicator-container me-1">
                                <img src="../../../assets/images/demo/users/face11.jpg"
                                    class="w-32px h-32px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </a>
                            <a href="#" class="status-indicator-container me-1">
                                <img src="../../../assets/images/demo/users/face12.jpg"
                                    class="w-32px h-32px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </a>
                            <a href="#" class="status-indicator-container me-1">
                                <img src="../../../assets/images/demo/users/face13.jpg"
                                    class="w-32px h-32px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </a>
                            <button type="button"
                                class="btn btn-light btn-icon d-inline-flex align-items-center justify-content-center w-32px h-32px rounded-pill p-0">
                                <i class="ph-plus ph-sm"></i>
                            </button>
                        </div>

                        <div class="fs-sm text-muted mt-1">3 hours ago</div>
                    </div>
                </div>

                <div class="d-flex align-items-start">
                    <div class="me-3">
                        <div class="bg-warning bg-opacity-10 text-warning rounded-pill">
                            <i class="ph-warning p-2"></i>
                        </div>
                    </div>
                    <div class="flex-1">
                        Subscription <a href="#">#466573</a> from 10.12.2021 has been cancelled. Refund case <a
                            href="#">#4492</a> created
                        <div class="fs-sm text-muted mt-1">4 hours ago</div>
                    </div>
                </div>
            </div>

            <div class="bg-light fw-medium py-2 px-3">Older notifications</div>
            <div class="p-3">
                <div class="d-flex align-items-start mb-3">
                    <a href="#" class="status-indicator-container me-3">
                        <img src="../../../assets/images/demo/users/face25.jpg" class="w-40px h-40px rounded-pill"
                            alt="">
                        <span class="status-indicator bg-success"></span>
                    </a>
                    <div class="flex-fill">
                        <a href="#" class="fw-semibold">Nick</a> requested your feedback and approval in support request
                        <a href="#">#458</a>

                        <div class="my-2">
                            <a href="#" class="btn btn-success btn-sm me-1">
                                <i class="ph-checks ph-sm me-1"></i>
                                Approve
                            </a>
                            <a href="#" class="btn btn-light btn-sm">
                                Review
                            </a>
                        </div>

                        <div class="fs-sm text-muted mt-1">3 days ago</div>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-3">
                    <a href="#" class="status-indicator-container me-3">
                        <img src="../../../assets/images/demo/users/face24.jpg" class="w-40px h-40px rounded-pill"
                            alt="">
                        <span class="status-indicator bg-grey"></span>
                    </a>
                    <div class="flex-fill">
                        <a href="#" class="fw-semibold">Mike</a> added 1 new file(s) to <a href="#">Product
                            management</a>
                        project

                        <div class="bg-light rounded p-2 my-2">
                            <div class="d-flex align-items-center">
                                <div class="me-2">
                                    <img src="../../../assets/images/icons/pdf.svg" width="34" height="34" alt="">
                                </div>
                                <div class="flex-fill">
                                    new_contract.pdf
                                    <div class="fs-sm text-muted">112KB</div>
                                </div>
                                <div class="ms-2">
                                    <button type="button"
                                        class="btn btn-flat-dark text-body btn-icon btn-sm border-transparent rounded-pill">
                                        <i class="ph-arrow-down"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="fs-sm text-muted mt-1">1 day ago</div>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-3">
                    <div class="me-3">
                        <div class="bg-success bg-opacity-10 text-success rounded-pill">
                            <i class="ph-calendar-plus p-2"></i>
                        </div>
                    </div>
                    <div class="flex-fill">
                        All hands meeting will take place coming Thursday at 13:45.

                        <div class="my-2">
                            <a href="#" class="btn btn-primary btn-sm">
                                <i class="ph-calendar-plus ph-sm me-1"></i>
                                Add to calendar
                            </a>
                        </div>

                        <div class="fs-sm text-muted mt-1">2 days ago</div>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-3">
                    <a href="#" class="status-indicator-container me-3">
                        <img src="../../../assets/images/demo/users/face4.jpg" class="w-40px h-40px rounded-pill"
                            alt="">
                        <span class="status-indicator bg-danger"></span>
                    </a>
                    <div class="flex-fill">
                        <a href="#" class="fw-semibold">Christine</a> commented on your community <a href="#">post</a>
                        from
                        10.12.2021

                        <div class="fs-sm text-muted mt-1">2 days ago</div>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-3">
                    <div class="me-3">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-pill">
                            <i class="ph-users-four p-2"></i>
                        </div>
                    </div>
                    <div class="flex-fill">
                        <span class="fw-semibold">HR department</span> requested you to complete internal survey by
                        Friday

                        <div class="fs-sm text-muted mt-1">3 days ago</div>
                    </div>
                </div>

                <div class="text-center">
                    <div class="spinner-border" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /notifications -->


    <!-- Demo config -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="demo_config">
        {{-- <div class="position-absolute top-50 end-100 visible">
            <button type="button" class="btn btn-primary btn-icon translate-middle-y rounded-end-0"
                data-bs-toggle="offcanvas" data-bs-target="#demo_config">
                <i class="ph-gear"></i>
            </button>
        </div> --}}

        <div class="offcanvas-header border-bottom py-0">
            <h5 class="offcanvas-title py-3">Demo configuration</h5>
            <button type="button" class="btn btn-light btn-sm btn-icon border-transparent rounded-pill"
                data-bs-dismiss="offcanvas">
                <i class="ph-x"></i>
            </button>
        </div>

        <div class="offcanvas-body">
            <div class="fw-semibold mb-2">Color mode</div>
            <div class="list-group mb-3">
                <label class="list-group-item list-group-item-action form-check border-width-1 rounded mb-2">
                    <div class="d-flex flex-fill my-1">
                        <div class="form-check-label d-flex me-2">
                            <i class="ph-sun ph-lg me-3"></i>
                            <div>
                                <span class="fw-bold">Light theme</span>
                                <div class="fs-sm text-muted">Set light theme or reset to default</div>
                            </div>
                        </div>
                        <input type="radio" class="form-check-input cursor-pointer ms-auto" name="main-theme"
                            value="light" checked>
                    </div>
                </label>

                <label class="list-group-item list-group-item-action form-check border-width-1 rounded mb-2">
                    <div class="d-flex flex-fill my-1">
                        <div class="form-check-label d-flex me-2">
                            <i class="ph-moon ph-lg me-3"></i>
                            <div>
                                <span class="fw-bold">Dark theme</span>
                                <div class="fs-sm text-muted">Switch to dark theme</div>
                            </div>
                        </div>
                        <input type="radio" class="form-check-input cursor-pointer ms-auto" name="main-theme"
                            value="dark">
                    </div>
                </label>

                <label class="list-group-item list-group-item-action form-check border-width-1 rounded mb-0">
                    <div class="d-flex flex-fill my-1">
                        <div class="form-check-label d-flex me-2">
                            <i class="ph-monitor ph-lg me-3"></i>
                            <div>
                                <span class="fw-bold">Auto theme</span>
                                <div class="fs-sm text-muted">Set theme based on system mode</div>
                            </div>
                        </div>
                        <input type="radio" class="form-check-input cursor-pointer ms-auto" name="main-theme"
                            value="auto">
                    </div>
                </label>
            </div>
        </div>

        <div class="border-top text-center py-2 px-3">
            <a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov"
                class="btn btn-yellow fw-semibold w-100 my-1" target="_blank">
                <i class="ph-shopping-cart me-2"></i>
                Purchase Limitless
            </a>
        </div>
    </div>
    <!-- /demo config -->
    @livewireScripts
    {{-- @stack('js') --}}
</body>

</html>