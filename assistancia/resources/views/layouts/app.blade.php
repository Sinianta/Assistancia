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
      <!-- Login Form section-->
      <section class="login-form d-flex align-items-center">
            <div class="container">
               <div class="login-form-title text-center">
                  <a href="/">
                  <figure class="login-page-logo">
                     <img src="images/login-page-logo.png" alt="">
                  </figure>
                  </a>
                  <h2 class="text-white">Assistancia vous souhaite le bienvenu!!!</h2>
               </div>

               @yield('formulaire')

            </div>
        </section>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="js/wow.js"></script>
        <script>new WOW().init();</script>
        <script src="js/counter-script.js"></script>
     </body>
  </html>
