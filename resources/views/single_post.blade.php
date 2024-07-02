@extends('front.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Task')
@section('content')




<body class="h-1000 text-center text-white" style="background-color: #182433;" cz-shortcut-listen="true" data-new-gr-c-s-check-loaded="14.1145.0" data-gr-ext-installed="">
    <div>
        <div class="container  d-flex w-120 h-20 p-1 mt-3  mx-auto flex-column">
            <header class="mb-autocover-container">
                <!-- Logo toevoegen -->
                <img class="float-md-start mb-0 logo01 col-lg-1" src="https://i.postimg.cc/Wz6C8s2t/burak-high-resolution-logo-black-transparent.webp" alt="Burak Logo">

                <!-- Navigatie -->
                <nav class="nav nav-masthead justify-content-center float-md-end col-lg-3 ">
                    <a class="nav-link {{ request()->routeIs('tasks') ? 'active' : '' }}" href="{{ route('tasks') }}">Tasks</a>
                </nav>


            </header>
        </div>

        <head>
            <style>
                .btn-secondary,
                .btn-secondary:hover,
                .btn-secondary:focus {
                    color: #333;
                    text-shadow: none;
                    /* Prevent inheritance from `body` */
                }


                body {
                    text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
                    box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
                }

                .cover-container {
                    max-width: 42em;
                }

                .nav-masthead .nav-link {
                    padding: .25rem 0;
                    font-weight: 700;
                    color: rgba(255, 255, 255, .5);
                    background-color: transparent;
                    border-bottom: .25rem solid transparent;
                }

                .nav-masthead .nav-link:hover,
                .nav-masthead .nav-link:focus {
                    border-bottom-color: rgba(25, 255, 255, .25);
                }

                .nav-masthead .nav-link+.nav-link {
                    margin-left: 1rem;
                }

                .nav-masthead .active {
                    color: #fff;
                    border-bottom-color: #fff;
                }

                .logo01 {
                    width: 120px;
                    /* Pas de breedte aan zoals nodig */
                    height: auto;
                    /* Behoud de aspect ratio van het logo */

                    margin-bottom: 20px;
                    /* Pas de bovenmarge aan zoals nodig */
                    margin-left: 3px;
                    /* Pas de linkermarge aan zoals nodig */
                }

                .bd-placeholder-img {
                    font-size: 1.125rem;
                    text-anchor: middle;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    user-select: none;
                }

                @media (min-width:769px) {
                    .logo01 {
                        margin-left: 42px;
                    }
                }

                @media (min-width: 768px) {
                    .bd-placeholder-img-lg {
                        font-size: 3.5rem;
                    }



                }
            </style>
        </head>

        <!-- code hier-->
        <div class="row mt-5">
            <div class=" col-lg-8 mb-5 mb-lg-0">
                <article class="card">
                    <img loading="lazy" decoding="async" src="{{ $post->featured_image_url }} " alt="Post Thumbnail" class="w-100 p-4">
                    <ul class="post-meta mb-2 mt-4">
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right:5px;margin-top:-4px" class="text-dark" viewBox="0 0 16 16">
                                <path d="M5.5 10.5A.5.5 0 0 1 6 10h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z"></path>
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
                                <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"></path>
                            </svg> <span>{{ date_formatter($post->created_at) }}</span>
                        </li>
                    </ul>
                    <h1 class="my-3">{{ $post->post_title}}</h1>

                    <div class="content text-left mb-5">
                        <p>{!! $post->post_content!!}</p>
                    </div>
                </article>
                <div class="mt-5">
                    <div id="disqus_thread"><iframe id="dsq-app1933" name="dsq-app1933" allowtransparency="true" frameborder="0" scrolling="no" tabindex="0" title="Disqus" width="100%" src="https://disqus.com/embed/comments/?base=default&amp;f=themefisher-template&amp;t_u=https%3A%2F%2Fdemo.themefisher.com%2Freporter-bootstrap%2Farticle.html&amp;t_d=Reporter%20-%20HTML%20Blog%20Template&amp;t_t=Reporter%20-%20HTML%20Blog%20Template&amp;s_o=default#version=cb3f36bfade5c758ef967a494d077f95" style="width: 1px !important; min-width: 100% !important; border: none !important; overflow: hidden !important; height: 627px !important;" horizontalscrolling="no" verticalscrolling="no"></iframe></div>
                    <script type="application/javascript">
                        var disqus_config = function() {



                        };
                        (function() {
                            if (["localhost", "127.0.0.1"].indexOf(window.location.hostname) != -1) {
                                document.getElementById('disqus_thread').innerHTML = 'Disqus comments not available by default when the website is previewed locally.';
                                return;
                            }
                            var d = document,
                                s = d.createElement('script');
                            s.async = true;
                            s.src = '//' + "themefisher-template" + '.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a>
                    </noscript>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget-blocks">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="widget">
                                <div class="widget-body">
                                    <img loading="lazy" decoding="async" src="/back/static/logo-header.png" alt="About Me" class="w-100 author-thumb-sm d-block">
                                    <h4 class="widget-title my-3">Burak Diker</h4>
                                    <p class="mb-3 pb-2">Ik ben een enthousiaste MBO-student met passie voor software development. Ik heb ervaring met diverse programmeertalen en wil mijn vaardigheden blijven ontwikkelen. Als resultaatgerichte teamspeler met sterke communicatieve vaardigheden zoek ik altijd naar nieuwe uitdagingen.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
@endsection