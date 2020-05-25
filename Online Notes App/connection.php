<?php
$link = mysqli_connect("localhost", "prasadva_OnlineNotesApp", "onlinenotesapp", "prasadva_OnlineNotesApp");

if (mysqli_connect_error()) {
    die("ERROR: Unable to connect:" . mysqli_connect_error());
}
