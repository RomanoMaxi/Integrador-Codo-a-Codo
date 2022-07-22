<?php
include 'conexion.php';

//actualizar registro php
//UPDATE nombreTabla SET nombre  ='migel' whre id_usuario = 1
$id = 36;

$queryUpdate = "UPDATE  tabla_usuarios SET nombre ='emanuel' WHERE id_usuario=41 ";

$resultadoUpdate = mysqli_query($conexion, $queryUpdate);


if ($resultadoUpdate) {
    echo "se actualizo de forma correcta";
} else {
    echo "por algun problema no se actualizo!!!!";
}
