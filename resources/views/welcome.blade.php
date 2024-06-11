@extends('back.layouts.view-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Home')
@section('content')
<!-- Your HTML content goes here -->



<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ blogInfo()->blog_description }}">
    <meta name="author" content="{{ blogInfo()->blog_name }}">
    <meta name="generator" content="Hugo 0.84.0">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">



    <!-- Bootstrap core CSS -->
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
        /*
        
 * Globals
 */


        /* Custom default button */
        .btn-secondary,
        .btn-secondary:hover,
        .btn-secondary:focus {
            color: #333;
            text-shadow: none;
            /* Prevent inheritance from `body` */
        }


        /*
 * Base structure
 */

        body {
            text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
            box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
        }

        .cover-container {
            max-width: 42em;
        }


        /*
 * Header
 */

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

        .card-1 {
            margin-top: 55px;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
</head>

<body class="h-1000 text-center text-white bg-dark" cz-shortcut-listen="true" data-new-gr-c-s-check-loaded="14.1145.0" data-gr-ext-installed="">
    <div>
        <!---header--->
        <div class="container  d-flex w-120 h-20 p-1 mt-3  mx-auto flex-column">
            <header class="mb-autocover-container">
                <!-- Logo toevoegen -->
                <img class="float-md-start mb-0 logo01 col-lg-1" src="https://i.postimg.cc/Wz6C8s2t/burak-high-resolution-logo-black-transparent.webp" alt="Burak Logo">

                <!-- Navigatie -->
                <nav class="nav nav-masthead justify-content-center float-md-end col-lg-3">
                    <a class="nav-link {{ request()->routeIs('welcome') ? 'active' : '' }}" href="{{ route('welcome') }}">Home</a>
                    <a class="nav-link {{ request()->routeIs('over-ons') ? 'active' : '' }}" href="{{ route('over-ons') }}">Over ons</a>
                    <a class="nav-link {{ request()->routeIs('blog') ? 'active' : '' }}" href="{{ route('blog') }}">Blog</a>
                </nav>

            </header>
        </div>
        <!---img header--->
        <div class="row col-12">

            <div class=" card text-bg-dark mt-5 col-lg-12">
                <img src=" https://i.postimg.cc/8cVDx1dg/html-system-websites-concept.jpg" class="card-img" alt="Laravel image">
            </div>


        </div>
        <!---realgen--->
        <div class="row col-12 mt-4">
            <div class="col-lg-0 col-sm-2">
                <!-- Empty column for spacing -->
            </div>
            <div class="col-md-12 col-lg-5 col-sm-8">
                <div class="card card-1" style="box-shadow: 1px 1px 6px rgba(0, 0, 0, 0.1);">
                    <div class="card-body">
                        <h1 class="card-title mb-0 p-2">Real Gen</h1>
                        <p class="card-text p-2">
                            Realgen is gespecialiseerd in online marketing en daarnaast doen ze ook webontwikkeling. Ze beheren klanten en artikelen via een speciaal portaal, wat aangeeft dat ze zich richten op klanten met interesse in online zichtbaarheid en marketingoplossingen.</p>

                        <a href="https://realgen.nl/contact/" class="btn btn-primary p-2" style=" font-size: 16px;background-color: #124a8e;" target="_blank"><i class="fa-solid fa-angles-right fa-shake">&nbsp;</i> naar de website
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-sm-0">
                <!-- Empty column for spacing -->
            </div>
            <div class="col-md-6 col-lg-3 mt-3">
                <img src="https://i.postimg.cc/mZJyXvcg/9.jpg" class="img-fluid mx-auto d-block" alt="Laravel image">
            </div>
            <div class="col-lg-0">
                <!-- Empty column for spacing -->
            </div>
        </div>
        <!---diensten--->
        <div class="row col-12 mt-4">
            <div class="col-lg-3 col-sm-2">
                <!-- Empty column for spacing -->
            </div>
            <div class="col-md-12 col-lg-6 col-sm-8 mb-5">
                <div class="card card-1" style="box-shadow: 1px 1px 6px rgba(0, 0, 0, 0.1);">
                    <div class="card-body">

                        <h2 class="card-title mb-0 p-2">Diensten</h2>
                        <p class="card-text p-2">
                            Hun producten en diensten omvatten website-onderhoud en -ontwikkeling, met een focus op websites, waaronder webshops, die worden gebouwd en onderhouden met behulp van het WordPress-platform. Daarnaast bieden ze diensten voor het opzetten van SEO-ranglijsten via SE Ranking, genereren ze maandelijkse rapportages om prestaties te analyseren en te verbeteren, en specialiseren ze zich in het maken van op maat gemaakte landingspagina's en complete websites die voldoen aan de specifieke behoeften en doelen van hun klanten. Ze activeren ook Google Analytics 4 en Google Search Console om de online prestaties van hun klanten te optimaliseren.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-">
                <!-- Empty column for spacing -->
            </div>
        </div>
        <!---img seo,ga4, gsc--->
        <div class="container mb-5">
            <div class="row mt-5 mb-5">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card" style="box-shadow: 1px 1px 6px darkgrey;">
                        <a target="_blank" href="https://realgen.nl/zoekmachine-optimalisatie/">
                            <img src="https://i.postimg.cc/SxQ6XxDZ/Seo-1.webp" class="card-img-top img-fluid img-cover" alt="Laravel image">
                        </a>
                        <div class="card-body">

                            <p class="card-text text-center"> <i class="fa-brands fa-searchengin fa-lg">&nbsp;</i>Search Engine Optimize</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card" style="box-shadow: 1px 1px 6px darkgrey;">
                        <a target="_blank" href="https://realgen.nl/zoekmachine-optimalisatie/">
                            <img src="https://i.postimg.cc/ryCRSLd7/ga4-1.webp" class="card-img-top img-fluid img-cover" alt="Laravel image">
                        </a>
                        <div class="card-body">
                            <p class="card-text text-center"><i class="fa-solid fa-chart-pie fa-lg">&nbsp;</i>Google Analytics</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card" style="box-shadow: 1px 1px 6px darkgrey;">
                        <a target="_blank" href="https://realgen.nl/zoekmachine-optimalisatie/">
                            <img src="https://i.postimg.cc/g0VmfGPW/gsc-1.webp" class="card-img-top img-fluid img-cover" alt="Laravel image">
                        </a>
                        <div class="card-body">
                            <p class="card-text text-center"><i class="fa-solid fa-magnifying-glass fa-lg"></i> Google Search Console</p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!---eerste week --->
        <div class="row col-12 mt-4">
            <div class="col-lg-3 col-sm-2">
                <!-- Empty column for spacing -->
            </div>
            <div class="col-md-12 col-lg-6 col-sm-8 mb-5">
                <div class="card card-1" style="box-shadow: 1px 1px 6px rgba(0, 0, 0, 0.1);">
                    <div class="card-body">
                        <h3 class="card-title mb-0 p-2">Eerste week</h3>
                        <p class="card-text p-2">
                            In mijn eerste week bij het bedrijf, concentreerde ik me op het begrijpen van de bedrijfsstructuur en het verwerven van nieuwe vaardigheden. Dit omvatte het gebruik van tools zoals Monday voor projectmanagement en het beheer van klanten en artikelen via een speciaal portaal. Ik identificeerde klanten die niet langer van plan waren om te betalen of die langdurig afwezig waren, en nam passende maatregelen voor accountbeheer. Bovendien analyseerde ik projecten met behulp van SE Ranking, en ik kreeg praktische ervaring in het onderhouden van websites met WordPress. Ik nam ook verantwoordelijkheid voor het opzetten van SE Ranking en het genereren van maandelijkse rapportages die op de 28e van elke maand aan de klanten werden verstrekt. Verder droeg ik actief bij aan het activeren van Google Analytics 4 en Google Search Console voor enkele klanten. Ik heb zelfs landingspagina's gecreëerd die voldeden aan de specifieke wensen van bepaalde klanten, en complete websites ontworpen en gelanceerd.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-">
                <!-- Empty column for spacing -->
            </div>
        </div>
        <!---mijn stage beleving--->
        <div class="container mt-5 mb-5">
            <div class="row mt-4">
                <div class="col-md-6 mt-4 ">
                    <img src="https://i.postimg.cc/KjLgsJ2z/6.jpg" class="img-fluid mx-auto d-block logo02" alt="Laravel image">
                </div>
                <div class="col-md-6">
                    <div class="card card-2">
                        <div class="card-body" style="box-shadow: 1px 1px 6px darkgrey;">
                            <h4 class=" card-title mb-0 p-2">Mijn stage beleving</h4>
                            <p class="card-text p-2">
                                Tijdens deze stage streef ik ernaar mijn kennis en vaardigheden te benutten om anderen te helpen en positieve veranderingen in hun leven te bewerkstelligen. Mijn doel is om mijn expertise toe te
                                passen om concrete problemen op te lossen,
                                waardevolle ondersteuning te bieden en een tastbare impact te hebben op de mensen die ik assisteer. Ik zie deze stage als een kans om niet alleen als professional te groeien, maar ook om te
                                ontdekken hoe ik mijn capaciteiten effectief kan inzetten om bij te dragen aan het welzijn van anderen.
                            </p>
                            <a href="https://realgen.nl/contact/" class="btn btn-primary p-2" style=" font-size: 16px;background-color: #124a8e;" target="_blank"><i class="fa-solid fa-angles-right fa-shake">&nbsp;</i>Neem contact op</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---persoonlijke Smart--->
        <div class="row col-12 mt-4">
            <div class="col-lg-3 col-sm-2">
                <!-- Empty column for spacing -->
            </div>
            <div class="col-md-12 col-lg-6 col-sm-8 mb-5">
                <div class="card card-1" style="box-shadow: 1px 1px 6px rgba(0, 0, 0, 0.1);">
                    <div class="card-body">
                        <h4 class="card-title mb-0 p-2">Persoonlijke SMART doelen van de stage</h4>
                        <p class="card-text p-2">
                            <b> Specifiek</b>: Tegen het einde van mijn stage streef ik ernaar om mijn Laravel-vaardigheden aanzienlijk te verbeteren.
                            <br><b>Meetbaar</b>: Ik zal mijn voortgang meten aan de hand van mijn vermogen om complexe webtoepassingen met Laravel te ontwikkelen en uit te rollen.
                            <br><b>Acceptabel</b>: Het verbeteren van mijn Laravel-vaardigheden is cruciaal voor mijn rol en wordt ondersteund door mijn stagebegeleider.
                            <br><b>Realistisch</b>: Met de beschikbare middelen en de leeromgeving van mijn stage is het realistisch om mijn Laravel-vaardigheden te verbeteren.
                            <br><b>Tijdgebonden</b>: Tegen het einde van mijn stageperiode wil ik aantoonbare vooruitgang hebben geboekt in mijn Laravel-vaardigheden.

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-">
                <!-- Empty column for spacing -->
            </div>
        </div>


    </div>





    <script src="./back/dist/js/demo-theme.min.js?1684106062"></script>
    <div class="page">
        <!-- Navbar -->

        <div class="page-wrapper">
            <!-- Page header -->
            @yield('pageHeader')
            <!-- Page body -->
            <div class="page-body">
                <div class="container-xl">
                    @yield('content')
                </div>
            </div>

        </div>
    </div>

    <!-- Libs JS -->
    <script src="./back/dist/libs/apexcharts/dist/apexcharts.min.js?1684106062" defer></script>
    <script src="./back/dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1684106062" defer></script>
    <script src="./back/dist/libs/jsvectormap/dist/maps/world.js?1684106062" defer></script>
    <script src="./back/dist/libs/jsvectormap/dist/maps/world-merc.js?1684106062" defer></script>
    <script src="{{asset('back/dist/libs/ijaboCropTool/ijaboCropTool.min.js')}}"></script>
    <script src="{{asset('back/dist/libs/ijaboViewer/jquery-1.7.1.min.js')}}"></script>
    <script src="{{asset('back/dist/libs/ijaboCropTool/ijabo.min.js')}}"></script>
    <script src="https://kit.fontawesome.com/bea9104bdb.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <!-- Tabler Core -->
    <script src="./back/dist/js/tabler.min.js?1684106062" defer></script>
    @stack('scripts')
    @livewireScripts
    <script src="./back/dist/js/demo.min.js?1684106062" defer></script>
</body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>

@endsection