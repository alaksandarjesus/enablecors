@extends('layout/layout')

@section('content')

<div class="docs-wrapper">
    @include('components.sidebar')
    <div class="docs-content">
        <div class="container">
            <article class="docs-article" id="section-1">
                <header class="docs-header">
                    <h1 class="docs-heading">Mock <span class="docs-time">Last updated: 2021-10-18</span></h1>
                    <p>The <strong>/mock</strong> will be useful on development environments to mock and catch server status codes.</p>
                </header>
                <section class="docs-section">
                    <h2 class="section-heading">jQuery</h2>
                    <pre><code>@include('documentation.mock.snippet')</code></pre>
                </section>
                <section class="docs-section" id="playground">
                    <h2 class="section-heading">Playground</h2>
                    @include('documentation.mock.form')
                </section>
            </article>
        </div>
    </div>
</div>
<!--//docs-wrapper-->

@endsection