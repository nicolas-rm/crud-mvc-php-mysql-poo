<?php
require_once "Modelos/conexiondb.php";

class AdminM extends Conexiondb
{
    static public function IngresoM($datosC, $tabladb)
    {
        # code...

        $db = Conexiondb::conexion()->prepare("SELECT usuario, clave FROM $tabladb WHERE usuario = :usuario");

        $db->bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);

        $db->execute();

        return $db->fetch();

        $db->close();
    }
}
