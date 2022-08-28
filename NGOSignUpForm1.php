<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sign Up For NGO</title>
        <!-- Font Icon -->
        <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
        <!-- Main css -->
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
        <link rel="stylesheet" href="style1.css">
    </head>
    <body>
        <div class="main">
            <section class="signup">
                <!-- <img src="images/signup-bg.jpg" alt=""> -->
                <div class="container">
                    <div class="signup-content">
                        <form method="POST" id="signup-form" class="signup-form" action="NGOSignup.php">
                            <h2 class="form-title">NGO Signup</h2>
                            <div class="form-group">
                                <input type="text" name="NGOName" class="form-control" placeholder="NGO Name" pattern="^[A-Za-z.\s_-]+$" title="Name should only contain letters. e.g. john" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" name="NGOEmail" class="form-control" placeholder="NGO Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="password" name="NGOPassword" class="form-control" placeholder="NGO Password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Password Should Be UpperCase, LowerCase, Number/SpecialChar and min 8 Chars" required="required"/>
                            </div>
                            <div class="form-group">
                                <input type="number" name="NGOContact" class="form-control" placeholder="NGO Contact" size="10" pattern="^\d{10}$" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="number" name="VolunterNo" class="form-control" placeholder="Number Of Volunteers" pattern='^[0-9]$' required="required" />
                            </div>
                            <div class="form-group offset-5">
                                <input type="submit" name="Submit" value="Sign Up" class="btn btn-warning py-2 px-4 btn1">
                            </div>
                            <p class="loginhere">
                                Have already an account ? <a href="NGOLoginForm.php" class="loginhere-link">Login here</a>
                            </p>
                        </form>
                    </div>
                </div>
            </section>
        </div>
        </body>
    </html>