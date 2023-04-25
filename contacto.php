<?php
include 'config/conexion.php';

if (isset($_POST['contact'])) {
    if (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['message']) >= 1
    ) {

        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $message = trim($_POST['message']);
        $fecha = date("d/m/y");

        $consulta = "INSERT INTO datos(nombre, email, telefono, mensaje, fecha)
        VALUES ('$name', '$email', '$phone', '$message', '$fecha')";

        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {
?>
            <h6 class="success">Mensaje enviado con exito</h6>
        <?php
        } else {
        ?>
            <h6 class="error">Ocurrio un error</h6>
        <?php
        }
    } else {
        ?><h6>LLena todos los campos</h6><?php
                                        }
                                    }
