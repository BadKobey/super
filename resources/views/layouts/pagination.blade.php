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
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico" />

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

    @if ($paginator->hasPages())

    <div class="pagination-area pt-10">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
                <li class="page-item">
                    @if ($paginator->onFirstPage())
                    <a class="page-link" href="#" aria-label="Previous">«</a>
                    @else
                    <a class="page-link" href="{{$paginator->previousPageUrl()}}" aria-label="Previous">«</a>
                    @endif
                </li>
                @foreach ($elements as $element)
                @if (is_string($element))
                <a href="">{{($element)}}</a>
                @endif
                @if (is_array($element))
                @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                <li class="page-item active"><a class="page-link" href="#">{{$page}}</a></li>


                @else
                <li class="page-item "><a class="page-link" href="{{ $url }}">{{$page}}</a></li>
                @endif
                @endforeach
                @endif

                @endforeach

                @if ($paginator->hasMorepages())

                <li class="page-item">
                    <a class="page-link" href="{{$paginator->nextPageUrl()}}" aria-label="Next">»</a>
                </li>
                @else
                <a class="page-link" href="#" aria-label="Next"> » </a>
                @endif

    </div>
    @endif


    </ul>
    </nav>
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
