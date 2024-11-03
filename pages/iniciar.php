<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../imgs/logo_16x16.png">
    <link rel="icon" href="../imgs/logo_32x32.png">
    <link rel="icon" href="../imgs/logo_48x48.png">
    <link rel="icon" href="../imgs/logo_96x96.png">
    <link rel="icon" href="../imgs/logo_144x144.png">
    <title>Iniciar sesión - DDCI</title>
    <link rel="stylesheet" href="../css/iniciar.css">
</head>
<body>
    <header>
        <a href="../index.html">
            <img src="../imgs/logo.png" alt="Logo" class="logo">
        </a>
        <h1>Desarrollo del Conocimiento Institucional (DDCI)</h1>
    </header>
    <main>
        <section class="login-container">
            <h2>Iniciar sesión</h2>
            <?php if (isset($_GET['error'])): ?>
                <p class="error-message"><?php echo htmlspecialchars($_GET['error']); ?></p>
            <?php endif; ?>
            <form action="../php/iniciar.php" method="post" class="login-form">
                <input type="email" placeholder="Escriba su correo electrónico" required name="email">
                <input type="password" placeholder="Escriba su contraseña" required name="contrasena">
                <button type="submit" class="button">Iniciar Sesión</button>
                <a href="registrar.php" class="register-link">¿No tienes cuenta? Regístrate aquí</a>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Desarrollo del Conocimiento Institucional (DDCI). Todos los derechos reservados.</p>
    </footer>
</body>
</html>
