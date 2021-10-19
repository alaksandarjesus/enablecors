@extends('layout/layout')

@section('content')

<div class="docs-wrapper">
    @include('components.sidebar')
    <div class="docs-content">
        <div class="container">
            <article class="docs-article" id="section-1">
                <header class="docs-header">
                    <h1 class="docs-heading">Introduction <span class="docs-time">Last updated: 2021-10-18</span></h1>
                    <section class="docs-intro">
                        <p>Cross-origin resource sharing (CORS) is a mechanism that allows restricted resources on a web
                            page to be requested from another domain outside the domain from which the first resource
                            was served.</p>
                    </section>
                    <!--//docs-intro-->

                    <h5>Technical Overview:</h5>
                    <p>For Ajax and HTTP request methods that can modify data (usually HTTP methods other than GET, or
                        for POST usage with certain MIME types), the specification mandates that browsers "preflight"
                        the request, soliciting supported methods from the server with an HTTP OPTIONS request method,
                        and then, upon "approval" from the server, sending the actual request with the actual HTTP
                        request method. Servers can also notify clients whether "credentials" (including Cookies and
                        HTTP Authentication data) should be sent with requests.</p>
                    <h5>History:</h5>
                    <p>Cross-origin support was originally proposed by Matt Oshry, Brad Porter, and Michael Bodell of
                        Tellme Networks in March 2004 for inclusion in VoiceXML 2.1 to allow safe cross-origin data
                        requests by VoiceXML browsers. The mechanism was deemed general in nature and not specific to
                        VoiceXML and was subsequently separated into an implementation NOTE. The WebApps Working Group
                        of the W3C with participation from the major browser vendors began to formalize the NOTE into a
                        W3C Working Draft on track toward formal W3C Recommendation status.</p>

                    <p>In May 2006 the first W3C Working Draft was submitted. In March 2009 the draft was renamed to
                        "Cross-Origin Resource Sharing" and in January 2014 it was accepted as a W3C Recommendation</p>
                    <div class="d-flex justify-content-end align-items-center">
                    <a class="theme-link" href="https://en.wikipedia.org/wiki/Cross-origin_resource_sharing" target="_blank">Source</a>
                    </div>

                </header>
            </article>
        </div>
    </div>
</div>
<!--//docs-wrapper-->

@endsection