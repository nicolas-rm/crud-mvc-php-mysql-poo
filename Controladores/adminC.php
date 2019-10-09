<?php


class AdminC
{
    public function IngresoC()
    {
        # code...
        if (isset($_POST["usuarioI"])) {
            $datosC = array("usuario" => $_POST["usuarioI"], "clave" => $_POST["claveI"]);

            $tabladb = "administradores";

            $respuesta = AdminM::IngresoM($datosC, $tabladb);

            if ($respuesta["usuario"] == $_POST["usuarioI"] && $respuesta["clave"] == $_POST["claveI"]) {
                session_start();
                $_SESSION["Ingreso"] = true;

                header("location:index.php?ruta=empleados");

                echo "Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'success'
                  )";
            } else {
                echo "ERROR AL INGRESAR";
                echo "<br/>";
                echo $respuesta["usuario"];
                echo $respuesta["clave"];
                echo "<br/>";
                echo $_POST["usuarioI"];
                echo "<br/>";
                echo $_POST["claveI"];
            }
        }
    }
}
