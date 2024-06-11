@extends('back.layouts.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Home')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Een innovatief Laravel-project voor het ontwikkelen van dynamische webapplicaties. Ontdek krachtige functies en efficiënte ontwikkeling met Laravel.">
    <meta name="keywords" content="laravel">
    <meta name="author" content="Burak Diker">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .card-1 {
            margin-top: 75px;
        }

        .card-2 {
            margin-top: 15px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="card text-bg-dark ">
        <img src="https://i.postimg.cc/8cVDx1dg/html-system-websites-concept.jpg" class="card-img" alt="Laravel image">
        <div class="card-img-overlay">
        </div>
    </div>


    <div class="container  mt-5">
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card card-1" style="box-shadow: 1px 1px 6px darkgrey;">
                    <div class="card-body">
                        <div style="position: absolute; top: 0; bottom: 0; left: 0; width: 2px; background-color: #000;"></div>
                        <h1 class="card-title mb-0 p-2" style="float: left;">Real Gen</h1>
                        <p class="card-text p-2" style="float: left;">
                            Realgen is gespecialiseerd in online marketing en daarnaast doen ze ook webontwikkeling. Ze beheren klanten en artikelen via een speciaal portaal, wat aangeeft dat ze zich richten op klanten met interesse in online zichtbaarheid en marketingoplossingen.</p>
                        <a href="https://realgen.nl/totaalpakket/" class="btn btn-primary p-2" style="float: left; font-size: 16px; background-color: #124a8e;" target="_blank"><i class="fa-solid fa-angles-right fa-shake">&nbsp;</i>Ga naar de website</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-3">
                <img src="https://i.postimg.cc/6Qy54rdH/7.jpg" class="img-fluid mx-auto d-block" alt="Laravel image">
            </div>
        </div>
    </div>

    <div class="row m-1">
        <div class="col-12 col-md-12 mb-2 mt-5">
            <div class="card" style="box-shadow: 1px 1px 6px darkgrey;">
                <div class="card-body">
                    <div style="position: absolute; top: 0; bottom: 0; left: 0; width: 2px; background-color: #000;"></div>
                    <h2 class="card-title mb-0 p-2">Diensten</h2>
                    <p class="card-text p-2">
                        Hun producten en diensten omvatten website-onderhoud en -ontwikkeling, met een focus op websites, waaronder webshops, die worden gebouwd en onderhouden met behulp van het WordPress-platform.
                        Daarnaast bieden ze diensten voor het opzetten van SEO-ranglijsten via SE Ranking, genereren ze maandelijkse rapportages om prestaties te analyseren en te verbeteren, en specialiseren ze zich
                        in het maken van op maat gemaakte landingspagina's en complete websites die voldoen aan de specifieke behoeften en doelen van hun klanten. Ze activeren ook Google Analytics 4 en Google Search
                        Console om de online prestaties van hun klanten te optimaliseren.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row mt-5 mb-5">
            <div class="col-lg-4 col-md-6">
                <div class="card" style="box-shadow: 1px 1px 6px darkgrey;">
                    <a target="_blank" href="https://realgen.nl/zoekmachine-optimalisatie/">
                        <img src="https://i.postimg.cc/SxQ6XxDZ/Seo-1.webp" class="card-img-top img-fluid img-cover" alt="Laravel image">
                    </a>
                    <div class="card-body">

                        <p class="card-text text-center"> <i class="fa-brands fa-searchengin fa-lg">&nbsp;</i>Search Engine Optimize</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card" style="box-shadow: 1px 1px 6px darkgrey;">
                    <a target="_blank" href="https://realgen.nl/zoekmachine-optimalisatie/">
                        <img src="https://i.postimg.cc/ryCRSLd7/ga4-1.webp" class="card-img-top img-fluid img-cover" alt="Laravel image">
                    </a>
                    <div class="card-body">
                        <p class="card-text text-center"><i class="fa-solid fa-chart-pie fa-lg">&nbsp;</i>Google Analytics</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
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
        <div class="col-lg-2 col-sm-2">
            <!-- Empty column for spacing -->
        </div>
        <div class="col-md-12 col-lg-8 col-sm-8 mb-5">
            <div class="card card-1" style="box-shadow: 1px 1px 6px rgba(0, 0, 0, 0.1);">
                <div class="card-body">
                    <div style="position: absolute; top: 0; bottom: 0; left: 0; width: 2px; background-color: #000;"></div>

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
            <div class="col-md-6 mt-5 ">
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
                        <a href="https://realgen.nl/contact/" class="btn btn-primary p-2" style=" font-size: 16px; background-color: #124a8e;" target="_blank"><i class="fa-solid fa-angles-right fa-shake">&nbsp;</i>Neem contact op</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---persoonlijke Smart--->
    <div class="row col-12 mt-4">
        <div class="col-lg-2 col-sm-2">
            <!-- Empty column for spacing -->
        </div>
        <div class="col-md-12 col-lg-8 col-sm-8 mb-5">
            <div class="card card-1" style="box-shadow: 1px 1px 6px rgba(0, 0, 0, 0.1);">
                <div class="card-body">
                    <div style="position: absolute; top: 0; bottom: 0; left: 0; width: 2px; background-color: #000;"></div>

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

    </div>








    <script src="https://kit.fontawesome.com/bea9104bdb.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>

@endsection