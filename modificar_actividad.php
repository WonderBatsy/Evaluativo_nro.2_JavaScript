<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "actividades");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Recibir datos del formulario AJAX
$id = $_POST['id'];
$descripcion = $_POST['descripcion'];
$fecha_inicio = $_POST['fecha_inicio'];
$fecha_fin = $_POST['fecha_fin'];
$responsable = $_POST['responsable'];

// Preparar la consulta para actualizar un registro existente
$sql = "UPDATE Actividades 
        SET descripcion = '$descripcion', fecha_inicio = '$fecha_inicio', fecha_fin = '$fecha_fin', responsable = '$responsable'
        WHERE id = $id";

if ($conexion->query($sql) === TRUE) {
    echo "Actividad modificada correctamente";
} else {
    echo "Error al modificar la actividad: " . $conexion->error;
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>