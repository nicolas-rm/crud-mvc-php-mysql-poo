<?php
session_start();

if (!$_SESSION["Ingreso"]) {
    header("location:index.php?ruta=ingreso");
    exit();
}
?>
<br>
<h1>EDITAR UN EMPLEADO</h1>

<form method="post" action="">
    <?php
    $editar = new EmpleadosC();
    $editar -> EditarEmpleadosC();



    $actualizar = new EmpleadosC();
    $actualizar -> ActualizarEmpleados();
    ?>
</form>
<!-- primero se crea un identificador para poder distinguir los datos que se ingresan, en html es el de name, a traves del metodo post -->


<!-- despues de crea un controlador y su respectivo metodo -->