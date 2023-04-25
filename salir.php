<?php
//Iniciar sesion
session_start();
//Destruye las sesiones iniciadas
session_destroy();
//Rediracciona al login


echo ("<script> window.location='login.php'; </script>");

?>
