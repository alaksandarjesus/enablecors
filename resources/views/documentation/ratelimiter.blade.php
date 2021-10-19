@extends('layout/layout')

@section('content')

<div class="docs-wrapper">
    @include('components.sidebar')
    <div class="docs-content">
        <div class="container">
            <article class="docs-article" id="section-1">
                <header class="docs-header">
                    <h1 class="docs-heading">Rate Limiter <span class="docs-time">Last updated: 2021-10-18</span></h1>
                    <section class="docs-intro">
                        <p>By default the application will allow 30 queries per minute. This setting can be overriden.</p>
                    </section>
                    <!--//docs-intro-->
                    <section class="docs-section">
                    <h2 class="section-heading">Overriding Rate Limiter</h2>
                    <pre><code> @include('documentation.ratelimiter.snippet')</code></pre>
                </section>
                   
                   
                    <div class="d-flex justify-content-end align-items-center">
                    <a class="theme-link" href="https://packagist.org/packages/rogervila/lumen-rate-limiting" target="_blank">Further Reading</a>
                    </div>

                </header>
            </article>
        </div>
    </div>
</div>
<!--//docs-wrapper-->

@endsection