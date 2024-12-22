<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>Color Admin | Login v3</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content name="description" />
    <meta content name="author" />

    <link href="{{ asset('admin/css/cssff98.css?family=Open+Sans:300,400,600,700') }}" rel="stylesheet" />
    <link href="{{ asset('admin/css/vendor.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/css/default/app.min.css') }}" rel="stylesheet" />

</head>

<body class="pace-top">

    <div id="loader" class="app-loader">
        <span class="spinner"></span>
    </div>


    <div id="app" class="app">

        <div class="login login-with-news-feed">

            <div class="news-feed">
                <div class="news-image"
                    style="background-image: url({{ asset('admin/img/login-bg/login-bg-11.jpg') }})"></div>
                <div class="news-caption">
                    <h4 class="caption-title"><b>CodingIz</b></h4>
                </div>
            </div>


            <div class="login-container">
                @if (session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show">
                    <strong>Opps!</strong>
                        {{ session()->get('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></span>
                </div>
                @endif

                <div class="login-header mb-30px">
                    <div class="brand">
                        <div class="d-flex align-items-center">
                            <span class="logo"></span>
                            <b>Coding</b>Iz
                        </div>
                    </div>
                    <div class="icon">
                        <i class="fa fa-sign-in-alt"></i>
                    </div>
                </div>


                <div class="login-content">
                    <form action="{{ route('admin.login') }}" method="post" class="fs-13px">
                        @csrf
                        <div class="form-floating mb-15px">
                            <input type="text" class="form-control h-45px fs-13px" placeholder="Email Address"
                                id="emailAddress" name="email" required />
                            <label for="emailAddress" class="d-flex align-items-center fs-13px text-gray-600">Email
                                Address</label>
                        </div>
                        <div class="form-floating mb-15px">
                            <input type="password" class="form-control h-45px fs-13px" placeholder="Password"
                                id="password" name="password" required />
                            <label for="password"
                                class="d-flex align-items-center fs-13px text-gray-600">Password</label>
                        </div>
                        <div class="mb-15px">
                            <button type="submit" class="btn btn-success d-block h-45px w-100 btn-lg fs-14px">Sign me
                                in</button>
                        </div>
                        <hr class="bg-gray-600 opacity-2" />
                        <div class="text-gray-600 text-center  mb-0">
                            &copy; CodingIz. All Right Reserved {{ date('Y') }}
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>


    <script src="{{ asset('admin/js/vendor.min.js') }}" type="7caf5af534b7f033feccb426-text/javascript"></script>
    <script src="{{ asset('admin/js/app.min.js') }}" type="7caf5af534b7f033feccb426-text/javascript"></script>




    <script src="{{ asset('admin/js/rocket-loader.min.js') }}" data-cf-settings="7caf5af534b7f033feccb426-|49" defer>
    </script>
</body>


</html>
