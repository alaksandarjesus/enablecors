@extends('layout.layout')

@section('content')
<div class="page-header theme-bg-dark py-5 text-center position-relative">
    <div class="theme-bg-shapes-right"></div>
    <div class="theme-bg-shapes-left"></div>
    <div class="container">
        <h1 class="page-heading single-col-max mx-auto">Documentation</h1>
        <div class="page-intro single-col-max mx-auto">A quick guide to use EnableCORS API
        </div>
        <!-- <div class="main-search-box pt-3 d-block mx-auto">
            <form class="search-form w-100">
                <input type="text" placeholder="Search the docs..." name="search" class="form-control search-input">
                <button type="submit" class="btn search-btn" value="Search" disabled><i class="fas fa-search"></i></button>
            </form>
        </div> -->
    </div>
</div>
<!--//page-header-->
<div class="page-content">
    <div class="container">
        <div class="docs-overview py-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6 py-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title mb-3">
                                <span class="theme-icon-holder card-icon-holder me-2">
                                    <i class="fas fa-map-signs"></i>
                                </span>
                                <!--//card-icon-holder-->
                                <span class="card-title-text">Introduction</span>
                            </h5>
                            <div class="card-text">
							Cross-origin resource sharing (CORS) is a mechanism that allows restricted resources on a web page to be requested from another domain outside the domain from which the first resource was served.	
							</div>
                            <a class="card-link-mask" href="{{url('documentation')}}"></a>
                        </div>
                        <!--//card-body-->
                    </div>
                    <!--//card-->
                </div>
                <!--//col-->
                <div class="col-12 col-lg-6 py-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title mb-3">
                                <span class="theme-icon-holder card-icon-holder me-2">
                                    <i class="fas fa-arrow-down"></i>
                                </span>
                                <!--//card-icon-holder-->
                                <span class="card-title-text">Installation</span>
                            </h5>
                            <div class="card-text">
                                Section overview to download and install the enable cors package on your server (local or production)
                            </div>
                            <a class="card-link-mask" href="{{url('documentation/installation')}}"></a>
                        </div>
                        <!--//card-body-->
                    </div>
                    <!--//card-->
                </div>
                <!--//col-->
                <div class="col-12 col-lg-6 py-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title mb-3">
                                <span class="theme-icon-holder card-icon-holder me-2">
                                    <i class="fas fa-box fa-fw"></i>
                                </span>
                                <!--//card-icon-holder-->
                                <span class="card-title-text">Query</span>
                            </h5>
                            <div class="card-text">
                                Section overview to use the query api for multiple request formats.
                            </div>
                            <a class="card-link-mask" href="{{url('documentation/query')}}"></a>
                        </div>
                        <!--//card-body-->
                    </div>
                    <!--//card-->
                </div>
                <!--//col-->
                <div class="col-12 col-lg-6 py-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title mb-3">
                                <span class="theme-icon-holder card-icon-holder me-2">
                                    <i class="fas fa-cogs fa-fw"></i>
                                </span>
                                <!--//card-icon-holder-->
                                <span class="card-title-text">Mock</span>
                            </h5>
                            <div class="card-text">
                            Section overview to use the mock api for multiple request formats.
                            </div>
                            <a class="card-link-mask" href="{{url('documentation/mock')}}"></a>
                        </div>
                        <!--//card-body-->
                    </div>
                    <!--//card-->
                </div>
                <!--//col-->
                <div class="col-12 col-lg-6 py-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title mb-3">
                                <span class="theme-icon-holder card-icon-holder me-2">
                                    <i class="fas fa-tools fa-fw"></i>
                                </span>
                                <!--//card-icon-holder-->
                                <span class="card-title-text">Rate Limiter</span>
                            </h5>
                            <div class="card-text">
                            Section overview to limit the queries to avoid multiple requests per IP
                            </div>
                            <a class="card-link-mask" href="{{url('documentation/mock')}}"></a>
                        </div>
                        <!--//card-body-->
                    </div>
                    <!--//card-->
                </div>
                <!--//col-->
                <div class="col-12 col-lg-6 py-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title mb-3">
                                <span class="theme-icon-holder card-icon-holder me-2">
                                    <i class="fas fa-book-reader fa-fw"></i>
                                </span>
                                <!--//card-icon-holder-->
                                <span class="card-title-text">References</span>
                            </h5>
                            <div class="card-text">
                            Section overview listing references of libraries used on the application
                            </div>
                            <a class="card-link-mask" href="{{url('documentation/references')}}"></a>
                        </div>
                        <!--//card-body-->
                    </div>
                    <!--//card-->
                </div>
                <!--//col-->
            </div>
            <!--//row-->
        </div>
        <!--//container-->
    </div>
    <!--//container-->
</div>
<!--//page-content-->

<section class="cta-section text-center py-5 theme-bg-dark position-relative">
    <div class="theme-bg-shapes-right"></div>
    <div class="theme-bg-shapes-left"></div>
    <div class="container">
        <h3 class="mb-2 text-white mb-3">Launch Your Software Project Like A Pro</h3>
        <!-- <div class="section-intro text-white mb-3 single-col-max mx-auto">Want to launch your software project and start
            getting traction from your target users? Check out our premium <a class="text-white"
                href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/coderpro-bootstrap-5-startup-template-for-software-projects/">Bootstrap
                5 startup template CoderPro</a>! It has everything you need to promote your product.</div> -->
        <div class="pt-3 text-center">
            <a class="btn btn-light"
                href="https://github.com/alaksandarjesus/enablecors" target="_blank">Get
                EnableCors
                <!-- <i class="fas fa-arrow-alt-circle-right ml-2"></i> -->
            </a>
        </div>
    </div>
</section>
<!--//cta-section-->
@endsection