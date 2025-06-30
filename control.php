<?php

$usuario = $_POST['usuario'];
$password = $_POST['password'];

//echo "El nombre es: $usuario y la contraseña es: $password";

include ("conexion.php");
$link=Conectarse();

//Consulta a la base de datos
$result = mysqli_query($link,"SELECT count(*) FROM clientes WHERE correo = '$usuario' AND clave = '$password'");
// verifica si hay un usuario registrado 
$row = mysqli_fetch_array($result);
if($row[0] > 0){
    session_start();
        $consulta = "SELECT * FROM clientes WHERE correo = '$usuario'"; // Obtener informació de Usuario registrado
        $resultado = mysqli_query($link, $consulta);
        $_SESSION["autentificacion"] = "SI";
        $datos_cliente = mysqli_fetch_assoc($resultado);
        $_SESSION['nombre'] = $datos_cliente['nombre'];
        $_SESSION['correo'] = $datos_cliente['correo'];
        $_SESSION['youtube'] = $datos_cliente['youtube'];
        $_SESSION['instagram'] = $datos_cliente['instagram'];
        $_SESSION['tiktok'] = $datos_cliente['tiktok'];
        $_SESSION['calendario'] = $datos_cliente['calendario'];
        $_SESSION['estudio_de_mercado'] = $datos_cliente['estudio_de_mercado'];
        $_SESSION['reels'] = $datos_cliente['reels'];
        $_SESSION['reportes'] = $datos_cliente['reportes'];
        $_SESSION["autentificacion"] = "SI";
        header('Location: login.php');
}else{
    
    echo "
    <script language='javascript'>
    localStorage.setItem('errorMessage', 'Usuario incorrecto');
    window.location.href = 'index.php';
    </script>
";
}