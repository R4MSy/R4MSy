<?php
include 'db_connect.php';

// Verificar si se ha enviado el formulario de actualización
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $table = $_POST['table'];
    $id = $_POST['id'];
    $column = $_POST['column'];
    $value = $_POST['value'];

    // Actualizar el registro en la base de datos
    $sql = "UPDATE $table SET $column='$value' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado exitosamente";
    } else {
        echo "Error actualizando el registro: " . $conn->error;
    }

    // Redirigir de vuelta al panel de administración
    echo "<script>window.location.href = 'admin_dashboard.php';</script>";
}

$conn->close();
?>
