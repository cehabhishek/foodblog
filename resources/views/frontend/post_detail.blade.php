@php
    $image = asset('uploads/post/' . $post->thumbnail);
    $logo = asset('frontend/images/logo.png');
@endphp
@section('title', $post->title)
@section('description', $post->meta_description)
@section('keywords', $post->keywords)
@section('image', $image)

@section('schema')
    <script type='application/ld+json'>
    {
        "@context": "https://schema.org",
        "@type": "Article",
        "mainEntityOfPage": {
          "@type": "WebPage",
          "id": "{{ Request::url() }}"
        },
        "headline": "{{ $post->title }}",
        "image": "{{ $image }}",
        "author": {
            "@type": "Person",
            "name": "Abhishek Prajapati"
          },
        "datePublished": "{{ $post->created_at }}",
        "dateModified": "{{ $post->updated_at ?? $post->created_at }}",
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
        "description": "{{ $post->meta_description }}"
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
                                    {{-- <li class="breadcrumb-item" aria-current="page"><a href="blog.html">Blogs</a></li> --}}
                                    <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- blog-details-area -->
        <section class="blog-details-area pt-60 pb-60">
            <div class="container">
                <div class="author-inner-wrap">
                    <div class="row justify-content-center">
                        <div class="col-70">
                            <div class="blog-details-wrap">
                                <div class="blog-details-content">
                                    <div class="blog-details-content-top">
                                        <a href="blog.html" class="post-tag">{{ $post->getCategory->name }}</a>
                                        <h2 class="title">{{ $post->title }}</h2>
                                        <div class="bd-content-inner">
                                            <div class="blog-post-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-user"></i>by<a href="author.html">Admin</a></li>
                                                    <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                    <li><i class="flaticon-chat"></i><a href="blog-details.html">05
                                                            Comments</a></li>
                                                    <li><i class="flaticon-history"></i>20 Mins</li>
                                                </ul>
                                            </div>
                                            <div class="blog-details-social">
                                                <ul class="list-wrap">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-details-thumb">
                                        <img src="{{ asset('uploads/post/'.$post->thumbnail) }}" alt="">
                                    </div>
                                    {!! $post->description !!}

                                        <div class="blog-details-bottom">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6">
                                                <div class="post-tags">
                                                    <h5 class="title">Tags:</h5>
                                                    <ul class="list-wrap">
                                                        <li><a href="blog.html">Art & Design</a></li>
                                                        <li><a href="blog.html">Video</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="post-share">
                                                    <h5 class="title">Share:</h5>
                                                    <ul class="list-wrap">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-avatar-wrap mb-50">
                                    <div class="blog-avatar-img">
                                        <a href="#"><img src="assets/img/images/avatar.png" alt="img"></a>
                                    </div>
                                    <div class="blog-avatar-info">
                                        <span class="designation">Author</span>
                                        <h4 class="name"><a href="author.html">Cameron Williamson</a></h4>
                                        <p>Finanappreciate your trust greatly Our clients choose dentace ducts because kneer
                                            ow we are the best area Awaitingare really.</p>
                                    </div>
                                </div>
                                <div class="pev-next-post-wrap">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="post-item">
                                                <div class="thumb">
                                                    <a href="blog-details.html"><img src="assets/img/blog/bd_post01.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="content">
                                                    <span>Previous Post</span>
                                                    <h5 class="post-title"><a href="blog-details.html">Make May
                                                            Magnificent <br> Wallpapers Edition</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="post-item next-post">
                                                <div class="thumb">
                                                    <a href="blog-details.html"><img src="assets/img/blog/bd_post02.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="content">
                                                    <span>Next Post</span>
                                                    <h5 class="post-title"><a href="blog-details.html">Write Better By
                                                            Borrowing <br> Ideas JavaScript Functions</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comments-wrap">
                                    <h3 class="comments-wrap-title">02 Comments</h3>
                                    <div class="latest-comments">
                                        <ul class="list-wrap">
                                            <li>
                                                <div class="comments-box">
                                                    <div class="comments-avatar">
                                                        <img src="assets/img/images/comment01.png" alt="img">
                                                    </div>
                                                    <div class="comments-text">
                                                        <div class="avatar-name">
                                                            <h6 class="name">Alebary keon</h6>
                                                            <span class="date">27 August, 2024</span>
                                                        </div>
                                                        <p>Finanappreciate your trust greatly Our clients choose dentace
                                                            ducts because know we are the best area Awaitingare really.</p>
                                                        <a href="#" class="reply-btn">Reply</a>
                                                    </div>
                                                </div>
                                                <ul class="children">
                                                    <li>
                                                        <div class="comments-box">
                                                            <div class="comments-avatar">
                                                                <img src="assets/img/images/comment02.png" alt="img">
                                                            </div>
                                                            <div class="comments-text">
                                                                <div class="avatar-name">
                                                                    <h6 class="name">Lukas Javeb</h6>
                                                                    <span class="date">27 August, 2024</span>
                                                                </div>
                                                                <p>Finanappreciate your trust greatly Our clients choose
                                                                    dentace ducts because know we are the best area
                                                                    Awaitingare really.</p>
                                                                <a href="#" class="reply-btn">Reply</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="comment-respond">
                                    <h3 class="comment-reply-title">Post a comment</h3>
                                    <form action="#" class="comment-form">
                                        <p class="comment-notes">Your email address will not be published. Required fields
                                            are marked *</p>
                                        <div class="form-grp">
                                            <textarea name="comment" placeholder="Comment"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-grp">
                                                    <input type="text" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-grp">
                                                    <input type="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-grp">
                                                    <input type="url" placeholder="Website">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-grp checkbox-grp">
                                            <input type="checkbox" id="checkbox_two">
                                            <label for="checkbox_two">Save my name, email, and website in this browser for
                                                the next time I comment.</label>
                                        </div>
                                        <button type="submit" class="btn btn-two">Post Comment</button>
                                    </form>
                                </div>
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
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                            fill="none">
                                                            <path
                                                                d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z"
                                                                fill="currentcolor"></path>
                                                            <path
                                                                d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z"
                                                                fill="currentcolor"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog.html" data-background="assets/img/images/t_cat_img02.jpg">
                                                    <span class="post-tag post-tag-three">Mobile</span>
                                                    <span class="right-arrow">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                            fill="none">
                                                            <path
                                                                d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z"
                                                                fill="currentcolor"></path>
                                                            <path
                                                                d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z"
                                                                fill="currentcolor"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog.html" data-background="assets/img/images/t_cat_img03.jpg">
                                                    <span class="post-tag post-tag-three">Gadget</span>
                                                    <span class="right-arrow">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                            fill="none">
                                                            <path
                                                                d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z"
                                                                fill="currentcolor"></path>
                                                            <path
                                                                d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z"
                                                                fill="currentcolor"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog.html" data-background="assets/img/images/t_cat_img04.jpg">
                                                    <span class="post-tag post-tag-three">News</span>
                                                    <span class="right-arrow">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                            fill="none">
                                                            <path
                                                                d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z"
                                                                fill="currentcolor"></path>
                                                            <path
                                                                d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z"
                                                                fill="currentcolor"></path>
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
                                                <a href="blog-details.html"><img src="assets/img/blog/blog_rc_post.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="hot-post-content">
                                                <a href="blog.html" class="post-tag">Adventure</a>
                                                <h4 class="post-title"><a href="blog-details.html">Inspiring Web Design
                                                        And UX Showcases</a></h4>
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
                                                <h4 class="post-title"><a href="blog-details.html">Getting
                                                        Internationalization (i18n) Right With Remix And</a></h4>
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
                                                <h4 class="post-title"><a href="blog-details.html">A Step-By-Step Guide To
                                                        Building Accessible Carousels</a></h4>
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
        <!-- blog-details-area-end -->

    </main>
    <!-- main-area-end -->

@endsection
