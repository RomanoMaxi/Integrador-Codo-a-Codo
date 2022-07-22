<?php
//me conecto a la base de datos
//metodo mysqli_connect()

//tener en cuenta:
/*
1-localhost / 127.0.0.10 se debe usar la dirección IP
2- las bases de datos se usan con usuario y contraseña, que depende del servicio de hosting:
    Con xampp por defecto:
    root , " " 
3- nombre de base de datos
*/
$conexion = mysqli_connect("localhost", "root", "", "bdconferencias2022");
if (mysqli_connect_errno()) {
    //si no hay conexión saltará error
    echo "error";
}

//contraseña de webhost base de datos:
// KQUiSQF9u}Fg-Qr~

//usuario:
//id19300651_admin_bdconferencias2022