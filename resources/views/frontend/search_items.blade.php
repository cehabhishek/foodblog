@extends('layouts.master')
@section('content')
    <div class="mdk-header-layout__content page-content ">

        <div data-push data-responsive-width="992px" class="mdk-drawer-layout js-mdk-drawer-layout">
            <div class="mdk-drawer-layout__content">

                <div class="page-section">
                    <div class="container page__container">
                        {{-- <div class="page-separator">
                            <div class="page-separator__text">Design Courses</div>
                        </div> --}}

                        <div class="row card-group-row">
                            @if ($searchPosts->count() > 0)
                                @foreach ($searchPosts as $searchPost)
                                    <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">

                                        <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card"
                                            data-toggle="popover" data-trigger="click">

                                            <a href="{{ route('post.detail', $searchPost->slug) }}" class="card-img-top js-image"
                                                data-position="" data-height="120">
                                                <img src="{{ asset('uploads/post/' . $searchPost->thumbnail) }}" alt="course">

                                            </a>

                                            <div class="card-body flex">
                                                <div class="d-flex">
                                                    <div class="flex">
                                                        <a class="card-title"
                                                            href="{{ route('post.detail', $searchPost->slug) }}">{{ $searchPost->title }}</a>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                @endforeach
                            @else
                            <div style="margin:auto" class="text-center">

                                <img src="{{ asset('frontend/images/not_found.webp') }}" alt=""
                                style="display: block;margin-left: auto;margin-right: auto;width: 800px;">
                                <br>
                                <h2>Oops couldn't find  !</h2>
                                <a href="{{ route('index') }}" class="btn btn-primary">Go Back</a>
                            </div>


                            @endif


                        </div>

                        {{-- <ul class="pagination justify-content-start pagination-xsm m-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true" class="material-icons">chevron_left</span>
                                    <span>Prev</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Page 1">
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Page 2">
                                    <span>2</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span>Next</span>
                                    <span aria-hidden="true" class="material-icons">chevron_right</span>
                                </a>
                            </li>
                        </ul> --}}

                    </div>
                </div>

            </div>


        </div>

    </div>
@endsection
