<?php
$servidor = "localhost"; 
$usuario = "nombre_usuario"; 
$contrasena = "contraseña";  
$basedatos = "nombre_basedatos";  


$conexion = new mysqli($servidor, $usuario, $contrasena, $basedatos);

// Verificar si hay errores en la conexión
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
} else {
    echo "Conexión exitosa a la base de datos.";
}

$conexion->close();
?>
