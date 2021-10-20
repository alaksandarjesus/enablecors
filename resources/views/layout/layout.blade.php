<!DOCTYPE html>
<html lang="en">

<head>
    <title>EnableCORS - An Open Source PHP Package For Reverse Proxy</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Cross-origin resource sharing (CORS) is a mechanism that allows restricted resources on a web page to be requested from another domain outside the domain from w">
    <meta name="keywords"
        content="enable, cors, access, control, allow, origin, javascript, frontend, opensource, github">
    <meta name="robots" content="index, follow">
    <meta name="copyright" content="GPL">
    <meta name="language" content="EN">
    <meta name="author" content="Alaksandar Jesus Gene">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{url('assets/plugins/highlight/atom-one-dark.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/plugins/simplelightbox/simple-lightbox.min.css')}}">

    <!-- FontAwesome JS-->
    <script defer src="{{url('assets/fontawesome/js/all.min.js')}}"></script>

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{url('assets/css/theme.css')}}">
    <link id="theme-style" rel="stylesheet" href="{{url('assets/css/web.css')}}">

</head>

<body>
    <header class="header fixed-top">

        <div class="branding docs-branding">
            <div class="container-fluid position-relative py-2">
                <div class="docs-logo-wrapper">
                    <button id="docs-sidebar-toggler" class="docs-sidebar-toggler docs-sidebar-visible me-2 d-xl-none"
                        type="button">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <div class="site-logo"><a class="navbar-brand" href="{{url('/')}}"><img class="logo-icon me-2"
                                src="{{url('assets/images/coderdocs-logo.svg')}}" alt="logo"><span
                                class="logo-text">Enable<span class="text-alt">CORS</span></span></a></div>
                </div>
                <!--//docs-logo-wrapper-->
                <div class="docs-top-utilities d-flex justify-content-end align-items-center">

                    <!-- <ul class="social-list list-inline mx-md-3 mx-lg-5 mb-0 d-none d-lg-flex">
						<li class="list-inline-item"><a href="#"><i class="fab fa-github fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
		                <li class="list-inline-item"><a href="#"><i class="fab fa-slack fa-fw"></i></a></li>
		                <li class="list-inline-item"><a href="#"><i class="fab fa-product-hunt fa-fw"></i></a></li>
		            </ul> -->
                    <!--//social-list-->
                    <a href="https://github.com/alaksandarjesus/enablecors" target="_blank"
                        class="btn btn-primary d-none d-lg-flex">Download</a>
                </div>
                <!--//docs-top-utilities-->
            </div>
            <!--//container-->
        </div>
        <!--//branding-->
    </header>
    <!--//header-->

    @yield('content')


    <footer class="footer">

        <div class="footer-bottom text-center py-5">

            <!-- <ul class="social-list list-unstyled pb-4 mb-0">
			    <li class="list-inline-item"><a href="#"><i class="fab fa-github fa-fw"></i></a></li>
	            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
	            <li class="list-inline-item"><a href="#"><i class="fab fa-slack fa-fw"></i></a></li>
	            <li class="list-inline-item"><a href="#"><i class="fab fa-product-hunt fa-fw"></i></a></li>
	            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f fa-fw"></i></a></li>
	            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram fa-fw"></i></a></li>
	        </ul> -->

            <!--//social-list-->

            <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Designed with <i class="fas fa-heart" style="color: #fb866a;"></i> by <a
                    class="theme-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for
                developers</small>


        </div>

    </footer>

    <script>
    window.webapp = {
        base: "{{url('/')}}"
    }
    </script>
    <!-- Javascript -->
    <script src="{{url('assets/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{url('assets/plugins/popper.min.js')}}"></script>
    <script src="{{url('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Page Specific JS -->
    <script src="{{url('assets/plugins/smoothscroll.min.js')}}"></script>
    <script src="{{url('assets/plugins/highlight/highlight.min.js')}}"></script>
    <script src="{{url('assets/js/highlight-custom.js')}}"></script>
    <script src="{{url('assets/plugins/simplelightbox/simple-lightbox.min.js')}}"></script>
    <script src="{{url('assets/plugins/gumshoe/gumshoe.polyfills.min.js')}}"></script>
    <script src="{{url('assets/js/docs.js')}}"></script>
    <script src="{{url('assets/js/playground.js')}}"></script>

</body>

</html>