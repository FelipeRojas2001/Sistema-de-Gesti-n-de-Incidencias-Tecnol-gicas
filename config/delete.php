<?php

require_once __DIR__ ."/conexion.php";

if (!empty($_GET['id'])){
    $id = $_GET['id'];
    $sql = $conn->query ("DELETE FROM incidencias WHERE id = $id");
    if ($sql === false) {
        echo "Error al eliminar la incidencia.";
    } else {
        header("Location: ../pages/admin.php");
    }
}
?>