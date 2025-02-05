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
                    <form action="{{ route('admin.newslatter.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <label class="form-label">Newslatter Name</label>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Enter category name"
                                        name="name" required />
                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>

    <div class="panel panel-inverse">
        <div class="panel-heading">
            <h4 class="panel-title">Categories</h4>
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i
                        class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i
                        class="fa fa-redo"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i
                        class="fa fa-minus"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i
                        class="fa fa-times"></i></a>
            </div>
        </div>

        <div class="panel-body">
            <table class="table table-striped table-bordered align-middle data-table-default">
                <thead>
                    <tr>
                        <th width="1%"></th>
                        <th class="text-nowrap">Name</th>
                        <th class="text-nowrap">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $sr = 1;
                    @endphp
                    @foreach ($newslatterTemplates as $newslatterTemplate)
                    <tr class="odd gradeX">
                        <td width="1%" class="fw-bold text-dark">{{ $sr }}</td>
                        <td>{{ $newslatterTemplate->name }}</td>
                        <td>
                            <div class="btn-group me-1 mb-1">
                                <a href="" data-bs-toggle="modal" data-bs-target="#newslatterTemplateEdit{{$newslatterTemplate->id}}" class="btn btn-primary"> <i class="fa fa-pencil"></i> Edit</a>

                                <a href="{{ route('admin.newslatter.template.create',$newslatterTemplate->id) }}"
                                    class="btn btn-danger" style="margin-left:10px"> <i class="fa fa-plus"></i>
                                    Create Newslatter</a>
                                {{-- <a href="{{ route('admin.newslatter.template.create') }}"
                                    class="btn btn-danger" style="margin-left:10px"> <i class="fa fa-trash"></i>
                                    Delete</a> --}}
                            </div>
                        </td>

                    </tr>
                    @php
                    $sr++;
                    @endphp

                    <div class="modal fade" id="newslatterTemplateEdit{{ $newslatterTemplate->id }}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Update Template</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">

                                    <br>
                                    <form class="row row-cols-lg-auto g-3 align-items-center"
                                        action="{{ route('admin.newslatter.update', $newslatterTemplate->id) }}"
                                        method="POST">
                                        @method('PUT')
                                        @csrf
                                        <div class="col-12">
                                            <label for="name">Name</label>
                                            <input type="text" value="{{ $newslatterTemplate->name }}"
                                                class="form-control" placeholder="Enter category name" name="name"
                                                required />
                                        </div>

                                        <br>
                                        <button type="submit" class="btn btn-primary w-100px me-5px">
                                            Update
                                        </button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <a href="javascript:;" class="btn btn-white" data-bs-dismiss="modal">Close</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection