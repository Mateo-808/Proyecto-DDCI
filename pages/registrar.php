<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../imgs/logo_16x16.ico">
    <link rel="icon" href="../imgs/logo_32x32.png">
    <link rel="icon" href="../imgs/logo_48x48.png">
    <link rel="icon" href="../imgs/logo_96x96.png">
    <link rel="icon" href="../imgs/logo_144x144.png">
    <title>Registrar - DDCI</title>
    <link rel="stylesheet" href="../css/registrar.css">
</head>
<body>
    <header>
        <a href="../index.php">
            <img src="../imgs/logo.png" alt="Logo" class="logo">
        </a>
        <h1>Desarrollo del Conocimiento Institucional (DDCI)</h1>
    </header>
    <main>
        <section class="register-container">
            <h2>Registrar nuevo usuario</h2>
            <?php if (isset($_GET['error'])): ?>
                <p class="error-message"><?php echo htmlspecialchars($_GET['error']); ?></p>
            <?php endif; ?>
            <form action="../php/registrar.php" method="post" class="register-form">
                <input type="text" placeholder="Nombre de usuario" required name="usuario">
                <input type="email" placeholder="Correo electrónico" required name="email">
                <input type="password" placeholder="Contraseña" required name="contrasena">
                <input type="password" placeholder="Confirmar contraseña" required name="confirmar_contrasena">
                <input type="text" placeholder="Profesión" required name="profesion" max="100">
                <button type="submit" class="button">Registrar</button>
                <a href="iniciar.php" class="login-link">¿Ya tienes cuenta? Inicia sesión aquí</a>
            </form>
        </section>
    </main>
    <footer>&copy; 2024 Desarrollo del Conocimiento Institucional (DDCI). Todos los derechos reservados.</footer>
</body>
</html>
