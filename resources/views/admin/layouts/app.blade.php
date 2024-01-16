<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Mofi admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Mofi admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <title>
        @if (isset($title))
            {{ $title }}
        @endif
    </title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/feather-icon.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/css/vendors/date-range-picker/flatpickr.min.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('assets/css/color-1.css" media="screen') }}">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">

    @if (isset($customCss))
        {{ $customCss }}
    @endif
</head>

<body>
    <div class="loader-wrapper">
        <div class="loader loader-1">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>
            <div class="loader-inner-1"></div>
        </div>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <div class="page-header row">
            <div class="header-logo-wrapper col-auto">
                <div class="logo-wrapper"><a href="{{ route('admin.dashboard') }}"><img class="img-fluid for-light"
                            src="{{ asset('assets/images/logo/logo.png') }}" alt="" /><img
                            class="img-fluid for-dark" src="{{ asset('assets/images/logo/logo_light.png') }}"
                            alt="" /></a></div>
            </div>
            <div class="col-4 col-xl-4 page-title">
                <h4 class="f-w-700">
                    @if (isset($pageTitle))
                        {{ $pageTitle }}
                    @else
                        Default dashboard
                    @endif
                </h4>
                <nav>
                    <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"> <i data-feather="home">
                                </i></a></li>
                        @if (isset($subPageTitle))
                            {{ $subPageTitle }}
                        @else
                            <li class="breadcrumb-item f-w-400">Dashboard</li>
                        @endif


                    </ol>
                </nav>
            </div>
            <!-- Page Header Start-->
            <div class="header-wrapper col m-0">
                <div class="row">
                    <form class="form-inline search-full col" action="#" method="get">
                        <div class="form-group w-100">
                            <div class="Typeahead Typeahead--twitterUsers">
                                <div class="u-posRelative">
                                    <input class="demo-input Typeahead-input form-control-plaintext w-100"
                                        type="text" placeholder="Search Mofi .." name="q" title=""
                                        autofocus>
                                    <div class="spinner-border Typeahead-spinner" role="status"><span
                                            class="sr-only">Loading...</span>
                                    </div><i class="close-search" data-feather="x"></i>
                                </div>
                                <div class="Typeahead-menu"></div>
                            </div>
                        </div>
                    </form>
                    <div class="header-logo-wrapper col-auto p-0">
                        <div class="logo-wrapper"><a href="{{ route('admin.dashboard') }}"><img class="img-fluid"
                                    src="{{ asset('assets/images/logo/logo.png') }}" alt=""></a></div>
                        <div class="toggle-sidebar">
                            <svg class="stroke-icon sidebar-toggle status_toggle middle">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#toggle-icon') }}"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="nav-right col-xxl-8 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
                        <ul class="nav-menus">
                            <li> <span class="header-search">
                                    <svg>
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#search') }}"></use>
                                    </svg></span></li>
                            {{-- <li>
                                <div class="form-group w-100">
                                    <div class="Typeahead Typeahead--twitterUsers">
                                        <div class="u-posRelative d-flex align-items-center">
                                            <svg class="search-bg svg-color">
                                                <use href="{{ asset('assets/svg/icon-sprite.svg#search') }}"></use>
                                            </svg>
                                            <input class="demo-input py-0 Typeahead-input form-control-plaintext w-100"
                                                type="text" placeholder="Search Mofi .." name="q"
                                                title="">
                                        </div>
                                    </div>
                                </div>
                            </li> --}}
                            {{-- <li class="onhover-dropdown">
                                <div class="notification-box">
                                    <svg>
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#notification') }}"></use>
                                    </svg><span class="badge rounded-pill badge-primary">4 </span>
                                </div>
                                <div class="onhover-show-div notification-dropdown">
                                    <h5 class="f-18 f-w-600 mb-0 dropdown-title">Notitications </h5>
                                    <ul class="notification-box">
                                        <li class="d-flex">
                                            <div class="flex-shrink-0 bg-light-primary"><img
                                                    src="{{ asset('assets/images/dashboard/icon/wallet.png') }}"
                                                    alt="Wallet">
                                            </div>
                                            <div class="flex-grow-1"> <a href="private-chat.html">
                                                    <h6>New daily offer added</h6>
                                                </a>
                                                <p>New user-only offer added</p>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="flex-shrink-0 bg-light-info"><img
                                                    src="{{ asset('assets/images/dashboard/icon/shield-dne.png') }}"
                                                    alt="Shield-dne"></div>
                                            <div class="flex-grow-1"> <a href="private-chat.html">
                                                    <h6>Product Evaluation</h6>
                                                </a>
                                                <p>Changed to a new workflow</p>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="flex-shrink-0 bg-light-warning"><img
                                                    src="{{ asset('assets/images/dashboard/icon/graph.png') }}"
                                                    alt="Graph">
                                            </div>
                                            <div class="flex-grow-1"> <a href="private-chat.html">
                                                    <h6>Return of a Product</h6>
                                                </a>
                                                <p>452 items were returned</p>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="flex-shrink-0 bg-light-tertiary"><img
                                                    src="{{ asset('assets/images/dashboard/icon/ticket-star.png') }}"
                                                    alt="Ticket-star"></div>
                                            <div class="flex-grow-1"> <a href="private-chat.html">
                                                    <h6>Recently Paid</h6>
                                                </a>
                                                <p>Mastercard payment of $343</p>
                                            </div>
                                        </li>
                                        <li><a class="f-w-700" href="private-chat.html">Check all </a></li>
                                    </ul>
                                </div>
                            </li> --}}
                            {{-- <li class="onhover-dropdown">
                                <svg>
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#header-bookmark') }}"></use>
                                </svg>
                                <div class="onhover-show-div bookmark-flip">
                                    <div class="flip-card">
                                        <div class="flip-card-inner">
                                            <div class="front">
                                                <h5 class="f-18 f-w-600 mb-0 dropdown-title">Bookmark</h5>
                                                <ul class="bookmark-dropdown">
                                                    <li>
                                                        <div class="row">
                                                            <div class="col-4 text-center">
                                                                <div class="bookmark-content">
                                                                    <div class="bookmark-icon bg-light-primary"><i
                                                                            class="stroke-primary"
                                                                            data-feather="file-text"></i></div><span
                                                                        class="font-primary">Forms</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-4 text-center">
                                                                <div class="bookmark-content">
                                                                    <div class="bookmark-icon bg-light-secondary"><i
                                                                            class="stroke-secondary"
                                                                            data-feather="user"></i></div><span
                                                                        class="font-secondary">Profile</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-4 text-center">
                                                                <div class="bookmark-content">
                                                                    <div class="bookmark-icon bg-light-warning"><i
                                                                            class="stroke-warning"
                                                                            data-feather="server"></i></div><span
                                                                        class="font-warning">Tables</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="text-center"><a class="flip-btn f-w-700"
                                                            id="flip-btn" href="javascript:void(0)">Add New
                                                            Bookmark</a></li>
                                                </ul>
                                            </div>
                                            <div class="back">
                                                <ul>
                                                    <li>
                                                        <div class="bookmark-dropdown flip-back-content">
                                                            <input type="text" placeholder="search...">
                                                        </div>
                                                    </li>
                                                    <li><a class="f-w-700 d-block flip-back" id="flip-back"
                                                            href="javascript:void(0)">Back</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li> --}}
                            <li>
                                <div class="mode">
                                    <svg>
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#moon') }}"></use>
                                    </svg>
                                </div>
                            </li>
                            {{-- <li class="onhover-dropdown">
                                <div class="notification-box">
                                    <svg>
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#header-message') }}"></use>
                                    </svg><span class="badge rounded-pill badge-info">3 </span>
                                </div>
                                <div class="onhover-show-div notification-dropdown">
                                    <h5 class="f-18 f-w-600 mb-0 dropdown-title">Messages </h5>
                                    <ul class="messages">
                                        <li class="d-flex b-light1-primary gap-2">
                                            <div class="flex-shrink-0"><img
                                                    src="{{ asset('assets/images/dashboard-2/user/1.png') }}"
                                                    alt="Graph">
                                            </div>
                                            <div class="flex-grow-1"> <a href="private-chat.html">
                                                    <h6 class="font-primary f-w-600">Hackett Yessenia</h6>
                                                </a>
                                                <p>Hello Miss...&#128522;</p>
                                            </div><span>10 min.</span>
                                        </li>
                                        <li class="d-flex b-light1-secondary gap-2">
                                            <div class="flex-shrink-0"><img
                                                    src="{{ asset('assets/images/dashboard-2/user/2.png') }}"
                                                    alt="Graph">
                                            </div>
                                            <div class="flex-grow-1"> <a href="private-chat.html">
                                                    <h6 class="font-secondary f-w-600">schneider Adan</h6>
                                                </a>
                                                <p>Wishing You a Happy Birthday Dear.. 🥳&#127882;</p>
                                            </div><span>25 min.</span>
                                        </li>
                                        <li class="d-flex b-light1-success gap-2">
                                            <div class="flex-shrink-0"><img
                                                    src="{{ asset('assets/images/dashboard-2/user/3.png') }}"
                                                    alt="Graph">
                                            </div>
                                            <div class="flex-grow-1"> <a href="private-chat.html">
                                                    <h6 class="font-success f-w-600">Mahdi Gholizadeh</h6>
                                                </a>
                                                <p>Hello Dear!! This Theme Is Very beautiful</p>
                                            </div><span>1 hours</span>
                                        </li>
                                        <li><a class="f-w-700" href="email-application.html">Check all</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="cart-nav onhover-dropdown">
                                <div class="cart-box">
                                    <svg>
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-ecommerce') }}"></use>
                                    </svg>
                                </div>
                                <div class="cart-dropdown onhover-show-div">
                                    <h5 class="f-18 f-w-600 mb-0 dropdown-title">Cart</h5>
                                    <ul>
                                        <li>
                                            <div class="d-flex"><img class="img-fluid b-r-5 me-3 img-60"
                                                    src="{{ asset('assets/images/other-images/cart-img.jpg') }}"
                                                    alt="">
                                                <div class="flex-grow-1"><span class="f-w-600">Furniture Chair for
                                                        Home</span>
                                                    <div class="qty-box">
                                                        <div class="input-group"><span class="input-group-prepend">
                                                                <button class="btn quantity-left-minus" type="button"
                                                                    data-type="minus" data-field="">-</button></span>
                                                            <input class="form-control input-number" type="text"
                                                                name="quantity" value="1"><span
                                                                class="input-group-prepend">
                                                                <button class="btn quantity-right-plus" type="button"
                                                                    data-type="plus" data-field="">+</button></span>
                                                        </div>
                                                    </div>
                                                    <h6 class="font-primary">$500</h6>
                                                </div>
                                                <div class="close-circle"><a class="bg-danger" href="#"><i
                                                            data-feather="x"></i></a></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex"><img class="img-fluid b-r-5 me-3 img-60"
                                                    src="{{ asset('assets/images/other-images/table-img.jpg') }}"
                                                    alt="">
                                                <div class="flex-grow-1"><span class="f-w-600">Furniture Table for
                                                        Office</span>
                                                    <div class="qty-box">
                                                        <div class="input-group"><span class="input-group-prepend">
                                                                <button class="btn quantity-left-minus" type="button"
                                                                    data-type="minus" data-field="">-</button></span>
                                                            <input class="form-control input-number" type="text"
                                                                name="quantity" value="1"><span
                                                                class="input-group-prepend">
                                                                <button class="btn quantity-right-plus" type="button"
                                                                    data-type="plus" data-field="">+</button></span>
                                                        </div>
                                                    </div>
                                                    <h6 class="font-primary">$500.00</h6>
                                                </div>
                                                <div class="close-circle"><a class="bg-danger" href="#"><i
                                                            data-feather="x"></i></a></div>
                                            </div>
                                        </li>
                                        <li class="total">
                                            <h6 class="mb-0">Order Total : <span
                                                    class="f-w-600 f-right">$1000.00</span></h6>
                                        </li>
                                        <li class="text-center"><a class="d-block mb-3 view-cart f-w-700"
                                                href="cart.html">Go to your
                                                cart</a><a class="btn btn-primary view-checkout"
                                                href="checkout.html">Checkout</a></li>
                                    </ul>
                                </div>
                            </li> --}}
                            <li class="profile-nav onhover-dropdown px-0 py-0">
                                <div class="d-flex profile-media align-items-center">
                                    <div class="flex-grow-1"><span>{{ auth()->user()->name }}</span>

                                    </div>
                                </div>
                                <ul class="profile-dropdown onhover-show-div">
                                    <li><a href="{{ route('profile.edit') }}"><span> <i
                                                    data-feather="edit"></i>Profile
                                            </span></a></li>

                                    <li>
                                        {{-- <a href="login.html"><i data-feather="log-in"> </i><span>Logout</span></a> --}}
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <a href="#"
                                                onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                <i data-feather="log-in"></i> {{ __('Log Out') }}
                                            </a>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <script class="result-template" type="text/x-handlebars-template">
              <div class="ProfileCard u-cf">
              <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
              <div class="ProfileCard-details">
              <div class="ProfileCard-realName">ss</div>
              </div>
              </div>
            </script>
                    <script class="empty-template"
            type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
                </div>
            </div>
            <!-- Page Header Ends                              -->
        </div>
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            @include('admin.layouts.sidebar')
            {{ $slot }}
            <!-- footer start-->
            {{-- <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div
                            class="col-md-12 footer-copyright d-flex flex-wrap align-items-center justify-content-between">
                            <p class="mb-0 f-w-600">Copyright 2023 © Mofi theme by pixelstrap </p>
                            <p class="mb-0 f-w-600">Hand crafted & made with
                                <svg class="footer-icon">
                                    <use href="../assets/svg/icon-sprite.svg#footer-heart"> </use>
                                </svg>
                            </p>
                        </div>
                    </div>
                </div>
            </footer> --}}
        </div>
    </div>
    <!-- latest jquery-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- scrollbar js-->
    <script src="{{ asset('assets/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('assets/js/scrollbar/custom.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('assets/js/config.js') }}"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('assets/js/sidebar-pin.js') }}"></script>
    <script src="{{ asset('assets/js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick/slick.js') }}"></script>
    <script src="{{ asset('assets/js/header-slick.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/notify/bootstrap-notify.min.js') }}"></script>
    <!-- calendar js-->
    <script src="{{ asset('assets/js/dashboard/default.js') }}"></script>
    <script src="{{ asset('assets/js/notify/index.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom1.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-range-picker/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-range-picker/datepicker-range-custom.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/handlebars.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/typeahead.custom.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead-search/handlebars.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead-search/typeahead-custom.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
    <script src="{{ asset('assets/js/animation/wow/wow.min.js') }}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/theme-customizer/customizer.js') }}"></script>
    <!-- Plugin used-->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        new WOW().init();
    </script>
    @if (isset($customJs))
        {{ $customJs }}
    @endif
</body>

</html>
