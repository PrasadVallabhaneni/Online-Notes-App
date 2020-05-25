<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("location:index.php");
}
include('connection.php');

$user_id = $_SESSION['user_id'];

//get username and email
$sql = "SELECT * FROM Users WHERE user_id='$user_id'";
$result = mysqli_query($link, $sql);

$count = mysqli_num_rows($result);

if ($count == 1) {
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $username = $row['username'];
    $email = $row['email'];
} else {
    echo "There was an error retrieving the username and email from the database";
}
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
    <title>Profile</title>

    <!-- fonts  -->
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">

    <style>
        #container {
            margin-top: 120px
        }

        #allNotes,
        #done,
        #notepad {
            display: none
        }

        .buttons {
            margin-bottom: 20px
        }

        #notepad {
            user-select: none;
        }

        textarea {
            width: 100%;
            max-width: 100%;
            min-width: 100%;
            /* background: url(images/bck1.png) no-repeat center center; */
            background-color: #4A4A4A;
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: 1px solid white;
            line-height: 1.5em;
            color: white;
            font-size: 16px;
            padding: 10px;

            box-shadow: 3px 4px 3px 2px rgba(5, 5, 5, 0.295);

        }

        h2 {
            color: whitesmoke
        }

        tr {
            cursor: pointer
        }

        .table-responsive {
            margin-top: 30px;
            color: whitesmoke
        }

        tr:hover {
            color: black;
        }
    </style>
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
                    <li class="active"><a href="#">Profile</a></li>
                    <li><a href="#">Help</a></li>

                    <li><a href="#">Contact</a></li>
                    <li><a href="mainpagelogin.php">My Notes</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><b><?php echo $username ?></b></a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </div>
        </div>

    </nav>

    <!-- Container  -->
    <div class="container" id="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">

                <h2>General Account Settings:</h2>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <tr data-target="#updateusername" data-toggle="modal">
                            <td>Username</td>
                            <td><?php echo $username ?></td>
                        </tr>
                        <tr data-target="#updateemail" data-toggle="modal">
                            <td>Email</td>
                            <td>value</td>
                        </tr>
                        <tr data-target="#updatepassword" data-toggle="modal">
                            <td>Password</td>
                            <td>**********</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- footer  -->
    <div class="footer">
        <div class="container">
            <p>Created by Prasad Vallabhaneni &copy; <?php $today = date("Y");
                                                        echo $today ?>.</p>
        </div>
    </div>


    <!-- update username  -->
    <form method="post" id="updateusernameform">
        <div class="modal" id="updateusername" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">
                            &times;
                        </button>
                        <h4 id="myModalLabel">
                            Edit Username:
                    </div>
                    <div class="modal-body">
                        <div id="updateusernamemessage"></div>

                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" name="username" id="username" class="form-control" maxlength="30" value="<?php echo $username ?>">
                        </div>



                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success" name="updateusername" value="Submit">
                        <button type="button" class="btn btn-default" data-dismiss="modal"> Cancel
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </form>


    <!-- update email  -->
    <form method="post" id="updateemailform">
        <div class="modal" id="updateemail" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">
                            &times;
                        </button>
                        <h4 id="myModalLabel">
                            Enter new email:
                    </div>
                    <div class="modal-body">
                        <div id="loginmessage"></div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" class="form-control" maxlength="50" value="email value">
                        </div>



                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success" name="updateusername" value="Submit">
                        <button type="button" class="btn btn-default" data-dismiss="modal"> Cancel
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- update password  -->
    <form method="post" id="updatepasswordform">
        <div class="modal" id="updatepassword" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">
                            &times;
                        </button>
                        <h4 id="myModalLabel">
                            Enter current and new password:
                    </div>
                    <div class="modal-body">
                        <div id="updatepasswordmessage"></div>

                        <div class="form-group">
                            <label for="currentpassword" class="sr-only">Your current password:</label>
                            <input type="password" name="currentpassword" id="currentpassword" class="form-control" maxlength="30" placeholder="Your current password">
                        </div>
                        <div class="form-group">
                            <label for="password" class="sr-only">Choose a password:</label>
                            <input type="password" name="password" id="password" class="form-control" maxlength="30" placeholder="Choose a password">
                        </div>
                        <div class="form-group">
                            <label for="password2" class="sr-only">Confirm password:</label>
                            <input type="password" name="password2" id="password2" class="form-control" maxlength="30" placeholder="Confirm password">
                        </div>




                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success" name="updateusername" value="Submit">
                        <button type="button" class="btn btn-default" data-dismiss="modal"> Cancel
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
    <script src="profile.js"></script>
</body>

</html>