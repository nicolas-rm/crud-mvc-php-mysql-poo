<?php
class RutasControlador{
    public function Plantilla()
    {
        # code...
        include "Vistas/plantilla.php";
    }

    public function Rutas()
    {
        # code...
        if(isset($_GET["ruta"])){
            $rutas = $_GET["ruta"];
        }else{
            $rutas = "index";
        }
        // conexion a una funcion ::
        $respuesta = Modelo::RutasModelo($rutas);

        include $respuesta;
    }
}