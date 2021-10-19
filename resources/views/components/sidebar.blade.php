<div id="docs-sidebar" class="docs-sidebar">
    <div class="top-search-box d-lg-none p-3">
        <form class="search-form">
            <input type="text" placeholder="Search the docs..." name="search" class="form-control search-input">
            <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
        </form>
    </div>
    <nav id="docs-nav" class="docs-nav navbar">
        <ul class="section-items list-unstyled nav flex-column pb-3">
            <li class="nav-item section-title"><a
                    class="nav-link {{request()->fullUrl() === url('documentation')?'active':''}}"
                    href="{{url('documentation')}}"><span class="theme-icon-holder me-2"><i
                            class="fas fa-map-signs"></i></span>Introduction</a></li>
            <li class="nav-item section-title mt-3"><a
                    class="nav-link {{request()->fullUrl() === url('documentation/installation')?'active':''}}"
                    href="{{url('documentation/installation')}}"><span class="theme-icon-holder me-2"><i
                            class="fas fa-arrow-down"></i></span>Installation</a></li>
            <li class="nav-item section-title mt-3"><a
                    class="nav-link {{request()->fullUrl() === url('documentation/query')?'active':''}}"
                    href="{{url('documentation/query')}}"><span class="theme-icon-holder me-2"><i
                            class="fas fa-box"></i></span>Query</a></li>
            <li class="nav-item"><a class="nav-link" href="{{url('documentation/query')}}#playground">Playground</a>
            </li>
            <li class="nav-item section-title mt-3"><a
                    class="nav-link {{request()->fullUrl() === url('documentation/mock')?'active':''}}"
                    href="{{url('documentation/mock')}}"><span class="theme-icon-holder me-2"><i
                            class="fas fa-cogs"></i></span>Mock</a></li>
            <li class="nav-item"><a class="nav-link" href="{{url('documentation/mock')}}#playground">Playground</a></li>
            <li class="nav-item section-title mt-3"><a
                    class="nav-link {{request()->fullUrl() === url('documentation/ratelimiter')?'active':''}}"
                    href="{{url('documentation/ratelimiter')}}"><span class="theme-icon-holder me-2"><i
                            class="fas fa-tools"></i></span>Rate Limiter</a></li>
            <li class="nav-item section-title mt-3"><a
                    class="nav-link {{request()->fullUrl() === url('documentation/references')?'active':''}}"
                    href="{{url('documentation/references')}}"><span class="theme-icon-holder me-2"><i
                            class="fas fa-book-reader"></i></span>References</a></li>

        </ul>

    </nav>
    <!--//docs-nav-->
</div>
<!--//docs-sidebar-->