<?php
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: ../pages/iniciar.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comentario = trim($_POST['comentario']);
    $id_usuario = $_SESSION['id'];

    // Conexión a la base de datos
    $conexion = new mysqli('localhost', 'root', '', 'admin');

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    $stmt = $conexion->prepare("INSERT INTO comentarios (comentario, id_usuario, fecha) VALUES (?, ?, NOW())");
    $stmt->bind_param("si", $comentario, $id_usuario);

    if ($stmt->execute()) {
        header("Location: ../pages/services.php");
    } else {
        echo "Error al agregar comentario: " . $conexion->error;
    }

    $stmt->close();
    $conexion->close();
}
?>
