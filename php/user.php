<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];

    if ($usuario == "administrador") {
        header("Location: ../pages/iniciar.php");
        exit();
    } elseif ($usuario == "cliente") {
        header("Location: ../index.html");
        exit();
    }
}
?>
