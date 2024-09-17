<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../logo_16x16.ico">
    <link rel="icon" href="../logo_32x32.png">
    <link rel="icon" href="../logo_48x48.png">
    <link rel="icon" href="../logo_96x96.png">
    <link rel="icon" href="../logo_144x144.png">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <img src="../logo.png" alt="Logo" class="logo">
        <h1>Desarrollo del Conocimiento Institucional (DDCI)</h1>
    </header>
    <main>
        <section class="intro">
            <h2>Bienvenido al Sistema DDCI</h2>
            <p>Por favor, seleccione su rol para continuar:</p>
        </section>
        <form action="usuario.php" method="post" class="user-form">
            <label for="usuario">Seleccione su rol</label>
            <select name="usuario" id="usuario">
                <option value="administrador">Administrador</option>
                <option value="cliente">Cliente</option>
            </select>
            <button type="submit">Continuar</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2024 Desarrollo del Conocimiento Institucional (DDCI). Todos los derechos reservados.</p>
    </footer>
</body>
</html>
