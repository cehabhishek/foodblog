@php
    $image;
    $title;
    $keywords = 'Online Html Editor, html editor,run html online, run javascript online, run css online, css online editor, online javascript editor';
    if (Request::path() == 'html-editor') {
        $image = asset('frontend/images/html.png');
        $title = 'Online Html Editor';
    }
    if (Request::path() == 'javascript-editor') {
        $image = asset('frontend/images/javascript.png');
        $title = 'Online JavaScript Editor';
    }
    if (Request::path() == 'css-editor') {
        $image = asset('frontend/images/css.png');
        $title = 'Online Css Editor';
    }

@endphp
@section('title', $title)
@section('description', 'Write and run HTML, CSS and JavaScript code using our online editor. Give it a try.')
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

                                    <button onclick="executeCode()" class="btn btn-success" id="runBtn">
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
                                <textarea id="editor" name="code" style="width: 100%;font-size: 100px;">
@if (Request::path() == 'html-editor')
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>This is a Heading</h1>
<p>This is a paragraph.</p>
</body>
</html>
@endif
@if (Request::path() == 'javascript-editor')
<!DOCTYPE html>
<html>
<body>

<form>
<input type="button" id="btn01" value="OK">
</form>

<p>Click the "Disable" button to disable the "OK" button:</p>

<button onclick="disableElement()">Disable</button>

<script>
    function disableElement() {
        document.getElementById("btn01").disabled = true;
    }
</script>

</body>
</html>
@endif
@if (Request::path() == 'css-editor')
<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-color: lightblue;
}

h1 {
  color: white;
  text-align: center;
}

p {
  font-family: verdana;
  font-size: 20px;
}
</style>
</head>
<body>

<h1>My First CSS Example</h1>
<p>This is a paragraph.</p>

</body>
</html>
@endif

                                </textarea>

                            </div>

                            <div class="col-sm-6">
                                <div>
                                    <h3 style="margin-bottom:5px;" class="text-center"><u>Output</u></h3>
                                </div>
                                <br>
                                <div id="iframewrapper" style="border:1px solid #000; height: 700px;">

                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
