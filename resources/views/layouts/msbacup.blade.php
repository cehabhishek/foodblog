<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Zaira - News Magazine HTML Template</title>
    <meta name="description" content="Zaira - News Magazine HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
</head>

<body>

    <!-- preloader -->
    <div id="preloader">
        <div class="loader-inner">
            <div id="loader">
                <h2 id="bg-loader">zaira<span>.</span></h2>
                <h2 id="fg-loader">zaira<span>.</span></h2>
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- Dark/Light-toggle -->
    <div class="darkmode-trigger">
        <label class="modeSwitch">
            <input type="checkbox">
            <span class="icon"></span>
        </label>
    </div>
    <!-- Dark/Light-toggle-end -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <header>
        <div id="header-fixed-height"></div>
        <div class="header-top-wrap">
            <div class="container-fluid p-0">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="header-top-menu">
                            <ul class="list-wrap">
                                <li><a href="contact.html">Forum</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html">Faq’s</a></li>
                                <li><a href="blog.html">All Recipes</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="header-top-social">
                            <h5 class="title">Follow Us:</h5>
                            <ul class="list-wrap">
                                <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="menu-area">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-12">
                        <div class="menu-wrap">
                            <div class="row align-items-center g-0">
                                <div class="col-xl-5">
                                    <div class="header-left-side">
                                        <div class="offcanvas-toggle">
                                            <a href="javascript:void(0)" class="menu-tigger">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </a>
                                        </div>
                                        <div class="navbar-wrap main-menu d-none d-xl-flex">
                                            <ul class="navigation">
                                                <li class="active"><a href="{{ route('index') }}">Home</a></li>
                                                {{-- getSubCategories->count() --}}
                                                {{-- <li><a href="about.html">About Us</a></li> --}}
                                                @foreach ($categories as $category)
                                                    <li
                                                        class="@if ($category->getSubCategories->count() > 1) menu-item-has-children @endif">
                                                        <a href="{{ route('cat.blog.list', ['cat_id' => $category->id, 'cat_slug' => Str::slug($category->name)]) }}">{{ $category->name }}</a>
                                                        @if ($category->getSubCategories->count() > 1)

                                                        <ul class="sub-menu">
                                                            @foreach ($category->getSubCategories as $subcategory)
                                                            <li><a href="{{ route('sub.cat.blog.list', ['sub_cat_id' => $subcategory->id, 'sub_cat_slug' => Str::slug($subcategory->name)]) }}">{{ $subcategory->name }}</a></li>
                                                            @endforeach
                                                            {{-- <li class="menu-item-has-children"><a href="#">Single
                                                                    Post Layout</a>
                                                                <ul class="sub-menu">
                                                                    <li><a href="blog-details.html">Single post 01</a>
                                                                    </li>
                                                                    <li><a href="blog-details-two.html">Single post
                                                                            02</a></li>
                                                                </ul>
                                                            </li> --}}

                                                        </ul>
                                                    </li>
                                                        @endif
                                                @endforeach

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-4">
                                    <div class="logo text-center">
                                        <a href="{{ route('index') }}"><img src="{{asset('frontend/img/logo/logo.png')}}" alt="Logo"></a>
                                    </div>
                                    <div class="logo d-none text-center">
                                        <a href="{{ route('index') }}"><img src="{{asset('frontend/img/logo/w_logo.png')}}" alt="Logo"></a>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-9 col-md-8">
                                    <div class="header-right-side">
                                        <div class="header-search-wrap">
                                            <form action="#">
                                                <input type="text" placeholder="Search here . . .">
                                                <button type="submit"><i class="flaticon-search"></i></button>
                                            </form>
                                        </div>
                                        {{-- <div class="header-action d-none d-md-block">
                                            <ul class="list-wrap">
                                                <li class="header-wishlist">
                                                    <a href="javascript:void(0)"><i
                                                            class="flaticon-heart"></i><span>0</span></a>
                                                </li>
                                                <li class="header-cart">
                                                    <a href="javascript:void(0)"><i
                                                            class="flaticon-basket"></i><span>0</span></a>
                                                    <strong>$0.00</strong>
                                                </li>
                                                <li class="header-sine-in">
                                                    <a href="contact.html"><i class="flaticon-user"></i>Sign In</a>
                                                </li>
                                            </ul>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                        </div>

                        <!-- Mobile Menu  -->
                        <div class="mobile-menu">
                            <nav class="menu-box">
                                <div class="close-btn"><i class="fas fa-times"></i></div>
                                <div class="nav-logo">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt="Logo"></a>
                                </div>
                                <div class="nav-logo d-none">
                                    <a href="index.html"><img src="assets/img/logo/w_logo.png" alt="Logo"></a>
                                </div>
                                <div class="mobile-search">
                                    <form action="#">
                                        <input type="text" placeholder="Search here...">
                                        <button><i class="flaticon-search"></i></button>
                                    </form>
                                </div>
                                <div class="menu-outer">
                                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                </div>
                                <div class="social-links">
                                    <ul class="clearfix list-wrap">
                                        <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="menu-backdrop"></div>
                        <!-- End Mobile Menu -->

                    </div>
                </div>
            </div>
        </div>

        <!-- offCanvas-area -->
        <div class="offCanvas-wrap">
            <div class="offCanvas-body">
                <div class="offCanvas-toggle">
                    <span></span>
                    <span></span>
                </div>
                <div class="offCanvas-content">
                    <div class="offCanvas-logo logo">
                        <a href="index.html" class="logo-dark"><img src="{{asset('frontend/img/logo/logo.png')}}"
                                alt="Logo"></a>
                        <a href="index.html" class="logo-light"><img src="{{asset('frontend/img/logo/w_logo.png')}}"
                                alt="Logo"></a>
                    </div>
                    <p>The argument in favor of using filler text goes something like this: If you use any real content
                        in the Consulting Process anytime you reach.</p>
                    <ul class="offCanvas-instagram list-wrap">
                        <li><a href="assets/img/blog/hr_post01.jpg" class="popup-image"><img
                                    src="assets/img/blog/hr_post01.jpg" alt="img"></a></li>
                        <li><a href="assets/img/blog/hr_post02.jpg" class="popup-image"><img
                                    src="assets/img/blog/hr_post02.jpg" alt="img"></a></li>
                        <li><a href="assets/img/blog/hr_post03.jpg" class="popup-image"><img
                                    src="assets/img/blog/hr_post03.jpg" alt="img"></a></li>
                        <li><a href="assets/img/blog/hr_post04.jpg" class="popup-image"><img
                                    src="assets/img/blog/hr_post04.jpg" alt="img"></a></li>
                        <li><a href="assets/img/blog/hr_post05.jpg" class="popup-image"><img
                                    src="assets/img/blog/hr_post05.jpg" alt="img"></a></li>
                        <li><a href="assets/img/blog/hr_post06.jpg" class="popup-image"><img
                                    src="assets/img/blog/hr_post06.jpg" alt="img"></a></li>
                    </ul>
                </div>
                <div class="offCanvas-contact">
                    <h4 class="title">Get In Touch</h4>
                    <ul class="offCanvas-contact-list list-wrap">
                        <li><i class="fas fa-envelope-open"></i><a href="mailto:info@webmail.com">info@webmail.com</a>
                        </li>
                        <li><i class="fas fa-phone"></i><a href="tel:88899988877">888 999 888 77</a></li>
                        <li><i class="fas fa-map-marker-alt"></i> 12/A, New Booston, NYC</li>
                    </ul>
                    <ul class="offCanvas-social list-wrap">
                        <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="offCanvas-overlay"></div>
        <!-- offCanvas-area-end -->
    </header>
    <!-- header-area-end -->

    @yield('content')

    <!-- footer-area -->
    <footer>
        <div class="footer-area">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-7">
                            <div class="footer-widget">
                                <div class="fw-logo">
                                    <a href="index.html"><img src="{{ asset('frontend/img/logo/w_logo.png') }}" alt=""></a>
                                </div>
                                <div class="footer-content">
                                    <p>Browned butter and brown sugar caramelly goodness, crispy edges thick and soft
                                        centers and melty little puddles of chocolate.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-5 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="fw-title">Company</h4>
                                <div class="footer-link-wrap">
                                    <ul class="list-wrap">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="contact.html">The Test Kitchen</a></li>
                                        <li><a href="contact.html">Podcast</a></li>
                                        <li><a href="contact.html">Events</a></li>
                                        <li><a href="contact.html">Jobs</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="fw-title">Get Help</h4>
                                <div class="footer-link-wrap">
                                    <ul class="list-wrap">
                                        <li><a href="contact.html">Contact & Faq</a></li>
                                        <li><a href="contact.html">Oders & Returns</a></li>
                                        <li><a href="contact.html">Gift Cards</a></li>
                                        <li><a href="contact.html">Register</a></li>
                                        <li><a href="contact.html">Catalog</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="fw-title">Explore</h4>
                                <div class="footer-link-wrap">
                                    <ul class="list-wrap">
                                        <li><a href="contact.html">The Shop</a></li>
                                        <li><a href="contact.html">Recipes</a></li>
                                        <li><a href="contact.html">Food</a></li>
                                        <li><a href="contact.html">Travel</a></li>
                                        <li><a href="contact.html">Hotline</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="fw-title">Follow us On</h4>
                                <div class="footer-link-wrap">
                                    <ul class="list-wrap">
                                        <li><a href="#">facebook</a></li>
                                        <li><a href="#">Twitter</a></li>
                                        <li><a href="#">Instagram</a></li>
                                        <li><a href="#">Youtube</a></li>
                                        <li><a href="#">Pinterest</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-shape" data-background="{{ asset('frontend/img/images/footer_shape.png') }}"></div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-bottom-menu">
                                <ul class="list-wrap">
                                    <li><a href="contact.html">Privacy Policy & Terms</a></li>
                                    <li><a href="contact.html">Site Credits</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="copyright-text">
                                <p>© 2023 All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->


    <!-- JS here -->
    <script src="{{ asset('frontend/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/js/swiper-bundle.js') }}"></script>
    <script src="{{ asset('frontend/js/ajax-form.js') }}"></script>
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>


</html>
