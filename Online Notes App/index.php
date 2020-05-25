<?php
session_start();
include('connection.php');
include('logout.php');
include('remember.php');
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- css file  -->
    <link rel="stylesheet" href="style.css">
    <title>Online Notes</title>

    <!-- fonts  -->
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
</head>

<body>
    <!-- navbar -->
    <nav role="navigation" class="navbar navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="" class="navbar-brand">Online Notes</a>
                <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
            </div>
            <div class="navbar-collapse  collapse" id="navbarCollapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Help</a></li>

                    <li><a href="#">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#loginModal" data-toggle="modal">Login</a></li>
                </ul>
            </div>
        </div>

    </nav>

    <!-- jumbotron  -->
    <div class="jumbotron" id="mycontainer">

        <h1>Online Notes App</h1>
        <p>Your notes with you wherever you go.</p>
        <p>Easy to use, protects all your notes!</p>
        <button type="button" class="btn btn-lg color signup" data-target="#signupModal" data-toggle="modal">Sign up-It's free</button>
    </div>

    <!-- footer  -->
    <div class="footer">
        <div class="container">
            <p>Created by Prasad Vallabhaneni &copy; <?php $today = date("Y");
                                                        echo $today ?>.</p>
        </div>
    </div>

    <!-- signup form  -->
    <form method="post" id="signupform">
        <div class="modal" id="signupModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">
                            &times;
                        </button>
                        <h4 id="myModalLabel">
                            Sign up today and Start using our Online Notes App!
                    </div>
                    <div class="modal-body">
                        <div id="signupmessage"></div>
                        <div class="form-group">
                            <label for="username" class="sr-only">Username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Username" maxlength="30">
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" maxlength="50">
                        </div>
                        <div class="form-group">
                            <label for="password" class="sr-only">Password:</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="choose a password" maxlength="30">
                        </div>
                        <div class="form-group">
                            <label for="password2" class="sr-only">Confirm password</label>
                            <input type="password" name="password2" id="password2" class="form-control" placeholder="confirm password" maxlength="30">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success" name="signup" value="Sign up">
                        <button type="button" class="btn btn-default" data-dismiss="modal"> Cancel
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- login form  -->
    <form method="post" id="loginform">
        <div class="modal" id="loginModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">
                            &times;
                        </button>
                        <h4 id="myModalLabel">
                            Login:
                    </div>
                    <div class="modal-body">
                        <div id="loginmessage"></div>

                        <div class="form-group">
                            <label for="loginemail" class="sr-only">Email</label>
                            <input type="email" name="loginemail" id="loginemail" class="form-control" placeholder="Email" maxlength="50">
                        </div>
                        <div class="form-group">
                            <label for="loginpassword" class="sr-only">Password:</label>
                            <input type="password" name="loginpassword" id="loginpassword" class="form-control" placeholder="Password" maxlength="30">
                        </div>
                        <div class="checkbox">
                            <!-- <label>
                                <input type="checkbox" name="rememberme" id="rememberme">
                                Remember me
                            </label> -->
                            <a class="pull-right" style="cursor:pointer" data-toggle="modal" data-dismiss="modal" data-target="#forgotpasswordModal">Forgot Password?</a>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success" name="login" value="Log in">
                        <button type="button" class="btn btn-default" data-dismiss="modal"> Cancel
                        </button>
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal" data-toggle="modal" data-target="#signupModal"> Register
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- forgot password form -->
    <form method="post" id="forgotpasswordform">
        <div class="modal" id="forgotpasswordModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">
                            &times;
                        </button>
                        <h4 id="myModalLabel">
                            Forgot Password? Enter your email address:
                    </div>
                    <div class="modal-body">
                        <div id="forgotpasswordmessage"></div>

                        <div class="form-group">
                            <label for="forgotemail" class="sr-only">Email</label>
                            <input type="email" name="forgotemail" id="forgotemail" class="form-control" placeholder="Email" maxlength="50">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success" name="forgotpassword" value="Submit">
                        <button type="button" class="btn btn-default" data-dismiss="modal"> Cancel
                        </button>
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal" data-toggle="modal" data-target="#signupModal"> Register
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </form>












    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="index.js"></script>
</body>

</html>