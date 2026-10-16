<?php
    
    require_once __DIR__ . '/../config/conexion.php';


    $id = $_GET['id'];

    $sql = $conn->query("SELECT * FROM incidencias WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Incidencia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/583773b0c6.js" crossorigin="anonymous"></script>
</head>
<body>

<h1 class="text-center p-3">Actualizar Incidencia</h1>

    
<form class="col-4 m-auto" method="POST">

    <?php
    while ($datos=$sql->fetch_object()){?>

        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">

        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre del responsable</label>
        <input type="text" value="<?php echo $datos->nombre; ?>" class="form-control" name="nombre">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Laboratorio</label>
        <input type="text" value="<?php echo $datos->laboratorio; ?>" class="form-control" name="laboratorio">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Equipo afectado</label>
        <input type="text" value="<?php echo $datos->equipo_afectado; ?>" class="form-control" name="equipo_afectado">
    </div>
    <div class="mb-3">
        <label for="fieldTextarea" class="form-label">Descripción</label>
        <textarea class="form-control" name="descripcion" rows="3"><?php echo $datos->descripcion; ?></textarea>
        <div class="form-text">
            Sea específico y claro al describir la incidencia.
        </div>
    </div>
    <div class="mb-3">
        <label for="fieldSelect" class="form-label">Prioridad</label>
        <select class="form-control" name="prioridad" id="fieldSelect">
            <option selected>Elige una opción...</option>
            <option value="1">alta</option>
            <option value="2">media</option>
            <option value="3">baja</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="fieldSelect" class="form-label">Estado</label>
        <select class="form-control" name="estado" id="fieldSelect">
            <option selected>Elige una opción...</option>
            <option value="1">pendiente</option>
            <option value="2">en proceso</option>
            <option value="3">resuelta</option>
        </select>
    </div>
    
    <button type="submit" name="btnActualizar" class="btn-solid theme-primary" value="ok">Actualizar incidencia</button>
    <?php }

    require_once __DIR__ . '/../config/update.php';
    ?>
    
</form>