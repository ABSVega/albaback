<?php
$conexion = mysqli_connect("localhost", "root", "", "alba");

if (isset($_POST['accion'])) {
    switch ($_POST['accion']) {
        case 'editar_registro':
            editar_registro($conexion);
            break;

        case 'eliminar_registro':
            eliminar_registro($conexion);
            break;

        case 'agregar_registro':
            agregar_usuario($conexion);
            break;

        default:
            // Manejar caso no reconocido
            break;
    }
}

function editar_registro($conexion)
{
    $consulta = "UPDATE usuarios SET nombre = ?, correo = ?, telefono = ?, password = ?, rol_id = ? WHERE id = ?";
    $stmt = mysqli_prepare($conexion, $consulta);
    mysqli_stmt_bind_param($stmt, 'sssisi', $_POST['nombre'], $_POST['correo'], $_POST['telefono'], $_POST['password'], $_POST['rol'], $_POST['id']);
    mysqli_stmt_execute($stmt);

    redirigir('views/tables.php');
}

function eliminar_registro($conexion)
{
    $id = $_POST['id'];
    $consulta = "DELETE FROM usuarios WHERE id = ?";
    $stmt = mysqli_prepare($conexion, $consulta);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);

    redirigir('views/tables.php');
}

function agregar_usuario($conexion)
{
    $consulta = "INSERT INTO usuarios (nombre, correo, telefono, password, fecha, rol_id) VALUES (?, ?, ?, ?, NOW(), ?)";
    $stmt = mysqli_prepare($conexion, $consulta);
    mysqli_stmt_bind_param($stmt, 'ssssi', $_POST['nombre'], $_POST['correo'], $_POST['telefono'], $_POST['password'], $_POST['rol']);
    mysqli_stmt_execute($stmt);

    redirigir('views/tables.php');
}


function redirigir($url)
{
    echo "<script>window.location='$url';</script>";
}
