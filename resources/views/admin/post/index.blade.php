@extends('layouts.admin_master')
@section('content')
    <div id="content" class="app-content">
        <ol class="breadcrumb float-xl-end">
            <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript:;">Tables</a></li>
            <li class="breadcrumb-item active">Managed Tables</li>
        </ol>

        <h1 class="page-header">
            Managed Tables <small>header small text goes here...</small>
        </h1>

        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Data Table - Default</h4>
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
                <table id="data-table-default" class="table table-striped table-bordered align-middle">
                    <thead>
                        <tr>
                            <th width="1%"></th>
                            <th width="1%" data-orderable="false">Image</th>
                            <th class="text-nowrap">Title</th>
                            <th class="text-nowrap">Category</th>
                            <th class="text-nowrap">Sub Category</th>
                            <th class="text-nowrap">Slug</th>
                            <th class="text-nowrap">Keywords</th>
                            <th class="text-nowrap">Visibility</th>
                            <th class="text-nowrap">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $sr = 1;
                        @endphp
                        @foreach ($posts as $post)

                        <tr class="odd gradeX">
                            <td width="1%" class="fw-bold text-dark">{{ $sr }}</td>
                            <td width="1%" class="with-img">
                                <img src="{{ asset('uploads/post/'.$post->thumbnail) }}" class="rounded h-30px my-n1 mx-n1" width="35px" />
                            </td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->getCategory->name ?? '' }}</td>
                            <td>{{ $post->sub_category ?? '' }}</td>
                            <td>{{ $post->slug }}</td>
                            <td>{{ $post->keywords }}</td>
                            <td>{{ $post->visibility }}</td>
                            <td> <div class="btn-group me-1 mb-1">
                                <a href="javascript:;" class="btn btn-primary">Action</a>
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-default dropdown-toggle" aria-expanded="false"><i class="fa fa-caret-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-end" style="">
                                <a href="{{ route('admin.post.edit',$post->id) }}" class="dropdown-item">Edit</a>
                                <a href="javascript:;" class="dropdown-item">Delete</a>
                                <a href="javascript:;" class="dropdown-item">View</a>
                                </div> </td>

                        </tr>
                        @php
                            $sr++;
                        @endphp
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
