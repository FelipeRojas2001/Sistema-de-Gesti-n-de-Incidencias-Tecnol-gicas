<?php
    require_once __DIR__ . '/../config/conexion.php';

?>

<!DOCTYPE html>
<html lang="es" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incidencias Tecnológicas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
</head>
<body>

<h1 class="text-center p-3">Incidencias Tecnológicas</h1>

<h2>Lista de Incidencias</h2>

<p>Bienvenido como invitado. Puede ver las incidencias registradas.</p>

<a href="invitado.php" class="btn">Actualizar</a>
<form action="POST"></form>

<table class="table p-3">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Laboratorio</th>
            <th>Equipo Afectado</th>
            <th>Descripción</th>
            <th>Prioridad</th>
            <th>Fecha de Creación</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM incidencias";
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['laboratorio'] . "</td>";
            echo "<td>" . $row['equipo_afectado'] . "</td>";
            echo "<td>" . $row['descripcion'] . "</td>";
            echo "<td>" . $row['prioridad'] . "</td>";
            echo "<td>". $row['fecha_creacion'] . "</td>";
            echo "<td>" . $row['estado'] . "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>