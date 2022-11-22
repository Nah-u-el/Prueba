<?php
include('Conexion.php');
//$idcliente=$_POST['idcliente'];

 $fila['Autor']="";
$fila['Titulo']="";
$fila['Editorial']="";
$fila['Origen']="";
$fila['FechaIng']="";
$fila['Procedencia']="";

$sql="select libro.Autor, libro.Titulo, libro.Editorial, libro.Origen, libro.FechaIng, libro.Procedencia  from libro";
    
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
        <th> Autor</th>
        <th>Titulo</th> 
        <th>Editorial</th>
        <th>Origen</th>
        <th>Fecha Ing.</th>
        <th>Procedencia</th>
    </tr>
    </form>
    </div>
    </body>
</html>
<?php

if (mysqli_num_rows($result)==0)
        {
            echo "<tr><td colspan=7>no exite cliente</td></tr>";
     } else {
         while ($fila = mysqli_fetch_assoc($result)) {
       
        echo "
        <td>$fila[Autor]</td>
            <td>$fila[Titulo]</td>
                <td>$fila[Editorial]</td>
                    <td>$fila[Origen]</td>
                        <td>$fila[FechaIng]</td>
                            <td>$fila[Procedencia]</td>
      </tr>";
        };
     }

?>

