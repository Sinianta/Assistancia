<!DOCTYPE html>
<html lang="en" class="h-100" id="login-page1">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Assistancia-Traiter</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="css/style1.css" rel="stylesheet">

</head>

<body class="h-100">
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <div class="login-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content login-form">
                        <div class="card">
                            <div class="card-body">
                                <div class="logo text-center">
                                    <a href="/admin">
                                        <img src="images/login-page-logo.png" alt="logo">
                                    </a>
                                </div>
                                <h4 class="text-center mt-4">Traiter ou rejeter la demande</h4>
                                <form class="mt-5 mb-5" action="{{ route('status.update',$demandeEnCour->id) }}" method="POST">
                                    @method('put')
                                    @csrf
                                    <div class="form-group">
                                        <label class="text-label">Reponse</label>
                                        <textarea class="form-control" name="statusDescription" placeholder="description" class="form-control" rows="6"></textarea>
                                    </div>
                                    <div class="form-group" style="display: none">
                                        <input class="form-control" name="demandes_id" value= >
                                    </div>

                                    <?php //if (isset($_POST['rejeter'])):?>

                                        <div class="form-group" style="display: none">
                                            <input class="form-control" name="title" value="Rejetées" >
                                        </div>
                                        <?php //endif;?>

                                    <div class="text-center mb-4 mt-4">
                                        <button type="submit" class="btn btn-primary" name="traiter">traiter</button>
                                        <button type="submit" class="btn btn-primary" name="rejeter" >rejeter</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
    <!-- Common JS -->
    <script src="plugins/common/common.min.js"></script>
    <!-- Custom script -->
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
</body>

</html>
