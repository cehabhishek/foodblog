<!DOCTYPE html>
<html lang="zxx" dir="ltr">


<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="{{ asset('frontend/images/logo.png') }}" />
    <title>@yield('title')</title>

    <meta name="theme-color" content="#52A94F">
    <meta name="description" content=" @yield('description')" />
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="author" content="CodingIz: Love To Write Code" />
    <link rel="canonical" href="{{ Request::url() }}" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:site_name" content="CodingIz: Love To Write Code" />
    <meta property="article:publisher" content="CodingIz: Love To Write Code" />
    <meta property="article:author" content="CodingIz: Love To Write Code" />
    <meta property="og:image" content="@yield('image')" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="500" />
    <meta name="google-adsense-account" content="ca-pub-3273323067440527">



    <script type="application/ld+json">
        {
            "@context" : "http://schema.org",
            "@type" : "Organization",
            "name" : "CodingIz",
            "url" : "https://www.codingiz.com/",
            "logo" : "{{ asset('frontend/images/logo.png') }}",
            "description" : "Welcome to CodingIz, where coding becomes an adventure! We're passionate about demystifying programming and making it accessible to everyone. Whether you're a curious beginner or a seasoned developer, we're here to guide you through the fascinating world of code.",
            "founder": [
                {
                    "@type" : "Person",
                    "name" : "Abhishek Prajapati",
                    "url" : "https://www.linkedin.com/in/cehabhishek/"
                }
            ],
            "sameAs" : [ "https://www.facebook.com/codingIz/",
                "https://www.instagram.com/codingiz",
                "https://www.youtube.com/@codingiz"
            ]
        }
    </script>
    @yield('schema')

    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="News5">
    <meta name="twitter:description"
        content="Full-featured, professional-looking news, editorial and magazine website template.">
    <meta name="twitter:image" content="../../../unistudio.co/html/news5/assets/images/common/seo-image.html">

    <link rel="canonical" href="../../../unistudio.co/html/news5/index.html">

    <!-- preload head styles -->
    <link rel="preload" href="{{ asset('frontend/css/unicons.min.css') }}" as="style">
    <link rel="preload" href="{{ asset('frontend/css/swiper-bundle.min.css') }}" as="style">

    <!-- preload footer scripts -->
    <link rel="preload" href="{{ asset('frontend/js/libs/jquery.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('frontend/js/libs/scrollmagic.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('frontend/js/libs/swiper-bundle.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('frontend/js/libs/anime.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('frontend/js/helpers/data-attr-helper.js') }}" as="script">
    <link rel="preload" href="{{ asset('frontend/js/helpers/swiper-helper.js') }}" as="script">
    <link rel="preload" href="{{ asset('frontend/js/helpers/anime-helper.js') }}" as="script">
    <link rel="preload" href="{{ asset('frontend/js/helpers/anime-helper-defined-timelines.js') }}" as="script">
    <link rel="preload" href="{{ asset('frontend/js/uikit-components-bs.js') }}" as="script">
    <link rel="preload" href="{{ asset('frontend/js/app.js') }}" as="script">

    <!-- app head for bootstrap core -->
    <script src="{{ asset('frontend/js/app-head-bs.js') }}"></script>

    <!-- include uni-core components -->
    <link rel="stylesheet" href="{{ asset('frontend/js/uni-core/css/uni-core.min.css') }}">

    <!-- include styles -->
    <link rel="stylesheet" href="{{ asset('frontend/css/unicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/prettify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/swiper-bundle.min.css') }}">

    <!-- include main style -->
    <link rel="stylesheet" href="{{ asset('frontend/css/theme/demo-seven.min.css') }}">

    <!-- include scripts -->
    <script src="{{ asset('frontend/js/uni-core/js/uni-core-bundle.min.js') }}"></script>
</head>

<body class="uni-body panel bg-white text-gray-900 dark:bg-black dark:text-white text-opacity-50 overflow-x-hidden">

    <!--  Search modal -->
    <div id="uc-search-modal" class="uc-modal-full uc-modal" data-uc-modal="overlay: true">
        <div class="uc-modal-dialog d-flex justify-center bg-white text-dark dark:bg-gray-900 dark:text-white"
            data-uc-height-viewport="">
            <button
                class="uc-modal-close-default p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all"
                type="button">
                <i class="unicon-close"></i>
            </button>
            <div class="panel w-100 sm:w-500px px-2 py-10">
                <h3 class="h1 text-center">Search</h3>
                <form class="hstack gap-1 mt-4 border-bottom p-narrow dark:border-gray-700"
                    action="https://html.themewant.com/news5/main/index.html?">
                    <span
                        class="d-inline-flex justify-center items-center w-24px sm:w-40 h-24px sm:h-40px opacity-50"><i
                            class="unicon-search icon-3"></i></span>
                    <input type="search" name="q"
                        class="form-control-plaintext ms-1 fs-6 sm:fs-5 w-full dark:text-white"
                        placeholder="Type your keyword.." aria-label="Search" autofocus>
                </form>
            </div>
        </div>
    </div>

    <!--  Menu panel -->
    <div id="uc-menu-panel" data-uc-offcanvas="overlay: true;">
        <div class="uc-offcanvas-bar bg-white text-dark dark:bg-gray-900 dark:text-white">
            <header class="uc-offcanvas-header hstack justify-between items-center pb-4 bg-white dark:bg-gray-900">
                <div class="uc-logo">
                    <a href="index.html" class="h5 text-none text-gray-900 dark:text-white">
                        <img class="w-32px" src="{{ asset('frontend/images/common/logo-icon.svg') }}" alt="News5"
                            data-uc-svg>
                    </a>
                </div>
                <button
                    class="uc-offcanvas-close p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all"
                    type="button">
                    <i class="unicon-close"></i>
                </button>
            </header>

            <div class="panel">
                <form id="search-panel" class="form-icon-group vstack gap-1 mb-3" data-uc-sticky="">
                    <input type="email" class="form-control form-control-md fs-6" placeholder="Search..">
                    <span class="form-icon text-gray">
                        <i class="unicon-search icon-1"></i>
                    </span>
                </form>
                <ul class="nav-y gap-narrow fw-bold fs-5" data-uc-nav>
                    <li class="uc-parent">
                        <a href="#">Homepages</a>
                        <ul class="uc-nav-sub" data-uc-nav="">
                            <li><a href="index.html">Main</a></li>
                            <li><a href="https://html.themewant.com/news5/demo-two/index.html">Classic News</a></li>
                            <li><a href="https://html.themewant.com/news5/demo-three/index.html">Tech</a></li>
                            <li><a href="https://html.themewant.com/news5/demo-four/index.html">Classic Blog</a></li>
                            <li><a href="https://html.themewant.com/news5/demo-five/index.html">Gaming</a></li>
                            <li><a href="https://html.themewant.com/news5/demo-six/index.html">Sports</a></li>
                            <li><a href="https://html.themewant.com/news5/demo-seven/index.html">Newspaper</a></li>
                            <li><a href="https://html.themewant.com/news5/demo-eight/index.html">Magazine</a></li>
                            <li><a href="https://html.themewant.com/news5/demo-nine/index.html">Travel</a></li>
                            <li><a href="https://html.themewant.com/news5/demo-ten/index.html">Food</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Latest</a></li>
                    <li><a href="#">Trending</a></li>
                    <li class="uc-parent">
                        <a href="#">Inner Pages</a>
                        <ul class="uc-nav-sub" data-uc-nav="">
                            <li class="uc-parent">
                                <a href="blog.html">Blog</a>
                                <ul class="uc-nav-sub">
                                    <li><a href="blog.html">Full Width</a></li>
                                    <li><a href="blog-2cols.html">Grid 2 Cols</a></li>
                                    <li><a href="blog-3cols.html">Grid 3 Cols</a></li>
                                    <li><a href="blog-4cols.html">Grid 4 Cols</a></li>
                                </ul>
                            </li>
                            <li class="uc-parent">
                                <a href="blog-details.html">Blog - detail</a>
                                <ul class="uc-nav-sub">
                                    <li><a href="blog-details.html">Blog detail</a></li>
                                    <li><a href="blog-details-2.html">Blog detail - v2</a></li>
                                </ul>
                            </li>
                            <li class="uc-parent">
                                <a href="#">Useful pages</a>
                                <ul class="uc-nav-sub">
                                    <li><a href="sign-up.html">Sign up</a></li>
                                    <li><a href="sign-in.html">Sign in</a></li>
                                    <li><a href="reset-password.html">Reset password</a></li>
                                    <li><a href="404.html">404 page</a></li>
                                    <li><a href="coming-soon.html">Coming soon</a></li>
                                </ul>
                            </li>
                            <li class="uc-parent">
                                <a href="#">Other pages</a>
                                <ul class="uc-nav-sub">
                                    <li><a href="page-faq.html">FAQ</a></li>
                                    <li><a href="page-terms.html">Terms of use</a></li>
                                    <li><a href="page-privacy.html">Privacy policy</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="uc-parent">
                        <a href="shop.html">Shop</a>
                        <ul class="uc-nav-sub" data-uc-nav="">
                            <li class="uc-parent">
                                <a href="shop.html">Shop layouts</a>
                                <ul class="uc-nav-sub">
                                    <li><a href="shop.html">Shop 4 cols</a></li>
                                    <li><a href="shop-3.html">Shop 3 cols</a></li>
                                    <li><a href="shop-2.html">Shop 2 cols</a></li>
                                    <li><a href="shop-sidebar.html">Shop with sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="shop-category.html">Archive category</a></li>
                            <li><a href="shop-product-detail.html">Product detail</a></li>
                            <li><a href="shop-product-detail-2.html">Product detail - v2</a></li>
                            <li><a href="shop-cart.html">Cart</a></li>
                            <li><a href="shop-cart-2.html">Cart - v2</a></li>
                            <li><a href="shop-checkout.html">Checkout</a></li>
                            <li><a href="shop-checkout-2.html">Checkout - v2</a></li>
                            <li><a href="shop-order.html">Order confirmation</a></li>
                        </ul>
                    </li>
                    <li class="hr opacity-10 my-1"></li>
                    <li><a href="sign-in.html">Sign in</a></li>
                    <li><a href="sign-up.html">Create an account</a></li>
                </ul>
                <ul class="social-icons nav-x mt-4">
                    <li>
                        <a href="#"><i class="unicon-logo-medium icon-2"></i></a>
                        <a href="#"><i class="unicon-logo-x-filled icon-2"></i></a>
                        <a href="#"><i class="unicon-logo-instagram icon-2"></i></a>
                        <a href="#"><i class="unicon-logo-pinterest icon-2"></i></a>
                    </li>
                </ul>
                <div class="py-2 hstack gap-2 mt-4 bg-white dark:bg-gray-900" data-uc-sticky="position: bottom">
                    <div class="vstack gap-1">
                        <span class="fs-7 opacity-60">Select theme:</span>
                        <div class="darkmode-trigger" data-darkmode-switch="">
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider fs-5"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Cart panel -->
    <div id="uc-cart-panel" data-uc-offcanvas="overlay: true; flip: true;">
        <div class="uc-offcanvas-bar bg-white text-dark dark:bg-gray-900 dark:text-white">
            <button
                class="uc-offcanvas-close top-0 ltr:end-0 rtl:start-0 rtl:end-auto m-2 p-0 border-0 icon-2 lg:icon-3 btn btn-md dark:text-white transition-transform duration-150 hover:rotate-90"
                type="button">
                <i class="unicon-close"></i>
            </button>

            <div class="mini-cart-content vstack justify-between panel h-100">
                <div class="mini-cart-header">
                    <h3 class="title h5 m-0 text-dark dark:text-white">Shopping cart</h3>
                </div>
                <div class="mini-cart-listing panel flex-1 my-4 overflow-scroll">
                    <p class="alert alert-warning" hidden>Your cart empty!</p>
                    <div class="panel vstack gap-3">
                        <div>
                            <article class="product type-product panel">
                                <div class="hstack gap-2">
                                    <figure
                                        class="featured-image m-0 ratio ratio-1x1 w-80px uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque uc-transition-scale-up uc-transition-opaque"
                                            src="../assets/images/common/img-fallback.png"
                                            data-src="../assets/images/common/products/img-07.jpg" alt="Laptop Cover"
                                            data-uc-img="loading: lazy">
                                        <a href="shop-product-detail.html" class="position-cover"
                                            data-caption="Laptop Cover"></a>
                                    </figure>
                                    <div class="content vstack gap-narrow fs-6">
                                        <h5 class="h6 m-0"><a class="text-none text-dark dark:text-white"
                                                href="shop-product-detail.html">Laptop Cover</a></h5>
                                        <div class="hstack gap-narrow fs-7 opacity-50 text-dark dark:text-white"><span
                                                class="qty">1</span> x <span class="price">$24.00</span></div>
                                        <a href="#remove_from_cart"
                                            class="remove fs-7 text-dark dark:text-white">Remove</a>
                                    </div>
                                    <a href="#remove_from_cart"
                                        class="remove position-absolute top-0 end-0 btn p-0 hover:text-danger" hidden>
                                        <i class="unicon-close icon-1"></i>
                                    </a>
                                </div>
                            </article>
                        </div>
                        <div>
                            <article class="product type-product panel">
                                <div class="hstack gap-2">
                                    <figure
                                        class="featured-image m-0 ratio ratio-1x1 w-80px uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque uc-transition-scale-up uc-transition-opaque"
                                            src="../assets/images/common/img-fallback.png"
                                            data-src="../assets/images/common/products/img-08.jpg" alt="Disney Toys"
                                            data-uc-img="loading: lazy">
                                        <a href="shop-product-detail.html" class="position-cover"
                                            data-caption="Disney Toys"></a>
                                    </figure>
                                    <div class="content vstack gap-narrow fs-6">
                                        <h5 class="h6 m-0"><a class="text-none text-dark dark:text-white"
                                                href="shop-product-detail.html">Disney Toys</a></h5>
                                        <div class="hstack gap-narrow fs-7 opacity-50 text-dark dark:text-white"><span
                                                class="qty">1</span> x <span class="price">$5.00</span></div>
                                        <a href="#remove_from_cart"
                                            class="remove fs-7 text-dark dark:text-white">Remove</a>
                                    </div>
                                    <a href="#remove_from_cart"
                                        class="remove position-absolute top-0 end-0 btn p-0 hover:text-danger" hidden>
                                        <i class="unicon-close icon-1"></i>
                                    </a>
                                </div>
                            </article>
                        </div>
                        <div>
                            <article class="product type-product panel">
                                <div class="hstack gap-2">
                                    <figure
                                        class="featured-image m-0 ratio ratio-1x1 w-80px uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque uc-transition-scale-up uc-transition-opaque"
                                            src="../assets/images/common/img-fallback.png"
                                            data-src="../assets/images/common/products/img-09.jpg" alt="Screen Axe"
                                            data-uc-img="loading: lazy">
                                        <a href="shop-product-detail.html" class="position-cover"
                                            data-caption="Screen Axe"></a>
                                    </figure>
                                    <div class="content vstack gap-narrow fs-6">
                                        <h5 class="h6 m-0"><a class="text-none text-dark dark:text-white"
                                                href="shop-product-detail.html">Screen Axe</a></h5>
                                        <div class="hstack gap-narrow fs-7 opacity-50 text-dark dark:text-white"><span
                                                class="qty">1</span> x <span class="price">$19.00</span></div>
                                        <a href="#remove_from_cart"
                                            class="remove fs-7 text-dark dark:text-white">Remove</a>
                                    </div>
                                    <a href="#remove_from_cart"
                                        class="remove position-absolute top-0 end-0 btn p-0 hover:text-danger" hidden>
                                        <i class="unicon-close icon-1"></i>
                                    </a>
                                </div>
                            </article>
                        </div>
                        <div>
                            <article class="product type-product panel">
                                <div class="hstack gap-2">
                                    <figure
                                        class="featured-image m-0 ratio ratio-1x1 w-80px uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque uc-transition-scale-up uc-transition-opaque"
                                            src="../assets/images/common/img-fallback.png"
                                            data-src="../assets/images/common/products/img-10.jpg" alt="Airpods Pro"
                                            data-uc-img="loading: lazy">
                                        <a href="shop-product-detail.html" class="position-cover"
                                            data-caption="Airpods Pro"></a>
                                    </figure>
                                    <div class="content vstack gap-narrow fs-6">
                                        <h5 class="h6 m-0"><a class="text-none text-dark dark:text-white"
                                                href="shop-product-detail.html">Airpods Pro</a></h5>
                                        <div class="hstack gap-narrow fs-7 opacity-50 text-dark dark:text-white"><span
                                                class="qty">1</span> x <span class="price">$49.00</span></div>
                                        <a href="#remove_from_cart"
                                            class="remove fs-7 text-dark dark:text-white">Remove</a>
                                    </div>
                                    <a href="#remove_from_cart"
                                        class="remove position-absolute top-0 end-0 btn p-0 hover:text-danger" hidden>
                                        <i class="unicon-close icon-1"></i>
                                    </a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="mini-cart-footer panel pt-3 border-top">
                    <div class="panel vstack gap-3 justify-between">
                        <div class="mini-cart-total hstack justify-between">
                            <h5 class="h5 m-0 text-dark dark:text-white">Subtotal</h5>
                            <b class="fs-5">$97.00</b>
                        </div>
                        <div class="mini-cart-actions vstack gap-1">
                            <a href="shop-cart.html"
                                class="btn btn-md btn-outline-gray-100 text-dark dark:text-white dark:border-gray-700 dark:hover:bg-gray-700">View
                                cart</a>
                            <a href="shop-checkout.html" class="btn btn-md btn-primary text-white">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Favorites modal -->
    <div id="uc-favorites-modal" data-uc-modal="overlay: true">
        <div class="uc-modal-dialog lg:max-w-500px bg-white text-dark dark:bg-gray-800 dark:text-white rounded">
            <button
                class="uc-modal-close-default p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all"
                type="button">
                <i class="unicon-close"></i>
            </button>
            <div class="panel vstack justify-center items-center gap-2 text-center px-3 py-8">
                <i class="icon icon-4 unicon-bookmark mb-2 text-primary dark:text-white"></i>
                <h2 class="h4 md:h3 m-0">Saved articles</h2>
                <p class="fs-5 opacity-60">You have not yet added any article to your bookmarks!</p>
                <a href="index.html" class="btn btn-sm btn-primary mt-2 uc-modal-close">Browse articles</a>
            </div>
        </div>
    </div>

    <!--  Newsletter modal -->
    <div id="uc-newsletter-modal" data-uc-modal="overlay: true">
        <div
            class="uc-modal-dialog w-800px bg-white text-dark dark:bg-gray-900 dark:text-white rounded overflow-hidden">
            <button
                class="uc-modal-close-default p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all"
                type="button">
                <i class="unicon-close"></i>
            </button>
            <div class="row md:child-cols-6 col-match g-0">
                <div class="d-none md:d-flex">
                    <div class="position-relative w-100 ratio-1x1">
                        <img class="media-cover" src="../assets/images/demo-seven/common/newsletter.jpg"
                            alt="Newsletter image">
                    </div>
                </div>
                <div>
                    <div class="panel vstack self-center p-4 md:py-8 text-center">
                        <h3 class="h3 md:h2">Subscribe to the Newsletter</h3>
                        <p class="ft-tertiary">Join 10k+ people to get notified about new posts, news and tips.</p>
                        <div class="panel mt-2 lg:mt-4">
                            <form class="vstack gap-1">
                                <input type="email"
                                    class="form-control form-control-sm w-full fs-6 bg-white dark:border-white dark:border-gray-700 dark:text-dark"
                                    placeholder="Your email address..">
                                <button type="submit" class="btn btn-sm btn-primary">Sign up</button>
                            </form>
                            <p class="fs-7 mt-2">Do not worry we don't spam!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Account modal -->
    <div id="uc-account-modal" data-uc-modal="overlay: true">
        <div class="uc-modal-dialog lg:max-w-500px bg-white text-dark dark:bg-gray-800 dark:text-white rounded">
            <button
                class="uc-modal-close-default p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all"
                type="button">
                <i class="unicon-close"></i>
            </button>
            <div class="panel vstack gap-2 md:gap-4 text-center">
                <ul class="account-tabs-nav nav-x justify-center h6 py-2 border-bottom d-none"
                    data-uc-switcher="animation: uc-animation-slide-bottom-small, uc-animation-slide-top-small">
                    <li><a href="#">Sign in</a></li>
                    <li><a href="#">Sign up</a></li>
                    <li><a href="#">Reset password</a></li>
                    <li><a href="#">Terms of use</a></li>
                </ul>
                <div
                    class="account-tabs-content uc-switcher px-3 lg:px-4 py-4 lg:py-8 m-0 lg:mx-auto vstack justify-center items-center">
                    <div class="w-100">
                        <div class="panel vstack justify-center items-center gap-2 sm:gap-4 text-center">
                            <h4 class="h5 lg:h4 m-0">Log in</h4>
                            <div class="panel vstack gap-2 w-100 sm:w-350px mx-auto">
                                <form class="vstack gap-2">
                                    <input
                                        class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:bg-gray-800 dark:border-white dark:border-opacity-15 dark:border-opacity-15"
                                        type="email" placeholder="Your email" required>
                                    <input
                                        class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:bg-gray-800 dark:border-white dark:border-opacity-15 dark:border-opacity-15"
                                        type="password" placeholder="Password" autocomplete="new-password" required>
                                    <div class="hstack justify-between items-start text-start">
                                        <div class="form-check text-start">
                                            <input
                                                class="form-check-input rounded-0 dark:bg-gray-800 dark:bg-gray-800 dark:border-white dark:border-opacity-15 dark:border-opacity-15"
                                                type="checkbox" id="inputCheckRemember">
                                            <label class="hstack justify-between form-check-label fs-7 sm:fs-6"
                                                for="inputCheckRemember">Remember me?</label>
                                        </div>
                                        <a href="#" class="uc-link fs-6" data-uc-switcher-item="2">Forgot
                                            password</a>
                                    </div>
                                    <button class="btn btn-primary btn-sm lg:mt-1" type="submit">Log in</button>
                                </form>
                                <div class="panel h-24px">
                                    <hr class="position-absolute top-50 start-50 translate-middle hr m-0 w-100">
                                    <span
                                        class="position-absolute top-50 start-50 translate-middle px-1 fs-7 text-uppercase bg-white dark:bg-gray-800">Or</span>
                                </div>
                                <div class="hstack gap-2">
                                    <a href="#google"
                                        class="hstack items-center justify-center flex-1 gap-1 h-40px text-none rounded border border-gray-900 dark:bg-gray-800 dark:border-white dark:border-opacity-15 border-opacity-10">
                                        <i class="icon icon-1 unicon-logo-google"></i>
                                    </a>
                                    <a href="#facebook"
                                        class="hstack items-center justify-center flex-1 gap-1 h-40px text-none rounded border border-gray-900 dark:bg-gray-800 dark:border-white dark:border-opacity-15 border-opacity-10">
                                        <i class="icon icon-1 unicon-logo-facebook"></i>
                                    </a>
                                    <a href="#twitter"
                                        class="hstack items-center justify-center flex-1 gap-1 h-40px text-none rounded border border-gray-900 dark:bg-gray-800 dark:border-white dark:border-opacity-15 border-opacity-10">
                                        <i class="icon icon-1 unicon-logo-x-filled"></i>
                                    </a>
                                </div>
                            </div>
                            <p class="fs-7 sm:fs-6">Have no account yet? <a class="uc-link" href="#"
                                    data-uc-switcher-item="1">Sign up</a></p>
                        </div>
                    </div>
                    <div class="w-100">
                        <div class="panel vstack justify-center items-center gap-2 sm:gap-4 text-center">
                            <h4 class="h5 lg:h4 m-0">Create an account</h4>
                            <div class="panel vstack gap-2 w-100 sm:w-350px mx-auto">
                                <form class="vstack gap-2">
                                    <input
                                        class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:border-white dark:border-opacity-15"
                                        type="text" placeholder="Full name" required>
                                    <input
                                        class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:border-white dark:border-opacity-15"
                                        type="email" placeholder="Your email" required>
                                    <input
                                        class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:border-white dark:border-opacity-15"
                                        type="password" placeholder="Password" autocomplete="new-password" required>
                                    <input
                                        class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:border-white dark:border-opacity-15"
                                        type="password" placeholder="Re-enter Password" autocomplete="new-password"
                                        required>
                                    <div class="hstack text-start">
                                        <div class="form-check text-start">
                                            <input id="input_checkbox_accept_terms"
                                                class="form-check-input rounded-0 dark:bg-gray-800 dark:border-white dark:border-opacity-15"
                                                type="checkbox" required>
                                            <label for="input_checkbox_accept_terms"
                                                class="hstack justify-between form-check-label fs-7 sm:fs-6">I read and
                                                accept the <a href="#" class="uc-link ms-narrow"
                                                    data-uc-switcher-item="3">terms of use</a>. </label>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-sm lg:mt-1" type="submit">Sign up</button>
                                </form>
                                <div class="panel h-24px">
                                    <hr class="position-absolute top-50 start-50 translate-middle hr m-0 w-100">
                                    <span
                                        class="position-absolute top-50 start-50 translate-middle px-1 fs-7 text-uppercase bg-white dark:bg-gray-800">Or</span>
                                </div>
                                <div class="hstack gap-2">
                                    <a href="#google"
                                        class="hstack items-center justify-center flex-1 gap-1 h-40px text-none rounded border border-gray-900 dark:bg-gray-800 dark:border-white dark:border-opacity-15 border-opacity-10">
                                        <i class="icon icon-1 unicon-logo-google"></i>
                                    </a>
                                    <a href="#facebook"
                                        class="hstack items-center justify-center flex-1 gap-1 h-40px text-none rounded border border-gray-900 dark:bg-gray-800 dark:border-white dark:border-opacity-15 border-opacity-10">
                                        <i class="icon icon-1 unicon-logo-facebook"></i>
                                    </a>
                                    <a href="#twitter"
                                        class="hstack items-center justify-center flex-1 gap-1 h-40px text-none rounded border border-gray-900 dark:bg-gray-800 dark:border-white dark:border-opacity-15 border-opacity-10">
                                        <i class="icon icon-1 unicon-logo-x-filled"></i>
                                    </a>
                                </div>
                            </div>
                            <p class="fs-7 sm:fs-6">Already have an account? <a class="uc-link" href="#"
                                    data-uc-switcher-item="0">Log in</a></p>
                        </div>
                    </div>
                    <div class="w-100">
                        <div class="panel vstack justify-center items-center gap-2 sm:gap-4 text-center">
                            <h4 class="h5 lg:h4 m-0">Reset password</h4>
                            <div class="panel w-100 sm:w-350px">
                                <form class="vstack gap-2">
                                    <input
                                        class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:border-white dark:border-opacity-15"
                                        type="email" placeholder="Your email" required>
                                    <div class="form-check text-start">
                                        <input
                                            class="form-check-input rounded-0 dark:bg-gray-800 dark:border-white dark:border-opacity-15"
                                            type="checkbox" id="inputCheckVerify" required>
                                        <label class="form-check-label fs-7 sm:fs-6" for="inputCheckVerify"> <span>I'm
                                                not a robot</span>. </label>
                                    </div>
                                    <button class="btn btn-primary btn-sm lg:mt-1" type="submit">Reset a
                                        password</button>
                                </form>
                            </div>
                            <p class="fs-7 sm:fs-6 mt-2 sm:m-0">Remember your password? <a class="uc-link"
                                    href="#" data-uc-switcher-item="0">Log in</a></p>
                        </div>
                    </div>
                    <div class="w-100">
                        <div class="panel vstack justify-center items-center gap-2 sm:gap-4">
                            <h4 class="h5 lg:h4 m-0">Terms of use</h4>
                            <div class="page-content panel fs-6 text-start max-h-400px overflow-scroll">
                                <p>Terms of use dolor sit amet consectetur, adipisicing elit. Recusandae provident ullam
                                    aperiam quo ad non corrupti sit vel quam repellat ipsa quod sed, repellendus
                                    adipisci, ducimus ea modi odio assumenda.</p>
                                <h5 class="h6 md:h5 mt-3 mb-1">Disclaimers</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, cum esse possimus
                                    officiis amet ea voluptatibus libero! Dolorum assumenda esse, deserunt ipsum ad
                                    iusto! Praesentium error nobis tenetur at, quis nostrum facere excepturi architecto
                                    totam.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, soluta alias
                                    eaque modi ipsum sint iusto fugiat vero velit rerum.</p>
                                <h5 class="h6 md:h5 mt-3 mb-1">Limitation on Liability</h5>
                                <p>Sequi, cum esse possimus officiis amet ea voluptatibus libero! Dolorum assumenda
                                    esse, deserunt ipsum ad iusto! Praesentium error nobis tenetur at, quis nostrum
                                    facere excepturi architecto totam.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, soluta alias
                                    eaque modi ipsum sint iusto fugiat vero velit rerum.</p>
                                <h5 class="h6 md:h5 mt-3 mb-1">Copyright Policy</h5>
                                <p>Dolor sit amet consectetur adipisicing elit. Sequi, cum esse possimus officiis amet
                                    ea voluptatibus libero! Dolorum assumenda esse, deserunt ipsum ad iusto! Praesentium
                                    error nobis tenetur at, quis nostrum facere excepturi architecto totam.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, soluta alias
                                    eaque modi ipsum sint iusto fugiat vero velit rerum.</p>
                                <h5 class="h6 md:h5 mt-3 mb-1">General</h5>
                                <p>Sit amet consectetur adipisicing elit. Sequi, cum esse possimus officiis amet ea
                                    voluptatibus libero! Dolorum assumenda esse, deserunt ipsum ad iusto! Praesentium
                                    error nobis tenetur at, quis nostrum facere excepturi architecto totam.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, soluta alias
                                    eaque modi ipsum sint iusto fugiat vero velit rerum.</p>
                            </div>
                            <p class="fs-7 sm:fs-6">Do you agree to our terms? <a class="uc-link" href="#"
                                    data-uc-switcher-item="1">Sign up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  GDPR modal -->
    <div id="uc-gdpr-notification" class="uc-gdpr-notification uc-notification uc-notification-bottom-left lg:m-2">
        <div class="uc-notification-message">
            <a id="uc-close-gdpr-notification" class="uc-notification-close" data-uc-close></a>
            <h2 class="h5 ft-primary fw-bold -ls-1 m-0">GDPR Compliance</h2>
            <p class="fs-7 mt-1 mb-2">We use cookies to ensure you get the best experience on our website. By
                continuing to use our site, you accept our use of cookies, <a href="page-privacy.html"
                    class="uc-link text-underline">Privacy Policy</a>, and <a href="page-terms.html"
                    class="uc-link text-underline">Terms of Service</a>.</p>
            <button class="btn btn-sm btn-primary" id="uc-accept-gdpr">Accept</button>
        </div>
    </div>

    <!--  Bottom Actions Sticky -->
    <div class="backtotop-wrap position-fixed bottom-0 end-0 z-99 m-2 vstack">
        <div class="darkmode-trigger cstack w-40px h-40px rounded-circle text-none bg-gray-100 dark:bg-gray-700 dark:text-white"
            data-darkmode-toggle="">
            <label class="switch">
                <span class="sr-only">Dark mode toggle</span>
                <input type="checkbox">
                <span class="slider fs-5"></span>
            </label>
        </div>
        <a class="btn btn-sm bg-primary text-white w-40px h-40px rounded-circle" href="to_top.html" data-uc-backtotop>
            <i class="icon-2 unicon-chevron-up"></i>
        </a>
    </div>

    <!-- Header start -->
    <header class="uc-header header-seven uc-navbar-sticky-wrap z-999"
        data-uc-sticky="sel-target: .uc-navbar-container; cls-active: uc-navbar-sticky; cls-inactive: uc-navbar-transparent; end: !*;">
        <nav class="uc-navbar-container text-gray-900 dark:text-white fs-6 z-1">
            <div class="uc-top-navbar panel z-3 overflow-hidden bg-primary-600 swiper-parent"
                style="--uc-nav-height: 32px"
                data-uc-navbar=" animation: uc-animation-slide-top-small; duration: 150;">
                <div class="container container-full">
                    <div class="uc-navbar-item">
                        <div class="swiper swiper-ticker swiper-ticker-sep px-2" style="--uc-ticker-gap: 32px"
                            data-uc-swiper="items: auto; gap: 32; center: true; center-bounds: true; autoplay: 10000; speed: 10000; autoplay-delay: 0.1; loop: true; allowTouchMove: false; freeMode: true; autoplay-disableOnInteraction: true;">
                            <div class="swiper-wrapper">
                                @foreach ($posts as $post)
                                    <div class="swiper-slide text-white">
                                        <div class="type-post post panel">
                                            <a href="{{ route('post.detail', [
                                                'category' => $post->getCategory->slug,
                                                'sub_category' => $post->getSubCategory->slug,
                                                'post_slug' => $post->slug,
                                            ]) }}"
                                                class="fs-7 fw-normal text-none text-inherit">{{ $post->title }}</a>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uc-center-navbar panel hstack z-2 min-h-48px d-none lg:d-flex"
                data-uc-navbar=" animation: uc-animation-slide-top-small; duration: 150;">
                <div class="container max-w-xl">
                    <div class="navbar-container hstack border-bottom">
                        <div class="uc-navbar-center gap-2 lg:gap-3 flex-1">
                            <ul class="uc-navbar-nav gap-3 justify-between flex-1 fs-6 fw-bold"
                                style="--uc-nav-height: 48px">
                                <li>
                                    <a href="#"><span class="icon-1 unicon-finance"></span></a>
                                    <div class="uc-navbar-dropdown ft-primary text-unset p-3 pb-4 rounded-0 hide-scrollbar"
                                        data-uc-drop=" offset: 0; boundary: !.navbar-container; stretch: x; animation: uc-animation-slide-top-small; duration: 150;">
                                        <div class="row child-cols col-match g-2">
                                            <div class="col-2">
                                                <ul class="uc-nav uc-navbar-dropdown-nav">
                                                    <li><a href="blog-category.html">Trending</a></li>
                                                    <li><a href="blog-category.html">Politics</a></li>
                                                    <li><a href="blog-category.html">Opinions</a></li>
                                                    <li><a href="blog-category.html">World</a></li>
                                                    <li><a href="blog-category.html">Media</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-2">
                                                <ul class="uc-nav uc-navbar-dropdown-nav">
                                                    <li><a href="blog-category.html">Tech</a></li>
                                                    <li><a href="blog-category.html">Business</a></li>
                                                    <li><a href="blog-category.html">Fashion</a></li>
                                                    <li><a href="blog-category.html">Arts</a></li>
                                                    <li><a href="blog-category.html">Food</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-2">
                                                <ul class="uc-nav uc-navbar-dropdown-nav">
                                                    <li><a href="blog-category.html">Economy</a></li>
                                                    <li><a href="blog-category.html">Finance</a></li>
                                                    <li><a href="blog-category.html">Education</a></li>
                                                    <li><a href="blog-category.html">Health</a></li>
                                                    <li><a href="blog-category.html">National</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-2">
                                                <ul class="uc-nav uc-navbar-dropdown-nav">
                                                    <li><a href="blog-category.html">E-Books</a></li>
                                                    <li><a href="blog-category.html">Press</a></li>
                                                    <li><a href="blog-category.html">Podcasts</a></li>
                                                    <li><a href="blog-category.html">Entertainments</a></li>
                                                    <li><a href="blog-category.html">Weather</a></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <div class="uc-navbar-newsletter panel vstack">
                                                    <h6 class="fs-6 ft-tertiary fw-medium">Newsletter</h6>
                                                    <form class="hstack gap-1 bg-gray-300 bg-opacity-10">
                                                        <input type="email"
                                                            class="form-control-plaintext form-control-xs fs-6 dark:text-white"
                                                            placeholder="Your email address..">
                                                        <button type="submit"
                                                            class="btn btn-sm btn-primary fs-6 rounded-0">Subscribe</button>
                                                    </form>
                                                    <p class="fs-7 mt-1">Do not worry, we don't spam!</p>
                                                    <ul class="nav-x gap-2 mt-3">
                                                        <li>
                                                            <a href="#fb"><i
                                                                    class="icon icon-2 unicon-logo-facebook"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#x"><i
                                                                    class="icon icon-2 unicon-logo-x-filled"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#in"><i
                                                                    class="icon icon-2 unicon-logo-instagram"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#yt"><i
                                                                    class="icon icon-2 unicon-logo-youtube"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @foreach ($categories as $category)
                                    <li>
                                        <a href="#">{{ $category->name }} <span
                                                data-uc-navbar-parent-icon></span></a>
                                        <div class="uc-navbar-dropdown ft-primary text-unset p-3 pb-4 rounded-0 hide-scrollbar"
                                            data-uc-drop=" offset: 0; boundary: !.navbar-container; stretch: x; animation: uc-animation-slide-top-small; duration: 150;">
                                            <div class="row child-cols col-match g-2">
                                                @foreach ($category->posts->take(5) as $post)
                                                    <div>
                                                        <article
                                                            class="post type-post panel uc-transition-toggle vstack gap-1">
                                                            <div class="post-media panel overflow-hidden">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                        src="{{ asset('uploads/post/' . $post->thumbnail) }}"
                                                                        data-src="{{ asset('uploads/post/' . $post->thumbnail) }}"
                                                                        alt="The Importance of Sleep: Tips for Better Rest and Recovery"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="{{ route('post.detail', [
                                                                    'category' => $post->getCategory->slug,
                                                                    'sub_category' => $post->getSubCategory->slug,
                                                                    'post_slug' => $post->slug,
                                                                ]) }}"
                                                                    class="position-cover"></a>
                                                            </div>
                                                            <div class="post-header panel vstack gap-narrow">
                                                                <h3 class="post-title h6 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="{{ route('post.detail', [
                                                                            'category' => $post->getCategory->slug,
                                                                            'sub_category' => $post->getSubCategory->slug,
                                                                            'post_slug' => $post->slug,
                                                                        ]) }}">{{ $post->title }}</a>
                                                                </h3>
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1 d-none md:d-block">
                                                                    <div>
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>2h</span>
                                                                        </div>
                                                                    </div>
                                                                    <div>·</div>
                                                                    <div>
                                                                        <a href="#post_comment"
                                                                            class="post-comments text-none hstack gap-narrow">
                                                                            <i class="icon-narrow unicon-chat"></i>
                                                                            <span>0</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </li>
                                @endforeach


                                {{-- <li>
                                        <a href="#"><i class="icon-2 fw-medium unicon-overflow-menu-horizontal"></i></a>
                                        <div class="uc-navbar-dropdown ft-primary text-unset p-3 rounded-0 hide-scrollbar" data-uc-drop=" offset: 0; boundary: !.navbar-container; stretch: x; animation: uc-animation-slide-top-small; duration: 150;">
                                            <div class="row child-cols g-4">
                                                <div>
                                                    <div class="row child-cols g-4">
                                                        <div>
                                                            <ul class="uc-nav uc-navbar-dropdown-nav">
                                                                <li class="uc-nav-header fs-6 ft-tertiary fw-medium mb-1">Main Pages</li>
                                                                <li><a href="index.html">Main</a></li>
                                                                <li><a href="https://html.themewant.com/news5/demo-two/index.html">Classic News</a></li>
                                                                <li><a href="https://html.themewant.com/news5/demo-three/index.html">Tech</a></li>
                                                                <li><a href="https://html.themewant.com/news5/demo-four/index.html">Classic Blog</a></li>
                                                                <li><a href="https://html.themewant.com/news5/demo-five/index.html">Gaming</a></li>
                                                                <li><a href="https://html.themewant.com/news5/demo-six/index.html">Sports</a></li>
                                                                <li><a href="https://html.themewant.com/news5/demo-seven/index.html">Newspaper</a></li>
                                                                <li><a href="https://html.themewant.com/news5/demo-eight/index.html">Magazine</a></li>
                                                                <li><a href="https://html.themewant.com/news5/demo-nine/index.html">Travel</a></li>
                                                                <li><a href="https://html.themewant.com/news5/demo-ten/index.html">Food</a></li>
                                                            </ul>
                                                        </div>
                                                        <div>
                                                            <ul class="uc-nav uc-navbar-dropdown-nav">
                                                                <li class="uc-nav-header fs-6 ft-tertiary fw-medium mb-1">CMS Pages</li>
                                                                <li><a href="blog.html">Modern</a></li>
                                                                <li><a href="blog-classic.html">Classic</a></li>
                                                                <li><a href="blog-2cols.html">Grid 2 cols</a></li>
                                                                <li><a href="blog-3cols.html">Grid 3 cols</a></li>
                                                                <li><a href="blog-4cols.html">Grid 4 cols</a></li>
                                                                <li><a href="blog-category.html">Category</a></li>
                                                                <li><a href="blog-author.html">Author</a></li>
                                                                <li><a href="blog-details.html">Blog single</a></li>
                                                                <li><a href="blog-details-2.html">Blog single v2</a></li>
                                                                <li><a href="blog-details-3.html">Blog single v3</a></li>
                                                            </ul>
                                                        </div>
                                                        <div>
                                                            <ul class="uc-nav uc-navbar-dropdown-nav">
                                                                <li class="uc-nav-header fs-6 ft-tertiary fw-medium mb-1">Shop Pages</li>
                                                                <li><a href="shop.html">Grid 4 cols</a></li>
                                                                <li><a href="shop-3.html">Grid 3 cols</a></li>
                                                                <li><a href="shop-2.html">Grid 2 cols</a></li>
                                                                <li><a href="shop-product-detail.html">Product detail</a></li>
                                                                <li><a href="shop-product-detail-2.html">Product detail v2</a></li>
                                                                <li><a href="shop-cart.html">Cart</a></li>
                                                                <li><a href="shop-cart-2.html">Cart v2</a></li>
                                                                <li><a href="shop-checkout.html">Checkout</a></li>
                                                                <li><a href="shop-checkout-2.html">Checkout v2</a></li>
                                                                <li><a href="shop-order.html">Order confirmation</a></li>
                                                            </ul>
                                                        </div>
                                                        <div>
                                                            <ul class="uc-nav uc-navbar-dropdown-nav">
                                                                <li class="uc-nav-header fs-6 ft-tertiary fw-medium mb-1">Other pages</li>
                                                                <li><a href="sign-in.html">Sign in</a></li>
                                                                <li><a href="sign-up.html">Sign up</a></li>
                                                                <li><a href="reset-password.html">Reset password</a></li>
                                                                <li><a href="404.html">404</a></li>
                                                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                                                <li><a href="page-terms.html">Terms of service</a></li>
                                                                <li><a href="page-privacy.html">Privacy policy</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="panel w-100 overflow-hidden">
                                                        <div class="ratio ratio-3x4 overflow-hidden">
                                                            <img src="../assets/images/common/menu-banner.jpg" alt="Let's build anything with News5!">
                                                            <a class="position-cover" href="https://themeforest.net/user/reacthemes/portfolio" target="_blank"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uc-bottom-navbar panel z-1">
                <div class="container max-w-xl">
                    <div class="uc-navbar min-h-72px lg:min-h-100px"
                        data-uc-navbar=" animation: uc-animation-slide-top-small; duration: 150;">
                        <div class="uc-navbar-left">
                            <div>
                                <a class="uc-menu-trigger icon-2" href="#uc-menu-panel" data-uc-toggle></a>
                            </div>

                            <div class="uc-logo d-block md:d-none">
                                <a href="{{ route('index') }}">
                                    <img class="w-100px text-dark dark:text-white"
                                        src="{{ asset('frontend/images/logo.jpg') }}" alt="News5" data-uc-svg>
                                </a>
                            </div>
                        </div>
                        <div class="uc-navbar-center">
                            <div class="uc-logo d-none md:d-block">
                                <a href="{{ route('index') }}">
                                    <img class="w-150px text-dark dark:text-white"
                                        src="{{ asset('frontend/images/logo.jpg') }}" alt="News5" data-uc-svg>
                                </a>
                            </div>
                        </div>
                        <div class="uc-navbar-right gap-2 lg:gap-3">
                            <div class="uc-navbar-item d-none lg:d-inline-flex">
                                <a class="uc-search-trigger cstack text-none text-dark dark:text-white"
                                    href="#uc-search-modal" data-uc-toggle>
                                    <i class="icon icon-2 fw-medium unicon-search"></i>
                                </a>
                            </div>
                            <div class="uc-navbar-item d-none lg:d-inline-flex">
                                <div class="uc-modes-trigger btn btn-xs w-32px h-32px p-0 border fw-normal rounded-circle dark:text-white hover:bg-gray-25 dark:hover:bg-gray-900"
                                    data-darkmode-toggle="">
                                    <label class="switch">
                                        <span class="sr-only">Dark toggle</span>
                                        <input type="checkbox">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </nav>

    </header>

    <!-- Header end -->

    @yield('content')

    <footer id="uc-footer" class="uc-footer panel uc-dark">
        <div class="footer-outer py-4 lg:py-6 xl:py-9 bg-white dark:bg-gray-900 dark:text-white">
            <div class="container max-w-xl">
                <div class="footer-inner vstack gap-4 lg:gap-6 xl:gap-9">
                    <div class="uc-footer-top">
                        <div class="row child-cols col-match gx-4 gy-6">
                            <div class="col d-none lg:d-block">
                                <div class="widget links-widget vstack gap-3">
                                    <div class="widgt-title">
                                        <h4 class="fs-7 fw-medium text-uppercase m-0 text-dark dark:text-white text-opacity-50">Latest topics</h4>
                                    </div>
                                    <div class="widgt-content">
                                        <ul class="nav-y gap-2 fs-6 fw-medium text-dark dark:text-white">
                                            <li><a href="blog-category.html">Startups and technology</a></li>
                                            <li><a href="blog-category.html">Data and security</a></li>
                                            <li><a href="blog-category.html">Fintech and ecommerce</a></li>
                                            <li><a href="blog-category.html">Investors and funding</a></li>
                                            <li><a href="blog-category.html">Corporates and innovation</a></li>
                                            <li><a href="blog-category.html">Government and policy</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 md:col">
                                <div class="widget links-widget vstack gap-3">
                                    <div class="widgt-title">
                                        <h4 class="fs-7 fw-medium text-uppercase m-0 text-dark dark:text-white text-opacity-50">The News</h4>
                                    </div>
                                    <div class="widgt-content">
                                        <ul class="nav-y gap-2 fs-6 fw-medium text-dark dark:text-white">
                                            <li><a href="blog-category.html">Media</a></li>
                                            <li><a href="blog-category.html">Events</a></li>
                                            <li><a href="blog-category.html">Partner with us</a></li>
                                            <li><a href="blog-category.html">Jobs</a></li>
                                            <li><a href="blog-category.html">Masthead</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 md:col">
                                <div class="widget links-widget vstack gap-3">
                                    <div class="widgt-title">
                                        <h4 class="fs-7 fw-medium text-uppercase m-0 text-dark dark:text-white text-opacity-50">About</h4>
                                    </div>
                                    <div class="widgt-content">
                                        <ul class="nav-y gap-2 fs-6 fw-medium text-dark dark:text-white">
                                            <li><a href="#">About</a></li>
                                            <li><a href="#">Career</a></li>
                                            <li><a href="sign-in.html">Log in</a></li>
                                            <li><a href="sign-up.html">Create an account</a></li>
                                            <li><a href="#">Sitemap</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 md:col-5">
                                <div class="widget newsletter-widget vstack gap-3">
                                    <div class="widgt-title">
                                        <h4 class="h4 lg:h3 lg:-ls-2 m-0">Keep up to date with the latest updates &amp; news</h4>
                                    </div>
                                    <div class="widgt-content">
                                        <form class="hstack">
                                            <input class="form-control form-control-sm fs-6 fw-medium h-40px rounded-end-0 bg-white dark:bg-gray-800 dark:bg-gray-800 dark:border-white dark:border-opacity-15 dark:border-opacity-15" type="email" placeholder="Your email" required="">
                                            <button class="btn btn-sm btn-primary rounded-start-0 min-w-100px" type="submit">Sign up</button>
                                        </form>
                                        <p class="fs-7 fw-medium text-dark dark:text-white text-opacity-50 mt-2">By pressing the Subscribe button, you confirm that you have read and are agreeing to our <a href="page-privacy.html" class="uc-link dark:text-white">Privacy Policy</a> and <a href="page-terms.html" class="uc-link dark:text-white">Terms of Use</a></p>
                                        <ul class="footer-social nav-x gap-2 mt-2 lg:mt-4">
                                            <li>
                                                <a class="hover:text-gray-900 dark:hover:text-white duration-150" href="#fb"><i class="icon icon-2 unicon-logo-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a class="hover:text-gray-900 dark:hover:text-white duration-150" href="#x"><i class="icon icon-2 unicon-logo-x-filled"></i></a>
                                            </li>
                                            <li>
                                                <a class="hover:text-gray-900 dark:hover:text-white duration-150" href="#in"><i class="icon icon-2 unicon-logo-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a class="hover:text-gray-900 dark:hover:text-white duration-150" href="#yt"><i class="icon icon-2 unicon-logo-youtube"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="m-0">
                    <div class="uc-footer-bottom panel vstack lg:hstack gap-4 justify-between fs-7 text-center lg:text-start">
                        <div class="vstack lg:hstack gap-2">
                            <div class="footer-logo text-center">
                                <img class="uc-logo w-100px text-gray-900 dark:text-white" src="../assets/images/demo-three/common/logo.svg" alt="News5" data-uc-svg="" hidden=""><svg width="143" height="30" viewBox="0 0 143 30" fill="none" xmlns="http://www.w3.org/2000/svg" class="uc-logo w-100px text-gray-900 dark:text-white uc-svg"><g clip-path="url(#clip0_350_12)" fill="#000"><path d="M.052.512V29.65h10.863V11.19h3.077a5 5 0 013.58 1.51l4.05 4.152a5 5 0 011.42 3.491v9.307h9.93V15.626a5 5 0 00-1.351-3.418l-9.47-10.113A5 5 0 0018.5.512H.051z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M42.291 14.603h-6.32v7.444a2 2 0 001.06 1.766l9.862 5.25a5 5 0 002.35.586h13.393v-7.166H53.55a5 5 0 01-2.424-.627l-4.773-2.647a1.184 1.184 0 01-.61-1.035h16.893v-5.7H53.55a5 5 0 01-2.424-.628L46.353 9.2a1.184 1.184 0 01-.61-1.036h16.893V.512H35.97v7.724a5 5 0 002.65 4.414l3.67 1.953zM65.636.512V29.65h14.032a5 5 0 003.998-1.998l3.685-4.908v6.906h10.825a5 5 0 003.998-1.998l7.362-9.806a5 5 0 001.002-3.002V.513h-7.962v9.618a5 5 0 01-1.061 3.08l-3.003 3.84a5 5 0 01-3.939 1.92h-1.72V.512h-8.785v9.619a5 5 0 01-1.061 3.08l-3.003 3.84a5 5 0 01-3.939 1.92h-1.72V.512h-8.71zm66.361 17.448h-18.459v-7.827a5 5 0 012.777-4.478l9.31-4.621a5.002 5.002 0 012.223-.522h14.826v7.263h-10.759a5.01 5.01 0 00-1.149.134l-3.877.915a3.472 3.472 0 00-2.674 3.377h18.459v7.827a5 5 0 01-2.777 4.479l-9.31 4.62a5.003 5.003 0 01-2.223.522h-14.826v-7.263h10.759c.387 0 .772-.045 1.148-.133l3.877-.915a3.472 3.472 0 002.675-3.378z"></path></g><defs><clipPath id="clip0_350_12"><path fill="#fff" d="M0 0h143v30H0z"></path></clipPath></defs></svg>
                            </div>
                            <div class="vr mx-2 d-none lg:d-inline-flex"></div>
                            <p class="footer-copyrights">News5 © 2024, All rights reserved.</p>
                            <ul class="footer-site-links nav-x gap-2 fw-medium justify-center lg:justify-start">
                                <li><a class="uc-link text-underline hover:text-gray-900 dark:hover:text-white duration-150" href="page-privacy.html">Privacy notice</a></li>
                                <li><a class="uc-link text-underline hover:text-gray-900 dark:hover:text-white duration-150" href="page-terms.html">Terms of condition</a></li>
                                <li><a class="uc-link text-underline hover:text-gray-900 dark:hover:text-white duration-150" href="page-faq.html">FAQ</a></li>
                            </ul>
                        </div>
                        <div class="panel hstack justify-center gap-2 lg:gap-3">
                            <div class="footer-lang d-inline-block">
                                <a href="#" class="hstack gap-1 text-none fw-medium" role="button" aria-haspopup="true">
                                    <i class="icon icon-1 unicon-earth-filled"></i>
                                    <span>English</span>
                                    <span data-uc-drop-parent-icon="" class="uc-icon uc-drop-parent-icon"><svg width="12" height="12" viewBox="0 0 12 12"><polyline fill="none" stroke="#000" stroke-width="1.1" points="1 3.5 6 8.5 11 3.5"></polyline></svg></span>
                                </a>
                                <div class="p-2 bg-white dark:bg-gray-800 shadow-xs rounded w-150px uc-drop" data-uc-drop="mode: click; boundary: !.uc-footer-bottom; animation: uc-animation-slide-top-small; duration: 150;">
                                    <ul class="nav-y gap-1 fw-medium items-end">
                                        <li><a href="#en">English</a></li>
                                        <li><a href="#ar">العربية</a></li>
                                        <li><a href="#ch">中文</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- include jquery & bootstrap js -->
    <script defer src="{{ asset('frontend/js/libs/jquery.min.js') }}"></script>
    <script defer src="{{ asset('frontend/js/libs/bootstrap.min.js') }}"></script>

    <!-- include scripts -->
    <script defer src="{{ asset('frontend/js/libs/anime.min.js') }}"></script>
    <script defer src="{{ asset('frontend/js/libs/swiper-bundle.min.js') }}"></script>
    <script defer src="{{ asset('frontend/js/libs/scrollmagic.min.js') }}"></script>
    <script defer src="{{ asset('frontend/js/helpers/data-attr-helper.js') }}"></script>
    <script defer src="{{ asset('frontend/js/helpers/swiper-helper.js') }}"></script>
    <script defer src="{{ asset('frontend/js/helpers/anime-helper.js') }}"></script>
    <script defer src="{{ asset('frontend/js/helpers/anime-helper-defined-timelines.js') }}"></script>
    <script defer src="{{ asset('frontend/js/uikit-components-bs.js') }}"></script>

    <!-- include app script -->
    <script defer src="{{ asset('frontend/js/app.js') }}"></script>

    <script>
        // Schema toggle via URL
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const getSchema = urlParams.get("schema");
        if (getSchema === "dark") {
            setDarkMode(1);
        } else if (getSchema === "light") {
            setDarkMode(0);
        }
    </script>
</body>


</html>
