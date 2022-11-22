<?php
session_start();
include 'conexion.php';
$usuario=$_POST['usuario'];
$pass=$_POST['pass'];

 $sql = "SELECT usuariosautorizados.nombreusuario FROM usuariosautorizados WHERE usuariosautorizados='$usuario' and claveusuario='$pass'";
$result = mysqli_query($conex, $sql);
if (mysqli_num_rows($result) == 0) {

 include('index.php');
 echo "Error usuario y clave no válidos!!!<BR>";
 echo "Intente nuevamente!!!";
}
else {
$fila=mysqli_fetch_assoc($result);
$_SESSION['usuariosautorizados']=$fila['nombreusuario'];
header('location: principal.php');
}
?>
