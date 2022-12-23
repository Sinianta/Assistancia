<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('superTitre')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon.png">
    <link href="../css/style1.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo"><a href="index.html"><b><img src="../images/logo.png" alt=""> </b></a>
            </div>
            <div class="nav-control">
                <div class="hamburger"><span class="line"></span>  <span class="line"></span>  <span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <div class="header-left">
                    <ul>
                        <li class="icons position-relative"><a href="javascript:void(0)"><i class="icon-magnifier f-s-16"></i></a>
                            <div class="drop-down animated bounceInDown">
                                <div class="dropdown-content-body">
                                    <div class="header-search" id="header-search">
                                        <form action="#">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search">
                                                <div class="input-group-append"><span class="input-group-text"><i class="icon-magnifier"></i></span>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="header-right">
                    <ul>

                        <li class="icons">
                            <a href="javascript:void(0)" class="log-user">
                                <img src="images/avatar/1.jpg" alt=""> <span>{{ Auth::user()->prenom }} {{ Auth::user()->nom }}</span>  <i class="fa fa-caret-down f-s-14" aria-hidden="true"></i>
                            </a>
                            <div class="drop-down dropdown-profile animated bounceInDown">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a class="nav-link scroll sign-up" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">Deconnexion</a>
                                           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                               @csrf
                                           </form>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Tableau de bord</li>
                    <li class="mega-menu mega-menu-lg">
                        <a class="has-arrow" href="/ajoutAdmin" aria-expanded="false">
                            <i class="mdi mdi-view-dashboard"></i><span class="nav-text">Ajouter un admin</span>
                        </a>

                    </li>
                    <li class="mega-menu mega-menu-lg">
                        <a class="has-arrow" href="/connexion" aria-expanded="false">
                            <i class="mdi mdi-view-dashboard"></i><span class="nav-text">Liste des admin</span>
                        </a>

                    </li>
                    <li class="mega-menu mega-menu-lg">
                        <a class="has-arrow" href="/super" aria-expanded="false">
                            <i class="mdi mdi-view-dashboard"></i><span class="nav-text">Demandes</span>
                        </a>

                    </li>


                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col p-md-0">
                        <h4>Super_Utilisateur</h4>
                    </div>

                </div>
                <div class="row" id="dragdrop">
                    <div class="col-md-4 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-two">
                                    <div class="media">
                                        <div class="media-body">
                                            <h2 class="mt-0 mb-1 text-info">@yield('demandeAttente')</h2><span class="">Demandes En attentes:</span>
                                        </div>
                                        <img class="ml-3" src="images/icons/1.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="dragdrop">
                        <div class="col-md-4 col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="stat-widget-two">
                                        <div class="media">
                                            <div class="media-body">
                                                <h2 class="mt-0 mb-1 text-info">@yield('demandeCour')</h2><span class="">En cour de traitement:</span>
                                            </div>
                                            <img class="ml-3" src="images/icons/1.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <div class="row" id="dragdrop">
                    <div class="col-md-4 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-two">
                                    <div class="media">
                                        <div class="media-body">
                                            <h2 class="mt-0 mb-1 text-info">@yield('demandeTr')</h2><span class="">Demandes Traiter:</span>
                                        </div>
                                        <img class="ml-3" src="images/icons/1.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-two">
                                    <div class="media">
                                        <div class="media-body">
                                            <h2 class="mt-0 mb-1 text-danger">@yield('demandeRe')</h2><span class="">Demandes rejéter</span>
                                        </div>
                                        <img class="ml-3" src="images/icons/2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                @yield('super_contenue')

            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
                <div class="footer">
                    <div class="copyright">
                        <p>Copyright &copy; Designed by <a href="https://themeforest.net/user/digitalheaps">Digitalheaps</a>, Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
                    </div>
                </div>
                <!--**********************************
                    Footer end
                ***********************************-->
            </div>
            <!--**********************************
                Main wrapper end
            ***********************************-->

            <!--**********************************
                Scripts
            ***********************************-->
            <script src="plugins/common/common.min.js"></script>
            <script src="../js/custom.min.js"></script>
            <script src="../js/settings.js"></script>
            <script src="../js/gleek.js"></script>
            <script src="../js/styleSwitcher.js"></script>

            <!-- Chartjs chart -->
            <script src="plugins/chart.js/Chart.bundle.min.js"></script>
            <script src="plugins/d3v3/index.js"></script>
            <script src="plugins/topojson/topojson.min.js"></script>
            <script src="plugins/datamaps/datamaps.world.min.js"></script>

            <script src="../js/plugins-init/datamap-world-init.js"></script>

            <script src="plugins/datamaps/datamaps.usa.min.js"></script>

            <script src="../js/dashboard/dashboard-1.js"></script>

            <script src="../js/plugins-init/datamap-usa-init.js"></script>
        </body>
        </html>
