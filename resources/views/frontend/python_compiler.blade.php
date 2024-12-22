@php
    $image = asset('frontend/images/python.png');
    $title = 'Online Python Compiler';
    $keywords = 'online python compiler, compile python code online, python editor,python code runner,run python code';
@endphp
@section('title', $title)
@section('description', 'Write and run Python code using our online compiler (interpreter). You can use Python Shell like IDLE, and take inputs from the user in our Python compiler.')
@section('keywords', $keywords)
@section('image', $image)

@extends('layouts.master')
@section('content')
    <div class="mdk-header-layout__content page-content ">
        <div class="mdk-drawer-layout js-mdk-drawer-layout">
            <div class="mdk-drawer-layout__content">
                <div class="page-section">

                    <div class="container page__container"
                        style="background-color: #fff; background-clip: border-box; border: 1px solid #dfe2e6; border-radius: 0.5rem; padding: 1.5rem 1.75rem; max-width: 95% !important;">

                        <div class="row">
                            <div class="col-sm-6">
                                <div style="">

                                    <button class="btn btn-success" id="runBtn">
                                        <div class="loader loader-dark loader-sm" id="loaderIcon" style="display:none;">
                                        </div> Run<i data-v-134867f8="" class="material-icons">arrow_forward_ios</i>
                                    </button>
                                    <a href="javascript:autoFormatSelection()" title="Format Code">
                                        <i data-v-134867f8="" class="material-icons icon-30pt">format_align_justify</i>
                                    </a>
                                    <i class="material-icons" style="cursor: pointer;"
                                        onclick="toggleTheme()">brightness_6</i>
                                </div>
                                <br>
                                <textarea id="pythonEditor" name="code" style="width: 100%;font-size: 100px;">
                                    print('Hello World!')
                                </textarea>

                            </div>

                            <div class="col-sm-6">
                                <div>
                                    <h3 style="margin-bottom:5px;" class="text-center"><u>Output</u></h3>
                                </div>
                                <br>
                                <div id="pythonResponse" style="border:1px solid #000; height: 700px; background: #343a40;color:#fff">

                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
