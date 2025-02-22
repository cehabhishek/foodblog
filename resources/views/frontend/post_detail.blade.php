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
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><i class="unicon-chevron-right opacity-50"></i></li>
                    <li><a href="{{ route('cat.post.list', $category->slug) }}">{{ $post->getCategory->name }}</a></li>
                    <li><i class="unicon-chevron-right opacity-50"></i></li>
                    <li><a href="{{ route('sub.cat.post.list',['category' => $category->slug ,'sub_category' => $sub_category->slug ]) }}">{{ $post->sub_category ?? '' }}</a></li>
                    @if ($post->sub_category != null)
                        <li><i class="unicon-chevron-right opacity-50"></i></li>
                    @endif
                    <li><span class="opacity-50">{{ $post->title }}</span></li>
                </ul>
            </div>
        </div>

        <article class="post type-post single-post py-4 lg:py-6 xl:py-9">
            <div class="container max-w-xl">
                <div class="post-header">
                    <div class="panel vstack gap-4 md:gap-6 xl:gap-8 text-center">
                        <div
                            class="panel vstack items-center max-w-400px sm:max-w-500px xl:max-w-md mx-auto gap-2 md:gap-3">
                            <h1 class="h4 sm:h2 lg:h1 xl:display-6">{{ $post->title }}</h1>
                            <ul class="post-share-icons nav-x gap-1 dark:text-white">
                                <li>
                                    <a class="btn btn-md p-0 border-gray-900 border-opacity-15 w-32px lg:w-48px h-32px lg:h-48px text-dark dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                                        href="#"><i class="unicon-logo-facebook icon-1"></i></a>
                                </li>
                                <li>
                                    <a class="btn btn-md p-0 border-gray-900 border-opacity-15 w-32px lg:w-48px h-32px lg:h-48px text-dark dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                                        href="#"><i class="unicon-logo-x-filled icon-1"></i></a>
                                </li>
                                <li>
                                    <a class="btn btn-md p-0 border-gray-900 border-opacity-15 w-32px lg:w-48px h-32px lg:h-48px text-dark dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                                        href="#"><i class="unicon-logo-linkedin icon-1"></i></a>
                                </li>
                                <li>
                                    <a class="btn btn-md p-0 border-gray-900 border-opacity-15 w-32px lg:w-48px h-32px lg:h-48px text-dark dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                                        href="#"><i class="unicon-logo-pinterest icon-1"></i></a>
                                </li>
                                <li>
                                    <a class="btn btn-md p-0 border-gray-900 border-opacity-15 w-32px lg:w-48px h-32px lg:h-48px text-dark dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                                        href="#"><i class="unicon-email icon-1"></i></a>
                                </li>
                                <li>
                                    <a class="btn btn-md p-0 border-gray-900 border-opacity-15 w-32px lg:w-48px h-32px lg:h-48px text-dark dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                                        href="#"><i class="unicon-link icon-1"></i></a>
                                </li>
                            </ul>
                        </div>
                        <figure class="featured-image m-0">
                            <figure
                                class="featured-image m-0 ratio ratio-2x1 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                    src="{{ asset('uploads/post/' . $post->thumbnail) }}"
                                    data-src="{{ asset('uploads/post/' . $post->thumbnail) }}"
                                    alt="The Rise of Gourmet Street Food: Trends and Top Picks" data-uc-img="loading: lazy">
                            </figure>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="panel mt-4 lg:mt-6 xl:mt-9">
                <div class="container max-w-lg">
                    <div class="panel fs-6 md:fs-5" data-uc-lightbox="animation: scale">
                        {!! $post->description !!}
                    </div>
                    <div
                        class="post-footer panel vstack sm:hstack gap-3 justify-between justifybetween border-top py-4 mt-4 xl:py-9 xl:mt-9">
                        <ul class="nav-x gap-narrow text-primary">
                            <li><span class="text-black dark:text-white me-narrow">Tags:</span></li>
                            <li>
                                <a href="#" class="uc-link gap-0 dark:text-white">Food <span
                                        class="text-black dark:text-white">,</span></a>
                            </li>
                            <li>
                                <a href="#" class="uc-link gap-0 dark:text-white">Life Style <span
                                        class="text-black dark:text-white">,</span></a>
                            </li>
                            <li>
                                <a href="#" class="uc-link gap-0 dark:text-white">Tech <span
                                        class="text-black dark:text-white">,</span></a>
                            </li>
                            <li><a href="#" class="uc-link gap-0 dark:text-white">Travel</a></li>
                        </ul>
                        <ul class="post-share-icons nav-x gap-narrow">
                            <li class="me-1"><span class="text-black dark:text-white">Share:</span></li>
                            <li>
                                <a class="btn btn-md btn-outline-gray-100 p-0 w-32px lg:w-40px h-32px lg:h-40px text-dark dark:text-white dark:border-gray-600 hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                                    href="#"><i class="unicon-logo-facebook icon-1"></i></a>
                            </li>
                            <li>
                                <a class="btn btn-md btn-outline-gray-100 p-0 w-32px lg:w-40px h-32px lg:h-40px text-dark dark:text-white dark:border-gray-600 hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                                    href="#"><i class="unicon-logo-x-filled icon-1"></i></a>
                            </li>
                            <li>
                                <a class="btn btn-md btn-outline-gray-100 p-0 w-32px lg:w-40px h-32px lg:h-40px text-dark dark:text-white dark:border-gray-600 hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                                    href="#"><i class="unicon-email icon-1"></i></a>
                            </li>
                            <li>
                                <a class="btn btn-md btn-outline-gray-100 p-0 w-32px lg:w-40px h-32px lg:h-40px text-dark dark:text-white dark:border-gray-600 hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                                    href="#"><i class="unicon-link icon-1"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="post-author panel py-4 px-3 sm:p-3 xl:p-4 bg-gray-25 dark:bg-opacity-10 rounded lg:rounded-2">
                        <div class="row g-4 items-center">
                            <div class="col-12 sm:col-5 xl:col-3">
                                <figure class="featured-image m-0 ratio ratio-1x1 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="{{ asset('frontend/images/logo.jpg') }}" data-src="{{ asset('frontend/images/logo.jpg') }}" alt="Amir Nisi" data-uc-img="loading: lazy">
                                </figure>
                            </div>
                            <div class="col">
                                <div class="panel vstack items-start gap-2 md:gap-3">
                                    <h4 class="h5 lg:h4 m-0">World Food Business</h4>
                                    <p class="fs-6 lg:fs-5">Creative and experienced content writer with 6+ years of experience lazy to create unique content strategy for News5 to turn website visitors into customers.</p>
                                    <ul class="nav-x gap-1 text-gray-400 dark:text-white">
                                        <li>
                                            <a href="#medium"><i class="icon-2 unicon-logo-medium"></i></a>
                                        </li>
                                        <li>
                                            <a href="#twitter"><i class="icon-2 unicon-logo-x-filled"></i></a>
                                        </li>
                                        <li>
                                            <a href="#instagram"><i class="icon-2 unicon-logo-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post-navigation panel vstack sm:hstack justify-between gap-2 mt-8 xl:mt-9">
                        @php
                            $existPost = [];
                        @endphp
                        @foreach ($allPosts->take(1) as $allPost)
                        @php
                            $existPost[] = $allPost->id;
                        @endphp
                            <div class="new-post panel hstack w-100 sm:w-1/2">
                                <div class="panel hstack justify-center w-100px h-100px">
                                    <figure
                                        class="featured-image m-0 ratio ratio-1x1 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                            src="{{ asset('uploads/post/' . $allPost->thumbnail) }}"
                                            data-src="{{ asset('uploads/post/' . $allPost->thumbnail) }}"
                                            alt="{{ $allPost->title }}"
                                            data-uc-img="loading: lazy">
                                        <a href="{{ route('post.detail', [
                                            'category' => $allPost->getCategory->slug,
                                            'sub_category' => $allPost->getCategory->slug,
                                            'post_slug' => $allPost->slug,
                                        ]) }}"
                                            class="position-cover"
                                            data-caption="{{ $allPost->title }}"></a>
                                    </figure>
                                </div>
                                <div class="panel vstack justify-center px-2 gap-1 w-1/3">
                                    <span class="fs-7 opacity-60">Prev Article</span>
                                    <h6 class="h6 lg:h5 m-0">{{ $allPost->title }}
                                    </h6>
                                </div>
                                <a href="{{ route('post.detail', [
                                    'category' => $allPost->getCategory->slug,
                                    'sub_category' => $allPost->getCategory->slug,
                                    'post_slug' => $allPost->slug,
                                ]) }}"
                                    class="position-cover"></a>
                            </div>
                        @endforeach
                        @foreach ($allPosts->take(2) as $allPost)
                        @if (!in_array($allPost->id, $existPost))
                        @php
                            $existPost[] = $allPost->id;
                        @endphp

                            <div class="new-post panel hstack w-100 sm:w-1/2">
                                <div class="panel vstack justify-center px-2 gap-1 w-1/3 text-end">
                                    <span class="fs-7 opacity-60">Next Article</span>
                                    <h6 class="h6 lg:h5 m-0">{{ $allPost->title }}
                                    </h6>
                                </div>
                                <div class="panel hstack justify-center w-100px h-100px">
                                    <figure
                                        class="featured-image m-0 ratio ratio-1x1 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                            src="{{ asset('uploads/post/' . $allPost->thumbnail) }}"
                                            data-src="{{ asset('uploads/post/' . $allPost->thumbnail) }}"
                                            alt="{{ $allPost->title }}"
                                            data-uc-img="loading: lazy">
                                        <a href="{{ route('post.detail', [
                                            'category' => $allPost->getCategory->slug,
                                            'sub_category' => $allPost->getSubCategory->slug,
                                            'post_slug' => $allPost->slug,
                                        ]) }}"
                                            class="position-cover"
                                            data-caption="{{ $allPost->title }}"></a>
                                    </figure>
                                </div>
                                <a href="{{ route('post.detail', [
                                    'category' => $allPost->getCategory->slug,
                                    'sub_category' => $allPost->getSubCategory->slug,
                                    'post_slug' => $allPost->slug,
                                ]) }}"
                                    class="position-cover"></a>
                            </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="post-related panel border-top pt-2 mt-8 xl:mt-9">
                        <h4 class="h5 xl:h4 mb-5 xl:mb-6">Related to this topic:</h4>
                        <div class="row child-cols-6 md:child-cols-3 gx-2 gy-4 sm:gx-3 sm:gy-6">
                            @foreach ($allPosts->take(6) as $allPost)
                            @if (!in_array($allPost->id, $existPost))
                            <div>
                                <article class="post type-post panel vstack gap-2">
                                    <figure
                                        class="featured-image m-0 ratio ratio-4x3 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                            src="{{ asset('uploads/post/' . $allPost->thumbnail) }}"
                                            data-src="{{ asset('uploads/post/' . $allPost->thumbnail) }}"
                                            alt="{{ $allPost->title }}"
                                            data-uc-img="loading: lazy">
                                        <a href="{{ route('post.detail', [
                                    'category' => $allPost->getCategory->slug,
                                    'sub_category' => $allPost->getSubCategory->slug,
                                    'post_slug' => $allPost->slug,
                                ]) }}" class="position-cover"
                                            data-caption="{{ $allPost->title }}"></a>
                                    </figure>
                                    <div class="post-header panel vstack gap-1">
                                        <h5 class="h6 md:h5 m-0">
                                            <a class="text-none" href="{{ route('post.detail', [
                                    'category' => $allPost->getCategory->slug,
                                    'sub_category' => $allPost->getSubCategory->slug,
                                    'post_slug' => $allPost->slug,
                                ]) }}">{{ $allPost->title }}</a>
                                        </h5>
                                        <div class="post-date hstack gap-narrow fs-7 opacity-60">
                                            <span>{{ \Carbon\Carbon::parse($allPost->date)->format('M j, Y') }}</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            @endif
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </article>

        <!-- Newsletter -->
    </div>

    <!-- Wrapper end -->

@endsection
