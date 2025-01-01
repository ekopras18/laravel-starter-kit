<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    <!-- Global stylesheets & Js -->
    @vite([
        'resources/css/assets.css',
        'resources/js/assets.js',
    ])

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
            <a href="#" class="d-inline-flex align-items-center">
                <img src="{{ asset('assets/images/logo_icon.svg') }}" alt="">
                <img src="{{ asset('assets/images/logo_text_light.svg') }}" class="d-none d-sm-inline-block h-16px ms-3"
                     alt="">
            </a>
        </div>

        <ul class="nav flex-row">
            <li class="nav-item d-lg-none">
                <a href="#navbar_search" class="navbar-nav-link navbar-nav-link-icon rounded-pill"
                   data-bs-toggle="collapse">
                    <i class="ph-magnifying-glass"></i>
                </a>
            </li>

            <li class="nav-item nav-item-dropdown-lg dropdown">
                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded-pill" data-bs-toggle="offcanvas"
                   data-bs-target="#demo_config">
                    <i class="ph-swatches"></i>
                </a>
            </li>

            <li class="nav-item nav-item-dropdown-lg dropdown ms-lg-2">
                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded-pill" data-bs-toggle="dropdown"
                   data-bs-auto-close="outside">
                    <i class="ph-chats"></i>
                    <span
                        class="badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top zindex-1 rounded-pill mt-1 me-1">8</span>
                </a>

                <div class="dropdown-menu wmin-lg-400 p-0">
                    <div class="d-flex align-items-center p-3">
                        <h6 class="mb-0">Messages</h6>
                        <div class="ms-auto">
                            <a href="#" class="text-body">
                                <i class="ph-plus-circle"></i>
                            </a>
                            <a href="#search_messages" class="collapsed text-body ms-2" data-bs-toggle="collapse">
                                <i class="ph-magnifying-glass"></i>
                            </a>
                        </div>
                    </div>

                    <div class="collapse" id="search_messages">
                        <div class="px-3 mb-2">
                            <div class="form-control-feedback form-control-feedback-start">
                                <input type="text" class="form-control" placeholder="Search messages">
                                <div class="form-control-feedback-icon">
                                    <i class="ph-magnifying-glass"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown-menu-scrollable pb-2">
                        <a href="#" class="dropdown-item align-items-start text-wrap py-2">
                            <div class="status-indicator-container me-3">
                                <img src="{{ asset('assets/images/demo/users/face10.jpg') }}"
                                     class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-warning"></span>
                            </div>

                            <div class="flex-1">
                                <span class="fw-semibold">James Alexander</span>
                                <span class="text-muted float-end fs-sm">04:58</span>
                                <div class="text-muted">who knows, maybe that would be the best thing for me...</div>
                            </div>
                        </a>

                        <a href="#" class="dropdown-item align-items-start text-wrap py-2">
                            <div class="status-indicator-container me-3">
                                <img src="{{ asset('assets/images/demo/users/face3.jpg') }}"
                                     class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </div>

                            <div class="flex-1">
                                <span class="fw-semibold">Margo Baker</span>
                                <span class="text-muted float-end fs-sm">12:16</span>
                                <div class="text-muted">That was something he was unable to do because...</div>
                            </div>
                        </a>

                        <a href="#" class="dropdown-item align-items-start text-wrap py-2">
                            <div class="status-indicator-container me-3">
                                <img src="{{ asset('assets/images/demo/users/face24.jpg') }}"
                                     class="w-40px h-40px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </div>
                            <div class="flex-1">
                                <span class="fw-semibold">Jeremy Victorino</span>
                                <span class="text-muted float-end fs-sm">22:48</span>
                                <div class="text-muted">But that would be extremely strained and suspicious...</div>
                            </div>
                        </a>
                    </div>

                    <div class="d-flex border-top py-2 px-3">
                        <a href="#" class="text-body">
                            <i class="ph-checks me-1"></i>
                            Dismiss all
                        </a>
                        <a href="#" class="text-body ms-auto">
                            View all
                            <i class="ph-arrow-circle-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </li>
        </ul>

        <div class="navbar-collapse justify-content-center flex-lg-1 order-2 order-lg-1 collapse" id="navbar_search">
            <div class="navbar-search flex-fill position-relative mt-2 mt-lg-0 mx-lg-3">
                <div class="form-control-feedback form-control-feedback-start flex-grow-1" data-color-theme="dark">
                    <input type="text" class="form-control bg-transparent rounded-pill" placeholder="Search"
                           data-bs-toggle="dropdown">
                    <div class="form-control-feedback-icon">
                        <i class="ph-magnifying-glass"></i>
                    </div>
                    <div class="dropdown-menu w-100" data-color-theme="light">
                        <button type="button" class="dropdown-item">
                            <div class="text-center w-32px me-3">
                                <i class="ph-magnifying-glass"></i>
                            </div>
                            <span>Search <span class="fw-bold">"in"</span> everywhere</span>
                        </button>

                        <div class="dropdown-divider"></div>

                        <div class="dropdown-menu-scrollable-lg">
                            <div class="dropdown-header">
                                Contacts
                                <a href="#" class="float-end">
                                    See all
                                    <i class="ph-arrow-circle-right ms-1"></i>
                                </a>
                            </div>

                            <div class="dropdown-item cursor-pointer">
                                <div class="me-3">
                                    <img src="{{ asset('assets/images/demo/users/face3.jpg') }}"
                                         class="w-32px h-32px rounded-pill" alt="">
                                </div>

                                <div class="d-flex flex-column flex-grow-1">
                                    <div class="fw-semibold">Christ
                                        <mark>in</mark>
                                        e Johnson
                                    </div>
                                    <span class="fs-sm text-muted">c.johnson@awesomecorp.com</span>
                                </div>

                                <div class="d-inline-flex">
                                    <a href="#" class="text-body ms-2">
                                        <i class="ph-user-circle"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="dropdown-item cursor-pointer">
                                <div class="me-3">
                                    <img src="{{ asset('assets/images/demo/users/face24.jpg') }}"
                                         class="w-32px h-32px rounded-pill" alt="">
                                </div>

                                <div class="d-flex flex-column flex-grow-1">
                                    <div class="fw-semibold">Cl
                                        <mark>in</mark>
                                        ton Sparks
                                    </div>
                                    <span class="fs-sm text-muted">c.sparks@awesomecorp.com</span>
                                </div>

                                <div class="d-inline-flex">
                                    <a href="#" class="text-body ms-2">
                                        <i class="ph-user-circle"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <a href="#"
                   class="navbar-nav-link align-items-center justify-content-center w-40px h-32px rounded-pill position-absolute end-0 top-50 translate-middle-y p-0 me-1"
                   data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <i class="ph-faders-horizontal"></i>
                </a>

                <div class="dropdown-menu w-100 p-3">
                    <div class="d-flex align-items-center mb-3">
                        <h6 class="mb-0">Search options</h6>
                        <a href="#" class="text-body rounded-pill ms-auto">
                            <i class="ph-clock-counter-clockwise"></i>
                        </a>
                    </div>

                    <div class="mb-3">
                        <label class="d-block form-label">Category</label>
                        <label class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" checked>
                            <span class="form-check-label">Invoices</span>
                        </label>
                        <label class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input">
                            <span class="form-check-label">Files</span>
                        </label>
                        <label class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input">
                            <span class="form-check-label">Users</span>
                        </label>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Addition</label>
                        <div class="input-group">
                            <select class="form-select w-auto flex-grow-0">
                                <option value="1" selected>has</option>
                                <option value="2">has not</option>
                            </select>
                            <input type="text" class="form-control" placeholder="Enter the word(s)">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <div class="input-group">
                            <select class="form-select w-auto flex-grow-0">
                                <option value="1" selected>is</option>
                                <option value="2">is not</option>
                            </select>
                            <select class="form-select">
                                <option value="1" selected>Active</option>
                                <option value="2">Inactive</option>
                                <option value="3">New</option>
                                <option value="4">Expired</option>
                                <option value="5">Pending</option>
                            </select>
                        </div>
                    </div>

                    <div class="d-flex">
                        <button type="button" class="btn btn-light">Reset</button>

                        <div class="ms-auto">
                            <button type="button" class="btn btn-light">Cancel</button>
                            <button type="button" class="btn btn-primary ms-2">Apply</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                        <img src="{{ asset('assets/images/demo/users/face11.jpg') }}" class="w-32px h-32px rounded-pill"
                             alt="">
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
                    <a href="#" class="dropdown-item">
                        <i class="ph-gear me-2"></i>
                        Account settings
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ph-activity me-2"></i>
                        Activity
                    </a>
                    <a href="#" class="dropdown-item">
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

                    <!-- Main -->
                    <li class="nav-item-header pt-0">
                        <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Main</div>
                        <i class="ph-dots-three sidebar-resize-show"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <i class="ph-house"></i>
                            <span>
                                Dashboard
                                <span class="d-block fw-normal opacity-50">No pending orders</span>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="ph-list-numbers"></i>
                            <span>Changelog</span>
                            <span class="badge bg-primary align-self-center rounded-pill ms-auto">4.0</span>
                        </a>
                    </li>

                    <!-- Layout -->
                    <li class="nav-item-header">
                        <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Layout</div>
                        <i class="ph-dots-three sidebar-resize-show"></i>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="ph-arrow-elbow-down-right"></i> <span>Menu levels</span></a>
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
                        <a href="#" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <span class="breadcrumb-item active">Dashboard</span>
                    </div>

                    <a href="#breadcrumb_elements"
                       class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                       data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>

                <div class="collapse d-lg-block ms-lg-auto" id="breadcrumb_elements">
                    <div class="d-lg-flex mb-2 mb-lg-0">
                        <a href="#"
                           class="d-flex align-items-center text-body py-2 me-2">
                            <i class="ph-question me-2"></i>
                            FAQ (Frequently Asked Question)
                        </a>
                        <a href="#"
                           class="d-flex align-items-center text-body py-2">
                            <i class="ph-file-text me-2"></i>
                            Docs
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
                {{ $slot }}
            </div>
            <!-- /content area -->

            <!-- Footer -->
            <div class="navbar navbar-sm navbar-footer border-top">
                <div class="container-fluid">
                    <span>&copy; 2025 <a href="#">PT Optima Multi Sinergi</a></span>

                    <ul class="nav">
                        <li class="nav-item">
                            <a href="https://kopyov.ticksy.com/" class="navbar-nav-link navbar-nav-link-icon rounded"
                               target="_blank">
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
<x-notification-component />
<!-- /notifications -->

<!-- theme toggles -->
<x-theme-toggles-component />
<!-- /theme toggles -->

</body>
</html>
