<?php
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: ../pages/iniciar.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_comentario = $_POST['id_comentario'];

    // Conexión a la base de datos
    $conexion = new mysqli('localhost', 'root', '', 'admin');

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    $stmt = $conexion->prepare("DELETE FROM comentarios WHERE id = ? AND id_usuario = ?");
    $stmt->bind_param("ii", $id_comentario, $_SESSION['id']);

    if ($stmt->execute()) {
        header("Location: ../pages/services.php");
    } else {
        echo "Error al eliminar comentario: " . $conexion->error;
    }

    $stmt->close();
    $conexion->close();
}
?>
