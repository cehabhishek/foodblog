@php
    $image = asset('frontend/images/logo.png');
    $logo = asset('frontend/images/logo.png');
@endphp
@section('title',$category->name)
{{-- @section('description',$subCategory->short_description) --}}
@section('keywords','Python, Java, C, C++, JavaScript, SQL, PHP, Web Development, Tutorial, Programming, HTML, CSS, React, NodeJS, Programming Examples,CodingIz ,Data Structures, Algorithms, How to,XML, MySQL')
@section('image',$image)
@section('schema')
<script type='application/ld+json'>
    {
        "@context": "https://schema.org",
        "@type": "Article",
        "mainEntityOfPage": {
          "@type": "WebPage",
          "id": "{{ Request::url() }}"
        },
        "headline": "{{ $category->name }}",
        "image": "{{ $image }}",
        "author": {
            "@type": "Person",
            "name": "Abhishek Prajapati"
          },
        "datePublished": "{{ $category->created_at }}",
        "dateModified": "{{ $category->updated_at ?? $category->created_at }}",
        "publisher": {
        "@type": "Organization",
        "name": "CodingIz",
        "logo": {
            "@type": "ImageObject",
            "url": "{{ $logo }}",
            "width": "512",
            "height": "126"
        }
        },
        "description": "{{ $category->short_description }}"
    }
    </script>
@endsection
@extends('layouts.master')
@section('content')
     <!-- main-area -->
     <main class="fix">

        <!-- breadcrumb-area -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $category->name }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- blog-area -->
        <section class="blog-area pt-60 pb-60">
            <div class="container">
                <div class="author-inner-wrap">
                    <div class="row justify-content-center">
                        <div class="col-70">
                            <div class="weekly-post-item-wrap-three">
                                <div class="row">
                                    @foreach ($posts as $post)

                                    <div class="col-md-6">
                                        <div class="weekly-post-three">
                                            <div class="weekly-post-thumb">
                                                <a href="{{ route('post.detail', ['post_slug' => $post->slug]) }}"><img src="{{ asset('uploads/post/'.$post->thumbnail) }}" alt=""></a>
                                                <a href="blog.html" class="post-tag">{{ $post->getCategory->name }}</a>
                                            </div>
                                            <div class="weekly-post-content">
                                                <h2 class="post-title"><a href="{{ route('post.detail', ['post_slug' => $post->slug]) }}">{{ $post->title }}</a></h2>
                                                <div class="blog-post-meta">
                                                    <ul class="list-wrap">
                                                        <li><i class="flaticon-calendar"></i>{{ $post->created_at->format('d F, Y') }}
                                                        </li>
                                                        {{-- <li><i class="flaticon-history"></i>20 Mins</li> --}}
                                                    </ul>
                                                </div>
                                                <p>{{ $post->meta_description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="pagination-wrap mt-30">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination list-wrap">
                                        {{ $posts->links() }}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-30">
                            <div class="sidebar-wrap">
                                <div class="sidebar-widget">
                                    <div class="sidebar-search">
                                        <form action="#">
                                            <input type="text" placeholder="Search . . .">
                                            <button type="submit"><i class="flaticon-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="sidebar-widget sidebar-widget-two">
                                    <div class="widget-title mb-30">
                                        <h6 class="title">Hot Categories</h6>
                                        <div class="section-title-line"></div>
                                    </div>
                                    <div class="sidebar-categories">
                                        <ul class="list-wrap">
                                            <li>
                                                <a href="blog.html" data-background="assets/img/images/t_cat_img01.jpg">
                                                    <span class="post-tag post-tag-three">Technology</span>
                                                    <span class="right-arrow">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none">
                                                            <path d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z" fill="currentcolor"></path>
                                                            <path d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z" fill="currentcolor"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog.html" data-background="assets/img/images/t_cat_img02.jpg">
                                                    <span class="post-tag post-tag-three">Mobile</span>
                                                    <span class="right-arrow">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none">
                                                            <path d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z" fill="currentcolor"></path>
                                                            <path d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z" fill="currentcolor"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog.html" data-background="assets/img/images/t_cat_img03.jpg">
                                                    <span class="post-tag post-tag-three">Gadget</span>
                                                    <span class="right-arrow">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none">
                                                            <path d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z" fill="currentcolor"></path>
                                                            <path d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z" fill="currentcolor"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog.html" data-background="assets/img/images/t_cat_img04.jpg">
                                                    <span class="post-tag post-tag-three">News</span>
                                                    <span class="right-arrow">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none">
                                                            <path d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z" fill="currentcolor"></path>
                                                            <path d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z" fill="currentcolor"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sidebar-widget sidebar-widget-two">
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
                                <div class="sidebar-widget sidebar-widget-two">
                                    <div class="widget-title mb-30">
                                        <h6 class="title">Recent News</h6>
                                        <div class="section-title-line"></div>
                                    </div>
                                    <div class="hot-post-wrap">
                                        <div class="hot-post-item">
                                            <div class="hot-post-thumb">
                                                <a href="blog-details.html"><img src="assets/img/blog/blog_rc_post.jpg" alt=""></a>
                                            </div>
                                            <div class="hot-post-content">
                                                <a href="blog.html" class="post-tag">Adventure</a>
                                                <h4 class="post-title"><a href="blog-details.html">Inspiring Web Design And UX Showcases</a></h4>
                                                <div class="blog-post-meta">
                                                    <ul class="list-wrap">
                                                        <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                        <li><i class="flaticon-history"></i>20 Mins</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hot-post-item">
                                            <div class="hot-post-content">
                                                <a href="blog.html" class="post-tag">Culture</a>
                                                <h4 class="post-title"><a href="blog-details.html">Getting Internationalization (i18n) Right With Remix And</a></h4>
                                                <div class="blog-post-meta">
                                                    <ul class="list-wrap">
                                                        <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                        <li><i class="flaticon-history"></i>20 Mins</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hot-post-item">
                                            <div class="hot-post-content">
                                                <a href="blog.html" class="post-tag">Travel</a>
                                                <h4 class="post-title"><a href="blog-details.html">A Step-By-Step Guide To Building Accessible Carousels</a></h4>
                                                <div class="blog-post-meta">
                                                    <ul class="list-wrap">
                                                        <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                        <li><i class="flaticon-history"></i>20 Mins</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebar-widget sidebar-widget-two">
                                    <div class="sidebar-newsletter">
                                        <div class="icon"><i class="flaticon-envelope"></i></div>
                                        <h4 class="title">Daily Newsletter</h4>
                                        <p>Get all the top stories from Blogs to keep track.</p>
                                        <div class="sidebar-newsletter-form-two">
                                            <form action="#">
                                                <div class="form-grp">
                                                    <input type="text" placeholder="Enter your e-mail">
                                                    <button type="submit" class="btn">Subscribe Now</button>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="checkbox">
                                                    <label for="checkbox">I agree to the terms & conditions</label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->

        <!-- newsletter-area -->
        <section class="newsletter-area-three">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="newsletter-wrap-three">
                            <div class="newsletter-content">
                                <h2 class="title">Get Our Latest News & Update</h2>
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
                            <div class="newsletter-social">
                                <h4 class="title">Follow Us:</h4>
                                <ul class="list-wrap">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- newsletter-area-end -->

    </main>
    <!-- main-area-end -->
@endsection
