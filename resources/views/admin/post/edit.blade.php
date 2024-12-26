@extends('layouts.admin_master')
@section('content')
    <div class="app-sidebar-bg"></div>
    <div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a>
    </div>
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>

                <h1 class="page-header mb-0">Add New Post</h1>
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
        <div class="alert alert-success">{{ session()->get('success') }}</div>
        @endif
        <form action="{{ route('admin.post.update', $post->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-lg-8">
                    <div class="card border-0 mb-4">
                        <div class="card-header h6 mb-0 bg-none p-3">
                            <i class="fa fa-dolly fa-lg fa-fw text-dark text-opacity-50 me-1"></i>
                            Add Post
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Enter Title"
                                    value="{{ $post->title }}" />
                            </div>
                            <div class>
                                <label class="form-label">Meta Description</label>
                                <div class="form-control p-0 overflow-hidden">
                                    <textarea class="textarea form-control" placeholder="Enter meta description  ..." rows="12"
                                        name="meta_description">{{ $post->meta_description }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 mb-4">
                        <div class="card-header h6 mb-0 bg-none p-3">
                            <i class="fa fa-dolly fa-lg fa-fw text-dark text-opacity-50 me-1"></i>
                            Description
                        </div>
                        <div class="card-body">
                            <div class>
                                <label class="form-label">Description</label>
                                <div class="form-control p-0 overflow-hidden">
                                    <textarea id="post_description" name="description">
                                        {{ $post->description }}
                                     </textarea>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-lg-4">
                    <div class="card border-0 mb-4">
                        <div class="card-header h6 mb-0 bg-none p-3 d-flex">
                            <div class="flex-1">
                                <div>Visibility</div>
                            </div>
                        </div>
                        <div class="card-body fw-bold">
                            <div class="mb-3">
                                <label class="form-label">Select category</label>
                                <div class="input-group">
                                    <select class="form-select" name="visibility">
                                        <option value="public" @if ($post->visibility == 'public') selected @endif>Public
                                        </option>
                                        <option value="private" @if ($post->visibility == 'private') selected @endif>Private
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 mb-4">
                        <div class="card-header h6 mb-0 bg-none p-3 d-flex">
                            <div class="flex-1">
                                <div>Select Category and Sub Category</div>
                            </div>
                        </div>
                        <div class="card-body fw-bold">
                            <div class="mb-3">
                                <label class="form-label">Select category</label>
                                <div class="input-group">
                                    <select class="form-select" name="category_id" id="category_id">
                                        <option selected disabled>-- Select Category --</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                @if ($category->id == $post->category_id) selected @endif>{{ $category->name }}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="mb-0">
                                <label class="form-label">Sub Category</label>
                                <div class="input-group">
                                    <select class="form-select" name="sub_category" id="sub_category">
                                        @foreach ($subCategories as $subCategory)
                                            <option value="{{ $subCategory->name }}"
                                                @if ($subCategory->name == $post->sub_category) selected @endif>{{ $subCategory->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 mb-4">
                        <div class="card-header h6 mb-0 bg-none p-3 d-flex">
                            <div class="flex-1">
                                <div>Enter Keywords</div>
                            </div>

                        </div>
                        <div class="card-body fw-bold">
                            <ul id="jquery-tagIt-default">
                                @php
                                    $keywords = explode(',', $post->keywords);
                                @endphp
                                @foreach ($keywords as $keyword)
                                    <li>{{ $keyword }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="card border-0 mb-4">
                        <div class="card-header h6 mb-0 bg-none p-3 d-flex">
                            <div class="flex-1">
                                <div>Featured Image <span style="color:red"> Leave Blank If Don't want to change
                                        image (Size : 1000x666)</span></div>
                            </div>
                        </div>
                        <div class="card-body fw-bold">

                            <div class="mb-0">
                                <div class="input-group" style="text-align: center;  display: block;">
                                    <img src="{{ asset('uploads/post/' . $post->thumbnail) }}" alt="CodingIz"
                                        id="show_thumbnail" height="100px" width="100px">
                                </div>
                            </div>
                            <br>
                            <input type="file" class="form-control" id="thumbnail" name="thumbnail" />
                        </div>
                    </div>
                    <div class="card border-0 mb-4">
                        <div class="card-header h6 mb-0 bg-none p-3 d-flex">
                            <div class="flex-1">
                                <div>Upload Media</div>
                            </div>
                            <div>
                                <a href="#modal-dialog" data-bs-toggle="modal" class="btn btn-primary btn-xs">Upload
                                    Image</a>
                            </div>
                        </div>
                        <div class="card-body fw-bold" id="images">

                            {{-- <div class="d-flex">
                                <div class="flex-1 d-flex">
                                    <div class="input-group">
                                        <input id="clipboard-default" type="text" class="form-control"
                                            value="https://github.com/zenorocha/clipboard.js.git" />
                                        <button class="btn btn-dark" type="button" data-toggle="clipboard"
                                            data-clipboard-target="#clipboard-default">
                                            <i class="fa fa-clipboard"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <hr /> --}}
                        </div>
                    </div>
                    <div class="card border-0 mb-4">
                        <div class="card-header h6 mb-0 bg-none p-3 d-flex">
                            <div class="flex-1">
                                <div>Publish Post</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">Post</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="modal fade" id="modal-dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Upload Image</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <div class="alert  alert-dismissible fade show messageBox">
                        <strong id="message"></strong>
                    </div>
                    <form method="POST" enctype="multipart/form-data" id="imageUpload">
                        <label>Enter Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Image Name"
                            required id="imgName">
                        <br>
                        <label>Choose Image</label>
                        <input type="file" class="form-control" name="image" id="image" required />
                        <br>
                        <button class="btn btn-primary btn-sm" id="uploadBtn" type="submit">Upload</button>
                    </form>

                </div>
                <div class="modal-footer">
                    <a href="javascript:;" class="btn btn-white" data-bs-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
@endsection
