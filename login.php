<?php
include 'vistas/simpleHeader.html';
?>
    <section class="section ">
        <div class="container">
        <h1 class="section-title">Inicio de Sesión</h1>
        <h4 class="section-title">Ingrese usuario y contraseña </h4>
        
            
            <form class="row g-3 form-login" action="validar.php" method="POST">
                <div class="mb-3">
                    
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="usuario" placeholder="Usuario">
                </div>
                <div class="mb-3">
                   
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Contraseña">
                </div>
            
               
                <div class=" col-md-3 form-label d-grid botones-reseteo">
                        <input class="btn btn-primary" type="submit" value="Enviar">
                    </div>
                    <div class=" col-md-3 form-label d-grid botones-reseteo">
                        <button class="btn btn-primary " type="reset">Borrar</button>
                    </div>
             
            </form>
            <a href="newUsername.php">¿No Tienes cuenta?</a>
        
        </div>
        
       

      
    </section>
    
</body>
</html>

