<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Signin</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
        <!--<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">-->
        <link href="style.css" rel="stylesheet">

        <script src="../assets/js/ie-emulation-modes-warning.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-login">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-6">
                                    <a href="#" class="active" id="login-form-link">Login</a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="#" id="register-form-link">Register</a>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form id="login-form" action="login.php" method="post" role="form" style="display: block;">
                                        <div class="form-group">
                                            <?php
                                            if (isset($_GET['error']) && $_GET['error'] == "invalidlogindata")
                                                echo "<p style='color: red; font-size: 2;'>*Invalid login data!</p>";
                                            else if (isset($_GET['error']) && $_GET['error'] == "activateaccount")
                                                echo"<p style='color: green; font-size: 2;'>*Verify your email for activation link!</p>";
                                            ?>
                                            <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Login">

                                                    <br><br>
                                                    <a href="../map/index.php" class="form-control btn btn-login">Enter as Guest</a>
                                                    <!-- <input type="button" name="login-guest" id="login-guest" tabindex="4" class="form-control btn btn-login" value="Enter as Guest"> -->

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="text-center">
                                                        <!--  <a data-target="#myModal" tabindex="5" name="forgotpw" class="forgot-password">Forgot Password?</a>-->
                                                        <a class="btn btn-secundary" data-toggle="modal" data-target="#myModal" data-whatever="@getbootstrap" name="forgotpw">Forgot Password?</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>


                                    <form id="register-form" action="signin.php" method="post" role="form" style="display: none;">
                                        <div class="form-group">
                                            <?php
                                            if (isset($_GET['error']) && $_GET['error'] == "usernamealreadyexists")
                                                echo "<p style='color: red; font-size: 2;'>*Username already exists!</p>";
                                            ?>
                                            <input type="text" name="username2" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                        </div>
                                        <div class="form-group">
                                            <?php
                                            if (isset($_GET['error']) && $_GET['error'] == "emailalreadyexists")
                                                echo "<p style='color: red; font-size: 2;'>*Email already exists!</p>";
                                            ?>
                                            <div class="form-group">
                                                <input type="text" name="fname" id="fname" tabindex="1" class="form-control" placeholder="First Name" value="">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="lname" id="lname" tabindex="1" class="form-control" placeholder="Last Name" value="">
                                            </div>
                                            <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">

                                        </div>
                                        <div class="form-group">
                                            <?php
                                            if (isset($_GET['error']) && $_GET['error'] == "passwordsdontmatch")
                                                echo "<p style='color: red; font-size: 2;'>*Passwords do not match!</p>";
                                            ?>
                                            <input type="password" name="password2" id="password" tabindex="2" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel">Insert your email to get a new password</h4>
                    </div>
                    <div class="modal-body">
                        <form action="login.php" method="POST">
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">Email:</label>
                                <input type="text" name="forgot" class="form-control" id="recipient-name"><br><br>
                                <button name="confirm" type="submit" class="btn btn-primary">Confirm</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                    <!--<div class="modal-footer">
                        <form action="forgotpassword.php" method="POST">
                            
                        </form>
                    </div>-->
                </div>
            </div>
        </div>
        <script>
            $(function () {

                $('#login-form-link').click(function (e) {
                    $("#login-form").delay(100).fadeIn(100);
                    $("#register-form").fadeOut(100);
                    $('#register-form-link').removeClass('active');
                    $(this).addClass('active');
                    e.preventDefault();
                });
                $('#register-form-link').click(function (e) {
                    $("#register-form").delay(100).fadeIn(100);
                    $("#login-form").fadeOut(100);
                    $('#login-form-link').removeClass('active');
                    $(this).addClass('active');
                    e.preventDefault();
                });

            });
        </script>
    </body>
</html>

