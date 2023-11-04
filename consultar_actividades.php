<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "actividades");
$con = mysqli_connect

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Preparar la consulta para obtener todas las actividades
$sql = "SELECT * FROM Actividades";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    $actividades = array(); // Array para almacenar las actividades

    while ($row = $result->fetch_assoc()) {
        $actividades[] = $row; // Agregar cada actividad al array
    }

    // Convertir el array a formato JSON y enviarlo de vuelta
    echo json_encode($actividades);
} else {
    echo "No se encontraron actividades";
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>