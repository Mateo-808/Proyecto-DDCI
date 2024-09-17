<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];

    if ($usuario == "administrador") {
        header("Location: ../administrador/iniciar_sesion/index.php");
        exit();
    } elseif ($usuario == "cliente") {
        header("Location: ../cliente/inicio/index.php");
        exit();
    }
}
?>
