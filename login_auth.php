<?php

require_once __DIR__ . "/config/conexion.php";

if(isset($_POST["btnLogin"])) {
    $txtEmail = $_POST["email"];
    $txtPassword = $_POST["password"];

    $sql="SELECT * FROM usuarios WHERE email = '$txtEmail' AND password = '$txtPassword'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        session_start();
        $_SESSION['admin'] = true;
        header("Location: pages/admin.php");
        exit();
    }
}
header("Location: pages/login.php");