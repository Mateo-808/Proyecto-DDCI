<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - DDCI</title>
    <link rel="icon" href="../imgs/logo_16x16.ico">
    <link rel="icon" href="../imgs/logo_32x32.png">
    <link rel="icon" href="../imgs/logo_48x48.png">
    <link rel="icon" href="../imgs/logo_96x96.png">
    <link rel="icon" href="../imgs/logo_144x144.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/contact.css">
</head>
<body>
    <div class="container">
        <nav class="navegacion">
            <ul class="navegacion__lista">
                <li class="navegacion__li">
                    <a href="../index.php#inicio" class="navegacion__link inicio">Inicio</a>
                </li>
                <li class="navegacion__li">
                    <a href="nosotros.php#sobre_nosotros" class="navegacion__link">Sobre nosotros</a>
                </li>
                <li class="navegacion__li">
                    <a href="services.php#servicios" class="navegacion__link">Servicios</a>
                </li>
                <li class="navegacion__li">
                    <a href="#contacto" class="navegacion__link contacto">Contacto</a>
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
            <h2 id="contacto">"Construyendo una comunidad de aprendizaje para el futuro"</h2>
        </header>

        <h2 class="title-body">Contacto</h2>

        <section class="content">
            <form action="mailto:soporteddci@gmail.com" method="post" enctype="text/plain">
                
                <h2 class="title">FORMULARIO DE CONTACTO</h2>
                <fieldset>
                    <legend>INFORMACIÓN BÁSICA</legend>

                    <div class="form_input">
                        <label for="tipo_usuario">Tipo de usuario</label>
                        <select id="tipo_usuario" name="tipo_usuario">
                            <option value="cliente">Cliente</option>
                            <option value="administrador">Administrador</option>
                        </select>
                    </div>

                    <div class="form_input">
                        <label for="nombre">Nombre completo</label>
                        <input type="text" id="nombre" name="nombre" required>
                    </div>

                    <div class="form_input">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form_input">
                        <label for="asunto">Asunto</label>
                        <input type="text" id="asunto" name="asunto" placeholder="El asunto de tu mensaje" required>
                    </div>

                    <div class="form_input">
                        <label for="mensaje">Mensaje</label>
                        <textarea id="mensaje" name="mensaje" placeholder="Deja tu mensaje..." rows="8" required></textarea>
                    </div>

                <div class="form_input">
                    <label for="terminos">
                        <input type="checkbox" id="terminos" name="terminos" class="checkbox" required>
                        Acepto los términos y condiciones
                    </label>
                </div>

                <div class="form_input">
                    <input type="submit" value="Enviar">
                </div>
        </form>
        </section>

        <footer>&copy; 2024 Desarrollo del Conocimiento Institucional (DDCI). Todos los derechos reservados.</footer>
    </div>
    <script src="../js/contact.js" defer></script>
</body>
</html>
