<meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="{{ asset('frontend/images/logo.png') }}" />
    <title>@yield('title')</title>

    <meta name="theme-color" content="#52A94F">
    <meta name="description" content=" @yield('description')" />
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="author" content="CodingIz: Love To Write Code" />
    <link rel="canonical" href="{{ Request::url() }}" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:site_name" content="CodingIz: Love To Write Code" />
    <meta property="article:publisher" content="CodingIz: Love To Write Code" />
    <meta property="article:author" content="CodingIz: Love To Write Code" />
    <meta property="og:image" content="@yield('image')" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="500" />
    <meta name="google-adsense-account" content="ca-pub-3273323067440527">



    <script type="application/ld+json">
        {
            "@context" : "http://schema.org",
            "@type" : "Organization",
            "name" : "CodingIz",
            "url" : "https://www.codingiz.com/",
            "logo" : "{{ asset('frontend/images/logo.png') }}",
            "description" : "Welcome to CodingIz, where coding becomes an adventure! We're passionate about demystifying programming and making it accessible to everyone. Whether you're a curious beginner or a seasoned developer, we're here to guide you through the fascinating world of code.",
            "founder": [
                {
                    "@type" : "Person",
                    "name" : "Abhishek Prajapati",
                    "url" : "https://www.linkedin.com/in/cehabhishek/"
                }
            ],
            "sameAs" : [ "https://www.facebook.com/codingIz/",
                "https://www.instagram.com/codingiz",
                "https://www.youtube.com/@codingiz"
            ]
        }
    </script>
    @yield('schema')
