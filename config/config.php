<?php
    $db = mysqli_connect("localhost","root","","login-system");
    if (!$db) {
        die("conexción fallida:" . mysqli_connect_error());
    }
?>