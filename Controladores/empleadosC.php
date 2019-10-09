<?php

class EmpleadosC
{

    // Registrar Empleados
    public function RegistrarEmpleados()
    {
        # code...
        if (isset($_POST["nombreR"])) {
            $datosC = array(
                "nombre" => $_POST["nombreR"], "apellido" => $_POST["apellidoR"], "email" => $_POST["emailR"],
                "puesto" => $_POST["puestoR"], "salario" => $_POST["salarioR"]
            );

            $tabladb = "empleados";

            $respuesta = EmpleadosM::RegistrarEmpleadosM($datosC, $tabladb);


            if ($respuesta == "bien") {
                header("location:index.php?ruta=empleados");

                // echo "Inserccion de datos correcta";
            } else {
                echo "Error En la insercion de datos";
                echo "<br/>";
                echo $datosC["nombre"];
                echo "<br/>";
                echo $datosC["apellido"];
                echo "<br/>";
                echo $datosC["email"];
                echo "<br/>";
                echo $datosC["puesto"];
                echo "<br/>";
                echo $datosC["salario"];
            }
        }
    }

    // Mostrar Empleados

    public function MostrarEmpleadosC()
    {
        # code...
        $tabladb = "empleados";
        $respuesta = EmpleadosM::MostrarEmpleadosM($tabladb);

        foreach ($respuesta as $key => $value) {
            echo '
            <tr>
			<td>' . $value["nombre"] . '</td>
			<td>' . $value["apellidos"] . '</td>
			<td>' . $value["email"] . '</td>
			<td>' . $value["puesto"] . '</td>
			<td>' . $value["salario"] . '</td>
            <td><a href="index.php?ruta=editar&id=' . $value["id"] . '"><button>Editar</button></a></td>
            
			<td><a href="index.php?ruta=empleados&idB=' . $value["id"] . '"><button>Eliminar</button></a></td>
		</tr>';
        }
    }

    // EDITAR EMPLEADOS
    public function EditarEmpleadosC()
    {
        # code...
        $datosC = $_GET["id"];
        $tabladb = "empleados";
        $respuesta = EmpleadosM::EditarEmpleadosM($datosC, $tabladb);

        echo '
        <input type="hidden" value="' . $respuesta["id"] . '" name="idE">

        <input type="text" placeholder="Nombre" name="nombreE" value="' . $respuesta["nombre"] . '" required>
        
        <input type="text" placeholder="Apellido" name="apellidoE" value="' . $respuesta["apellidos"] . '" required>
        
        <input type="email" placeholder="Email" name="emailE" value="' . $respuesta["email"] . '" required>
        
        <input type="text" placeholder="Puesto" name="puestoE" value="' . $respuesta["puesto"] . '" required>
        
        <input type="text" placeholder="Salario" name="salarioE" value="' . $respuesta["salario"] . '" required>
        
        <input type="submit" value="Actualizar">
        ';
    }

    // ACTUALIZAR EMPLEADOS
    public function ActualizarEmpleados()
    {
        # code...

        if (isset($_POST["nombreE"])) {
            # code...
            $datosC = array(
                "id" => $_POST["idE"],
                "nombre" => $_POST["nombreE"], "apellido" => $_POST["apellidoE"], "email" => $_POST["emailE"],
                "puesto" => $_POST["puestoE"], "salario" => $_POST["salarioE"]
            );

            $tabladb = "empleados";

            $respuesta = EmpleadosM::ActualizarEmpleadosM($datosC, $tabladb);

            if ($respuesta == "bien") {
                header("location:index.php?ruta=empleados");
                // echo "<br/>";
                // echo $_POST["idE"];
                // echo "<br/>";
                // echo $datosC["nombre"];
                // echo "<br/>";
                // echo $datosC["apellido"];
                // echo "<br/>";
                // echo $datosC["email"];
                // echo "<br/>";
                // echo $datosC["puesto"];
                // echo "<br/>";
                // echo $datosC["salario"];
                // echo "Inserccion de datos correcta";
            } else {
                echo "Error En la edicion de datos de datos";
                echo "<br/>";
                echo $datosC["nombre"];
                echo "<br/>";
                echo $datosC["apellido"];
                echo "<br/>";
                echo $datosC["email"];
                echo "<br/>";
                echo $datosC["puesto"];
                echo "<br/>";
                echo $datosC["salario"];
            }
        }
    }


    // eliminar Empleado
    public function BorrarEmpleadoC()
    {
        # code...
        if (isset($_GET["idB"])) {
            # code...
            $datosC = $_GET["idB"];

            $tabladb = "empleados";

            $respuesta = EmpleadosM::BorrarEmpleadoM($tabladb, $datosC);

            if ($respuesta == "bien") {
                header("location:index.php?ruta=empleados");
                // echo "<br/>";
                // echo $_POST["idE"];
                // echo "<br/>";
                // echo $datosC["nombre"];
                // echo "<br/>";
                // echo $datosC["apellido"];
                // echo "<br/>";
                // echo $datosC["email"];
                // echo "<br/>";
                // echo $datosC["puesto"];
                // echo "<br/>";
                // echo $datosC["salario"];
                // echo "Inserccion de datos correcta";
            } else {
                echo "Error En la eliminacion de datos de datos";
                echo "<br/>";
                echo $datosC["nombre"];
                echo "<br/>";
                echo $datosC["apellido"];
                echo "<br/>";
                echo $datosC["email"];
                echo "<br/>";
                echo $datosC["puesto"];
                echo "<br/>";
                echo $datosC["salario"];
            }
        }
    }
}
