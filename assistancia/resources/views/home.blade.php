<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Home | Hotline</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hotline is the perfect WHMCS HTML template for your Hosting Business">
    <meta name="keywords" content="Web hosting, WHMCS template, hosting template">
    <meta name="author" content=“DesigningMedia”>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/style.css" type="text/css">
    <link rel="stylesheet" href="/css/responsive.css" type="text/css">
    <link rel="stylesheet" href="/css/custom-style.css" type="text/css">
    <link rel="stylesheet" href="/css/special-classes.css" type="text/css">
</head>
<body>

<div class="banner-section-outer">
<!-- MAIN HEADER -->
    <header class="header">
    <div class="main-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a class="navbar-brand" href="index.html">
                        <figure class="navbar-logo mb-0">
                        <img class="img-fluid" src="images/logo.png" alt="Je n'est pas vu d'image">
                        </figure>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item active">
                            <a class="nav-link scroll" href="index.html">Accueil</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link scroll" href="about.html">About</a>
                        </li> --}}
                        <li class="nav-item">
                            @guest
                                <a class="nav-link scroll" href="{{url('login')}}">Mes Demandes</a>
                            @else
                                <a class="nav-link scroll" href="demande">Mes Demandes</a>
                            @endguest
                        </li>

                        {{-- <li class="nav-item">
                            <a class="nav-link scroll" href="contact.html">Contact</a>
                        </li> --}}

                    </ul>
                    <div class="login-outer-div">
                        <ul class="login-listing m-0 p-0">
                            @guest
                                @if (Route::has('login'))
                                <li class="list-unstyled d-lg-inline-block"><a class="nav-link scroll" href="{{ route('login') }}">Connexion</a></li>
                                @endif

                                @if (Route::has('register'))
                                <li class="list-unstyled d-lg-inline-block"><a class="nav-link scroll sign-up" href="{{ route('register') }}">S'Inscire</a></li>
                                @endif

                            @else
                            <div class="login-outer-div">
                                <ul class="login-listing m-0 p-0">

                                    <li class="list-unstyled d-lg-inline-block">
                                        <a id="navbarDropdown" class="nav-link "  role="button"   aria-expanded="false" v-pre>
                                            {{ Auth::user()->prenom }} {{ Auth::user()->nom }}
                                        </a>

                                    </li>
                                    <li class="list-unstyled d-lg-inline-block">
                                        <a class="nav-link scroll sign-up" href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">Deconnexion</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            @endguest
                            {{-- <li class="list-unstyled d-lg-inline-block"><a class="nav-link scroll" href="/login">Connexion</a></li> --}}
                            {{-- <li class="list-unstyled d-lg-inline-block"><a class="nav-link scroll sign-up" href="/ins">S'Inscire</a></li> --}}
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- BANNER -->

<section class="home-banner-section overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 text-md-left text-center">
                <div class="home-banner-text-setting wow slideInLeft" data-wow-duration="2s">
                    <div class="home-banner-text">
                        <h1 class="text-white mb-lg-4 mb-3">Assistancia à votre service!!!</h1>
                        <p class="text-white">Ici vous avez la possibilité de faire vos demande en tout facilité.</p>
                    </div>
                    <div class="home-banner-button list-inline">
                        <div class="free-outer list-inline-item">
                            @guest
                                <a href="{{url('login')}}" class="free hover-effect">Faire une Demande</a>

                            @else
                               <a href="faireDemande" class="free hover-effect">Faire une Demande</a>
                            @endguest

                        </div>

                    </div>
                </div>
                </div>
            <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                <div class="banner-img-content position-relative">

                    <figure class="banner-arrow-img mb-0 position-absolute wow slideInRight" data-wow-duration="2s">
                        <img src="images/banner-arrow-img.png" alt="">
                    </figure>

                    <figure class="banner-img mb-0 position-relative">
                        <img src="images/home-banner-img.png" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<!-- TEAMS SECTION -->
<section class="teams-section teams-page-team-section position-relative">
    <div class="container">
        <div class="row">
            <div class="teams-section-inner text-center position-relative">
                <figure class="contact-form-shape-img-1 mb-0 position-absolute">
                        <img class="img-fluid" src="/images/contact-form-shape-img-1.png" alt="">
                    </figure>
                <h2 class="mb-lg-4 mb-md-3 mb-2">Les membres de l'équipe!</h2>
                <p class="mb-0">Chaque personne à assurer une tache bien précise et contribuer à la parfaite réalisation du projet.</p>
                <figure class="teams-section-shape-img-1 mb-0 position-absolute">
                    <img class="img-fluid" src="/images/team-section-shape-img-1.png" alt="">
                </figure>
            </div>
        </div>
        <div class="row wow fadeInUp" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeInUp;">
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-md-0 mb-4 text-center">
                <div class="teams-section-plan-box">
                    <figure>
                        <img class="img-fluid" src="/images/ousmane.jpg" alt="">
                    </figure>
                    <h4 class="font-weight-bold">Ousmane Sinianta</h4>
                    <span class="d-block">Gérant du FRONT-END</span>
                    <p class="text-size-16">Il s'est chargé de tout ce qui est designe, logo, image, affichage et de l'authentification avec laravel ui</p>
                    <ul class="teams-plan-box-listing p-0 m-0">
                        <li class="list-unstyled d-inline-block"><a class="d-inline-block" href="#"><i class="fab fa-facebook-square"></i></a></li>
                        <li class="list-unstyled d-inline-block"><a class="d-inline-block" href="#"><i class="fab fa-twitter-square"></i></a></li>
                        <li class="list-unstyled d-inline-block"><a class="d-inline-block" href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-md-0 mb-4 text-center">
                <div class="teams-section-plan-box">
                    <figure>
                        <img class="img-fluid" src="/images/thierno.jpg" alt="">
                    </figure>
                    <h4 class="font-weight-bold">Thierno Diédhiou</h4>
                    <span class="d-block">Gestionnaire des migration et des modéle</span>
                    <p class="text-size-16">Il s'est occuper de la base données et les modéle qui sont été fait pour chaque table de la base de données.</p>
                    <ul class="teams-plan-box-listing p-0 m-0">
                        <li class="list-unstyled d-inline-block"><a class="d-inline-block" href="#"><i class="fab fa-facebook-square"></i></a></li>
                        <li class="list-unstyled d-inline-block"><a class="d-inline-block" href="#"><i class="fab fa-twitter-square"></i></a></li>
                        <li class="list-unstyled d-inline-block"><a class="d-inline-block" href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center">
                <div class="teams-section-plan-box">
                    <figure>
                        <img class="img-fluid" src="/images/mamoudou.jpg" alt="">
                    </figure>
                    <h4 class="font-weight-bold">Mamoudou Ndiaye</h4>
                    <span class="d-block">gérant des controleurs et des email</span>
                    <p class="text-size-16">il a bien géneré les controlleur et les email.</p>
                    <ul class="teams-plan-box-listing p-0 m-0">
                        <li class="list-unstyled d-inline-block"><a class="d-inline-block" href="#"><i class="fab fa-facebook-square"></i></a></li>
                        <li class="list-unstyled d-inline-block"><a class="d-inline-block" href="#"><i class="fab fa-twitter-square"></i></a></li>
                        <li class="list-unstyled d-inline-block"><a class="d-inline-block" href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- TALENT SECTION -->

<!-- FOOTER -->
<section class="footer-section">
    <div class="container">
        <div class="row position-relative">
            <div class="col-xl-5 col-lg-4 col-md-5 col-sm-6 text-sm-left text-center">
                <div class="footer-logo-content">
                    <figure class="footer-logo">
                        <img class="img-fluid" src="images/logo.png" alt="">
                    </figure>
                    <p class="text-size-16 mb-lg-4 mb-md-3 mb-3">Assistancia est un site créer par Ousmane Sinianta, Thierno Diedhiou et Mamoudou Ndiaye Pour la gestion des demandes</p>
                    <ul class="footer-logo-content-listing p-0 m-0">
                        <li class="list-unstyled d-inline-block"><a class="d-inline-block" href="#"><i class="fab fa-facebook-square"></i></a></li>
                        <li class="list-unstyled d-inline-block"><a class="d-inline-block" href="#"><i class="fab fa-twitter-square"></i></a></li>
                        <li class="list-unstyled d-inline-block"><a class="d-inline-block" href="#"><i class="fab fa-linkedin"></i></a></li>
                        <li class="list-unstyled d-inline-block"><a class="d-inline-block" href="#"><i class="fab fa-pinterest-square"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 text-sm-left text-center d-sm-block d-none">
                <div class="footer-info-content">
                    <h5 class="font-weight-normal">Contact</h5>
                    <ul class="list-unstyled mb-0">
                        <li><span class="font-weight-bold">Email:</span><a class="text-decoration-none font-weight-normal" href="mailto:info@hotline.com">siniantaousmane@gmail.com</a></li>
                        <li><span class="font-weight-bold">Phone:</span><a class="text-decoration-none font-weight-normal" href="tel:+12345678900"> +221779716997</a></li>
                        <li><span class="font-weight-bold">Address:</span><a class="text-decoration-none font-weight-normal" href="#">Grand-Stranding, thiès</a></li>
                    </ul>
                </div>
            </div>
            <figure class="footer-secrion-shape-img-1 mb-0 position-absolute">
                <img class="img-fluid" src="images/footer-section-shape-img-1.png" alt="">
            </figure>
        </div>
    </div>
</section>
<!-- FOOTER BAR -->
<div class="footer-bar text-center">
    <div class="container">
        <div class="row">
            <div class="footer-bar-content w-100">
                <p class="text-size-16 mb-0">Copyright ©2022 Hotline.com All Rights Reserved</p>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/wow.js"></script>
<script>new WOW().init();</script>
<script src="js/counter-script.js"></script>
</body>
</html>
