<?php
include('Conexion.php');
//$idcliente=$_POST['idcliente'];

 $fila['Soporte']="";
$fila['Titulo']="";
$fila['Responsable']="";
$fila['Coleccion']="";
$fila['Duracion']="";
$fila['Color']="";
$fila['MatCompl']="";


$sql="select videos.Soporte, videos.Titulo, videos.Responsable, videos.Coleccion, videos.Duracion, videos.Color, videos.MatCompl from videos";
   // echo $sql;
$result=mysqli_query($conex,$sql);  
 
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="library.css">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <nav>
            <ul>
                <li>
                    <a href="invitado.html">Volver al Inicio</a>
                </li>
            </ul>
        </nav>
        <div>
            <form action="" method="post" class="color">
         <table  class="lib" width="15%" border="1px" align="justify" cellspacing="10">

    <tr align="center">
        <th>Soporte</th>
        <th>Título</th> 
        <th>Responsable</th>
        <th>Colección</th>
        <th>Duración</th>
        <th>Color</th>
        <th>Mat Compl.</th>
        
    </tr>
    </form>
    </div>
    </body>
</html>
<?php

if (mysqli_num_rows($result)==0)
        {
            echo "<tr><td colspan=9>no exite cliente</td></tr>";
     } else {
         while ($fila = mysqli_fetch_assoc($result)) {
       
        echo "
        <td>$fila[Soporte]</td>
            <td>$fila[Titulo]</td>
            <td>$fila[Responsable]</td>
                <td>$fila[Coleccion]</td>
                    <td>$fila[Duracion]</td>
                        <td>$fila[Color]</td>
                            <td>$fila[MatCompl]</td>
                                
      </tr>";
        };
     }

?>

