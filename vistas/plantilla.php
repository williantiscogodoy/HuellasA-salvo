<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HuellasA Salvo</title>
    <link rel="stylesheet" href="vistas/css/bootstrap.min.css">
    <link rel="stylesheet" href="vistas/css/login.css">
    <link rel="stylesheet" href="vistas/css/header.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

    <?php
    // 1. Cargamos el menú (siempre visible)
    include "vistas/modulos/menu.php";

    // 2. Definimos la ruta actual
    $ruta = isset($_GET["ruta"]) ? $_GET["ruta"] : "inicio";

    // 3. Header condicional: SOLO se carga si estamos en inicio o si la ruta está vacía
    if ($ruta == "inicio") {
        include "vistas/modulos/header.php";
    }

    // 4. Lógica de módulos dinámicos
    $modulosValidos = [
        "adopcion", "maltrato", "donar", "unirme", "denunciar", 
        "rescate", "donaciones", "apadrinar", "donacion_especie", 
        "login", "admin", "guia-gatos"
    ];

    if (in_array($ruta, $modulosValidos)) {
        include "vistas/modulos/" . $ruta . ".php";
    } else {
        // Carga la página principal por defecto si la ruta no existe o es "inicio"
        include "vistas/modulos/web.php";
    }

    // 5. Footer (siempre visible)
    include "vistas/modulos/footer.php";
    ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>
</body>
</html>