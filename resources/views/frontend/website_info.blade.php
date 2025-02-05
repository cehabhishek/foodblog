@php
    $image = asset('frontend/images/logo.png');
    $title;
    if ($websiteInfo->type == 'about-us') {
        $title = 'About Us';
    }

    if ($websiteInfo->type == 'term-and-condition') {
        $title = 'Term And Condition';
    }

    if ($websiteInfo->type == 'disclaimer') {
        $title = 'Disclaimer';
    }
    if ($websiteInfo->type == 'privacy-policy') {
        $title = 'Privacy Policy';
    }

@endphp
@section('title', $title)
@section('description',
    'Learn to code in Python,Java, and other popular programming languages with our easy tutorials,
    examples.')
@section('keywords',
    'Python, Java, C, C++, JavaScript, SQL, PHP, Web Development, Tutorial, Programming, HTML, CSS,
    React, NodeJS, Programming Examples,CodingIz ,Data Structures, Algorithms, How to,XML, MySQL')
@section('image', $image)
@extends('layouts.master')
@section('content')




  <!-- Wrapper start -->
  <div id="wrapper" class="wrap overflow-hidden-x">
    <div class="breadcrumbs panel z-1 py-2 bg-gray-25 dark:bg-gray-100 dark:bg-opacity-5 dark:text-white">
        <div class="container max-w-xl">
            <ul class="breadcrumb nav-x justify-center gap-1 fs-7 sm:fs-6 m-0">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><i class="unicon-chevron-right opacity-50"></i></li>
                <li><span class="opacity-50">
                    @if ($websiteInfo->type == 'about-us')
                    About Us
                @elseif($websiteInfo->type == 'term-and-condition')
                    Term And Condition
                @elseif($websiteInfo->type == 'disclaimer')
                    Disclaimer
                @elseif($websiteInfo->type == 'privacy-policy')
                    Privacy Policy
                @endif
                </span></li>
            </ul>
        </div>
    </div>

    <div class="section py-4 lg:py-6 xl:py-8">
        <div class="container max-w-lg">
            <div class="page-wrap panel vstack gap-4 lg:gap-6 xl:gap-8">
                <header class="page-header panel vstack justify-center gap-2 lg:gap-4 text-center">
                    <div class="panel">
                        <h1 class="h3 lg:h1 m-0">
                            @if ($websiteInfo->type == 'about-us')
                            About Us
                        @elseif($websiteInfo->type == 'term-and-condition')
                            Term And Condition
                        @elseif($websiteInfo->type == 'disclaimer')
                            Disclaimer
                        @elseif($websiteInfo->type == 'privacy-policy')
                            Privacy Policy
                        @endif
                        </h1>
                    </div>
                </header>
                <div class="page-content panel fs-6 md:fs-5">
                    {!! $websiteInfo->description !!}
                </div>
                <div class="page-footer panel">
                    <p class="fs-7 opacity-60 m-0">Last updated: 27 Oct, 2024</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Wrapper end -->

@endsection
