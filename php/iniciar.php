<?php
session_start();

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

$stmt = $conexion->prepare('SELECT id, usuario FROM regis WHERE email = ? AND contrasena = ?');
$stmt->bind_param("ss", $email, $con);

$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();

    $_SESSION['id'] = $fila['id'];
    $_SESSION['usuario'] = $fila['usuario'];

    header('Location: ../pages/perfil_admin.php');
    exit;
} else {
    header('Location: ../pages/iniciar.php?error=Correo%20o%20contraseña%20incorrectos.%20Inténtalo%20de%20nuevo.');
    exit;
}

$stmt->close();
$conexion->close();
?>
