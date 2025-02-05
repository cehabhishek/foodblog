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
@section('modalStyle')
.modal-body {
max-height: 400px; /* Adjust the height as needed */
overflow-y: auto; /* Enable vertical scrolling */
}
@endsection
@endsection
@section('content')
<div id="content" class="app-content">


    <h1 class="page-header">
        Create Newslatter
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
    <form action="{{ route('admin.send.newslatter.store',$templateId) }}" method="POST" enctype="multipart/form-data">

        <div class="row">
            <div class="col-12">
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <h4 class="panel-title">Create Newslatter</h4>
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

                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Enter category name"
                                        name="post" id="postId" readonly />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        Add Post
                                    </button>
                                </div>
                            </div>

                        </div>
                        {{-- <div class="card-body">
                            <button type="button" class="btn btn-primary" id="addPost">Add</button>
                        </div> --}}

                    </div>


                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <h4 class="panel-title">Add Banner</h4>
                        <button class="btn btn-primary" type="button" id="createNewslatter">Save</button>
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
                        <div id="dynamic-fields-container">
                            <div class="row dynamic-field">
                                <div class="col-sm-6">
                                    <input type="hidden" id="hiddenBannerImages" name="hiddenBannerImages" />
                                    <input type="hidden" id="hiddenBannerUrls" name="hiddenBannerUrls" />
                                    <label class="form-label">Banner Image</label>
                                    <div class="mb-3">
                                        <input type="file" class="form-control" name="bannerimage[]" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">Banner URL</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Enter category name"
                                            name="bannerurl[]" />
                                    </div>
                                </div>

                                <div class="col-sm-12 text-end">
                                    <button type="button" class="btn btn-success add-field">Add</button>
                                    <button type="button" class="btn btn-danger remove-field"
                                        style="display: none;">Remove</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-primary" type="submit" id="createNewslatter">Create
                                NewsLatter</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </form>

    <div class="panel panel-inverse">
        <div class="panel-heading">
            <h4 class="panel-title">Sub Categories</h4>
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
                        <th class="text-nowrap">Type</th>
                        <th class="text-nowrap">Unique Id</th>
                        <th class="text-nowrap">Value</th>
                        <th class="text-nowrap">Redirect Url</th>
                        <th class="text-nowrap">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $sr = 1;
                    @endphp
                    @foreach ($newslatters as $newslatter)
                        <tr class="odd gradeX">
                            <td width="1%" class="fw-bold text-dark">{{ $sr }}</td>
                            <td>{{ $newslatter->type }}</td>
                            <td>{{ $newslatter->unique_id }}</td>
                            <td>
                                @if ($newslatter->type == 'Post')
                                    <a href="{{$newslatter->redirect_url}}">View Post</a>
                                    @elseif($newslatter->type == 'Banner')
                                    <img src="{{$newslatter->data_value}}" alt="" height="100px">
                                @endif

                            </td>
                            <td>
                                <a href="{{$newslatter->redirect_url}}">View Url</a>
                            </td>

                            <td>
                                <div class="btn-group me-1 mb-1">
                                    <a href="{{route ('admin.send.newslatter.to.user', $newslatter->template_id) }}" class="btn btn-primary"> Send Newslatter</a>
                                </div>
                                
                            </td>

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


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Posts List</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    <!-- Dynamic List of Posts -->
                    @foreach ($posts as $post)
                    <li class="list-group-item d-flex align-items-center">
                        <!-- Checkbox -->
                        <input type="checkbox" class="form-check-input me-2" id="post_{{ $post->id }}"
                            value="{{ $post->id }}">

                        <!-- Image -->
                        {{-- <img src="{{ asset('uploads/post/'.$post->thumbnail) }}" alt="Post Image" class="img-thumbnail me-2"
                            style="width: 50px; height: 50px; object-fit: cover;"> --}}

                        <!-- Post Title -->
                        <label for="post_{{ $post->id }}" class="mb-0">{{ $post->title }}</label>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="addPost">Add</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection