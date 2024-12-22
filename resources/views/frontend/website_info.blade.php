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

    <div class="mdk-header-layout__content page-content ">
        <div data-push data-responsive-width="992px" class="mdk-drawer-layout js-mdk-drawer-layout">
            <div class="mdk-drawer-layout__content">
                <div class="page-section">

                    <div class="container page__container" id="post_section"
                        style="z-index: 0; position: relative; background-color: #fff; background-clip: border-box; border: 1px solid #dfe2e6; border-radius: 0.5rem; padding: 1.5rem 1.75rem;">
                        <h1 class="text-center">
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
                        <hr>
                        {!! $websiteInfo->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
