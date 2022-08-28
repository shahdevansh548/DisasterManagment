<html>
    <head>
        <title> Volunter SignUp</title>
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
                        <form name="VolunterForm" method="POST" action="VolunterSignup.php" class="mx-5">
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <input type="text" name="VolunterName" class="form-control" placeholder="Volunter Name" pattern="[A-Za-z]{1,30}" title="Username should only contain letters. e.g. john" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" name="VolunterEmail" class="form-control" placeholder="Volunter Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="password" name="VolunterPassword" class="form-control" placeholder="Volunter Password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Password Should Be UpperCase, LowerCase, Number/SpecialChar and min 8 Chars" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="number" name="VolunterAge" class="form-control" placeholder="Volunter Age" min="20" max="75" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="VolunterPhone" class="form-control" placeholder="Volunter Phone Number" size="10" pattern="^\d{10}$" required="required" />
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="Position" name="VolunterPosition" required="required">
                                        <option value="Head">Head</option>
                                        <option value="Volunter">Volunter</option>
                                    </select>
                                </div>
                                <div class="form-group offset-4 mt-5">
                                    <input type="submit" value="Sign Up" class="btn btn-white py-3 px-5">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>