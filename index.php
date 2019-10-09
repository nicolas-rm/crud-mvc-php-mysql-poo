<?php
// session_start();
// session_destroy();
// cuando se crea un modelo y un controlador siempre hay que requerir para que funcione, si no se requiere es como si no existiera

require_once "Controladores/rutasC.php";
require_once "Controladores/adminC.php";
require_once "Controladores/empleadosC.php";

require_once "Modelos/rutasM.php";
require_once "Modelos/adminM.php";
require_once "Modelos/empleadosM.php";

$rutas = new RutasControlador();
$rutas -> Plantilla();