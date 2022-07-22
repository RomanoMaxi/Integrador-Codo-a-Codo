<?php

// echo "estoy recibiendo";
// echo "
// <pre>";
// var_dump($consultas);
// echo "</pre>";
include 'vistas/header.html';


$usuario = $_GET['usuario'];
$password = $_GET['password'];
if ($usuario == "admin" && $password=="123456"){
    
    include 'functions/conexion.php';

    $consultas = mysqli_query($conexion, "select * from tabla_usuarios");
    ?>
    <h2 class="section-title">BIENVENIDO ADMIN</h2>
    <section class="section">
        <div class="container">
            <h2 class="section-title">Tabla de Usuarios</h2>
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nivel</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <!-- abro while pero no lo cierro al instante si no que muestro todos los datos -->
                    <?php while ($filaTD = $listado2022 = mysqli_fetch_array($consultas)) { ?>
                        <tr>
                            <th class="table-secondary" scope="row"> <?php echo $filaTD['id_usuario']; ?> </th>
                            <th class="table-success" scope="row"> <?php echo $filaTD['nombre']; ?> </th>
                            <th class="table-warning" scope="row"> <?php echo $filaTD['apellido']; ?> </th>
                            <th class="table-info" scope="row"> <?php echo $filaTD['email']; ?> </th>
                            <th class="table-light" scope="row"> <?php echo $filaTD['nivel']; ?> </th>
                            <th class="table-danger" scope="row"> <?php echo $filaTD['telefono']; ?> </th>
                            <th class="table-danger" scope="row"><a href="functions/actualizar.php?id=<?php echo $listado2022 ['id_usuario']; ?>"><i class="fa-solid fa-user-pen"></i></a> </th>
                            <th class="table-danger" scope="row"><a href="functions/eliminar.php?id=<?php echo $listado2022 ['id_usuario']; ?>"><i class="fa-solid fa-trash-can"></i></i></a> </th>
                        </tr>
                    <?php } ?>
                </tbody>
                
            </table>
        </div>
    </section>
    <?php
    

    
}else{
   header('Location: index.php');
    
}


?>
        


    
   

    


