<?php

require_once("../config/database.php");

if (isset($_POST['accion'])) {
    switch ($_POST['accion']) {
            //casos de registros
        case 'editar_registro':
            editar_registro();
            break;

        case 'eliminar_registro';
            eliminar_registro();
            break;

    }
}

function editar_registro()
{
    
$conexion = mysqli_connect("localhost", "root", "", "alba");

    extract($_POST);
    $consulta = "UPDATE usuarios SET nombre = '$nombre', correo = '$correo', telefono = '$telefono',
		password ='$password', rol_id = '$rol' WHERE id = '$id' ";

              

mysqli_query($conexion, $consulta);


echo ("<script> window.location='views/tables.php'; </script>");
}

function eliminar_registro()
{

    
$conexion = mysqli_connect("localhost", "root", "", "alba");

    extract($_POST);
    $id = $_POST['id'];
    $consulta = "DELETE FROM usuarios WHERE id= $id";

    

mysqli_query($conexion, $consulta);


echo ("<script> window.location='views/tables.php'; </script>");
}
