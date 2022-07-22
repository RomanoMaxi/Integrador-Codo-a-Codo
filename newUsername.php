<?php
include 'vistas/simpleHeader.html';
?>
    <section class="section ">
        <div class="container">
        <h1 class="section-title">Crear cuenta</h1>
        <h4 class="section-title">Ingrese su nuevo usuario y contraseña </h4>
        
            
            <form class="row g-3 form-login" action="vistas/insertarNewUsername.php" method="GET">
                <div class="mb-3">
                    
                    <input require type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="newUser" placeholder="Usuario">
                </div>
                <div class="mb-3">
                   
                    <input  require type="password" class="form-control" id="exampleInputPassword1" name="newPassword" placeholder="Contraseña">
                </div>
            
               
                <div class=" col-md-3 form-label d-grid botones-reseteo">
                        <input class="btn btn-primary" type="submit" value="Enviar">
                    </div>
                    <div class=" col-md-3 form-label d-grid botones-reseteo">
                        <button  class="btn btn-primary " type="reset">Borrar</button>
                    </div>
             
            </form>
        </div>
      
    </section>
    
</body>
</html>
