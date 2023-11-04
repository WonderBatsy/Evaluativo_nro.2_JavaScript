<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "actividades");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Recibir datos del formulario AJAX
$descripcion = $_POST['descripcion'];
$fecha_inicio = $_POST['fecha_inicio'];
$fecha_fin = $_POST['fecha_fin'];
$responsable = $_POST['responsable'];

// Preparar la consulta para insertar un nuevo registro
$sql = "INSERT INTO Actividades (descripcion, fecha_inicio, fecha_fin, responsable) 
        VALUES ('$descripcion', '$fecha_inicio', '$fecha_fin', '$responsable')";

if ($conexion->query($sql) === TRUE) {
    echo "Actividad creada correctamente";
} else {
    echo "Error al crear la actividad: " . $conexion->error;
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>