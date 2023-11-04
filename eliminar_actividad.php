<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "actividades");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Recibir el ID del registro a eliminar a través de AJAX
$id = $_POST['id'];

// Preparar la consulta para eliminar un registro
$sql = "DELETE FROM Actividades WHERE id = $id";

if ($conexion->query($sql) === TRUE) {
    echo "Actividad eliminada correctamente";
} else {
    echo "Error al eliminar la actividad: " . $conexion->error;
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>