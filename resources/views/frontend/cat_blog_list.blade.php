@php
    $image = asset('frontend/images/logo.png');
    $logo = asset('frontend/images/logo.png');
@endphp
@section('title', $category->name)
@section('description', $category->meta_description)
@section('keywords', $category->keywords)
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
        "headline": "{{ $category->title}}",
        "image": "{{ $image }}",
        "author": {
            "@type": "Person",
            "name": "Abhishek Prajapati"
          },
        "datePublished": "{{ $category->created_at}}",
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
        "description": "{{ $category->meta_description}}"
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
                <li><a href="{{ route('cat.post.list',['category' => $category->slug]) }}">{{ $category->name }}</a></li>
            </ul>
        </div>
    </div>

    <div class="section py-3 sm:py-6 lg:py-9">
        <div class="container max-w-xl">
            <div class="panel vstack gap-3 sm:gap-6 lg:gap-9">
                <header class="page-header vstack justify-center items-center text-center max-w-500px mx-auto">
                    <h1 class="h4 lg:h1">{{ $category->name }}</h1>
                    <p class="fs-6 lg:fs-5 opacity-60">{{ $category->meta_description }}</p>
                </header>
                <div class="row g-4 xl:g-8">
                    <div class="col">
                        <div class="panel text-center">
                            <div class="row child-cols-12 sm:child-cols-6 lg:child-cols-4 col-match gy-4 xl:gy-6 gx-2 sm:gx-4">
                                @foreach ($posts as $post)

                                <div>
                                    <article class="post type-post panel vstack gap-2">
                                        <div class="post-image panel overflow-hidden">
                                            <figure class="featured-image m-0 ratio ratio-16x9 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="{{ asset('uploads/post/'.$post->thumbnail) }}" data-src="{{ asset('uploads/post/'.$post->thumbnail) }}" alt="Tech Innovations Reshaping the Retail Landscape: AI Payments" data-uc-img="loading: lazy">
                                                <a href="{{ route('post.detail', [
                                                'category' => $post->getCategory->slug,
                                                'sub_category' => $post->getSubCategory->slug,
                                                'post_slug' => $post->slug,
                                            ]) }}" class="position-cover" data-caption="Tech Innovations Reshaping the Retail Landscape: AI Payments"></a>
                                            </figure>
                                            <div class="post-category hstack gap-narrow position-absolute top-0 start-0 m-1 fs-7 fw-bold h-24px px-1 rounded-1 shadow-xs bg-white text-primary">
                                                <a class="text-none" href="{{ route('cat.post.list',['category' => $category->slug]) }}">{{ $category->name }}</a>
                                            </div>
                                            <div class="position-absolute top-0 end-0 w-150px h-150px rounded-top-end bg-gradient-45 from-transparent via-transparent to-black opacity-50"></div>
                                        </div>
                                        <div class="post-header panel vstack gap-1 lg:gap-2">
                                            <h3 class="post-title h6 sm:h5 xl:h4 m-0 text-truncate-2 m-0">
                                                <a class="text-none" href="{{ route('post.detail', [
                                                'category' => $post->getCategory->slug,
                                                'sub_category' => $post->getSubCategory->slug,
                                                'post_slug' => $post->slug,
                                            ]) }}">{{ $post->title }}</a>
                                            </h3>
                                            <div>
                                                <div class="post-meta panel hstack justify-center fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                    <div class="meta">
                                                        <div class="hstack gap-2">
                                                            <div>
                                                                <div class="post-author hstack gap-1">
                                                                    <a href="" data-uc-tooltip="Jason Blake"><img src="{{ asset('frontend/images/logo.jpg') }}" alt="Jason Blake" class="w-24px h-24px rounded-circle"></a>
                                                                    <a href="" class="text-black dark:text-white text-none fw-bold">World Food Business</a>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="post-date hstack gap-narrow">
                                                                    <span>{{ \Carbon\Carbon::parse($post->date)->format('M j, Y') }}    </span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                {{-- <a href="#post_comment" class="post-comments text-none hstack gap-narrow">
                                                                    <i class="icon-narrow unicon-chat"></i>
                                                                    <span>100</span>
                                                                </a> --}}
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
                                @endforeach

                            </div>
                            <div class="nav-pagination pt-3 mt-6 lg:mt-9 border-top border-gray-100 dark:border-gray-800">
                                <ul class="nav-x uc-pagination hstack gap-1 justify-center ft-secondary" data-uc-margin="">
                                    {{ $posts->links() }}
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
