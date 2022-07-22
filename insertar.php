<?php
include 'functions/conexion.php';
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$email = $_GET['email'];
$nivel = $_GET['leng'];
$phone = $_GET['phone'];

$sqlinsert = "INSERT INTO tabla_usuarios (id_usuario, nombre, apellido, email, nivel, telefono) 
        VALUES (NULL, '$nombre', '$apellido','$email','$nivel', '$phone')";

$insert = mysqli_query($conexion, $sqlinsert);

header ('Location: index.php');
