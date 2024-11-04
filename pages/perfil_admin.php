<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador - DDCI</title>
    <link rel="icon" href="../imgs/logo_16x16.ico">
    <link rel="icon" href="../imgs/logo_32x32.png">
    <link rel="icon" href="../imgs/logo_48x48.png">
    <link rel="icon" href="../imgs/logo_96x96.png">
    <link rel="icon" href="../imgs/logo_144x144.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/perfil_admin.css">
</head>
<body>
    <?php
    session_start();

    if (!isset($_SESSION['usuario'])) {
        echo "
        <div class='content'>
            <h1>¡Administrador! aún no has iniciado sesión.</h1>
            <p>Por favor, toca <a href='iniciar.php'>aquí</a> para iniciar sesión.</p>
        </div>";
        exit();
    }

    $servidor = 'localhost';
    $usuario = 'root';
    $contrasena = '';
    $basedatos = 'admin';

    $conexion = new mysqli($servidor, $usuario, $contrasena, $basedatos);

    if ($conexion->connect_error) {
        die('Error de conexión: ' . $conexion->connect_error);
    }

    $id_usuario = $_SESSION['id'];
    $sql = "SELECT usuario, email FROM regis WHERE id = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("i", $id_usuario);
    $stmt->execute();
    $stmt->bind_result($usuario, $email);
    $stmt->fetch();
    $stmt->close();
    $conexion->close();
    ?>
    <div class="container">
        <nav class="navegacion">
            <ul class="navegacion__lista">
                <li class="navegacion__li">
                    <a href="../index.html#inicio" class="navegacion__link">Inicio</a>
                </li>
                <li class="navegacion__li">
                    <a href="nosotros.html#sobre_nosotros" class="navegacion__link">Sobre nosotros</a>
                </li>
                <li class="navegacion__li">
                    <a href="services.php#servicios" class="navegacion__link">Servicios</a>
                </li>
                <li class="navegacion__li">
                    <a href="contact.html#contacto" class="navegacion__link">Ayuda</a>
                </li>
            </ul>
            <a href="perfil_admin.php" class="navegacion__link admin-login">
                <img src="../imgs/user.svg" alt="Perfil" class="admin-icon">
            </a>
        </nav>
        <div class="content">
            <h1>Bienvenido al perfil de Administrador</h1>
            <p><strong>Usuario:</strong> <?php echo htmlspecialchars($usuario); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>

            <form action="../php/cerrar_sesion.php" method="post">
                <button type="submit">Cerrar Sesión</button>
            </form>
        </div>
    </div>
</body>
</html>
