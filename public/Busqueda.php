<?php
include "Conexion.php";

function obtenerRutasDisponibles($lugar_inicio, $lugar_final, $conexion) {

    $stmt = $conexion ->prepare("CALL busqueda_combis(?,?)")
    $stmt -> bind_param("ss", $lugar_inicio, $lugar_final);
    $stmt -> execute();

    $resultado = $stmt->get_result();

    if ($resultado->num_rows>0) {

        echo"<table>";
        echo "<tr><th> Nombre de la Ruta <tr><th>";
        while ($fila= $resultado->fetch_assoc()) {
            echo "<tr><th>" .$fila["Ruta"] . "<tr><th>";
        }
        echo"<table>";
    } else {
        echo "No hay rutas disponibles"
    }
    $stmt->close();
    $resultado->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $lugar_inicio = $_POST["lugar_inicio"];
    $lugar_final = $_POST["lugar_final"];
}

$conexion->close();

//Llamar la funcin 
obtenerRutasDisponibles($lugar_inicio, $lugar_final, $conexion);


?>