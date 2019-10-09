<?php
require_once "Modelos/conexiondb.php";
// require Conexiondb
class EmpleadosM extends Conexiondb
{

    // Registrar Empleados
    static public function RegistrarEmpleadosM($datosC, $tabladb)
    {
        # code...
        $pdo = Conexiondb::conexion()->prepare("INSERT INTO $tabladb (nombre,apellidos,email,puesto,salario) VALUES (:nombre,:apellido,:email,:puesto,:salario)");

        $pdo->bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);

        $pdo->bindParam(":apellido", $datosC["apellido"], PDO::PARAM_STR);

        $pdo->bindParam(":email", $datosC["email"], PDO::PARAM_STR);

        $pdo->bindParam(":puesto", $datosC["puesto"], PDO::PARAM_STR);

        $pdo->bindParam(":salario", $datosC["salario"], PDO::PARAM_STR);

        if ($pdo->execute()) {
            # code...
            return "bien";
        } else {
            return "error";
        }

        $pdo->close();
    }

    // Mostrar Empleados
    static public function MostrarEmpleadosM($tabladb)
    {
        # code...
        $pdo = Conexiondb::conexion()->prepare("SELECT * FROM $tabladb");

        $pdo->execute();

        return $pdo->fetchAll();

        $pdo->close();
    }

    public function EditarEmpleadosM($datosC, $tabladb)
    {
        # code...
        $pdo = Conexiondb::conexion()->prepare("SELECT * FROM $tabladb WHERE id = :id");

        $pdo->bindParam(":id", $datosC, PDO::PARAM_INT);

        $pdo->execute();

        return $pdo->fetch();

        $pdo->close();
    }

    public function ActualizarEmpleadosM($datosC, $tabladb)
    {
        # code...
        $pdo = Conexiondb::conexion()->prepare("UPDATE $tabladb SET nombre = :nombre, apellidos = :apellido, email = :email, puesto = :puesto, salario = :salario WHERE id = :id");

        $pdo->bindParam(":id", $datosC["id"], PDO::PARAM_INT);

        $pdo->bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);

        $pdo->bindParam(":apellido", $datosC["apellido"], PDO::PARAM_STR);

        $pdo->bindParam(":email", $datosC["email"], PDO::PARAM_STR);

        $pdo->bindParam(":puesto", $datosC["puesto"], PDO::PARAM_STR);

        $pdo->bindParam(":salario", $datosC["salario"], PDO::PARAM_STR);



        if ($pdo->execute()) {
            # code...
            return "bien";
        } else {
            return "error";
        }

        $pdo->close();
    }

    // borrar empleados

    public function BorrarEmpleadoM($tabladb, $datosC)
    {
        # code...
        $pdo = Conexiondb::conexion()->prepare("DELETE FROM $tabladb WHERE id = :id");

        $pdo->bindParam(":id", $datosC, PDO::PARAM_INT);

        if ($pdo->execute()) {
            # code...
            return "bien";
        } else {
            return "error";
        }

        $pdo->close();
    }
}
