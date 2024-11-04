<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imgs/logo_16x16.ico">
    <link rel="icon" href="imgs/logo_32x32.png">
    <link rel="icon" href="imgs/logo_48x48.png">
    <link rel="icon" href="imgs/logo_96x96.png">
    <link rel="icon" href="imgs/logo_144x144.png">
    <title>Inicio - DDCI</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/inicio.css">
</head>
<body>
    <div class="container">
        <nav class="navegacion">
            <ul class="navegacion__lista">
                <li class="navegacion__li">
                    <a href="index.php#inicio" class="navegacion__link inicio">Inicio</a>
                </li>
                <li class="navegacion__li">
                    <a href="pages/nosotros.php#sobre_nosotros" class="navegacion__link">Sobre nosotros</a>
                </li>
                <li class="navegacion__li">
                    <a href="pages/services.php#servicios" class="navegacion__link">Servicios</a>
                </li>
                <li class="navegacion__li">
                    <a href="pages/contact.php#contacto" class="navegacion__link">Contacto</a>
                </li>
            </ul>
            <a href="pages/perfil_admin.php" class="admin-login">
                <?php if (isset($_SESSION['usuario'])): ?>
                    <span class="user-name"><?php echo htmlspecialchars($_SESSION['usuario']); ?></span>
                <?php endif; ?>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="admin-icon"><path d="M14 14.252V16.3414C13.3744 16.1203 12.7013 16 12 16C8.68629 16 6 18.6863 6 22H4C4 17.5817 7.58172 14 12 14C12.6906 14 13.3608 14.0875 14 14.252ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11ZM18 17V14H20V17H23V19H20V22H18V19H15V17H18Z"></path></svg>
            </a>
        </nav>

        <header class="encabezado">
            <a href="index.php">
                <img src="imgs/logo.png" alt="Logo" class="logo">
            </a>
            <h1>Desarrollo Del Conocimiento Institucional (DDCI)</h1>
            <h2 id="inicio">"Construyendo una comunidad de aprendizaje para el futuro"</h2>
        </header>

        <h2 class="title-body">Inicio</h2>

        <section class="content">
            <article class="welcome-article">
                <h2>¡Bienvenidos a DDCI!</h2>
                <p>
                    Estamos encantados de que nos visites. En DDCI, nos dedicamos a fomentar el desarrollo del conocimiento y a preparar a nuestros estudiantes para un futuro brillante. Explora nuestro sitio para descubrir cómo estamos transformando la educación y construyendo una comunidad de aprendizaje innovadora.
                </p>
            </article>
            
            <article class="article article1">
                <img src="imgs/study.jpeg" alt="Study" class="img__study">
                <div class="article__content1">
                    <h3>Sobre nosotros</h3>
                    <p>
                        En la educación, es importante tener un plan de trabajo claro y definido, específicamente para el grado noveno, décimo, undécimo y para la media técnica auxiliar en desarrollo de software. Esto no sólo permite una mejor organización del proceso de enseñanza y aprendizaje, sino que también garantiza que los estudiantes adquieran los conocimientos y habilidades necesarias para su futuro académico y laboral.
                        <a href="pages/nosotros.php#sobre_nosotros">Leer más...</a>
                    </p>
                </div>
            </article>

            <article class="article article2">
                <div class="article__content2">
                    <h3>Servicios</h3>
                    <p>
                        El plan de trabajo en los grados noveno, décimo y undécimo está enfocado en el desarrollo de habilidades y conocimientos que preparen a nuestros estudiantes para su futuro. A través del programa de Desarrollo de Conocimiento Institucional (DDCI), buscamos fortalecer competencias como el pensamiento crítico, la resolución de problemas y la comunicación efectiva.
                        <a href="pages/services.php#servicios">Leer más...</a>
                    </p>
                </div>
            </article>

            <article class="article article3">
                <div class="article__content3">
                    <h2>¿Necesitas hablar con nosotros?</h2>
                    <a href="pages/contact.php#contacto">Ponte en contacto</a>
                </div>
            </article>
        </section>

        <footer>&copy; 2024 Desarrollo del Conocimiento Institucional (DDCI). Todos los derechos reservados.</footer>
    </div>
    <script src="js/inicio.js" defer></script>
</body>
</html>
