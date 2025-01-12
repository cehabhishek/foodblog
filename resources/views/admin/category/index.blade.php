@extends('layouts.admin_master')
@section('content')
    <div id="content" class="app-content">

        <h1 class="page-header">
            Categories
        </h1>
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
                            <th class="text-nowrap">Title</th>
                            <th class="text-nowrap">Keywords</th>
                            <th class="text-nowrap">Meta Description</th>
                            <th class="text-nowrap">Slug</th>
                            <th class="text-nowrap">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $sr = 1;
                        @endphp
                        @foreach ($categories as $category)
                            <tr class="odd gradeX">
                                <td width="1%" class="fw-bold text-dark">{{ $sr }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->title }}</td>
                                <td>{{ $category->keywords }}</td>
                                <td>{{ $category->meta_description }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>
                                    <div class="btn-group me-1 mb-1">
                                        <a href="{{ route('admin.category.edit',$category->id) }}" class="btn btn-primary"
                                            > <i class="fa fa-pencil"></i> Edit</a>

                                        {{-- <a href="{{ route('admin.category.delete', $category->id) }}" class="btn btn-danger"
                                            style="margin-left:10px"> <i class="fa fa-trash"></i> Delete</a> --}}
                                    </div>
                                </td>

                            </tr>
                            @php
                                $sr++;
                            @endphp

                            <div class="modal fade" id="categoryEdit{{ $category->id }}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Update Category</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                ></button>
                                        </div>
                                        <div class="modal-body">

                                            <br>
                                            <form class="row row-cols-lg-auto g-3 align-items-center"
                                                action="{{ route('admin.category.update', $category->id) }}"
                                                method="POST">
                                                @method('PUT')
                                                @csrf
                                                <div class="col-12">
                                                    <label for="name">Name</label>
                                                    <input type="text" value="{{ $category->name }}"
                                                        class="form-control" placeholder="Enter category name"
                                                        name="name" required />
                                                </div>
                                                <br>
                                                <div class="col-12">
                                                    <label for="name">Title</label>
                                                    <input type="text" value="{{ $category->title }}"
                                                    class="form-control" placeholder="Enter category Title"
                                                    name="title" required  value="{{ $category->title }}" />
                                                </div>
                                                <br>
                                                <div class="col-12">
                                                    <label >Keywords</label>
                                                    @php
                                                        $keywords = explode(",", $category->keywords);
                                                    @endphp

                                                    <ul id="metakeywords">
                                                        @foreach ($keywords as $keyword)
                                                            <li>{{ $keyword }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <br>
                                                <div class="col-12">
                                                    <label for="name">Meta Description</label>
                                                    <textarea name="meta_description" class="form-control" rows="5"> {{ $category->meta_description }} </textarea>
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

        <hr>
        <h1 class="page-header">
            Sub Categories
        </h1>
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
                            <th class="text-nowrap">Category Name</th>
                            <th class="text-nowrap">Name</th>
                            <th class="text-nowrap">Title</th>
                            <th class="text-nowrap">Keywords</th>
                            <th class="text-nowrap">Meta Description</th>
                            <th class="text-nowrap">Slug</th>
                            <th class="text-nowrap">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $sr = 1;
                        @endphp
                        @foreach ($subCategories as $subCategory)
                            <tr class="odd gradeX">
                                <td width="1%" class="fw-bold text-dark">{{ $sr }}</td>
                                <td>{{ $subCategory->name }}</td>
                                <td>{{ $subCategory->category->name }}</td>
                                <td>{{ $subCategory->title }}</td>
                                <td>{{ $subCategory->keywords }}</td>
                                <td>{{ $subCategory->meta_description }}</td>
                                <td>{{ $subCategory->slug }}</td>

                                <td>
                                    <div class="btn-group me-1 mb-1">
                                        <a href="{{route ('admin.subcategory.edit', $subCategory->id) }}" class="btn btn-primary"> <i class="fa fa-pencil"></i> Edit</a>
                                    </div>
                                    {{-- <div class="btn-group me-1 mb-1">
                                        <a href="{{ route('admin.sub.category.delete', $subCategory->id) }}"
                                            class="btn btn-danger"> <i class="fa fa-trash"></i> Delete</a>
                                    </div> --}}
                                </td>

                            </tr>
                            @php
                                $sr++;
                            @endphp
                            <div class="modal fade" id="subCategoryEdit{{ $subCategory->id }}">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Update Sub Category</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                ></button>
                                        </div>
                                        <div class="modal-body">

                                            <br>
                                            <form action="{{ route('admin.sub.category.update', $subCategory->id) }}"
                                                method="POST" enctype="multipart/form-data">
                                                @method('PUT')
                                                @csrf
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="exampleInputEmail1">Select
                                                                    Category</label>
                                                                <select class="form-select" name="category_id" required>
                                                                    @foreach ($categories as $category)
                                                                        <option value="{{ $category->id }}"
                                                                            @if ($subCategory->category_id == $category->id) selected @endif>
                                                                            {{ $category->name }}</option>
                                                                    @endforeach

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Sub Category Name</label>
                                                                <input class="form-control" type="text"
                                                                    placeholder="Sub Category" name="name"
                                                                    value="{{ $subCategory->name }}" required />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="mb-3">
                                                                <label class="form-label">Short Description</label> <span
                                                                    id="meta_description_word"
                                                                    style="font-weight: bold"></span>
                                                                <b class="text-danger" id="showError"></b>
                                                                <textarea class="form-control" name="short_description" id="short_description" rows="5" required>{{ $subCategory->short_description }}</textarea>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    {{-- <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" id="nf_checkbox_css_1"
                                                    value="1" name="show_in_menu" @if ($subCategory->show_in_menu == 1)
                                                checked
                                                @endif />
                                                <label class="form-check-label" for="nf_checkbox_css_1">Show in
                                                    menu</label>
                                            </div> --}}
                                                    <button type="submit" class="btn btn-primary w-100px me-5px">
                                                        Update
                                                    </button>

                                                </fieldset>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="javascript:;" class="btn btn-white"
                                                data-bs-dismiss="modal">Close</a>
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
