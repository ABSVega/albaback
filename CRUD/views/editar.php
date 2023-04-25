<?php 


session_start();

$_SESSION['usuario'];

if (!isset($_SESSION['usuario']['rol_id'])) {
    echo ("<script> window.location='../../login.php';</script>");
} else {
    if ($_SESSION['usuario']['rol_id'] != 1) {
        //echo ("<script> window.location='../../login.php';</script>");
        echo ("<script> aaaaaaaaaaaa</script>");
    }
}

$id=$_SESSION['usuario']['id'];

/*
$conexion = mysqli_connect("localhost", "root", "", "alba");
$consulta = "SELECT * FROM usuarios WHERE id = $id";
$resultado = mysqli_query($conexion, $consulta);
$usuario = mysqli_fetch_assoc($resultado); */

?>
<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>


    <link rel="stylesheet" href="../vendor/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/es.css">
</head>

<body id="page-top">
    <form action="../function.php" method="POST">
        <div id="login">
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <br>
                            <br>
                            <h3 class="text-center">Editar usuario</h3>
                            <div class="form-group">
                                <label for="nombre" class="form-label">Nombre *</label>
                                <input type="text" id="nombre" name="nombre" class="form-control" value="<?php echo $_SESSION['usuario']['nombre']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="username">Correo:</label><br>
                                <input type="email" name="correo" id="correo" class="form-control" placeholder="" value="<?php echo $_SESSION['usuario']['correo']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="telefono" class="form-label">Telefono *</label>
                                <input type="tel" id="telefono" name="telefono" class="form-control" value="<?php echo $_SESSION['usuario']['telefono']; ?>" required>

                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña:</label><br>
                                <input type="password" name="password" id="password" class="form-control" value="<?php echo $_SESSION['usuario']['password']; ?>" required>

                            </div>

                            <div class="form-group">
                                <label for="rol" class="form-label">Rol de usuario *</label>
                                <input type="number" id="rol" name="rol" class="form-control" placeholder="Escribe el rol, 1 admin, 2 secretaria o 3 usuario.." value="<?php echo $_SESSION['usuario']['rol_id']; ?>" required>
                                <input type="hidden" name="accion" value="editar_registro">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                            </div>

                            <br>
                            <div class="mb-3">

                                <button type="submit" class="btn btn-success">Editar</button>
                                <a href="tables.php" class="btn btn-danger">Cancelar</a>

                            </div>
                        </div>
                    </div>
    </form>
</body>

</html>