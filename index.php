<?php

//todos los controladores lo llamamos aqui
require_once"controladores\plantilla_controlador.php";

$plantilla= new ControladorPlantilla();
$plantilla->crtPlantilla();

?>
<link rel="stylesheet" href="vistas/css/bootstrap.min.css">
    
    <script src="vistas/js/bootstrap.bundle.min.js"></script>