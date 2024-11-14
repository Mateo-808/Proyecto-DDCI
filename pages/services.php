<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../imgs/logo_16x16.ico">
    <link rel="icon" href="../imgs/logo_32x32.png">
    <link rel="icon" href="../.imgs/logo_48x48.png">
    <link rel="icon" href="../imgs/logo_96x96.png">
    <link rel="icon" href="../imgs/logo_144x144.png">
    <title>Servicios - DDCI</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/services.css">
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
                    <a href="#servicios" class="navegacion__link servicios">Servicios</a>
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
        <header class="encabezado">
            <a href="../index.php">
                <img src="../imgs/logo.png" alt="Logo" class="logo">
            </a>
            <h1>Desarrollo Del Conocimiento Institucional (DDCI)</h1>
            <h2 id="servicios">"Construyendo una comunidad de aprendizaje para el futuro"</h2>
        </header>

        <h2 class="title-body">Servicios</h2>

        <section class="content">
            <article class="article">
                <h3>Educación Integral</h3>
                <p>
                    Ofrecemos un programa integral de educación que abarca desde los grados noveno hasta el undécimo, con un enfoque en la formación académica sólida y preparación para el futuro.
                </p>
            </article>

            <article class="article">
                <h3>Media Técnica</h3>
                <p>
                    Nuestro programa de media técnica en auxiliar en desarrollo de software proporciona a los estudiantes las herramientas necesarias para entrar en el campo tecnológico con habilidades prácticas.
                </p>
            </article>

            <article class="article">
                <h3>Desarrollo de Competencias</h3>
                <p>
                    Enfocamos nuestra enseñanza en el desarrollo de competencias clave como el pensamiento crítico, la resolución de problemas y la comunicación efectiva.
                </p>
            </article>
        </section>

        <section id="comentarios" class="content">
            <h2>Comentarios</h2>

            <?php if (isset($_SESSION['id'])): ?>
                <form action="../php/agregar_comentario.php" method="post">
                    <textarea name="comentario" rows="4" placeholder="Escribe tu comentario aquí..." required></textarea>
                    <button type="submit">Agregar Comentario</button>
                </form>
            <?php else: ?>
                <p>Sólo los administradores pueden hacer comentarios.</p>
            <?php endif; ?>

            <div class="comentarios-lista">
                <?php
                $conexion = new mysqli('localhost', 'root', '', 'admin');
                if ($conexion->connect_error) {
                    die('Error de conexión: ' . $conexion->connect_error);
                }

                $sql = "SELECT comentarios.id, comentarios.comentario, comentarios.fecha, comentarios.id_usuario, regis.usuario
                FROM comentarios
                INNER JOIN regis ON comentarios.id_usuario = regis.id
                ORDER BY comentarios.fecha DESC";

                $resultado = $conexion->query($sql);

                while ($comentario = $resultado->fetch_assoc()):
                ?>
                <div class="comentario">
                    <p><strong><?php echo htmlspecialchars($comentario['usuario']); ?></strong>:</p>

                    <?php if (isset($_POST['editando']) && $_POST['editando'] == $comentario['id']): ?>

                    <form action="../php/editar_comentario.php" method="post">
                        <input type="hidden" name="id_comentario" value="<?php echo $comentario['id']; ?>">
                            <textarea name="comentario" rows="3" required><?php echo htmlspecialchars($comentario['comentario']); ?></textarea>
                            <button type="submit">Guardar Cambios</button>
                            <button type="button" onclick="window.location.href='services.php'">Cancelar</button>
                    </form>
                    <?php else: ?>
                    <p><?php echo htmlspecialchars($comentario['comentario']); ?></p>

                    <small><?php echo $comentario['fecha']; ?></small>

                    <?php if (isset($_SESSION['id']) && $_SESSION['id'] == $comentario['id_usuario']): ?>

                    <form action="services.php#comentarios" method="post" style="display:inline;">
                        <input type="hidden" name="editando" value="<?php echo $comentario['id']; ?>">
                        <button type="submit">Editar</button>
                    </form>

                    <form action="../php/eliminar_comentario.php" method="post" style="display:inline;">
                        <input type="hidden" name="id_comentario" value="<?php echo $comentario['id']; ?>">
                        <button type="submit">Eliminar</button>
                    </form>
                    <?php endif; ?>
                    <?php endif; ?>
                </div>

                <?php endwhile; ?>
                        
                <?php $conexion->close(); ?>
            </div>
        </section>
        <footer>&copy; 2024 Desarrollo del Conocimiento Institucional (DDCI). Todos los derechos reservados.</footer>
    </div>
    <script src="../js/services.js" defer></script>
</body>
</html>
