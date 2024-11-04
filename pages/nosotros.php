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
    <link rel="icon" href="../imgs/logo_48x48.png">
    <link rel="icon" href="../imgs/logo_96x96.png">
    <link rel="icon" href="../imgs/logo_144x144.png">
    <title>Sobre nosotros - DDCI</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/nosotros.css">
</head>
<body>
    <div class="container">
        <nav class="navegacion">
            <ul class="navegacion__lista">
                <li class="navegacion__li">
                    <a href="../index.php#inicio" class="navegacion__link">Inicio</a>
                </li>
                <li class="navegacion__li">
                    <a href="#sobre_nosotros" class="navegacion__link sobre">Sobre nosotros</a>
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
        <header class="encabezado">
            <a href="../index.php">
                <img src="../imgs/logo.png" alt="Logo" class="logo">
            </a>
            <h1>Desarrollo Del Conocimiento Institucional (DDCI)</h1>
            <h2 id="sobre_nosotros">"Construyendo una comunidad de aprendizaje para el futuro"</h2>
        </header>

        <h2 class="title-body">Sobre nosotros</h2>

        <section class="content">
            <article class="article">
                <h3>Nuestra historia</h3>
                <p>
                    El desarrollo de conocimiento institucional es un programa de estudio que se enfoca en brindar a los estudiantes de los grados noveno, décimo y undécimo, así como a los de la media técnica en auxiliar en desarrollo de software, las herramientas y habilidades necesarias para su formación académica y profesional.
                </p>
                <p>
                    Nuestra historia se remonta hace ya casi un año en donde, en la propia meida técnica auxiliar en desarrollo de software, debíamos encontrar un problema de los estudiantes de las IEs. Por eso, se creó DDCI, porque tiene la capacidad de resolverles el problema a los estudianes de sentirse inseguros al pasar el próximo año escolar. Por el momento está sólo para los grados noveno, décimo y undécimo en las áreas más importantes y en la media técnica auxiliar en desarrollo de software.
                </p>
            </article>

            <article class="article">
                <h3>Nuestro trabajo</h3>
                <p>
                    En el caso particular de los grados noveno a undécimo y la media técnica en auxiliar en desarrollo de software, el plan de trabajo está enfocado en brindar a los estudiantes una formación sólida y actualizada en el área de tecnología y programación.
                </p>
                <p>
                    Nuestro plan de trabajo busca fortalecer competencias como el pensamiento crítico, la resolución de problemas y la comunicación efectiva, preparando a nuestros estudiantes para los desafíos académicos y laborales del futuro.
                </p>
            </article>

            <article class="article">
                <h3>Misión</h3>
                <p>
                    Brindar a los estudiantes de noveno, décimo y undécimo grado una visión clara y motivadora sobre el contenido académico y las oportunidades de formación técnica que les esperan en los grados superiores. Además, poder brindarles el enfoque de la media técnica en auxiliar en desarrollo de software.
                </p>
                <p>
                    A través de este proyecto se busca que los estudiantes conozcan los temas, las competencias y asignaturas que se verán el año siguiente y/o lo que contiene la media técnica en auxiliar en desarrollo de software. Además, esto brindaría una confianza en los estudiantes al saber qué temas verán los próximos años.
                </p>
            </article>

            <article class="article">
                <h3>Visión</h3>
                <p>
                    Ser una plataforma líder que facilite el crecimiento y la innovación de las instituciones a través del acceso y la gestión efectiva del conocimiento. Aspiramos a que nuestro proyecto se convierta en un recurso esencial para que las instituciones educativas para que mejoren su capacidad de adaptarse a los cambios, promuevan la colaboración, y maximicen su impacto positivo en la sociedad mediante el uso del conocimiento compartido.
                </p>
            </article>

            <article class="article">
                <h3>Equipo</h3>
                <h4>Isabella Argel Naranjo</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro atque vitae, suscipit inventore vel velit veniam maxime asperiores, praesentium voluptatibus placeat! Vel officiis praesentium perferendis quos quam dicta hic ex!</p>

                <h4>Maria Isabel Hernández Zapata</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit labore, ratione illum obcaecati fuga sunt mollitia quae velit eveniet dolorum explicabo natus unde ipsam rem incidunt quibusdam, impedit voluptate dolore.</p>

                <h4>Mateo Restrepo Cartagena</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor aliquam dolores culpa veniam deserunt? Saepe quia quod quisquam. Minima corporis sed nesciunt cumque dicta sit laborum vero consequatur ab reprehenderit?</p>

                <h4>Darlyn Daniela Seguro Quintero</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa est quasi totam aliquid necessitatibus, ab culpa eaque et cum! Ducimus adipisci praesentium ipsa tempore voluptatem a iusto totam aut voluptas!</p>
            </article>
        </section>

        <footer>&copy; 2024 Desarrollo del Conocimiento Institucional (DDCI). Todos los derechos reservados.</footer>
    </div>
    <script src="../js/nosotros.js" defer></script>
</body>
</html>
