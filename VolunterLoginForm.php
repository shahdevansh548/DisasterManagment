<html>
    <head>
        <title> Volunter Login </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">
        <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/ionicons.min.css">
        <link rel="stylesheet" href="css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="css/jquery.timepicker.css">
        
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/icomoon.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-migrate-3.0.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }
        .form-control {
        border-radius : 10px;
        }
        </style>
        }
    </head>
    <body style="background-image: url(images/bg_3.jpg);" class="ftco-section-3 img">
        <section>
            <div class="overlay"></div>
            <div class="container">
                <div class="row d-md-flex">
                    <div class="col-md-4 d-flex">
                        <div class="img" style="background-image: url(images/bg_4.jpg); background-size : 700px 400px; margin : -50px 0 0 -10px;"></div>
                    </div>
                    <div class="col-md-8 volunteer pl-md-9">
                        <h3 class="mb-3 offset-3" style="font-size : 50px;"> Volunter Login </h3>
                        <form name="VolunterForm" method="POST" action="VolunterLogin.php" class="mx-5">
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <input type="email" name="VolunterEmail" class="form-control" placeholder="Volunter Email Address" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="password" name="VolunterPassword" class="form-control" placeholder="Volunter Password" required="required" />
                                </div>
                                <div class="form-group offset-4 mt-5">
                                    <input type="submit" value="Login" class="btn btn-white py-3 px-5">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>