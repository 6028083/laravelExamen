<div>

    <header class="navbar navbar-expand-md d-print-none sticky-top">
        <div class="container-xl">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <p class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                <a href=".">
                    <img src="/back/static/logo-header.png" width="110" height="32" alt="Tabler" class="navbar-brand-image">
                </a>
            </p>
            <div class="navbar-nav flex-row order-md-last">
                <div class="d-none d-md-flex">


                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                        <span class="avatar avatar-md" style="background-image: url({{$author->picture}})"></span>
                        <div class="d-none d-xl-block ps-2">
                            <div>{{ $author->name }}</div>
                            <div class="mt-1 small text-muted">{{ $author->username }}</div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <div style="position: absolute; top: 0; bottom: 0; left: 0; width: 2px; background-color: #000;"></div>
                        <a href="{{ route('auth.profile') }}" class="dropdown-item">Profiel</a>

                        <a href="{{ route('auth.settings')}}" class="dropdown-item">Instellingen</a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('auth.logout') }}" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Uitloggen</a>
                        <form action="{{ route('auth.logout') }}" id="logout-form" method="POST">@csrf</form>

                    </div>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbar-menu">
                <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('auth.home')}}">
                                <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                        <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                        <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Home
                                </span>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                <span class="nav-link-title">
                                    Blog
                                </span>
                            </a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('posts.add-post') }}">
                                    Nieuwe blog
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Nieuw</span>
                                </a>

                                <a class="dropdown-item" href="{{ route('posts.all_posts') }}">
                                    Alle blogs
                                </a>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </header>


</div>