@extends('layout/layout')

@section('content')

<div class="docs-wrapper">
    @include('components.sidebar')
    <div class="docs-content">
        <div class="container">
            <article class="docs-article" id="section-1">
                <header class="docs-header">
                    <h1 class="docs-heading">Query <span class="docs-time">Last updated: 2021-10-18</span></h1>
                </header>
                <section class="docs-section">
                    By using the <strong>/query</strong> api, you can overcome the cors error on js development
                    <h2 class="section-heading">jQuery</h2>
                    <pre><code>@include('documentation.query.snippet')</code></pre>
                </section>
                <section class="docs-section" id="playground">
                    <h2 class="section-heading">Playground</h2>
                    @include('documentation.query.form')
                </section>
            </article>
        </div>
    </div>
</div>
<!--//docs-wrapper-->

@endsection