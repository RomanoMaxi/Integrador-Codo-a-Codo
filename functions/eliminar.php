<?php
include 'conexion.php';


//eliminar registro php
// delete from talba_usuarios .. whre id_usuarios
//pida por formulario
$id = $_GET['id'];

$querydelete = "DELETE FROM tabla_usuarios WHERE id_usuario = $id";

$resultadoDelete = mysqli_query($conexion, $querydelete);


if ($resultadoDelete) {
        
    echo "SE ELIMINĂ“ CORRECTAMENTE";
    
} else {
    echo "por algun problema no se eliminĂ³";
}
header('Refresh: 3; url=../login.php');
