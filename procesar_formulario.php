<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $nivel_estudio = $_POST["nivel_estudio"];
    $conocimientos = $_POST["conocimientos"];
    $nivel_ingles = $_POST["nivel_ingles"];
    
    // Lógica de redireccionamiento según los requisitos mencionados
    if (count($conocimientos) >= 2 && $nivel_ingles == "Basico") {
        header("Location: pagina_apolo.php");
        exit();
    } elseif (count($conocimientos) >= 2 && $nivel_ingles == "Intermedio") {
        header("Location: pagina_artemis.php");
        exit();
    } elseif (count($conocimientos) >= 2 && $nivel_ingles == "Avanzado") {
        header("Location: pagina_campus.php");
        exit();
    } else {
        // Redireccionar a una página de error o mostrar un mensaje de error
        header("Location: pagina_error.php");
        exit();
    }
}
?>