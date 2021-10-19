@extends('layout/layout')

@section('content')

<div class="docs-wrapper">
    @include('components.sidebar')
    <div class="docs-content">
        <div class="container">
            <article class="docs-article" id="section-1">
                <header class="docs-header">
                    <h1 class="docs-heading">References <span class="docs-time">Last updated: 2021-10-18</span></h1>
                    <section class="docs-intro">
                        <p>This section to be considered as credits to the authors whose work were utilized. We heartfully thank them.</p>
                    </section>
                    <!--//docs-intro-->
                    <section class="docs-section">
                    <h2 class="section-heading">Libraries used</h2>
                    <div class="d-flex justify-content-start align-items-center mb-3">
                    <a class="theme-link" href="https://github.com/laravel/lumen" target="_blank">Laravel Lumen Framework</a>
                    </div>
                    <div class="d-flex justify-content-start align-items-center mb-3">
                    <a class="theme-link" href="https://github.com/fruitcake/laravel-cors" target="_blank">Laravel CORS</a>
                    </div>
                    
                    <div class="d-flex justify-content-start align-items-center mb-3">
                    <a class="theme-link" href="https://github.com/guzzle/guzzle" target="_blank">Guzzle</a>
                    </div>
                    <div class="d-flex justify-content-start align-items-center mb-3">
                    <a class="theme-link" href="https://packagist.org/packages/rogervila/lumen-rate-limiting" target="_blank">Lumen Rate Limiting</a>
                    </div>
                   
                </section>
                   
                   
                   

                </header>
            </article>
        </div>
    </div>
</div>
<!--//docs-wrapper-->

@endsection