@php
    $image = asset('frontend/images/logo.png');
@endphp
@section('title', 'CodingIz: Love To Write Code')
@section('description',
    'Learn to code in Python,Java, and other popular programming languages with our easy tutorials,
    examples.')
@section('keywords',
    'Python, Java, C, C++, JavaScript, SQL, PHP, Web Development, Tutorial, Programming, HTML, CSS,
    React, NodeJS, Programming Examples,CodingIz ,Data Structures, Algorithms, How to,XML, MySQL')
@section('image', $image)
@extends('layouts.master')
@section('content')


        <!-- main-area -->
        <main class="fix">

            <!-- featured-post-area -->
            <section class="featured-post-area pt-60 pb-30">
                <div class="container">
                    <div class="featured-post-wrap">
                        <div class="row featured-post-active">
                            @foreach ($sliderPosts->take(5) as $sliderPost)

                            <div class="col-lg-3">
                                <div class="featured-post-item">
                                    <div class="featured-post-thumb">
                                        <a href="{{ route('post.detail', ['post_slug' => $sliderPost->slug]) }}">
                                            <img src="{{ asset('uploads/post/'.$sliderPost->thumbnail) }}" alt="">
                                            {{-- <img src="{{ $sliderPost->thumbnail }}" alt=""> --}}
                                        </a>
                                    </div>
                                    <div class="featured-post-content">
                                        <a href="{{ route('cat.blog.list', ['cat_id' => $sliderPost->getCategory->id, 'cat_slug' => Str::slug($sliderPost->getCategory->name)]) }}" class="post-tag">{{ $sliderPost->getCategory->name }}</a>
                                        <h2 class="post-title"><a href="{{ route('post.detail', ['post_slug' => $sliderPost->slug]) }}">{{ $sliderPost->title }}</a></h2>
                                        <div class="blog-post-meta">
                                            <ul class="list-wrap">
                                                <li><i class="flaticon-user"></i>by<a href="author.html">Admin</a></li>
                                                <li><i class="flaticon-calendar"></i>{{ $sliderPost->created_at->format('d F, Y') }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </section>
            <!-- featured-post-area-end -->

            <!-- newsletter-area -->
            <section class="newsletter-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="newsletter-wrap">
                                <div class="newsletter-content">
                                    <h2 class="title">Want to Get New Food New Daily?</h2>
                                </div>
                                <div class="newsletter-form">
                                    <form action="#">
                                        <div class="form-grp">
                                            <input type="text" placeholder="Name">
                                        </div>
                                        <div class="form-grp">
                                            <input type="email" placeholder="E-mail">
                                        </div>
                                        <button type="submit" class="btn">Submit Now</button>
                                    </form>
                                </div>
                                <div class="newsletter-shape-wrap">
                                    <img src="assets/img/images/newsletter_shape01.png" alt="">
                                    <img src="assets/img/images/newsletter_shape02.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- newsletter-area-end -->

            @foreach ($categories->take(1) as $category)
            @php
                $existCat[] = $category->id;
            @endphp
            <!-- latest-post-area -->
            <section class="latest-post-area pt-60 pb-60">
                <div class="container">
                    <div class="latest-post-inner-wrap">
                        <div class="row">
                            <div class="col-70">
                                <div class="section-title-wrap mb-30">
                                    <div class="section-title">
                                        <h2 class="title">{{ $category->name }}</h2>
                                    </div>
                                    <div class="view-all-btn">
                                        <a href="{{ route('cat.blog.list', ['cat_id' => $category->id, 'cat_slug' => Str::slug($category->name)]) }}" class="link-btn">View All
                                            <span class="svg-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10" fill="none">
                                                    <path d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z" fill="currentColor" />
                                                    <path d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="section-title-line"></div>
                                </div>
                                <div class="latest-post-item-wrap">
                                    <div class="row">
                                        <div class="col-66">
                                            @foreach ($category->posts->take(1) as $categoryPost)
                                            @php
                                            $existCatPost[] = $categoryPost->id;

                                            @endphp

                                            <div class="featured-post-item latest-post-item big-post">
                                                <div class="featured-post-thumb">
                                                    <a href="{{ route('post.detail', ['post_slug' => $categoryPost->slug]) }}"><img src="{{ asset('uploads/post/'.$categoryPost->thumbnail) }}" alt=""></a>
                                                </div>
                                                <div class="featured-post-content">
                                                    <a href="blog.html" class="post-tag">{{ $category->name }}</a>
                                                    <h2 class="post-title bold-underline"><a href="{{ route('post.detail', ['post_slug' => $categoryPost->slug]) }}">{{ $categoryPost->title }}</a></h2>
                                                    <div class="blog-post-meta">
                                                        <ul class="list-wrap">
                                                            <li><i class="flaticon-user"></i>by<a href="author.html">Admin</a></li>
                                                            <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                            <li><i class="flaticon-history"></i>20 Mins</li>
                                                        </ul>
                                                    </div>
                                                    <p>Browned butter and brown sugar caramelly goodness, crispy edges thick and soft centers and melty little puddles of chocolate My first favorite thing about these browned butter.</p>
                                                </div>
                                            </div>
                                            @endforeach

                                        </div>
                                        <div class="col-34">
                                            <div class="latest-post-wrap">
                                                @foreach ($category->posts->take(3) as $categoryPost)
                                                @if (!in_array($categoryPost->id, $existCatPost))
                                                <div class="featured-post-item latest-post-item small-post">
                                                    <div class="featured-post-thumb">
                                                        <a href="{{ route('post.detail', ['post_slug' => $categoryPost->slug]) }}"><img src="{{ asset('uploads/post/'.$categoryPost->thumbnail) }}" alt=""></a>
                                                    </div>
                                                    <div class="featured-post-content">
                                                        <a href="blog.html" class="post-tag">{{ $category->name }}</a>
                                                        <h2 class="post-title"><a href="{{ route('post.detail', ['post_slug' => $categoryPost->slug]) }}">{{ $categoryPost->title }}</a>
                                                        </h2>
                                                        <div class="blog-post-meta">
                                                            <ul class="list-wrap">
                                                                <li><i class="flaticon-user"></i>by<a href="author.html">Admin</a></li>
                                                                <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                @endforeach

                                                {{-- <div class="featured-post-item latest-post-item small-post">
                                                    <div class="featured-post-thumb">
                                                        <a href="{{ route('post.detail', ['post_slug' => $categoryPost->slug]) }}"><img src="assets/img/blog/latest_post03.jpg" alt=""></a>
                                                    </div>
                                                    <div class="featured-post-content">
                                                        <a href="blog.html" class="post-tag">Lunch</a>
                                                        <h2 class="post-title"><a href="{{ route('post.detail', ['post_slug' => $categoryPost->slug]) }}">One-pan baked sausage
                                                                and lentils</a></h2>
                                                        <div class="blog-post-meta">
                                                            <ul class="list-wrap">
                                                                <li><i class="flaticon-user"></i>by<a href="author.html">Admin</a></li>
                                                                <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div> --}}

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-30">
                                <div class="sidebar-wrap">
                                    <div class="sidebar-widget">
                                        <div class="sidebar-avatar">
                                            <div class="sidebar-avatar-thumb">
                                                <img src="assets/img/images/avatar_img.png" alt="">
                                            </div>
                                            <div class="sidebar-avatar-content">
                                                <h2 class="title">Hi, I’m Jenny!</h2>
                                                <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                <div class="avatar-social">
                                                    <ul class="list-wrap">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="sidebar-avatar-shape">
                                                <img src="assets/img/images/avatar_shape01.png" alt="">
                                                <img src="assets/img/images/avatar_shape02.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebar-widget">
                                        <div class="widget-title mb-25">
                                            <h2 class="title">Subscribe & Followers</h2>
                                            <div class="section-title-line"></div>
                                        </div>
                                        <div class="sidebar-social-wrap">
                                            <ul class="list-wrap">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i>facebook</a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i>twitter</a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i>instagram</a></li>
                                                <li><a href="#"><i class="fab fa-youtube"></i>youtube</a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i>LinkedIn</a></li>
                                                <li><a href="#"><i class="fab fa-pinterest-p"></i>Pinterest</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- latest-post-area-end -->
            @endforeach

            <!-- categories-area -->
            <section class="categories-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="section-title section-title-two text-center mb-30">
                                <h2 class="title">Our Top Categories</h2>
                                <p>Browned butter and brown sugar caramelly goodness, crispy edges thick and soft centers and melty little puddles</p>
                            </div>
                        </div>
                    </div>
                    <div class="categories-item-wrap">
                        <div class="row justify-content-center">
                            <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                                <div class="categories-item">
                                    <div class="categories-img">
                                        <a href="blog.html"><img src="assets/img/images/categories_img01.png" alt=""></a>
                                    </div>
                                    <div class="categories-content">
                                        <a href="blog.html">Breakfast</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                                <div class="categories-item">
                                    <div class="categories-img">
                                        <a href="blog.html"><img src="assets/img/images/categories_img02.png" alt=""></a>
                                    </div>
                                    <div class="categories-content">
                                        <a href="blog.html">Dessert</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                                <div class="categories-item">
                                    <div class="categories-img">
                                        <a href="blog.html"><img src="assets/img/images/categories_img03.png" alt=""></a>
                                    </div>
                                    <div class="categories-content">
                                        <a href="blog.html">Lunch</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                                <div class="categories-item">
                                    <div class="categories-img">
                                        <a href="blog.html"><img src="assets/img/images/categories_img04.png" alt=""></a>
                                    </div>
                                    <div class="categories-content">
                                        <a href="blog.html">Appetizer</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                                <div class="categories-item">
                                    <div class="categories-img">
                                        <a href="blog.html"><img src="assets/img/images/categories_img05.png" alt=""></a>
                                    </div>
                                    <div class="categories-content">
                                        <a href="blog.html">Dinner</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                                <div class="categories-item">
                                    <div class="categories-img">
                                        <a href="blog.html"><img src="assets/img/images/categories_img06.png" alt=""></a>
                                    </div>
                                    <div class="categories-content">
                                        <a href="blog.html">Pizza</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="categories-shape-wrap">
                    <img src="assets/img/images/categories_shape01.png" alt="">
                    <img src="assets/img/images/categories_shape02.png" alt="">
                </div>
            </section>
            <!-- categories-area-end -->

            @foreach ($categories->take(2) as $category)
            @if (!in_array($category->id, $existCat))

            @php
                $existCat[] = $category->id;
            @endphp
            <!-- recipe-area -->
            <section class="recipe-area pt-70 pb-40">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title-wrap mb-30">
                                <div class="section-title">
                                    <h2 class="title">{{ $category->name }}</h2>
                                </div>
                                <div class="view-all-btn">
                                    <a href="{{ route('cat.blog.list', ['cat_id' => $category->id, 'cat_slug' => Str::slug($category->name)]) }}" class="link-btn">View All
                                        <span class="svg-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10" fill="none">
                                                <path d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z" fill="currentColor" />
                                                <path d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                                <div class="section-title-line"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($category->posts->take(1) as $categoryPost)
                        @php
                        $existCatPost[] = $categoryPost->id;
                        @endphp
                        <div class="col-xl-6">
                            <div class="ta-overlay-post">
                                <div class="overlay-post-thumb">
                                    <a href="{{ route('post.detail', ['post_slug' => $categoryPost->slug]) }}"><img src="{{ asset('uploads/post/'.$categoryPost->thumbnail) }}" alt=""></a>
                                </div>
                                <div class="overlay-post-content">
                                    <a href="blog.html" class="post-tag">{{ $category->name }}</a>
                                    <h2 class="post-title"><a href="{{ route('post.detail', ['post_slug' => $categoryPost->slug]) }}">{{ $categoryPost->title }}</a></h2>
                                    <div class="blog-post-meta">
                                        <ul class="list-wrap">
                                            <li><i class="flaticon-user"></i>by<a href="author.html">Admin</a></li>
                                            <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-xl-6">
                            @foreach ($category->posts->take(4) as $categoryPost)
                            @if (!in_array($categoryPost->id, $existCatPost))

                            <div class="ta-horizontal-post">
                                <div class="horizontal-post-thumb">
                                    <a href="{{ route('post.detail', ['post_slug' => $categoryPost->slug]) }}"><img src="{{ asset('uploads/post/'.$categoryPost->thumbnail) }}" alt=""></a>
                                </div>
                                <div class="horizontal-post-content">
                                    <a href="{{ route('cat.blog.list', ['cat_id' => $category->id, 'cat_slug' => Str::slug($category->name)]) }}" class="post-tag">{{ $category->name }}</a>
                                    <h2 class="post-title"><a href="{{ route('post.detail', ['post_slug' => $categoryPost->slug]) }}">{{ $categoryPost->title }}</a></h2>
                                    <div class="blog-post-meta">
                                        <ul class="list-wrap">
                                            <li><i class="flaticon-user"></i>by<a href="author.html">Admin</a></li>
                                            <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach

                        </div>
                    </div>
                </div>
            </section>
            <!-- recipe-area-end -->
            @endif

            @endforeach

            <!-- ad-banner-area -->
            <div class="ad-banner-area">
                <div class="container">
                    <div class="ad-banner-img">
                        <a href="#">
                            <img src="{{ asset('frontend/img/images/advertisement01.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <!-- ad-banner-area-end -->
            @foreach ($categories->take(3) as $category)
            @if (!in_array($category->id, $existCat))

            @php
                $existCat[] = $category->id;
            @endphp
            <!-- healthy-area -->
            <section class="healthy-area pt-60 pb-30">
                <div class="container">
                    <div class="healthy-inner-wrap">
                        <div class="row">
                            <div class="col-70">
                                <div class="section-title-wrap mb-30">
                                    <div class="section-title">
                                        <h2 class="title">{{ $category->name }}</h2>
                                    </div>
                                    <div class="section-title-line"></div>
                                </div>
                                <div class="row">
                                    @foreach ($category->posts->take(6) as $categoryPost)
                                    @php
                                    $existCatPost[] = $categoryPost->id;
                                    @endphp

                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="featured-post-item healthy-post">
                                            <div class="featured-post-thumb">
                                                <a href="{{ route('post.detail', ['post_slug' => $categoryPost->slug]) }}"><img src="{{ asset('uploads/post/'.$categoryPost->thumbnail) }}" alt=""></a>
                                            </div>
                                            <div class="featured-post-content">
                                                <a href="{{ route('cat.blog.list', ['cat_id' => $category->id, 'cat_slug' => Str::slug($category->name)]) }}" class="post-tag">{{ $category->name }}</a>
                                                <h2 class="post-title"><a href="{{ route('post.detail', ['post_slug' => $categoryPost->slug]) }}">{{ $categoryPost->title }}</a></h2>
                                                <div class="blog-post-meta">
                                                    <ul class="list-wrap">
                                                        <li><i class="flaticon-user"></i>by<a href="author.html">Admin</a></li>
                                                        <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="col-30">
                                <div class="sidebar-wrap no-sticky">
                                    <div class="sidebar-widget">
                                        <div class="widget-title mb-25">
                                            <h2 class="title">Popular Recipes</h2>
                                            <div class="section-title-line"></div>
                                        </div>
                                        <div class="popular-post-wrap">
                                            <div class="popular-post">
                                                <div class="thumb">
                                                    <a href="#"><img src="assets/img/blog/popular_post01.jpg" alt=""></a>
                                                </div>
                                                <div class="content">
                                                    <a href="blog.html" class="post-tag-two">Dessert</a>
                                                    <h2 class="post-title"><a href="">Inspiring Web Design And UX Showcases</a></h2>
                                                    <div class="blog-post-meta">
                                                        <ul class="list-wrap">
                                                            <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-post">
                                                <div class="thumb">
                                                    <a href=""><img src="assets/img/blog/popular_post02.jpg" alt=""></a>
                                                </div>
                                                <div class="content">
                                                    <a href="blog.html" class="post-tag-two">Lunch</a>
                                                    <h2 class="post-title"><a href="">A Guide To Accessible Form Validation</a></h2>
                                                    <div class="blog-post-meta">
                                                        <ul class="list-wrap">
                                                            <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-post">
                                                <div class="thumb">
                                                    <a href=""><img src="assets/img/blog/popular_post03.jpg" alt=""></a>
                                                </div>
                                                <div class="content">
                                                    <a href="blog.html" class="post-tag-two">Dinner</a>
                                                    <h2 class="post-title"><a href="">A Step-By-Step Guide To Building Accessible</a></h2>
                                                    <div class="blog-post-meta">
                                                        <ul class="list-wrap">
                                                            <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-post">
                                                <div class="thumb">
                                                    <a href=""><img src="assets/img/blog/popular_post04.jpg" alt=""></a>
                                                </div>
                                                <div class="content">
                                                    <a href="blog.html" class="post-tag-two">Pizza</a>
                                                    <h2 class="post-title"><a href="">The Butter Chocolate
                                                    Cookies Daily</a></h2>
                                                    <div class="blog-post-meta">
                                                        <ul class="list-wrap">
                                                            <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-post">
                                                <div class="thumb">
                                                    <a href=""><img src="assets/img/blog/popular_post05.jpg" alt=""></a>
                                                </div>
                                                <div class="content">
                                                    <a href="blog.html" class="post-tag-two">Breakfast</a>
                                                    <h2 class="post-title"><a href="">Five Steps To Design Your Product</a></h2>
                                                    <div class="blog-post-meta">
                                                        <ul class="list-wrap">
                                                            <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- healthy-area-end -->
            @endif
            @endforeach

            <!-- ad-banner-area -->
            <div class="ad-banner-area pb-90">
                <div class="container">
                    <div class="ad-banner-img">
                        <a href="#">
                            <img src="{{ asset('frontend/img/images/advertisement02.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <!-- ad-banner-area-end -->

        </main>
        <!-- main-area-end -->


@endsection
