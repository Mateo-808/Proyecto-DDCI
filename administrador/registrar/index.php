<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../logo_16x16.ico">
    <link rel="icon" href="../../logo_32x32.png">
    <link rel="icon" href="../../logo_48x48.png">
    <link rel="icon" href="../../logo_96x96.png">
    <link rel="icon" href="../../logo_144x144.png">
    <title>Registrar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <img src="../../logo.png" alt="Logo" class="logo">
        <h1>Desarrollo del Conocimiento Institucional (DDCI)</h1>
    </header>
    <main>
        <section class="register-container">
            <h2>Registrar nuevo usuario</h2>
            <?php if (isset($_GET['error'])): ?>
                <p class="error-message"><?php echo htmlspecialchars($_GET['error']); ?></p>
            <?php endif; ?>
            <form action="procesar_registro.php" method="post" class="register-form">
                <input type="text" placeholder="Nombre de usuario" required name="usuario">
                <input type="password" placeholder="Contraseña" required name="contrasena">
                <input type="password" placeholder="Confirmar contraseña" required name="confirmar_contrasena">
                <button type="submit" class="button">Registrar</button>
                <a href="../iniciar_sesion/index.php" class="login-link">¿Ya tienes cuenta? Inicia sesión aquí</a>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Desarrollo del Conocimiento Institucional (DDCI). Todos los derechos reservados.</p>
    </footer>
</body>
</html>
