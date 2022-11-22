<?php
session_start();
if ($_SESSION['usuario']!=""){
 echo "Bienvenid@!!! ".$_SESSION['usuario']."<BR><a
href='Salir.php'>Cerrar Sesión</a>";
}else{
 header('location: index.php');
}

?>
