<html> <!-- conex.php -->
<head> <title>conexion</title> </head>
<body> 
<?php // Conex.php
function Conectarse()
{
if(!$link=mysqli_connect("localhost", "reccreative", "reccreative", "imagen_medica")){
    die('Error Conectando: ' . mysqli_connect_error());
    exit();
}

return $link;
    

}
//$conexion = Conectarse();

//if ($conexion) {
//    echo "Conexión exitosa a la base de datos.";
//} else {
//    echo "Error en la conexión a la base de datos.";
//}

?>
</body>
</html>