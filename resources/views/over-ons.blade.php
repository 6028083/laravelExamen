@extends('back.layouts.view-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Over ons')
@section('content')

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
            margin-top: 85px;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
</head>

<body class="h-1000 text-center text-white bg-dark" cz-shortcut-listen="true" data-new-gr-c-s-check-loaded="14.1145.0" data-gr-ext-installed="">
    <div>
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

        <div class="row col-12">

            <div class=" card text-bg-dark mt-5 col-lg-12">
                <img src=" https://i.postimg.cc/Rhmyn9G1/programming-background-with-person-working-with-codes-computer.jpg" class=" card-img" alt="Laravel image">
            </div>


        </div>





        <div class="container mt-5 mb-5">
            <div class="row m-2 mt-5 ">
                <div class="col-md-7 ">
                    <div class=" card card-1" style="box-shadow: 1px 1px 6px darkgrey;">
                        <div class="card-body">
                            <h1 class="card-title mb-4">Wie ben ik?</h1>
                            <p class="card-text">
                                Ik ben een enthousiaste MBO-student met passie voor software development. Ik heb
                                ervaring met diverse programmeertalen en wil mijn vaardigheden blijven ontwikkelen.
                                Als resultaatgerichte teamspeler met sterke communicatieve vaardigheden zoek ik altijd
                                naar nieuwe uitdagingen.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <img src="https://i.postimg.cc/FK4DFGK8/still-life-graphics-composition-min.jpg" class="img-fluid mx-auto d-block" style="border: 1px solid;" alt="Image Alt Text">
                </div>
            </div>
        </div>
        <div class="row m-3 mt-5 mb-5">

            <div class="col-12 col-lg-12 col-md-12 mt-5">
                <!-- New Card Section -->

                <div class="card" style="box-shadow: 1px 1px 6px darkgrey; background-color: #d9d9d9  ;">
                    <div class="card-body">
                        <h2 class="card-title mb-4">Stage-informatie</h2>

                        <div class="card mb-3" style="position: relative;">
                            <!-- Verticale lijn -->

                            <div class="card-body ">
                                <span class="icon"><i class="fa-regular fa-calendar fa-lg"></i></span>
                                <strong>Datum:</strong> 12-12-2023
                            </div>
                        </div>

                        <!-- Naam -->
                        <div class="card mb-3" style="position: relative;">
                            <!-- Verticale lijn -->
                            <div class="card-body">
                                <span class="icon"><i class="fa-solid fa-person fa-lg"></i></span>
                                <strong>Naam:</strong> Burak Diker
                            </div>
                        </div>

                        <!-- Studentnummer -->
                        <div class="card mb-3" style="position: relative;">
                            <!-- Verticale lijn -->
                            <div class="card-body">
                                <span class="icon"><i class="fa-solid fa-school fa-lg"></i></span>
                                <strong>Studentnummer:</strong> 6028083
                            </div>
                        </div>

                        <!-- Groepscode -->
                        <div class="card mb-3" style="position: relative;">
                            <!-- Verticale lijn -->

                            <div class="card-body">
                                <span class="icon"><i class="fa-solid fa-code fa-lg"></i></span>
                                <strong>Groepscode:</strong> LO2E-SWD2
                            </div>
                        </div>

                        <!-- Schoolbeoordelaar -->
                        <div class="card mb-3" style="position: relative;">
                            <!-- Verticale lijn -->

                            <div class="card-body">
                                <span class="icon"><i class="fa-solid fa-chalkboard-user fa-lg"></i></span>
                                <strong>Schoolbeoordelaar:</strong> Thierry Petitjean
                            </div>
                        </div>

                        <!-- Praktijkbeoordelaar -->
                        <div class="card mb-3" style="position: relative;">
                            <!-- Verticale lijn -->

                            <div class="card-body">
                                <span class="icon"><i class="fa-solid fa-briefcase fa-lg"></i></span>
                                <strong>Praktijkbeoordelaar:</strong> Neftary Piar
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of New Card Section -->
            </div>
        </div>

        <div class="row m-3 mt-5 mb-5">
            <div class="col-12 col-lg-12 col-md-12 mt-5">
                <div class="card" style="box-shadow: 1px 1px 6px darkgrey;">
                    <div class="card-body">
                        <h3 class="card-title mb-4">Missie in Mijn Stageperiode</h3>
                        <p class="card-text">
                            Gedurende deze stage koester ik het verlangen om mijn kennis en vaardigheden maximaal te benutten, niet alleen voor mijn eigen professionele ontwikkeling, maar ook om anderen te ondersteunen en positieve veranderingen in hun leven te bewerkstelligen. Mijn doel is helder: met mijn expertise wil ik concrete problemen oplossen, waardevolle ondersteuning bieden en een tastbare impact hebben op de levens van degenen die ik begeleid. Deze stage biedt mij niet alleen de gelegenheid om als professional te groeien, maar ook om te ontdekken hoe ik mijn persoonlijke capaciteiten effectief kan inzetten voor het welzijn van anderen.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- hier moet de 1-20 code staan-->
        <!-- dit is de week 1 tot 20-->
        <div class="col-md-12 col-lg-12 p-4">
            <!-- Cards with tabs component -->
            <div class="card-tabs">
                <!-- Cards navigation -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item" role="presentation"><a href="#tab-top-1" class="nav-link active" data-bs-toggle="tab" aria-selected="true" role="tab" tabindex="-1">1</a></li>
                    <li class="nav-item" role="presentation"><a href="#tab-top-2" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">2</a></li>
                    <li class="nav-item" role="presentation"><a href="#tab-top-3" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">3</a></li>
                    <li class="nav-item" role="presentation"><a href="#tab-top-4" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">4</a></li>
                    <li class="nav-item" role="presentation"><a href="#tab-top-5" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">5</a></li>
                    <li class="nav-item" role="presentation"><a href="#tab-top-6" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">6</a></li>
                    <li class="nav-item" role="presentation"><a href="#tab-top-7" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">7</a></li>
                    <li class="nav-item" role="presentation"><a href="#tab-top-8" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">8</a></li>
                    <li class="nav-item" role="presentation"><a href="#tab-top-9" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">9</a></li>
                    <li class="nav-item" role="presentation"><a href="#tab-top-10" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">10</a></li>
                    <li class="nav-item" role="presentation"><a href="#tab-top-11" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">11</a></li>
                    <li class="nav-item" role="presentation"><a href="#tab-top-12" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">12</a></li>
                    <li class="nav-item" role="presentation"><a href="#tab-top-13" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">13</a></li>
                    <li class="nav-item" role="presentation"><a href="#tab-top-14" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">14</a></li>
                    <li class="nav-item" role="presentation"><a href="#tab-top-15" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">15</a></li>
                    <li class="nav-item" role="presentation"><a href="#tab-top-16" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">16</a></li>
                    <li class="nav-item" role="presentation"><a href="#tab-top-17" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">17</a></li>
                    <li class="nav-item" role="presentation"><a href="#tab-top-18" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">18</a></li>
                    <li class="nav-item" role="presentation"><a href="#tab-top-19" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">19</a></li>
                    <li class="nav-item" role="presentation"><a href="#tab-top-20" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">20</a></li>
                </ul>
                <div class="tab-content">
                    <!-- Content of card #1 -->
                    <div id="tab-top-1" class="card tab-pane active show" role="tabpanel">
                        <div class="card-body">
                            <div class="card-title">Week 1</div>
                            <p class="text-secondary">
                                Deze week stond in het teken van kennismaking bij Realgen. Ik kreeg een introductie over de bedrijfsvoering, maakte kennis met mijn collega's en leerde over de gebruikte tools, waaronder Monday, die essentieel zijn voor de dagelijkse werkzaamheden.
                            </p>
                        </div>
                    </div>
                    <!-- Content of card #2 -->
                    <div id="tab-top-2" class="card tab-pane" role="tabpanel">
                        <div class="card-body">
                            <div class="card-title">Week 2</div>
                            <p class="text-secondary">
                                Deze week ontdekte ik het linkbuildingportaal van Realgen. Het blijkt een essentieel hulpmiddel te zijn voor het verbeteren van de vindbaarheid en het verkrijgen van hogere posities in Google. Ik heb geleerd hoe dit instrument effectief kan worden ingezet voor online zichtbaarheid en SEO-optimalisatie.</p>
                        </div>
                    </div>
                    <!-- Content of card #3 -->
                    <div id="tab-top-3" class="card tab-pane" role="tabpanel">
                        <div class="card-body">
                            <div class="card-title">Week 3</div>
                            <p class="text-secondary">
                                Deze week heb ik geleerd hoe ik landingspagina's moet maken met behulp van WordPress. Het proces omvatte kennismaking met de WordPress-interface, het begrijpen van paginabouwers en het toepassen van basisontwerpvaardigheden voor effectieve landingspagina's.</p>
                        </div>
                    </div>
                    <!-- Content of card #4 -->
                    <div id="tab-top-4" class="card tab-pane" role="tabpanel">
                        <div class="card-body">
                            <div class="card-title">Week 4</div>
                            <p class="text-secondary">
                                Deze week stond in het teken van het nauwlettend volgen van het onderhoud van de website. Ik heb ervoor gezorgd dat alle updates in WordPress werden verwerkt en heb gedetailleerde notulen gemaakt van elke aanpassing. Hierdoor leerde ik het belang van regelmatig onderhoud voor een goed functionerende en beveiligde website.</p>
                        </div>
                    </div>
                    <!-- Content of card #5 -->
                    <div id="tab-top-5" class="card tab-pane" role="tabpanel">
                        <div class="card-body">
                            <div class="card-title">Week 5</div>
                            <p class="text-secondary">
                                Deze week heb ik SE Ranking gebruikt om websiteprestaties te analyseren en zoekwoordposities bij te houden. Daarnaast heb ik GA4 (Google Analytics 4) en GSC (Google Search Console) geïntegreerd in SE Ranking voor onze klanten. Hierdoor kon ik uitgebreidere rapportages opstellen, waarmee ik gedetailleerde inzichten deelde over de SEO-verbeteringen met onze klanten.</p>
                        </div>
                    </div>
                    <!-- Content of card #6 -->
                    <div id="tab-top-6" class="card tab-pane" role="tabpanel">
                        <div class="card-body">
                            <div class="card-title">Week 6</div>
                            <p class="text-secondary">
                                Deze week heb ik me beziggehouden met een scala aan taken. Hierbij lag de focus op het onderhouden van websites, het analyseren van SEO-gegevens met SE Ranking, en het integreren van GA4 en GSC voor klanten. Daarnaast heb ik ook gewerkt aan het creëren en optimaliseren van landingspagina's om de online aanwezigheid verder te verbeteren. Het was een veelzijdige week waarin ik meerdere facetten van mijn stage heb verkend en mijn vaardigheden heb uitgebreid.
                            </p>
                        </div>
                    </div>
                    <!-- Content of card #7 -->
                    <div id="tab-top-7" class="card tab-pane" role="tabpanel">
                        <div class="card-body">
                            <div class="card-title">Week 7</div>
                            <p class="text-secondary">
                                Deze week heb ik een volledige website ontwikkeld met WordPress, met een specifieke nadruk op SEO. Vanaf het begin heb ik het ontwerp en de structuur gecreëerd met zoekmachineoptimalisatie in gedachten. Later heb ik GA4 en GSC toegevoegd aan SE Ranking om de websiteprestaties verder te verbeteren en te analyseren.</p>
                        </div>
                    </div>
                    <!-- Content of card #8 -->
                    <div id="tab-top-8" class="card tab-pane" role="tabpanel">
                        <div class="card-body">
                            <div class="card-title">Week 8</div>
                            <p class="text-secondary">
                                Deze week heb ik genoten van een welverdiende vakantie.
                            </p>
                        </div>
                    </div>
                    <!-- Content of card #9 -->
                    <div id="tab-top-9" class="card tab-pane" role="tabpanel">
                        <div class="card-body">
                            <div class="card-title">Week 9</div>
                            <p class="text-secondary">
                                Deze week heb ik me beziggehouden met diverse taken, waaronder het creëren van een landingspagina, het analyseren van SEO-gegevens met SE Ranking, het integreren van GA4 en GCS, en het uitvoeren van onderhoudsupdates in WordPress. Het was een veelzijdige week waarin ik verschillende aspecten van websitebeheer en -optimalisatie heb aangepakt.</p>
                        </div>
                    </div>
                    <!-- Content of card #10 -->
                    <div id="tab-top-10" class="card tab-pane" role="tabpanel">
                        <div class="card-body">
                            <div class="card-title">Week 10</div>
                            <p class="text-secondary">
                                Deze week heb ik nieuwe leden toegevoegd en bijgewerkt aan het linkbuildingportaal. Daarnaast heb ik in SE Ranking gecontroleerd of alle klanten actief zijn.</p>
                        </div>
                    </div>
                    <!-- Content of card #1 -->
                    <div id="tab-top-11" class="card tab-pane" role="tabpanel">
                        <div class="card-body">
                            <div class="card-title">Week 11</div>
                            <p class="text-secondary">
                                Deze week ben ik doorgegaan met het controleren van de klanten in SE Ranking, om ervoor te zorgen dat alle informatie up-to-date is en eventuele actiepunten kunnen worden geïdentificeerd.</p>
                        </div>
                    </div>
                    <!-- Content of card #12 -->
                    <div id="tab-top-12" class="card tab-pane" role="tabpanel">
                        <div class="card-body">
                            <div class="card-title">Week 12</div>
                            <p class="text-secondary">
                                Deze week heb ik in het linkbuildingportaal actie ondernomen voor klanten die geen artikelen ontvingen, zodat zij nu wel content ontvangen. Daarnaast heb ik nieuwe klanten toegevoegd aan het portaal om de groei en betrokkenheid te bevorderen.</p>
                        </div>
                    </div>
                    <!-- Content of card #13 -->
                    <div id="tab-top-13" class="card tab-pane" role="tabpanel">
                        <div class="card-body">
                            <div class="card-title">Week 13</div>
                            <p class="text-secondary">
                                Deze week heb ik alle klanten, zowel actieve als non-actieve, in SE Ranking op een Excel-sheet genoteerd met hun respectieve domeinnamen. Vervolgens heb ik een concurrentieonderzoek uitgevoerd om de waarde van deze domeinnamen te bepalen en dit nauwkeurig bijgehouden.</p>
                        </div>
                    </div>
                    <!-- Content of card #14 -->
                    <div id="tab-top-14" class="card tab-pane" role="tabpanel">
                        <div class="card-body">
                            <div class="card-title">Week 14</div>
                            <p class="text-secondary">
                                In deze fase van mijn stage bij Realgen heb ik mijn focus verlegd naar een grondige analyse van klantgegevens en concurrentie. Ik heb alle actieve en non-actieve klanten zorgvuldig geregistreerd in een Excel-sheet, inclusief hun respectievelijke domeinnamen. Deze week heb ik ook een diepgaand concurrentieonderzoek uitgevoerd om de waarde van deze domeinnamen nauwkeurig te bepalen. Het proces omvatte het verkennen van markttrends, het identificeren van sterke en zwakke punten van concurrenten, en het strategisch evalueren van kansen voor verdere verbeteringen in onze dienstverlening. </p>
                        </div>
                    </div>
                    <!-- Content of card #15 -->
                    <div id="tab-top-15" class="card tab-pane" role="tabpanel">
                        <div class="card-body">
                            <div class="card-title">Week 15</div>
                            <p class="text-secondary">
                                Deze week stond in het teken van strategische optimalisatie van het linkbuildingportaal. Ik heb gekeken naar de prestaties van de toegevoegde leden en heb updates uitgevoerd om de relevantie van de inhoud te waarborgen. Door middel van SE Ranking heb ik de actieve status van alle klanten gecontroleerd en eventuele lacunes in onze aanpak geïdentificeerd. Daarnaast heb ik nieuwe strategieën bedacht om de betrokkenheid van klanten te vergroten en de groei van het portaal te stimuleren.</p>
                        </div>
                    </div>
                    <!-- Content of card #16 -->
                    <div id="tab-top-16" class="card tab-pane" role="tabpanel">
                        <div class="card-body">
                            <div class="card-title">Week 16</div>
                            <p class="text-secondary">
                                Deze week heb ik mijn aandacht gericht op het optimaliseren van de website-ervaring voor gebruikers. Ik heb diepgaande analyses uitgevoerd met behulp van Google Analytics 4 en Google Search Console om het gebruikersgedrag te begrijpen. Op basis van deze inzichten heb ik aanpassingen gemaakt aan de website, zoals het verbeteren van laadtijden en het optimaliseren van content voor relevante zoekwoorden. Deze optimalisaties dragen bij aan een betere gebruikerservaring en versterken tegelijkertijd de SEO-prestaties.</p>
                        </div>
                    </div>
                    <!-- Content of card #17 -->
                    <div id="tab-top-17" class="card tab-pane" role="tabpanel">
                        <div class="card-body">
                            <div class="card-title">Week 17</div>
                            <p class="text-secondary">
                                Deze week stond in het teken van klantinteractie en communicatie. Ik heb rapportages opgesteld op basis van de verzamelde gegevens en deze met de klanten gedeeld. Door middel van duidelijke visualisaties en uitleg heb ik hen inzicht gegeven in de verbeteringen in hun online zichtbaarheid en zoekmachineposities. Daarnaast heb ik feedback verzameld en ben ik actief bezig geweest met het aanpassen van onze strategieën op basis van de behoeften en verwachtingen van de klanten. </p>
                        </div>
                    </div>
                    <!-- Content of card #18 -->
                    <div id="tab-top-18" class="card tab-pane" role="tabpanel">
                        <div class="card-body">
                            <div class="card-title">Week 18</div>
                            <p class="text-secondary">
                                Deze week heb ik me gericht op het implementeren van geavanceerde SEO-strategieën om de concurrentiepositie van onze klanten te versterken. Ik heb diepere analyses gemaakt van zoekwoordprestaties, backlinkprofielen en technische SEO-aspecten. Op basis van deze analyses heb ik gepersonaliseerde aanbevelingen gedaan om de algehele SEO-effectiviteit te vergroten. Deze strategieën zijn ontworpen om de online aanwezigheid van onze klanten te consolideren en hun digitale succes verder te stimuleren.</p>
                        </div>
                    </div>
                    <!-- Content of card #19 -->
                    <div id="tab-top-19" class="card tab-pane" role="tabpanel">
                        <div class="card-body">
                            <div class="card-title">Week 19</div>
                            <p class="text-secondary">
                                Deze week heb ik mij gefocust op het fine-tunen van de linkbuildingstrategieën voor specifieke klanten. Door grondig te analyseren welke backlinks het meest impactvol zijn voor hun specifieke branche, kon ik gerichte verbeteringen aanbrengen. Daarnaast heb ik nieuwe kansen geïdentificeerd voor samenwerkingen en linkuitwisselingen om de autoriteit van onze klanten in hun marktsegment te vergroten. Deze strategische benadering is bedoeld om duurzame groei te bevorderen en de organische zichtbaarheid verder te versterken. </p>
                        </div>
                    </div>
                    <!-- Content of card #20 -->
                    <div id="tab-top-20" class="card tab-pane" role="tabpanel">
                        <div class="card-body">
                            <div class="card-title">Week 20</div>
                            <p class="text-secondary">
                                In deze laatste week van mijn stage bij Realgen heb ik de geleerde vaardigheden samengebracht voor een alomvattende evaluatie van onze SEO-inspanningen. Ik heb uitgebreide rapportages opgesteld die niet alleen de behaalde resultaten weerspiegelen, maar ook toekomstige aanbevelingen en groeimogelijkheden bevatten. Daarnaast heb ik een presentatie voorbereid waarin ik mijn ervaringen en bevindingen deel met het team. Het was een waardevolle afsluiting van mijn stageperiode, waarin ik niet alleen mijn technische vaardigheden heb versterkt, maar ook mijn inzicht in het belang van strategisch denken en continue optimalisatie heb verdiept.</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>



        <script src="https://kit.fontawesome.com/bea9104bdb.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>


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