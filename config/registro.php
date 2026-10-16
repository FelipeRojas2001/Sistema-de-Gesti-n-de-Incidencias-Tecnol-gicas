<?php

    require_once __DIR__ . "/conexion.php";

    if (!empty($_POST['btnRegistrar'])) {
        if(!empty($_POST['nombre']) and !empty($_POST['laboratorio']) and !empty($_POST['equipo_afectado']) and !empty($_POST['descripcion']) and !empty($_POST['prioridad']) and !empty($_POST['estado'])) {
            $nombre = $_POST['nombre'];
            $laboratorio = $_POST['laboratorio'];
            $equipo_afectado = $_POST['equipo_afectado'];
            $descripcion = $_POST['descripcion'];
            $prioridad = $_POST['prioridad'];
            $estado = $_POST['estado'];

            $sql = "INSERT INTO incidencias (nombre, laboratorio, equipo_afectado, descripcion, prioridad, estado) VALUES ('$nombre', '$laboratorio', '$equipo_afectado', '$descripcion', '$prioridad', '$estado')";
            if (mysqli_query($conn, $sql)) {
                echo "Incidencia registrada correctamente.";
            } else {
                echo "Error al registrar la incidencia: " . mysqli_error($conn);
            }
        } else {
            echo "Por favor, complete todos los campos.";
        }
    }
?>