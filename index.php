<!DOCTYPE html>
<html lang="es" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
</head>
<body>

    <h1 class="p-4">Iniciar sesión</h1>    
    <form action="login_auth.php" method="POST" class="col-3 p-4">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
    </div>
    <input type="submit" name="btnLogin" class="btn-solid theme-primary" value="Iniciar sesión">
    <button type="button" onclick="location.href='pages/invitado.php'" class="btn-solid theme-primary">Iniciar como invitado</button>
    </form>

</body>
</html>
