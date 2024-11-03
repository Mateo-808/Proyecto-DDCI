<?php
$servidor = 'localhost';
$usuario = 'root';
$contrasena = '';
$basedatos = 'admin';

$conexion = new mysqli($servidor, $usuario, $contrasena, $basedatos);

if ($conexion->connect_error) {
    die('Error de conexión: ' . $conexion->connect_error);
}

$email = $_POST['email'];
$con = $_POST['contrasena'];

$stmt = $conexion->prepare('SELECT * FROM regis WHERE email = ? AND contrasena = ?');
$stmt->bind_param("ss", $email, $con);

$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    header('Location: ../index.html');
    exit;
} else {
    header('Location: ../pages/iniciar.php?error=Correo%20o%20contraseña%20incorrectos.%20Inténtalo%20de%20nuevo.');
    exit;
}

$stmt->close();
$conexion->close();
?>