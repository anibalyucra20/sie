<?php
include("../../include/conexion.php");
include("../../include/busquedas.php");
include("../../include/funciones.php");

//no recibir dni  buscar dn BD
$id = $_POST['data'];
$nombre = $_POST['editar_area'];
$descripcion = $_POST['descripcion_area'];
$id_nivel = $_POST['id_nivel'];


$consulta = "UPDATE area_curricular SET nombre='$nombre', descripcion='$descripcion', id_nivel='$id_nivel' WHERE id='$id'";


$ejecutar_consulta = mysqli_query($conexion, $consulta);
if ($ejecutar_consulta) {
    echo "<script>
                alert('Datos Actualizados Correctamente');
                window.location= '../area_curricular.php';
                </script>
                ";
}else {
    echo "<script>
        alert('Error, Error al Actualizar Datos');
        window.history.back();
    </script>
    ";
}



?>