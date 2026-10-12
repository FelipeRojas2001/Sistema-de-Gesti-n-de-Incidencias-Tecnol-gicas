<?php
if(isset($_POST["btnLogin"])) {
    $txtEmail = $_POST["email"];
    $txtPassword = $_POST["password"];

    include "conexion.php";

    $sql="SELECT * FROM usuarios WHERE email = '$txtEmail' AND password = '$txtPassword'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        session_start();
        $_SESSION['admin'] = true;
        header("Location: admin.php");
        exit();
    }
}
header("Location: login.php");