<?php
class Conexiondb{
    public function conexion()
    {
        # code...
        $db = new PDO("mysql:host=localhost;dbname=crud","root","root");

        return $db;
    }
}