@extends('layouts.admin_master')
@php
    $title = 'hello this is title from app';
    $image = 'https://www.google.com/images/branding/googlelogo/1x/googlelogo_light_color_272x92dp.png';
@endphp
@section('schema')
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "BlogPosting",
        "headline": "{{ $title }}",
        "image": {
             "@type": "ImageObject",
             "url": "{{ $image }}"
        },
        "datePublished": "2020-09-29 06:51:29",
        "dateModified": "September 30, 2022, 8:44:25 AM",
        "author": {
            "@type": "Person",
            "name": "Danish Wadhwa"
        },
        "publisher": {
            "@type": "Organization",
            "name": "Webdew",
            "logo": {
                "@type": "ImageObject",
                "url": "https://www.webdew.com/hubfs/webdew_logo-9.svg"
            }
        },
        "description": "Are you planning to learn digital marketing? If yes, then don't forget to check out this article and get an in-depth about the concept. "
    }
    </script>
@endsection
@section('content')
    <div id="content" class="app-content">


        <h1 class="page-header">
            Create Category And Sub Category
        </h1>

        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show">
                {{-- <strong>Opps!</strong> --}}
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></span>
            </div>
        @endif
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show">
                <strong>Success!</strong>
                {{ session()->get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></span>
            </div>
        @endif

        <div class="row">
            <div class="col-12">
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <h4 class="panel-title">Create Cateogry</h4>
                        {{-- <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i
                                    class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i
                                    class="fa fa-redo"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i
                                    class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i
                                    class="fa fa-times"></i></a>
                        </div> --}}
                    </div>

                    <div class="panel-body">
                        <form action="{{ route('admin.category.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="form-label">Category Name</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Enter category name"
                                            name="name" required />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">Category Title</label>
                                    <div class="mb-3">

                                        <input type="text" class="form-control" placeholder="Enter category name"
                                            name="title" required />
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <label class="form-label" for="metakeywords">Keywords</label>
                                    <div class="mb-3">
                                        <ul id="jquery-tagIt-default">

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <label class="form-label">Meta Description</label>
                                    <div class="mb-3">
                                        <textarea name="meta_description" class="form-control" placeholder="Enter description" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Post</button>
                            </div>
                        </form>
                    </div>


                </div>
            </div>

            <div class="row mb-3">
                <div class="col-xl-12">
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title">Create Sub Category</h4>
                            {{-- <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i
                                        class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i
                                        class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-warning"
                                    data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i
                                        class="fa fa-times"></i></a>
                            </div> --}}
                        </div>

                        <div class="panel-body">
                            <form action="{{ route('admin.sub.category.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputEmail1">Select Category</label>
                                            <select class="form-select" name="category_id" required>
                                                <option value="" selected disabled>Select Category</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Sub Category Name</label>
                                            <input class="form-control" type="text" placeholder="Sub Category"
                                                name="name" required />

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Title</label>
                                            <input class="form-control" type="text" placeholder="Title"
                                                name="title" required />

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Keywords</label>
                                            <ul id="jquery-tagIt-default2">

                                            </ul>

                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <label class="form-label">Short Description</label> <span
                                                id="meta_description_word" style="font-weight: bold"></span> <b
                                                class="text-danger" id="showError"></b>
                                            <textarea class="form-control" name="meta_description"  rows="5" required></textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="nf_checkbox_css_1" value="1"
                                        name="show_in_menu" />
                                    <label class="form-check-label" for="nf_checkbox_css_1">Show in menu</label>
                                </div>
                                <button type="submit" class="btn btn-primary w-100px me-5px">
                                    Add
                                </button>
                                </fieldset>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
