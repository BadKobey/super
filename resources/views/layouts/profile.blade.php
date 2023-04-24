<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MAGELLAN-SERVICE</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Tromic car accessories bootstrap 5 template is an awesome website template for any modern car accessories shop.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />

    <!-- CSS
    ============================================ -->

    <!-- Vendor CSS (Contain Bootstrap, Icon Fonts) -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/Pe-icon-7-stroke.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/css/vendor/font-awesome.min.css')}}" />
    <!-- Plugin CSS (Global Plugins Files) -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/magnific-popup.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/plugins/ion.rangeSlider.min.css')}}" />

    <!-- Minify Version -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/plugins.min.css"> -->

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- <link rel="stylesheet" href="assets/css/style.min.css"> -->

</head>

<body>
    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>
    <div class="main-wrapper">

        <!-- Begin Main Header Area -->
        <header class="main-header-area">
            <div class="header-top border-bottom d-none d-lg-block">
                <div class="container py-2">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="header-top-left">
                                <ul class="dropdown-wrap text-matterhorn">
                                    <li>
                                        Тел:
                                        <a href="tel://88610000000">8 (861) 000-00-00</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="header-top-right text-matterhorn">
                            <p class="shipping mb-0">Наш договор <span> оферта.</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle header-sticky py-6 py-lg-0">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="header-middle-wrap position-relative">

                                <a href="index.html" class="header-logo">
                                    <img src="{{asset('assets/images/logo.png')}}" alt="Header Logo">

                                </a>

                                <div class="main-menu d-none d-lg-block">
                                    <nav class="main-nav">
                                        <ul>
                                            <li>
                                                <a href="contact.html">Главная</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header-right">
                                    <ul>
                                        <li class="dropdown d-none d-lg-block">
                                            <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button" id="settingButton" data-bs-toggle="dropdown" aria-label="setting" aria-expanded="false">
                                                <i class="pe-7s-user"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="settingButton">
                                                <li><a class="dropdown-item" href="my-account.html">Мой профиль</a></li>
                                                <li><a class="dropdown-item" href="login-register.html">Логин | Регистрация</a></li>
                                            </ul>
                                        </li>
                                        <li class="minicart-wrap me-3 me-lg-0">
                                            <a href="#miniCart" class="minicart-btn toolbar-btn">
                                                <i class="pe-7s-shopbag"></i>
                                                <span class="quantity">5</span>
                                            </a>
                                        </li>
                                        <li class="mobile-menu_wrap d-block d-lg-none">
                                            <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn pl-0">
                                                <i class="pe-7s-menu"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu_wrapper" id="mobileMenu">
                <div class="offcanvas-body">
                    <div class="inner-body">
                        <div class="offcanvas-top">
                            <a href="#" class="button-close"><i class="pe-7s-close"></i></a>
                        </div>
                        <div class="offcanvas-user-info text-center px-6 pb-5">

                            <ul class="dropdown-wrap justify-content-center text-silver">
                                <li class="dropdown dropup">
                                    <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button" id="settingButtonTwo" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="pe-7s-users"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="settingButtonTwo">
                                        <li><a class="dropdown-item" href="my-account.html">My account</a></li>
                                        <li><a class="dropdown-item" href="login-register.html">Login | Register</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="offcanvas-menu_area">
                            <nav class="offcanvas-navigation">
                                <ul class="mobile-menu">



                                    <li>
                                        <a href="contact.html">
                                            <span class="mm-text">Главная</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" data-tippy="Close" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-search">
                                <span class="searchbox-info">Start typing and press Enter to search or ESC to close</span>
                                <form action="#" class="hm-searchbox">
                                    <input type="text" name="Search entire store here..." value="Search entire store here..." onblur="if(this.value==''){this.value='Search entire store here...'}" onfocus="if(this.value=='Search entire store here...'){this.value=''}">
                                    <button class="search-btn" type="submit" aria-label="searchbtn"><i class="pe-7s-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-minicart_wrapper" id="miniCart">
                <div class="offcanvas-body">
                    <div class="minicart-content">
                        <div class="minicart-heading">
                            <h4 class="mb-0">Shopping Cart</h4>
                            <a href="#" class="button-close"><i class="pe-7s-close" data-tippy="Close" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder"></i></a>
                        </div>
                        <ul class="minicart-list">
                            <!-- <li class="minicart-product">
                                <a class="product-item_remove" href="#"><i
                                class="pe-7s-trash" data-tippy="Wanna Remove?" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder"></i></a>
                                <a href="shop.html" class="product-item_img">
                                    <img class="img-full" src="assets/images/product/small-size/1-1-70x70.png" alt="Product Image">
                                </a>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="shop.html">Tail Light</a>
                                    <span class="product-item_quantity">1 x $80.00</span>
                                </div>
                            </li> -->

                        </ul>
                    </div>
                    <!-- <div class="minicart-item_total">
                        <span>Subtotal</span>
                        <span class="ammount">$240.00</span>
                    </div> -->
                    <div class="group-btn_wrap d-grid gap-2">
                        <a href="cart.html" class="btn btn-dark btn-primary-hover">Корзина</a>
                        <a href="checkout.html" class="btn btn-dark btn-primary-hover">Оформить заказ</a>
                    </div>
                </div>
            </div>
            <div class="global-overlay"></div>
        </header>

        <main class="main-content">
            <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{asset('assets/images/breadcrumb/bg/1-1-1920x400.jpg')}}">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-lg-12">
                            <div class="breadcrumb-item text-night-rider">
                                <h2 class="breadcrumb-heading">Здесь будут новости компании</h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="account-page-area section-space-y-axis-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <ul class="nav myaccount-tab-trigger" id="account-page-tab" role="tablist">
                            <li class="nav-item">
                                    <a class="nav-link active" id="account-dashboard-tab" data-bs-toggle="tab" href="{{url('/profile')}}" role="tab" aria-controls="account-dashboard" aria-selected="true">пользователь</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="account-logout-tab" href="{{url('profile/products')}}" role="tab" aria-selected="false">Товары</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="account-logout-tab" href="{{url('profile/organizations')}}" role="tab" aria-selected="false">Организации</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="account-logout-tab" href="{{url('profile/transports')}}" role="tab" aria-selected="false">ТС</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-9">
                            @yield('profile-index')
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Main Header Area End Here -->

        <!-- Begin Main Content Area -->




        <!-- Main Content Area End Here -->

        <!-- Begin Footer Area -->
        <div class="footer-area">
            <div class="footer-top section-space-y-axis-100 text-lavender" data-bg-image="{{asset('assets/images/background-img/1-4-1920x419.png')}}">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="widget-item">
                                <div class="footer-logo pb-4">
                                    <a href="index.html">
                                        <img src="{{asset('assets/images/logo.png')}}" alt="Logo">
                                    </a>
                                </div>
                                <p class="short-desc mb-2">Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod tempor incidi ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <div class="social-link pt-2">
                                    <ul>
                                        <li>
                                            <a href="#" data-tippy="Twitter" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-tippy="Tumblr" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="fa fa-tumblr"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-tippy="Facebook" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-tippy="Instagram" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>




            <div class="footer-bottom bg-midnight-express py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="copyright">
                                <span class="copyright-text">© 2021 Tromic Made with <i class="fa fa-heart text-danger"></i> by  <a href="https://hasthemes.com/" rel="noopener" target="_blank">HasThemes</a> </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Area End Here -->




        <!-- Begin Scroll To Top -->
        <a class="scroll-to-top" href="">
            <i class="fa fa-chevron-up"></i>
        </a>
        <!-- Scroll To Top End Here -->

    </div>

    <!-- Global Vendor, plugins JS -->

    <!-- JS Files
    ============================================ -->
    <!-- Global Vendor, plugins JS -->

    <!-- Vendor JS -->
    <script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>

    <!--Plugins JS-->
    <script src="{{asset('assets/js/plugins/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.nice-select.js')}}"></script>
    <script src="{{asset('assets/js/plugins/parallax.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/tippy.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/ion.rangeSlider.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/mailchimp-ajax.js')}}"></script>

    <!-- Minify Version -->
    <!-- <script src="assets/js/vendor.min.js"></script> -->
    <!-- <script src="assets/js/plugins.min.js"></script> -->

    <!--Main JS (Common Activation Codes)-->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <!-- <script src="assets/js/main.min.js"></script> -->

</body>

</html>
