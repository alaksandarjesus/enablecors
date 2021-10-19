@extends('layout/layout')

@section('content')

<div class="docs-wrapper">
    @include('components.sidebar')
    <div class="docs-content">
        <div class="container">
            <article class="docs-article" id="section-1">
                <header class="docs-header">
                    <h1 class="docs-heading">Installation <span class="docs-time">Last updated: 2021-10-18</span></h1>
                 </header>
                    <section class="docs-intro">
                        <h2 class="section-heading">Download</h2>

                        <p>The package is built upon <a href="https://lumen.laravel.com/" target="_blank">Lumen</a> The
                            stunningly fast micro-framework by Laravel</p>
                        <p>You need to have latest PHP version installed on your system.</p>
                        <pre>
                        <code><br>git clone https://github.com/alaksandarjesus/enablecors.git<br><br></code>
                    </pre>
                    <div class="alert alert-info">
                        Rename .env.example to .env
                    </div>
                    </section>
                    <section class="docs-section">
                        <h2 class="section-heading">Local (Development) Server</h2>
                        <pre>
                            <code><br>cd enablecors<br><br>php -S localhost:8000 -t public<br><br></code>
                        </pre>
                        <h5>To test mock (optional)</h5>
                        <p>The route <strong>/mock</strong> can be useful to confirm the response headers. Run the application in different port</p>
                        <pre>
                            <code><br>php -S localhost:9000 -t public<br><br></code>
                        </pre>
                        <h2 class="section-heading">APP KEY</h2>
                        <p>To generate the app key uncomment the below code from routes/web.php</p>
                        <pre><code><br>$router->get('/key', function() {
    return \Illuminate\Support\Str::random(32);
 });<br><br></code></pre>
                    <div>
                        <a href="https://stackoverflow.com/questions/30344141/lumen-micro-framework-php-artisan-keygenerate" target="_blank">Credits</a>
                    </div>
                    </section>
                    <section class="docs-section">
                        <h2 class="section-heading">Production Server</h2>
                        <p>Map the folder path to <strong>/public</strong> folder. Allow Override All should be enabled on apache server</p>
                        <p> <a href="https://stackoverflow.com/questions/869092/how-to-enable-mod-rewrite-for-apache-2-2" target="_blank">For More...</a></p>
                    </section>
            </article>
        </div>
    </div>
</div>
<!--//docs-wrapper-->

@endsection