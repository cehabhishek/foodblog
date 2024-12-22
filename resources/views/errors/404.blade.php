@extends('layouts.master')
@section('content')
    <div class="mdk-header-layout__content page-content ">

        <div data-push data-responsive-width="992px" class="mdk-drawer-layout js-mdk-drawer-layout">
            <div class="mdk-drawer-layout__content">

                <div class="page-section">
                    <div class="container page__container">


                        <div class="row card-group-row">
                            <div style="margin:auto" class="text-center">

                                <img src="{{ asset('frontend/images/404.png') }}" alt=""
                                style="display: block;margin-left: auto;margin-right: auto;width: 500px;">
                                <br>
                                <h3>Opps! Page Not Found!</h3>
                                <br>
                                <a href="{{ route('index') }}" class="btn btn-primary">Go Back</a>
                            </div>
                        </div>


                    </div>
                </div>

            </div>


        </div>

    </div>
@endsection
