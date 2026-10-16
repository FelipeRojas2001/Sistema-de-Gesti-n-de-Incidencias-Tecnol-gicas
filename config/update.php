<?php
require_once __DIR__ . '/../config/conexion.php';

if (!empty($_POST['btnActualizar'])){
    if (!empty($_POST["nombre"]) && !empty($_POST["laboratorio"]) && !empty($_POST["equipo_afectado"]) && !empty($_POST["descripcion"]) && !empty($_POST["prioridad"]) && !empty($_POST["estado"])){
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $laboratorio = $_POST["laboratorio"];
        $equipo_afectado = $_POST["equipo_afectado"];
        $descripcion = $_POST["descripcion"];
        $prioridad = $_POST["prioridad"];
        $estado = $_POST["estado"];

         $sql = $conn->query("UPDATE incidencias SET nombre='$nombre', laboratorio='$laboratorio', equipo_afectado='$equipo_afectado', descripcion='$descripcion', prioridad='$prioridad', estado='$estado' WHERE id = $id");

         if ($sql === TRUE) {
            header("Location: admin.php");
        } else {
            echo "Error al actualizar la incidencia.";
        }
    }
}
?>