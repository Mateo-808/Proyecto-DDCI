<?php
$servidor = 'localhost';
$usuario = 'root';
$contrasena = '';
$basedatos = 'admin';

$conexion = new mysqli($servidor, $usuario, $contrasena, $basedatos);

if ($conexion->connect_error) {
    die('Error de conexión: ' . $conexion->connect_error);
}

$usu = $_POST['usuario'];
$con = $_POST['contrasena'];
$confirmar_contrasena = $_POST['confirmar_contrasena'];

if ($con !== $confirmar_contrasena) {
    header('Location: registrar.php?error=Las%20contraseñas%20no%20coinciden.');
    exit();
}

$stmt = $conexion->prepare('INSERT INTO regis (usuario, contrasena) VALUES (?, ?)');
$stmt->bind_param('ss', $usu, $con);

if ($stmt->execute()) {
    header('Location: ../pages/iniciar.php');
    exit();
} else {
    header('Location: registrar.php?error=Error%20al%20registrar.%20Inténtalo%20de%20nuevo.');
    exit();
}

$stmt->close();
$conexion->close();
?>