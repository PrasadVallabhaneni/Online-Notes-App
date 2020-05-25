<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("location:index.php");
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
    <title>My Notes</title>

    <!-- fonts  -->
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">

    <style>
        #container {
            margin-top: 100px
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
        .noteheader{
            border: 1px solid grey;
            border-radius: 10px;
            margin-bottom: 10px;
            cursor: pointer;
            padding: 0 10px;
            background: linear-gradient(#FFFFFF,#ECEAE7);
        
        }
        .text{
            font-size: 20px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
        .timetext{
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis
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
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="#">Help</a></li>

                    <li><a href="#">Contact</a></li>
                    <li class="active"><a href="#">My Notes</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><b><?php echo $_SESSION['username'] ?></b></a></li>
                    <li><a href="index.php?logout=1">Logout</a></li>
                </ul>
            </div>
        </div>

    </nav>

    <!-- Container  -->
    <div class="container" id="container">
    <!-- alert message  -->
        <div id="alert" class="alert alert-danger collapse">
        <a class="close" data-dismiss="alert">
        &times;
        </a><p id="alertContent"></p></div>
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <div class="buttons">
                    <button id="addnote" type="button" class="btn color btn-lg">Add Note</button>
                    <button id="edit" type="button" class="btn color btn-lg pull-right">Edit</button>
                    <button id="done" type="button" class="btn color btn-lg pull-right">Done</button>
                    <button id="allNotes" type="button" class="btn color btn-lg">All Notes</button>
                </div>
                <div id="notepad">
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
                <div id="notes" class="notes"></div>
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








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="mynotes.js"></script>
</body>

</html>