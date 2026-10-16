<?php
session_start();

if(isset($_SESSION['admin'])){
    header("Location: pages/admin.php");
    exit();
}
header("Location: pages/login.php");