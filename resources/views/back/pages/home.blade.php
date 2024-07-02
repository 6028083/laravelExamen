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
            <div class="col-md-12">
                <div class="card card-1" style="box-shadow: 1px 1px 6px darkgrey;">
                    <div class="card-body">
                        <div style="position: absolute; top: 0; bottom: 0; left: 0; width: 2px; background-color: #000;"></div>
                        <h1 class="card-title mb-0 p-2" style="float: left;">Laravel Development</h1>
                        <p class="card-text p-2" style="float: left;">
                            Laravel is een krachtig PHP-framework dat wordt gebruikt voor het bouwen van webapplicaties. Het biedt een elegante syntaxis en tools voor routing, authenticatie, en migraties, waardoor het
                            ontwikkelen van robuuste webapplicaties eenvoudiger en efficiënter wordt.</p>
                    </div>
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