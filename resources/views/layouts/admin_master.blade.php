<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CodingIz: Love To Write Code</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content name="description" />
    <meta content name="author" />

    <link href="{{ asset('admin/css/cssff98.css?family=Open+Sans:300,400,600,700') }}" rel="stylesheet" />
    <link href="{{ asset('admin/css/vendor.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/css/default/app.min.css') }}" rel="stylesheet" />


    <link href="{{ asset('admin/plugins/jvectormap-next/jquery-jvectormap.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/gritter/css/jquery.gritter.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/tag-it/css/jquery.tagit.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/summernote/dist/summernote-lite.css') }}" rel="stylesheet" />

    <link href="{{ asset('admin/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}"
        rel="stylesheet" />
    @yield('schema')

</head>

<body>

    <div id="loader" class="app-loader">
        <span class="spinner"></span>
    </div>


    <div id="app" class="app app-header-fixed app-sidebar-fixed">

        <div id="header" class="app-header">

            <div class="navbar-header">
                <a href="{{ route('admin.dashboard') }}" class="navbar-brand"><span class="navbar-logo"></span>
                    <b>CodingIz </b></a>
                <button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>


            <div class="navbar-nav">
                <div class="navbar-item navbar-user dropdown">
                    <a href="#" class="navbar-link dropdown-toggle d-flex align-items-center"
                        data-bs-toggle="dropdown">
                        <img src="{{ asset('frontend/images/logo.png') }}" alt />
                        <span>
                            <span class="d-none d-md-inline">CodingIz</span>
                            <b class="caret"></b>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end me-1">
                        <a href="extra_profile.html" class="dropdown-item">Change Password</a>
                        <div class="dropdown-divider"></div>
                        <a href="login.html" class="dropdown-item">Log Out</a>
                    </div>
                </div>
            </div>

        </div>


        <div id="sidebar" class="app-sidebar">

            <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">

                <div class="menu">
                    <div class="menu-profile">
                        <a href="javascript:;" class="menu-profile-link">
                            <div class="menu-profile-cover with-shadow"></div>
                            <div class="menu-profile-image">
                                <img src="{{ asset('frontend/images/logo.png') }}" alt />
                            </div>
                            <div class="menu-profile-info">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        CodingIz
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="menu-header">Navigation</div>
                    <div class="menu-item">
                        <a href="{{ route('admin.dashboard') }}" class="menu-link">
                            <div class="menu-icon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <div class="menu-text">Dashboard</div>
                        </a>
                    </div>
                    <div class="menu-item has-sub">
                        <a href="javascript:;" class="menu-link">
                            <div class="menu-icon">
                                <i class="fa fa-gem"></i>
                            </div>
                            <div class="menu-text">Manage Category</div>
                            <div class="menu-caret"></div>
                        </a>
                        <div class="menu-submenu">
                            <div class="menu-item">
                                <a href="{{ route('admin.category.create') }}" class="menu-link">
                                    <div class="menu-text">Create Category/Sub Category </div>
                                </a>
                            </div>

                            <div class="menu-item">
                                <a href="{{ route('admin.cat.subcat.index') }}" class="menu-link">
                                    <div class="menu-text">All Categories/Sub Categories </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item has-sub @if (Request::path() == 'admin/post/create') active @endif ">
                        <a href="javascript:;" class="menu-link">
                            <div class="menu-icon">
                                <i class="fa fa-gem"></i>
                            </div>
                            <div class="menu-text">Manage Post</div>
                            <div class="menu-caret"></div>
                        </a>
                        <div class="menu-submenu ">
                            <div class="menu-item @if (Request::path() == 'admin/post/create') active @endif">
                                <a href="{{ route('admin.post.create') }}" class="menu-link">
                                    <div class="menu-text">Add Post </div>
                                </a>
                            </div>

                            <div class="menu-item">
                                <a href="{{ route('admin.post.index') }}" class="menu-link">
                                    <div class="menu-text">All Post </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item has-sub">
                        <a href="javascript:;" class="menu-link">
                            <div class="menu-icon">
                                <i class="fa fa-gem"></i>
                            </div>
                            <div class="menu-text">Manage Website Info</div>
                            <div class="menu-caret"></div>
                        </a>
                        <div class="menu-submenu">
                            <div class="menu-item">
                                <a href="{{ route('admin.website.info.from', 'about-us') }}" class="menu-link">
                                    <div class="menu-text">About Us </div>
                                </a>
                            </div>

                            <div class="menu-item">
                                <a href="{{ route('admin.website.info.from', 'privacy-policy') }}" class="menu-link">
                                    <div class="menu-text">Privacy Policy </div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="{{ route('admin.website.info.from', 'disclaimer') }}" class="menu-link">
                                    <div class="menu-text">Disclaimer </div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="{{ route('admin.website.info.from', 'term-and-condition') }}"
                                    class="menu-link">
                                    <div class="menu-text">Term And Condition </div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="{{ route('admin.contactus') }}" class="menu-link">
                                    <div class="menu-text">Contact Us Messages </div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="{{ route('admin.subscribers') }}" class="menu-link">
                                    <div class="menu-text">Subscribers </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="menu-item d-flex">
                        <a href="javascript:;"
                            class="app-sidebar-minify-btn ms-auto d-flex align-items-center text-decoration-none"
                            data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
                    </div>

                </div>

            </div>

        </div>
        {{-- <div class="app-sidebar-bg"></div>
        <div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile"
                class="stretched-link"></a></div> --}}


        @yield('content')



        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top"
            data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>

    </div>


    <script src="{{ asset('admin/js/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('admin/js/vendor.min.js') }}" type="7caf5af534b7f033feccb426-text/javascript"></script>
    <script src="{{ asset('admin/js/app.min.js') }}" type="7caf5af534b7f033feccb426-text/javascript"></script>


    <script src="{{ asset('admin/plugins/gritter/js/jquery.gritter.js') }}" type="01db3e124b6f27ba3de85f5c-text/javascript"></script>
    <script src="{{ asset('admin/plugins/flot/source/jquery.canvaswrapper.js') }}" type="01db3e124b6f27ba3de85f5c-text/javascript"></script>
    <script src="{{ asset('admin/plugins/flot/source/jquery.colorhelpers.js') }}" type="01db3e124b6f27ba3de85f5c-text/javascript"></script>
    <script src="{{ asset('admin/plugins/flot/source/jquery.flot.js') }}" type="01db3e124b6f27ba3de85f5c-text/javascript"></script>
    <script src="{{ asset('admin/plugins/flot/source/jquery.flot.saturated.js') }}" type="01db3e124b6f27ba3de85f5c-text/javascript"></script>
    <script src="{{ asset('admin/plugins/flot/source/jquery.flot.browser.js') }}" type="01db3e124b6f27ba3de85f5c-text/javascript"></script>
    <script src="{{ asset('admin/plugins/flot/source/jquery.flot.drawSeries.js') }}" type="01db3e124b6f27ba3de85f5c-text/javascript"></script>
    <script src="{{ asset('admin/plugins/flot/source/jquery.flot.uiConstants.js') }}" type="01db3e124b6f27ba3de85f5c-text/javascript"></script>
    <script src="{{ asset('admin/plugins/flot/source/jquery.flot.time.js') }}" type="01db3e124b6f27ba3de85f5c-text/javascript"></script>
    <script src="{{ asset('admin/plugins/flot/source/jquery.flot.resize.js') }}" type="01db3e124b6f27ba3de85f5c-text/javascript"></script>
    <script src="{{ asset('admin/plugins/flot/source/jquery.flot.pie.js') }}" type="01db3e124b6f27ba3de85f5c-text/javascript"></script>
    <script src="{{ asset('admin/plugins/flot/source/jquery.flot.crosshair.js') }}" type="01db3e124b6f27ba3de85f5c-text/javascript"></script>
    <script src="{{ asset('admin/plugins/flot/source/jquery.flot.categories.js') }}" type="01db3e124b6f27ba3de85f5c-text/javascript"></script>
    <script src="{{ asset('admin/plugins/flot/source/jquery.flot.navigate.js') }}" type="01db3e124b6f27ba3de85f5c-text/javascript"></script>
    <script src="{{ asset('admin/plugins/flot/source/jquery.flot.touchNavigate.js') }}" type="01db3e124b6f27ba3de85f5c-text/javascript"></script>
    <script src="{{ asset('admin/plugins/flot/source/jquery.flot.hover.js') }}" type="01db3e124b6f27ba3de85f5c-text/javascript"></script>
    <script src="{{ asset('admin/plugins/flot/source/jquery.flot.touch.js') }}" type="01db3e124b6f27ba3de85f5c-text/javascript"></script>
    <script src="{{ asset('admin/plugins/flot/source/jquery.flot.selection.js') }}" type="01db3e124b6f27ba3de85f5c-text/javascript"></script>
    <script src="{{ asset('admin/plugins/flot/source/jquery.flot.symbol.js') }}" type="01db3e124b6f27ba3de85f5c-text/javascript"></script>
    <script src="{{ asset('admin/plugins/flot/source/jquery.flot.legend.js') }}" type="01db3e124b6f27ba3de85f5c-text/javascript"></script>
    <script src="{{ asset('admin/plugins/jquery-sparkline/jquery.sparkline.min.js') }}" type="01db3e124b6f27ba3de85f5c-text/javascript"></script>
    <script src="{{ asset('admin/plugins/jvectormap-next/jquery-jvectormap.min.js') }}" type="01db3e124b6f27ba3de85f5c-text/javascript"></script>
    <script src="{{ asset('admin/plugins/jvectormap-content/world-mill.js') }}" type="01db3e124b6f27ba3de85f5c-text/javascript"></script>
    <script src="{{ asset('admin/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js') }}" type="01db3e124b6f27ba3de85f5c-text/javascript"></script>
    <script src="{{ asset('admin/js/demo/dashboard.js') }}" type="01db3e124b6f27ba3de85f5c-text/javascript"></script>
    <script src="{{ asset('admin/js/jquery-ui.min.js') }}"
        integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('admin/plugins/tag-it/js/tag-it.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jquery-migrate/dist/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('admin/js/demo/form-plugins.demo.js') }}" type="ac643f90aac718d94d6f9fda-text/javascript"></script>
    <script src="{{ asset('admin/plugins/summernote/dist/summernote-lite.min.js') }}"></script>

    <script src="{{ asset('admin/plugins/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
    <script src="{{ asset('admin/plugins/clipboard/dist/clipboard.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>




    <script>
        $('#data-table-default').DataTable({
            responsive: true
        });

        $('.data-table-default').DataTable({
            responsive: true
        });
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 600
            });
        });
        tinymce.init({
            selector: '#post_description',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            height: 800,
            automatic_uploads: true,
            file_picker_types: 'image',
            images_upload_handler: function(blobInfo, success, failure) {
                let formData = new FormData();
                formData.append('file', blobInfo.blob(), blobInfo.filename());

                $.ajaxSetup({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                    }
                });
                // AJAX request to upload image
                $.ajax({
                    url: '{{ route('admin.upload.image') }}', // Laravel route to handle image upload
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    },
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.location) {
                            success(response.location); // Pass the image URL back to TinyMCE
                        } else {
                            failure('Upload failed: no location returned');
                        }
                    },

                });
            },
        });

        $("#category_id").on("change", function() {
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                }
            });
            let category_id = $("#category_id").val();
            $.ajax({
                url: "{{ url('admin/post/get_sub_category') }} ",
                method: "POST",
                data: {
                    category_id: category_id
                },
                dataType: "json",
                success: function(response) {
                    console.log(response.sub_categoreis);
                    $("#sub_category").empty();
                    $.each(response.sub_categoreis, function(index, sub_category) {
                        var sub_category =
                            '<option value="' +
                            sub_category["name"] +
                            '">' +
                            sub_category["name"] +
                            "</option>";
                        $("#sub_category").append(sub_category);
                    });
                },
                error: function() {}
            });
        });

        $('.messageBox').hide();
        $("#imageUpload").submit(function(e) {
            $('.messageBox').show();
            e.preventDefault();
            csrfToken();

            let formData = new FormData($(this)[0]);
            $.ajax({
                url: "{{ url('admin/post/upload_image') }}",
                method: "POST",
                data: formData,
                processData: false,
                cache: false,
                contentType: false,
                success: function(response) {
                    console.log(response.status);
                    if (response.status === 409) {
                        $('.messageBox').show();
                        $("#message").text(response.message)
                        $('.messageBox').removeClass("alert-success");
                        $('.messageBox').addClass("alert-danger");

                    }
                    if (response.status === 200) {
                        console.log(response)
                        $('.messageBox').show();
                        $("#message").text(response.message)
                        $('.messageBox').removeClass("alert-danger");
                        $('.messageBox').addClass("alert-success");
                        $("#images").append(
                            ' <div class="d-flex"><div class="flex-1 d-flex"><div class="input-group"> <input id="' +
                            response.imageName + '" type="text" class="form-control" value="' +
                            response.image +
                            '" /> <button class="btn btn-dark" type="button" data-toggle="clipboard" data-clipboard-target="#' +
                            response.imageName +
                            '"><i class="fa fa-clipboard"></i></button></div></div></div><hr />')
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });
    </script>


    <script src="{{ asset('admin/js/rocket-loader.min.js') }}" data-cf-settings="7caf5af534b7f033feccb426-|49" defer>
    </script>
    <script src="{{ asset('admin/js/custom.js') }}"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js"></script>

</body>


</html>
