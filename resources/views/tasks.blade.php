@extends('front.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Tasks')
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

        <div class="row no-gutters-lg">
            <div class="col-12 mt-5">
                <h2 class=" card section-title">Laatste Tasks</h2>
            </div>
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="row">
                    <div class="col-12 mb-4">
                        @if(single_latest_post())
                        <article class="card article-card">
                            <a href="{{ route('read_post', single_latest_post()->post_slug)}}">
                                <div class="card-image">
                                    <div class="post-info"> <span class="text-uppercase">{{ date_formatter(single_latest_post()->created_at) }}</span>
                                        <span class="text-uppercase">{{ readDuration(single_latest_post()->post_title, single_latest_post()->post_content) }} @choice('min|mins', readDuration(single_latest_post()->post_title, single_latest_post()->post_content)) LEESGOED</span>
                                    </div>
                                    <img loading="lazy" decoding="async" src="{{ single_latest_post()->featured_image_url }}" alt="Post Thumbnail" class="w-100">
                                </div>
                            </a>
                            <div class="card-body px-0 pb-1">
                                <h2 class="h1"><a class="post-title" href="{{ route('read_post', single_latest_post()->post_slug)}}">{{ single_latest_post()->post_title}}</a></h2>
                                <p class="card-text">{!! Str::ucfirst(words(single_latest_post()->post_content,35)) !!}</p>
                                <div class="content"> <a class="read-more-btn" href="{{ route('read_post', single_latest_post()->post_slug)}}">Lees het volledige artikel</a>
                                </div>
                            </div>
                        </article>
                        @endif
                    </div>

                    @foreach(latest_blog_posts() as $item)
                    <div class="col-md-6 mb-4">
                        <article class="card article-card article-card-sm h-100">
                            <a href="{{ route('read_post', $item->post_slug)}}">
                                <div class="card-image">
                                    <div class="post-info"> <span class="text-uppercase">{{ date_formatter($item->created_at) }}</span>
                                        <span class="text-uppercase">{{ readDuration(single_latest_post()->post_title, single_latest_post()->post_content) }} @choice('min|mins', readDuration(single_latest_post()->post_title, single_latest_post()->post_content)) LEESGOED</span>

                                    </div>
                                    <img loading="lazy" decoding="async" src="{{ $item->featured_image_url }}" alt="Post Thumbnail" class="w-100">
                                </div>
                            </a>
                            <div class="card-body px-0 pb-0">

                                <h2><a class="post-title" href="{{ route('read_post',$item->post_slug)}}">{{$item->post_title}}</a></h2>
                                <p class="card-text">{!! Str::ucfirst(words($item->post_content,25)) !!}</p>
                                <div class="content"> <a class="read-more-btn" href="{{ route('read_post', $item->post_slug)}}">Lees het volledige artikel</a>
                                </div>
                            </div>
                        </article>
                    </div>
                    @endforeach


                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget-blocks">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="widget">
                                <div class="widget-body">
                                    <img loading="lazy" decoding="async" src="/back/static/logo-header.png" alt="About Me" class="w-100 author-thumb-sm d-block">
                                    <h2 class="widget-title my-3">Burak Diker</h2>
                                    <p class="mb-3 pb-2">Ik ben een enthousiaste MBO-student met passie voor software development. Ik heb ervaring met diverse programmeertalen en wil mijn vaardigheden blijven ontwikkelen. Als resultaatgerichte teamspeler met sterke communicatieve vaardigheden zoek ik altijd naar nieuwe uitdagingen.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection