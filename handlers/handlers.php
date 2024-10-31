<?php
    //incluimos la conexión a la base de datos
    include_once('../config/config.php');
    // Validación del login
    if (isset($_POST['login'])) {
        echo "Datos de asceso recibidos";
    // Validación del registro
    }elseif (isset($_POST['register'])) {
        // Variables del formulario
        $username = $_POST['username'];
        $name = $_POST['name'];
        $photo = $_POST['photo'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        // Redirreción en caso de que no se enviaran datos
    }else{
        header('location: ../index.php');
        exit;
    }
?>