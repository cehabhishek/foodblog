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

  <!-- Wrapper start -->
  <div id="wrapper" class="wrap overflow-hidden-x">
    <div class="breadcrumbs panel z-1 py-2 bg-gray-25 dark:bg-gray-100 dark:bg-opacity-5 dark:text-white">
        <div class="container max-w-xl">
            <ul class="breadcrumb nav-x justify-center gap-1 fs-7 sm:fs-6 m-0">
                <li><a href="index.html">Home</a></li>
                <li><i class="unicon-chevron-right opacity-50"></i></li>
                <li><a href="blog.html">Blog</a></li>
                <li><i class="unicon-chevron-right opacity-50"></i></li>
                <li><span class="opacity-50">Blog - Grid 3 Cols</span></li>
            </ul>
        </div>
    </div>

    <div class="section py-3 sm:py-6 lg:py-9">
        <div class="container max-w-xl">
            <div class="panel vstack gap-3 sm:gap-6 lg:gap-9">
                <header class="page-header vstack justify-center items-center text-center max-w-500px mx-auto">
                    <h1 class="h4 lg:h1">Blog - Grid 3 Cols</h1>
                    <p class="fs-6 lg:fs-5 opacity-60">Olympic mountain bikers, musicians, and award-winning chefs so special and fun.</p>
                </header>
                <div class="row g-4 xl:g-8">
                    <div class="col">
                        <div class="panel text-center">
                            <div class="row child-cols-12 sm:child-cols-6 lg:child-cols-4 col-match gy-4 xl:gy-6 gx-2 sm:gx-4">
                                <div>
                                    <article class="post type-post panel vstack gap-2">
                                        <div class="post-image panel overflow-hidden">
                                            <figure class="featured-image m-0 ratio ratio-16x9 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="../assets/images/common/img-fallback.png" data-src="../assets/images/demo-seven/posts/img-02.jpg" alt="Tech Innovations Reshaping the Retail Landscape: AI Payments" data-uc-img="loading: lazy">
                                                <a href="blog-details.html" class="position-cover" data-caption="Tech Innovations Reshaping the Retail Landscape: AI Payments"></a>
                                            </figure>
                                            <div class="post-category hstack gap-narrow position-absolute top-0 start-0 m-1 fs-7 fw-bold h-24px px-1 rounded-1 shadow-xs bg-white text-primary">
                                                <a class="text-none" href="blog-category.html">World</a>
                                            </div>
                                            <div class="position-absolute top-0 end-0 w-150px h-150px rounded-top-end bg-gradient-45 from-transparent via-transparent to-black opacity-50"></div>
                                            <span class="cstack position-absolute top-0 end-0 fs-6 w-40px h-40px text-white">
                                                <i class="icon-narrow unicon-play-filled-alt"></i>
                                            </span>
                                        </div>
                                        <div class="post-header panel vstack gap-1 lg:gap-2">
                                            <h3 class="post-title h6 sm:h5 xl:h4 m-0 text-truncate-2 m-0">
                                                <a class="text-none" href="blog-details.html">Tech Innovations Reshaping the Retail Landscape: AI Payments</a>
                                            </h3>
                                            <div>
                                                <div class="post-meta panel hstack justify-center fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                    <div class="meta">
                                                        <div class="hstack gap-2">
                                                            <div>
                                                                <div class="post-author hstack gap-1">
                                                                    <a href="page-author.html" data-uc-tooltip="Jason Blake"><img src="../assets/images/avatars/05.png" alt="Jason Blake" class="w-24px h-24px rounded-circle"></a>
                                                                    <a href="page-author.html" class="text-black dark:text-white text-none fw-bold">Jason Blake</a>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="post-date hstack gap-narrow">
                                                                    <span>Mar 8, 2024</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <a href="#post_comment" class="post-comments text-none hstack gap-narrow">
                                                                    <i class="icon-narrow unicon-chat"></i>
                                                                    <span>100</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="hstack gap-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div>
                                    <article class="post type-post panel vstack gap-2">
                                        <div class="post-image panel overflow-hidden">
                                            <figure class="featured-image m-0 ratio ratio-16x9 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="../assets/images/common/img-fallback.png" data-src="../assets/images/demo-seven/posts/img-03.jpg" alt="Balancing Work and Wellness: Tech Solutions for Healthy" data-uc-img="loading: lazy">
                                                <a href="blog-details.html" class="position-cover" data-caption="Balancing Work and Wellness: Tech Solutions for Healthy"></a>
                                            </figure>
                                            <div class="post-category hstack gap-narrow position-absolute top-0 start-0 m-1 fs-7 fw-bold h-24px px-1 rounded-1 shadow-xs bg-white text-primary">
                                                <a class="text-none" href="blog-category.html">Opinions</a>
                                            </div>
                                            <div class="position-absolute top-0 end-0 w-150px h-150px rounded-top-end bg-gradient-45 from-transparent via-transparent to-black opacity-50"></div>
                                            <span class="cstack position-absolute top-0 end-0 fs-6 w-40px h-40px text-white">
                                                <i class="icon-narrow unicon-play-filled-alt"></i>
                                            </span>
                                        </div>
                                        <div class="post-header panel vstack gap-1 lg:gap-2">
                                            <h3 class="post-title h6 sm:h5 xl:h4 m-0 text-truncate-2 m-0">
                                                <a class="text-none" href="blog-details.html">Balancing Work and Wellness: Tech Solutions for Healthy</a>
                                            </h3>
                                            <div>
                                                <div class="post-meta panel hstack justify-center fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                    <div class="meta">
                                                        <div class="hstack gap-2">
                                                            <div>
                                                                <div class="post-author hstack gap-1">
                                                                    <a href="page-author.html" data-uc-tooltip="Sarah Eddrissi"><img src="../assets/images/avatars/03.png" alt="Sarah Eddrissi" class="w-24px h-24px rounded-circle"></a>
                                                                    <a href="page-author.html" class="text-black dark:text-white text-none fw-bold">Sarah Eddrissi</a>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="post-date hstack gap-narrow">
                                                                    <span>Mar 8, 2024</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <a href="#post_comment" class="post-comments text-none hstack gap-narrow">
                                                                    <i class="icon-narrow unicon-chat"></i>
                                                                    <span>0</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="hstack gap-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div>
                                    <article class="post type-post panel vstack gap-2">
                                        <div class="post-image panel overflow-hidden">
                                            <figure class="featured-image m-0 ratio ratio-16x9 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="../assets/images/common/img-fallback.png" data-src="../assets/images/demo-seven/posts/img-04.jpg" alt="The Importance of Sleep: Tips for Better Rest and Recovery" data-uc-img="loading: lazy">
                                                <a href="blog-details.html" class="position-cover" data-caption="The Importance of Sleep: Tips for Better Rest and Recovery"></a>
                                            </figure>
                                            <div class="post-category hstack gap-narrow position-absolute top-0 start-0 m-1 fs-7 fw-bold h-24px px-1 rounded-1 shadow-xs bg-white text-primary">
                                                <a class="text-none" href="blog-category.html">Politics</a>
                                            </div>
                                            <div class="position-absolute top-0 end-0 w-150px h-150px rounded-top-end bg-gradient-45 from-transparent via-transparent to-black opacity-50"></div>
                                            <span class="cstack position-absolute top-0 end-0 fs-6 w-40px h-40px text-white">
                                                <i class="icon-narrow unicon-play-filled-alt"></i>
                                            </span>
                                        </div>
                                        <div class="post-header panel vstack gap-1 lg:gap-2">
                                            <h3 class="post-title h6 sm:h5 xl:h4 m-0 text-truncate-2 m-0">
                                                <a class="text-none" href="blog-details.html">The Importance of Sleep: Tips for Better Rest and Recovery</a>
                                            </h3>
                                            <div>
                                                <div class="post-meta panel hstack justify-center fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                    <div class="meta">
                                                        <div class="hstack gap-2">
                                                            <div>
                                                                <div class="post-author hstack gap-1">
                                                                    <a href="page-author.html" data-uc-tooltip="Sarah Eddrissi"><img src="../assets/images/avatars/03.png" alt="Sarah Eddrissi" class="w-24px h-24px rounded-circle"></a>
                                                                    <a href="page-author.html" class="text-black dark:text-white text-none fw-bold">Sarah Eddrissi</a>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="post-date hstack gap-narrow">
                                                                    <span>Mar 8, 2024</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <a href="#post_comment" class="post-comments text-none hstack gap-narrow">
                                                                    <i class="icon-narrow unicon-chat"></i>
                                                                    <span>0</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="hstack gap-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div>
                                    <article class="post type-post panel vstack gap-2">
                                        <div class="post-image panel overflow-hidden">
                                            <figure class="featured-image m-0 ratio ratio-16x9 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="../assets/images/common/img-fallback.png" data-src="../assets/images/demo-seven/posts/img-05.jpg" alt="The Future of Sustainable Living: Driving Eco-Friendly Lifestyles" data-uc-img="loading: lazy">
                                                <a href="blog-details.html" class="position-cover" data-caption="The Future of Sustainable Living: Driving Eco-Friendly Lifestyles"></a>
                                            </figure>
                                            <div class="post-category hstack gap-narrow position-absolute top-0 start-0 m-1 fs-7 fw-bold h-24px px-1 rounded-1 shadow-xs bg-white text-primary">
                                                <a class="text-none" href="blog-category.html">Politics</a>
                                            </div>
                                        </div>
                                        <div class="post-header panel vstack gap-1 lg:gap-2">
                                            <h3 class="post-title h6 sm:h5 xl:h4 m-0 text-truncate-2 m-0">
                                                <a class="text-none" href="blog-details.html">The Future of Sustainable Living: Driving Eco-Friendly Lifestyles</a>
                                            </h3>
                                            <div>
                                                <div class="post-meta panel hstack justify-center fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                    <div class="meta">
                                                        <div class="hstack gap-2">
                                                            <div>
                                                                <div class="post-author hstack gap-1">
                                                                    <a href="page-author.html" data-uc-tooltip="Anna Luis"><img src="../assets/images/avatars/04.png" alt="Anna Luis" class="w-24px h-24px rounded-circle"></a>
                                                                    <a href="page-author.html" class="text-black dark:text-white text-none fw-bold">Anna Luis</a>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="post-date hstack gap-narrow">
                                                                    <span>Mar 7, 2024</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <a href="#post_comment" class="post-comments text-none hstack gap-narrow">
                                                                    <i class="icon-narrow unicon-chat"></i>
                                                                    <span>1</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="hstack gap-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div>
                                    <article class="post type-post panel vstack gap-2">
                                        <div class="post-image panel overflow-hidden">
                                            <figure class="featured-image m-0 ratio ratio-16x9 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="../assets/images/common/img-fallback.png" data-src="../assets/images/demo-seven/posts/img-06.jpg" alt="Business Agility the Digital Age: Leveraging AI and Automation" data-uc-img="loading: lazy">
                                                <a href="blog-details.html" class="position-cover" data-caption="Business Agility the Digital Age: Leveraging AI and Automation"></a>
                                            </figure>
                                            <div class="post-category hstack gap-narrow position-absolute top-0 start-0 m-1 fs-7 fw-bold h-24px px-1 rounded-1 shadow-xs bg-white text-primary">
                                                <a class="text-none" href="blog-category.html">Opinions</a>
                                            </div>
                                            <div class="position-absolute top-0 end-0 w-150px h-150px rounded-top-end bg-gradient-45 from-transparent via-transparent to-black opacity-50"></div>
                                            <span class="cstack position-absolute top-0 end-0 fs-6 w-40px h-40px text-white">
                                                <i class="icon-narrow unicon-play-filled-alt"></i>
                                            </span>
                                        </div>
                                        <div class="post-header panel vstack gap-1 lg:gap-2">
                                            <h3 class="post-title h6 sm:h5 xl:h4 m-0 text-truncate-2 m-0">
                                                <a class="text-none" href="blog-details.html">Business Agility the Digital Age: Leveraging AI and Automation</a>
                                            </h3>
                                            <div>
                                                <div class="post-meta panel hstack justify-center fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                    <div class="meta">
                                                        <div class="hstack gap-2">
                                                            <div>
                                                                <div class="post-author hstack gap-1">
                                                                    <a href="page-author.html" data-uc-tooltip="Nisi Nyung"><img src="../assets/images/avatars/08.png" alt="Nisi Nyung" class="w-24px h-24px rounded-circle"></a>
                                                                    <a href="page-author.html" class="text-black dark:text-white text-none fw-bold">Nisi Nyung</a>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="post-date hstack gap-narrow">
                                                                    <span>Mar 1, 2024</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <a href="#post_comment" class="post-comments text-none hstack gap-narrow">
                                                                    <i class="icon-narrow unicon-chat"></i>
                                                                    <span>23</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="hstack gap-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div>
                                    <article class="post type-post panel vstack gap-2">
                                        <div class="post-image panel overflow-hidden">
                                            <figure class="featured-image m-0 ratio ratio-16x9 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="../assets/images/common/img-fallback.png" data-src="../assets/images/demo-seven/posts/img-07.jpg" alt="The Art of Baking: From Classic Bread to Artisan Pastries" data-uc-img="loading: lazy">
                                                <a href="blog-details.html" class="position-cover" data-caption="The Art of Baking: From Classic Bread to Artisan Pastries"></a>
                                            </figure>
                                            <div class="post-category hstack gap-narrow position-absolute top-0 start-0 m-1 fs-7 fw-bold h-24px px-1 rounded-1 shadow-xs bg-white text-primary">
                                                <a class="text-none" href="blog-category.html">World</a>
                                            </div>
                                            <div class="position-absolute top-0 end-0 w-150px h-150px rounded-top-end bg-gradient-45 from-transparent via-transparent to-black opacity-50"></div>
                                            <span class="cstack position-absolute top-0 end-0 fs-6 w-40px h-40px text-white">
                                                <i class="icon-narrow unicon-play-filled-alt"></i>
                                            </span>
                                        </div>
                                        <div class="post-header panel vstack gap-1 lg:gap-2">
                                            <h3 class="post-title h6 sm:h5 xl:h4 m-0 text-truncate-2 m-0">
                                                <a class="text-none" href="blog-details.html">The Art of Baking: From Classic Bread to Artisan Pastries</a>
                                            </h3>
                                            <div>
                                                <div class="post-meta panel hstack justify-center fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                    <div class="meta">
                                                        <div class="hstack gap-2">
                                                            <div>
                                                                <div class="post-author hstack gap-1">
                                                                    <a href="page-author.html" data-uc-tooltip="Nisi Nyung"><img src="../assets/images/avatars/08.png" alt="Nisi Nyung" class="w-24px h-24px rounded-circle"></a>
                                                                    <a href="page-author.html" class="text-black dark:text-white text-none fw-bold">Nisi Nyung</a>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="post-date hstack gap-narrow">
                                                                    <span>Feb 28, 2024</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <a href="#post_comment" class="post-comments text-none hstack gap-narrow">
                                                                    <i class="icon-narrow unicon-chat"></i>
                                                                    <span>112</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="hstack gap-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div>
                                    <article class="post type-post panel vstack gap-2">
                                        <div class="post-image panel overflow-hidden">
                                            <figure class="featured-image m-0 ratio ratio-16x9 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="../assets/images/common/img-fallback.png" data-src="../assets/images/demo-seven/posts/img-08.jpg" alt="AI and Marketing: Unlocking Customer Insights" data-uc-img="loading: lazy">
                                                <a href="blog-details.html" class="position-cover" data-caption="AI and Marketing: Unlocking Customer Insights"></a>
                                            </figure>
                                            <div class="post-category hstack gap-narrow position-absolute top-0 start-0 m-1 fs-7 fw-bold h-24px px-1 rounded-1 shadow-xs bg-white text-primary">
                                                <a class="text-none" href="blog-category.html">Media</a>
                                            </div>
                                        </div>
                                        <div class="post-header panel vstack gap-1 lg:gap-2">
                                            <h3 class="post-title h6 sm:h5 xl:h4 m-0 text-truncate-2 m-0">
                                                <a class="text-none" href="blog-details.html">AI and Marketing: Unlocking Customer Insights</a>
                                            </h3>
                                            <div>
                                                <div class="post-meta panel hstack justify-center fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                    <div class="meta">
                                                        <div class="hstack gap-2">
                                                            <div>
                                                                <div class="post-author hstack gap-1">
                                                                    <a href="page-author.html" data-uc-tooltip="Rico Santos"><img src="../assets/images/avatars/07.png" alt="Rico Santos" class="w-24px h-24px rounded-circle"></a>
                                                                    <a href="page-author.html" class="text-black dark:text-white text-none fw-bold">Rico Santos</a>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="post-date hstack gap-narrow">
                                                                    <span>Feb 22, 2024</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <a href="#post_comment" class="post-comments text-none hstack gap-narrow">
                                                                    <i class="icon-narrow unicon-chat"></i>
                                                                    <span>2</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="hstack gap-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div>
                                    <article class="post type-post panel vstack gap-2">
                                        <div class="post-image panel overflow-hidden">
                                            <figure class="featured-image m-0 ratio ratio-16x9 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="../assets/images/common/img-fallback.png" data-src="../assets/images/demo-seven/posts/img-09.jpg" alt="Hidden Gems: Underrated Travel Destinations Around the World" data-uc-img="loading: lazy">
                                                <a href="blog-details.html" class="position-cover" data-caption="Hidden Gems: Underrated Travel Destinations Around the World"></a>
                                            </figure>
                                            <div class="post-category hstack gap-narrow position-absolute top-0 start-0 m-1 fs-7 fw-bold h-24px px-1 rounded-1 shadow-xs bg-white text-primary">
                                                <a class="text-none" href="blog-category.html">World</a>
                                            </div>
                                        </div>
                                        <div class="post-header panel vstack gap-1 lg:gap-2">
                                            <h3 class="post-title h6 sm:h5 xl:h4 m-0 text-truncate-2 m-0">
                                                <a class="text-none" href="blog-details.html">Hidden Gems: Underrated Travel Destinations Around the World</a>
                                            </h3>
                                            <div>
                                                <div class="post-meta panel hstack justify-center fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                    <div class="meta">
                                                        <div class="hstack gap-2">
                                                            <div>
                                                                <div class="post-author hstack gap-1">
                                                                    <a href="page-author.html" data-uc-tooltip="David Peterson"><img src="../assets/images/avatars/01.png" alt="David Peterson" class="w-24px h-24px rounded-circle"></a>
                                                                    <a href="page-author.html" class="text-black dark:text-white text-none fw-bold">David Peterson</a>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="post-date hstack gap-narrow">
                                                                    <span>Feb 14, 2024</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <a href="#post_comment" class="post-comments text-none hstack gap-narrow">
                                                                    <i class="icon-narrow unicon-chat"></i>
                                                                    <span>15</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="hstack gap-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div>
                                    <article class="post type-post panel vstack gap-2">
                                        <div class="post-image panel overflow-hidden">
                                            <figure class="featured-image m-0 ratio ratio-16x9 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="../assets/images/common/img-fallback.png" data-src="../assets/images/demo-seven/posts/img-10.jpg" alt="Eco-Tourism: Traveling Responsibly and Sustainably" data-uc-img="loading: lazy">
                                                <a href="blog-details.html" class="position-cover" data-caption="Eco-Tourism: Traveling Responsibly and Sustainably"></a>
                                            </figure>
                                            <div class="post-category hstack gap-narrow position-absolute top-0 start-0 m-1 fs-7 fw-bold h-24px px-1 rounded-1 shadow-xs bg-white text-primary">
                                                <a class="text-none" href="blog-category.html">Politics</a>
                                            </div>
                                        </div>
                                        <div class="post-header panel vstack gap-1 lg:gap-2">
                                            <h3 class="post-title h6 sm:h5 xl:h4 m-0 text-truncate-2 m-0">
                                                <a class="text-none" href="blog-details.html">Eco-Tourism: Traveling Responsibly and Sustainably</a>
                                            </h3>
                                            <div>
                                                <div class="post-meta panel hstack justify-center fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                    <div class="meta">
                                                        <div class="hstack gap-2">
                                                            <div>
                                                                <div class="post-author hstack gap-1">
                                                                    <a href="page-author.html" data-uc-tooltip="David Peterson"><img src="../assets/images/avatars/01.png" alt="David Peterson" class="w-24px h-24px rounded-circle"></a>
                                                                    <a href="page-author.html" class="text-black dark:text-white text-none fw-bold">David Peterson</a>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="post-date hstack gap-narrow">
                                                                    <span>Feb 8, 2024</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <a href="#post_comment" class="post-comments text-none hstack gap-narrow">
                                                                    <i class="icon-narrow unicon-chat"></i>
                                                                    <span>20</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="hstack gap-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div>
                                    <article class="post type-post panel vstack gap-2">
                                        <div class="post-image panel overflow-hidden">
                                            <figure class="featured-image m-0 ratio ratio-16x9 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="../assets/images/common/img-fallback.png" data-src="../assets/images/demo-seven/posts/img-11.jpg" alt="Solo Travel: Some Tips and Destinations for the Adventurous Explorer" data-uc-img="loading: lazy">
                                                <a href="blog-details.html" class="position-cover" data-caption="Solo Travel: Some Tips and Destinations for the Adventurous Explorer"></a>
                                            </figure>
                                            <div class="post-category hstack gap-narrow position-absolute top-0 start-0 m-1 fs-7 fw-bold h-24px px-1 rounded-1 shadow-xs bg-white text-primary">
                                                <a class="text-none" href="blog-category.html">Media</a>
                                            </div>
                                        </div>
                                        <div class="post-header panel vstack gap-1 lg:gap-2">
                                            <h3 class="post-title h6 sm:h5 xl:h4 m-0 text-truncate-2 m-0">
                                                <a class="text-none" href="blog-details.html">Solo Travel: Some Tips and Destinations for the Adventurous Explorer</a>
                                            </h3>
                                            <div>
                                                <div class="post-meta panel hstack justify-center fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                    <div class="meta">
                                                        <div class="hstack gap-2">
                                                            <div>
                                                                <div class="post-author hstack gap-1">
                                                                    <a href="page-author.html" data-uc-tooltip="Peter Sawyer"><img src="../assets/images/avatars/02.png" alt="Peter Sawyer" class="w-24px h-24px rounded-circle"></a>
                                                                    <a href="page-author.html" class="text-black dark:text-white text-none fw-bold">Peter Sawyer</a>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="post-date hstack gap-narrow">
                                                                    <span>Jan 8, 2024</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <a href="#post_comment" class="post-comments text-none hstack gap-narrow">
                                                                    <i class="icon-narrow unicon-chat"></i>
                                                                    <span>5</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="hstack gap-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div>
                                    <article class="post type-post panel vstack gap-2">
                                        <div class="post-image panel overflow-hidden">
                                            <figure class="featured-image m-0 ratio ratio-16x9 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="../assets/images/common/img-fallback.png" data-src="../assets/images/demo-seven/posts/img-12.jpg" alt="AI-Powered Financial Planning: How Algorithms Revolutionizing" data-uc-img="loading: lazy">
                                                <a href="blog-details.html" class="position-cover" data-caption="AI-Powered Financial Planning: How Algorithms Revolutionizing"></a>
                                            </figure>
                                            <div class="post-category hstack gap-narrow position-absolute top-0 start-0 m-1 fs-7 fw-bold h-24px px-1 rounded-1 shadow-xs bg-white text-primary">
                                                <a class="text-none" href="blog-category.html">World</a>
                                            </div>
                                            <div class="position-absolute top-0 end-0 w-150px h-150px rounded-top-end bg-gradient-45 from-transparent via-transparent to-black opacity-50"></div>
                                            <span class="cstack position-absolute top-0 end-0 fs-6 w-40px h-40px text-white">
                                                <i class="icon-narrow unicon-play-filled-alt"></i>
                                            </span>
                                        </div>
                                        <div class="post-header panel vstack gap-1 lg:gap-2">
                                            <h3 class="post-title h6 sm:h5 xl:h4 m-0 text-truncate-2 m-0">
                                                <a class="text-none" href="blog-details.html">AI-Powered Financial Planning: How Algorithms Revolutionizing</a>
                                            </h3>
                                            <div>
                                                <div class="post-meta panel hstack justify-center fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                    <div class="meta">
                                                        <div class="hstack gap-2">
                                                            <div>
                                                                <div class="post-author hstack gap-1">
                                                                    <a href="page-author.html" data-uc-tooltip="Sarah Eddrissi"><img src="../assets/images/avatars/03.png" alt="Sarah Eddrissi" class="w-24px h-24px rounded-circle"></a>
                                                                    <a href="page-author.html" class="text-black dark:text-white text-none fw-bold">Sarah Eddrissi</a>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="post-date hstack gap-narrow">
                                                                    <span>Jan 8, 2024</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <a href="#post_comment" class="post-comments text-none hstack gap-narrow">
                                                                    <i class="icon-narrow unicon-chat"></i>
                                                                    <span>2</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="hstack gap-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div>
                                    <article class="post type-post panel vstack gap-2">
                                        <div class="post-image panel overflow-hidden">
                                            <figure class="featured-image m-0 ratio ratio-16x9 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="../assets/images/common/img-fallback.png" data-src="../assets/images/demo-seven/posts/img-13.jpg" alt="Tech Tools for your Time Management: Enhancing Productivity" data-uc-img="loading: lazy">
                                                <a href="blog-details.html" class="position-cover" data-caption="Tech Tools for your Time Management: Enhancing Productivity"></a>
                                            </figure>
                                            <div class="post-category hstack gap-narrow position-absolute top-0 start-0 m-1 fs-7 fw-bold h-24px px-1 rounded-1 shadow-xs bg-white text-primary">
                                                <a class="text-none" href="blog-category.html">Politics</a>
                                            </div>
                                            <div class="position-absolute top-0 end-0 w-150px h-150px rounded-top-end bg-gradient-45 from-transparent via-transparent to-black opacity-50"></div>
                                            <span class="cstack position-absolute top-0 end-0 fs-6 w-40px h-40px text-white">
                                                <i class="icon-narrow unicon-play-filled-alt"></i>
                                            </span>
                                        </div>
                                        <div class="post-header panel vstack gap-1 lg:gap-2">
                                            <h3 class="post-title h6 sm:h5 xl:h4 m-0 text-truncate-2 m-0">
                                                <a class="text-none" href="blog-details.html">Tech Tools for your Time Management: Enhancing Productivity</a>
                                            </h3>
                                            <div>
                                                <div class="post-meta panel hstack justify-center fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                    <div class="meta">
                                                        <div class="hstack gap-2">
                                                            <div>
                                                                <div class="post-author hstack gap-1">
                                                                    <a href="page-author.html" data-uc-tooltip="Anna Luis"><img src="../assets/images/avatars/04.png" alt="Anna Luis" class="w-24px h-24px rounded-circle"></a>
                                                                    <a href="page-author.html" class="text-black dark:text-white text-none fw-bold">Anna Luis</a>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="post-date hstack gap-narrow">
                                                                    <span>Dec 8, 2023</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <a href="#post_comment" class="post-comments text-none hstack gap-narrow">
                                                                    <i class="icon-narrow unicon-chat"></i>
                                                                    <span>19</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="hstack gap-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div>
                                    <article class="post type-post panel vstack gap-2">
                                        <div class="post-image panel overflow-hidden">
                                            <figure class="featured-image m-0 ratio ratio-16x9 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="../assets/images/common/img-fallback.png" data-src="../assets/images/demo-seven/posts/img-14.jpg" alt="A Guide to The Rise of Gourmet Street Food: Trends and Top Picks" data-uc-img="loading: lazy">
                                                <a href="blog-details.html" class="position-cover" data-caption="A Guide to The Rise of Gourmet Street Food: Trends and Top Picks"></a>
                                            </figure>
                                            <div class="post-category hstack gap-narrow position-absolute top-0 start-0 m-1 fs-7 fw-bold h-24px px-1 rounded-1 shadow-xs bg-white text-primary">
                                                <a class="text-none" href="blog-category.html">Opinions</a>
                                            </div>
                                        </div>
                                        <div class="post-header panel vstack gap-1 lg:gap-2">
                                            <h3 class="post-title h6 sm:h5 xl:h4 m-0 text-truncate-2 m-0">
                                                <a class="text-none" href="blog-details.html">A Guide to The Rise of Gourmet Street Food: Trends and Top Picks</a>
                                            </h3>
                                            <div>
                                                <div class="post-meta panel hstack justify-center fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                    <div class="meta">
                                                        <div class="hstack gap-2">
                                                            <div>
                                                                <div class="post-author hstack gap-1">
                                                                    <a href="page-author.html" data-uc-tooltip="Jason Blake"><img src="../assets/images/avatars/05.png" alt="Jason Blake" class="w-24px h-24px rounded-circle"></a>
                                                                    <a href="page-author.html" class="text-black dark:text-white text-none fw-bold">Jason Blake</a>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="post-date hstack gap-narrow">
                                                                    <span>Sep 8, 2023</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <a href="#post_comment" class="post-comments text-none hstack gap-narrow">
                                                                    <i class="icon-narrow unicon-chat"></i>
                                                                    <span>2</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="hstack gap-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div>
                                    <article class="post type-post panel vstack gap-2">
                                        <div class="post-image panel overflow-hidden">
                                            <figure class="featured-image m-0 ratio ratio-16x9 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="../assets/images/common/img-fallback.png" data-src="../assets/images/demo-seven/posts/img-15.jpg" alt="Gaming in the Age of AI: Strategies for Startups" data-uc-img="loading: lazy">
                                                <a href="blog-details.html" class="position-cover" data-caption="Gaming in the Age of AI: Strategies for Startups"></a>
                                            </figure>
                                            <div class="post-category hstack gap-narrow position-absolute top-0 start-0 m-1 fs-7 fw-bold h-24px px-1 rounded-1 shadow-xs bg-white text-primary">
                                                <a class="text-none" href="blog-category.html">Media</a>
                                            </div>
                                        </div>
                                        <div class="post-header panel vstack gap-1 lg:gap-2">
                                            <h3 class="post-title h6 sm:h5 xl:h4 m-0 text-truncate-2 m-0">
                                                <a class="text-none" href="blog-details.html">Gaming in the Age of AI: Strategies for Startups</a>
                                            </h3>
                                            <div>
                                                <div class="post-meta panel hstack justify-center fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                    <div class="meta">
                                                        <div class="hstack gap-2">
                                                            <div>
                                                                <div class="post-author hstack gap-1">
                                                                    <a href="page-author.html" data-uc-tooltip="Peter Sawyer"><img src="../assets/images/avatars/02.png" alt="Peter Sawyer" class="w-24px h-24px rounded-circle"></a>
                                                                    <a href="page-author.html" class="text-black dark:text-white text-none fw-bold">Peter Sawyer</a>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="post-date hstack gap-narrow">
                                                                    <span>Jun 8, 2023</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <a href="#post_comment" class="post-comments text-none hstack gap-narrow">
                                                                    <i class="icon-narrow unicon-chat"></i>
                                                                    <span>19</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="hstack gap-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div>
                                    <article class="post type-post panel vstack gap-2">
                                        <div class="post-image panel overflow-hidden">
                                            <figure class="featured-image m-0 ratio ratio-16x9 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="../assets/images/common/img-fallback.png" data-src="../assets/images/demo-seven/posts/img-16.jpg" alt="Top Independent Contractors to Invest in Best of Startups" data-uc-img="loading: lazy">
                                                <a href="blog-details.html" class="position-cover" data-caption="Top Independent Contractors to Invest in Best of Startups"></a>
                                            </figure>
                                            <div class="post-category hstack gap-narrow position-absolute top-0 start-0 m-1 fs-7 fw-bold h-24px px-1 rounded-1 shadow-xs bg-white text-primary">
                                                <a class="text-none" href="blog-category.html">Opinions</a>
                                            </div>
                                        </div>
                                        <div class="post-header panel vstack gap-1 lg:gap-2">
                                            <h3 class="post-title h6 sm:h5 xl:h4 m-0 text-truncate-2 m-0">
                                                <a class="text-none" href="blog-details.html">Top Independent Contractors to Invest in Best of Startups</a>
                                            </h3>
                                            <div>
                                                <div class="post-meta panel hstack justify-center fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                    <div class="meta">
                                                        <div class="hstack gap-2">
                                                            <div>
                                                                <div class="post-author hstack gap-1">
                                                                    <a href="page-author.html" data-uc-tooltip="David Peterson"><img src="../assets/images/avatars/01.png" alt="David Peterson" class="w-24px h-24px rounded-circle"></a>
                                                                    <a href="page-author.html" class="text-black dark:text-white text-none fw-bold">David Peterson</a>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="post-date hstack gap-narrow">
                                                                    <span>Mar 8, 2023</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <a href="#post_comment" class="post-comments text-none hstack gap-narrow">
                                                                    <i class="icon-narrow unicon-chat"></i>
                                                                    <span>12</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="hstack gap-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="nav-pagination pt-3 mt-6 lg:mt-9 border-top border-gray-100 dark:border-gray-800">
                                <ul class="nav-x uc-pagination hstack gap-1 justify-center ft-secondary" data-uc-margin="">
                                    <li>
                                        <a href="#"><span class="icon icon-1 unicon-chevron-left"></span></a>
                                    </li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#" class="uc-active">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="uc-disabled"><span>…</span></li>
                                    <li><a href="#">8</a></li>
                                    <li><a href="#">9</a></li>
                                    <li>
                                        <a href="#"><span class="icon icon-1 unicon-chevron-right"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter -->
</div>

<!-- Wrapper end -->
@endsection
