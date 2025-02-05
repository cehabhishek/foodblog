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

    <!-- Wrapper start -->
    <div id="wrapper" class="wrap overflow-hidden-x">
        <div class="breadcrumbs panel z-1 py-2 bg-gray-25 dark:bg-gray-100 dark:bg-opacity-5 dark:text-white">
            <div class="container max-w-xl">
                <ul class="breadcrumb nav-x justify-center gap-1 fs-7 sm:fs-6 m-0">
                    <li><a href="index.html">Home</a></li>
                    <li><i class="unicon-chevron-right opacity-50"></i></li>
                    <li><span class="opacity-50">Privacy policy</span></li>
                </ul>
            </div>
        </div>

        <div class="section py-4 lg:py-6 xl:py-8">
            <div class="container max-w-lg">
                <div class="page-wrap panel vstack gap-4 lg:gap-6 xl:gap-8">
                    <header class="page-header panel vstack justify-center gap-2 lg:gap-4 text-center">
                        <div class="panel">
                            <h1 class="h3 lg:h1 m-0">Privacy policy</h1>
                        </div>
                    </header>
                    <div class="page-content panel fs-6 md:fs-5">
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution of letters, as opposed to using 'Content here, content here', making it look like
                            readable English.</p>
                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model
                            text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various
                            versions have evolved over the years, sometimes by accident, sometimes on purpose (injected
                            humour and the like).</p>
                        <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                            making this the first true generator on the Internet. It uses a dictionary of over 200 Latin
                            words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks
                            reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour,
                            or non-characteristic words etc.</p>
                        <h3 class="h4 md:h3 mt-3 lg:mt-6 mb-2">Determination of personal information of users</h3>
                        <ul class="list list-bullets">
                            <li>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as
                                necessary, making this the first true generator on the Internet.</li>
                            <li>It uses a dictionary of over 200 Latin words, combined with a handful of model sentence
                                structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is
                                therefore always free from repetition, injected humour, or non-characteristic words etc.
                            </li>
                            <li>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words which don't look
                                even slightly believable.</li>
                        </ul>
                        <h3 class="h4 md:h3 mt-3 lg:mt-6 mb-2">Reasons for collecting and processing user personal
                            information</h3>
                        <ul class="uk-list uk-list-decimal uk-margin-medium@m">
                            <li>It is a long established fact that a reader will be distracted by the readable content of a
                                page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letters.</li>
                            <li>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as
                                necessary, making this the first true generator on the Internet.</li>
                            <li>It has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged.</li>
                        </ul>
                        <p>All generators on the Internet tend to repeat predefined chunks as necessary, making this the
                            first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined
                            with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The
                            generated Lorem Ipsum is therefore always free from repetition, injected humour, or
                            non-characteristic words etc.</p>
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
