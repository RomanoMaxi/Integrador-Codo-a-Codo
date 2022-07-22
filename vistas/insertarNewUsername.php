<?php
include 'functions/conexion.php';
include 'vistas/simpleHeader.html';



$newUsername = $_GET['newUser'];
$newPassword = $_GET['newPassword'];

$newAccount = "INSERT INTO username_password (id, username, pass) 
        VALUES (NULL, '$newUsername', '$newPassword')";

$insert = mysqli_query($conexion, $newAccount);
?>


    <section class="section ">
        <div class="container">
        <h1 class="section-title">USUARIO CREADO</h1>
        <h4 class="section-title">Disfrute las Conferencias </h4>

    </section>
    

<?php
header('Refresh: 4, url=../index.php');
?>
