@extends('layouts.admin_master')
@section('content')
    <div class="app-sidebar-bg"></div>
    <div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a>
    </div>
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>

                <h1 class="page-header mb-0">Update Website Info</h1>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <strong>Success!</strong>
            {{ session()->get('success') }}

            <button type="button" class="btn-close" data-bs-dismiss="alert"></span>
          </div>
        @endif
        <form action="{{ route('admin.website.info.update',$websiteInfo->type) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <textarea id="post_description" name="websitedata">{{ $websiteInfo->description }}</textarea>
            <br>
            <button class="btn btn-primary" type="submit">Update</button>
        </form>
    </div>

@endsection
