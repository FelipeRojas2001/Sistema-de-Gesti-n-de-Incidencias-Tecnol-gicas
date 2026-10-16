<?php
    
    require_once __DIR__ . '/../config/conexion.php';

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incidencias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/583773b0c6.js" crossorigin="anonymous"></script>
</head>
<body>

<h1 class="text-center p-3">Incidencias Tecnológicas</h1>
<p>Bienvenido como administrador. Puede gestionar las incidencias registradas.</p>
<h2>Formulario de administración</h2>

<div class="container-fluid row">

    <form class="col-4" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre del responsable</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <div class="mb-3">
            <label for="fieldSelect" class="form-label">Laboratorio</label>
            <select class="form-control" name="laboratorio" id="fieldSelect">
                <option selected>Elige una opción...</option>
                <option value="Laboratorio A">Laboratorio A</option>
                <option value="Laboratorio B">Laboratorio B</option>
                <option value="Laboratorio C">Laboratorio C</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Equipo afectado</label>
            <input type="text" class="form-control" name="equipo_afectado">
        </div>
        <div class="mb-3">
            <label for="fieldTextarea" class="form-label">Descripción</label>
            <textarea class="form-control" name="descripcion" rows="3"></textarea>
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
        
        <button type="submit" name="btnRegistrar" class="btn-solid theme-primary" value="ok">Registrar incidencia</button>
        <?php
        include "../config/registro.php";
        ?>
        <br>

    </form>

    
    <div class="col-8 p-4">
        <h2 class="">Incidencias Registradas</h2>
        <form action="POST">
        <div class="mb-3">
            <label for="fieldSelect" class="form-label">Buscar por</label>
            <select class="form-control" name="estado" id="fieldSelect">
                <option selected>Elige una opción...</option>
                <option value="1">Laboratorio</option>
                <option value="2">Prioridad</option>
                <option value="3">Estado</option>
            </select>
        </div>
        </form>

        <div class="table-responsive table-card">
    <table class="table table-responsibe">
        <thead>
            <tr class="text-center">
                <th>Id</th>
                <th scope="col">Nombre del responsable</th>
                <th scope="col">Laboratorio</th>
                <th scope="col">Equipo Afectado</th>
                <th scope="col">Descripción</th>
                <th scope="col">Prioridad</th>
                <th scope="col">Fecha de Creación</th>
                <th scope="col">Estado</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql= $conn->query('SELECT * FROM incidencias');
            while ($row = $sql->fetch_object()){
            ?>
            <tr>
                <th scope="row"><?php echo $row->id; ?></th>
                <td><?php echo $row->nombre; ?></td>
                <td><?php echo $row->laboratorio; ?></td>
                <td><?php echo $row->equipo_afectado; ?></td>
                <td><?php echo $row->descripcion; ?></td>
                <td><?php echo $row->prioridad; ?></td>
                <td><?php echo $row->fecha_creacion; ?></td>
                <td><?php echo $row->estado; ?></td>
                <td>
                    <a href="update.php?id=<?php echo $row->id; ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                    <?php
                    include "../config/delete.php";
                    ?>
                    <a onclick="return confirm('Confirme la eliminación del registro')" href="admin.php?id=<?php echo $row->id; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                    
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>


    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
</body>
</html>