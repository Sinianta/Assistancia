<!DOCTYPE html>
<html lang="fr">

   <head>
      <title>@yield('title')</title>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Hotline is the perfect WHMCS HTML template for your Hosting Business">
      <meta name="keywords" content="Web hosting, WHMCS template, hosting template">
      <meta name="author" content=“DesigningMedia”>
      <link rel="stylesheet" href="css/animate.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
      <link rel="stylesheet" href="css/style.css" type="text/css">
      <link rel="stylesheet" href="css/responsive.css" type="text/css">
      <link rel="stylesheet" href="css/custom-style.css" type="text/css">
      <link rel="stylesheet" href="css/special-classes.css" type="text/css">
   </head>
   <body>
    <div class="banner-section-outer">
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


                </nav>
            </div>
        </div>
    </header>
      <!-- Login Form section-->
      <section class="login-form d-flex align-items-center">
            <div class="container">
               {{-- <div class="login-form-title text-center">
                  <a href="/">
                  <figure class="login-page-logo">
                     <img src="images/login-page-logo.png" alt="">
                  </figure>
                  </a>

               </div> --}}

               <div class="Bienvenue">
                <ul>
                <li>B</li>
                <li>I</li>
                <li>E</li>
                <li>N</li>
                <li>V</li>
                <li>E</li>
                <li>N</li>
                <li>U</li>
                <li>E</li>
              </ul>
              </div>

              <div class="home-banner-button list-inline">
                <div class="free-outer list-inline-item">
                 @guest
                 @else
                   @if (Auth::user()->priorite== 3)
                       <a href="{{url('connexion')}}" class="free hover-effect">Passer</a>
                    @elseif (Auth::user()->priorite== 1)
                        <a href="{{url('page')}}" class="free hover-effect">Passer</a>
                    @elseif (Auth::user()->priorite== 2)
                        <a href="{{url('/admin')}}" class="free hover-effect">Passer</a>
                @endif
                 @endguest



                </div>

            </div>
            </div>
        </section>

    </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="js/wow.js"></script>
        <script>new WOW().init();</script>
        <script src="js/counter-script.js"></script>
     </body>
  </html>
