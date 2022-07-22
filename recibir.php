<?php

echo "estoy recibiendo";
echo "<pre>";
var_dump($_GET);
echo "</pre>";

echo "<br>";
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$email = $_GET['email'];
$leng = $_GET['leng'];
$phone = $_GET['phone'];

echo "el nombre del usuario: " . $nombre . "<br>";
echo "el apellido es: " . $apellido . "<br>";
echo "el email es: " . $email . "<br>";
echo "el nivel es: " . $leng . "<br>";
echo "el numero es: " . $phone . "<br>";
