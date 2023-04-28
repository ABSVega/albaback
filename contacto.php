<?php
include 'config/conexion.php';

if (isset($_POST['contact'])) {
    if (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['subject']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['message']) >= 1
    ) {

        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $subject = trim($_POST['subject']);
        $phone = trim($_POST['phone']);
        $message = trim($_POST['message']);
        $fecha = date("d/m/y");

        $consulta = "INSERT INTO datos(nombre, email, asunto, telefono, mensaje, fecha)
        VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($conex, $consulta);

        mysqli_stmt_bind_param($stmt, 'ssssss', $name, $email, $subject, $phone, $message, $fecha);

        if (mysqli_stmt_execute($stmt)) {
?>
            <h6 class="success">Mensaje enviado con exito</h6>
        <?php
        } else {
        ?>
            <h6 class="error">Ocurrio un error</h6>
        <?php
        }

        mysqli_stmt_close($stmt);
    } else {
        ?><h6>LLena todos los campos</h6><?php
                                        }
                                    }
