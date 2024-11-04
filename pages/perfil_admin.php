<?php
    session_start();
?>

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
    <div class="container">
        <nav class="navegacion">
            <ul class="navegacion__lista">
                <li class="navegacion__li">
                    <a href="../index.php#inicio" class="navegacion__link">Inicio</a>
                </li>
                <li class="navegacion__li">
                    <a href="nosotros.php#sobre_nosotros" class="navegacion__link">Sobre nosotros</a>
                </li>
                <li class="navegacion__li">
                    <a href="services.php#servicios" class="navegacion__link">Servicios</a>
                </li>
                <li class="navegacion__li">
                    <a href="contact.php#contacto" class="navegacion__link">Contacto</a>
                </li>
            </ul>
            <a href="perfil_admin.php" class="admin-login">
                <?php if (isset($_SESSION['usuario'])): ?>
                    <span class="user-name"><?php echo htmlspecialchars($_SESSION['usuario']); ?></span>
                <?php endif; ?>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="admin-icon"><path d="M14 14.252V16.3414C13.3744 16.1203 12.7013 16 12 16C8.68629 16 6 18.6863 6 22H4C4 17.5817 7.58172 14 12 14C12.6906 14 13.3608 14.0875 14 14.252ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11ZM18 17V14H20V17H23V19H20V22H18V19H15V17H18Z"></path></svg>
            </a>
        </nav>
        <div class="content">
            <?php
            if (!isset($_SESSION['usuario'])) {
                echo "
                <h1>¡Administrador! aún no has iniciado sesión.</h1>
                <p>Por favor, toca <a href='iniciar.php'>aquí</a> para iniciar sesión.</p>
                <footer>&copy; 2024 Desarrollo del Conocimiento Institucional (DDCI). Todos los derechos reservados.</footer>";
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
            $sql = "SELECT usuario, email, profesion FROM regis WHERE id = ?";
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param("i", $id_usuario);
            $stmt->execute();
            $stmt->bind_result($usuario, $email, $profesion);
            $stmt->fetch();
            $stmt->close();
            $conexion->close();
            ?>
            
            <h1>Bienvenido al perfil de Administrador</h1>
            <p><strong>Usuario:</strong> <?php echo htmlspecialchars($usuario); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
            <p><strong>Profesión:</strong> <?php echo htmlspecialchars($profesion); ?></p>

            <form action="../php/cerrar_sesion.php" method="post">
                <button type="submit">Cerrar Sesión</button>
            </form>

            <h2>Historial de Comentarios</h2>

<div class="comentarios-lista">
    <?php
    $conexion = new mysqli('localhost', 'root', '', 'admin');
    if ($conexion->connect_error) {
        die('Error de conexión: ' . $conexion->connect_error);
    }

    $id_usuario = $_SESSION['id'];
    $sql = "SELECT comentario, fecha FROM comentarios WHERE id_usuario = ? ORDER BY fecha DESC";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("i", $id_usuario);
    $stmt->execute();
    $stmt->bind_result($comentario, $fecha);

    while ($stmt->fetch()):
    ?>
        <div class="comentario">
            <p><?php echo htmlspecialchars($comentario); ?></p>
            <small><?php echo $fecha; ?></small>
        </div>
    <?php endwhile; ?>
    
    <?php
    $stmt->close();
    $conexion->close();
    ?>
</div>

        </div>
        <footer>&copy; 2024 Desarrollo del Conocimiento Institucional (DDCI). Todos los derechos reservados.</footer>
    </div>
</body>
</html>
