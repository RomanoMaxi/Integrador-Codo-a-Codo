<?php
//este archivo es el que inserta datos base, tomando el header, main y footer


include 'vistas/header.html';


?>


<main>
    <section id="inicio" class="home">
        <article class="hero-image" style="--hero-image:url('assets/ba1.jpg');
        --hero-attachment:fixed;">
            <aside class="hero-image-opacity" style="--hero-opacity-color:var(--black-alpha-color);">
                <div class="hero-image-content">
                    <div class="hero-image-text">
                        <h2 class="hero-image-title" style="--hero-text-color:var(--white-color);"> Conf Bs AS <br> </h2>

                        <p>Bs As llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad el conocimiento y esperiencia de los espertos que están creando el futuro de Internet. Ven a conocer a miembors del evento, a otros estudiantes de Codo a Codo y los oradores de primer nivel que tenemos para ti. Te esperamos!</p>
                        <a href="#sumarse" type="button" class="btn btn-outline-light">Quiero ser Orador

                        </a>
                        <a href="#comprarTickets" type="button" class="btn btn-success">Comprar tickets</a>
                    </div>
                </div>
            </aside>
        </article>
    </section>

    <section id="oradores" class="oradores section">
        <div class="container">

            <h4 class="section-title">Conoce a los oradores</h4>
            <h2 class="section-title">ORADORES</h2>

            <div class="card-group">
                <div class="card">
                    <img src="css/assets/steve.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <span class="badge bg-warning text-dark">JavaScript</span>
                        <span class="badge bg-info text-dark">React</span>
                        <h4 class="card-title">Steve Jobs</h4>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, temporibus facere? Iure dolorem neque modi explicabo eum quidem, corrupti illum tenetur doloremque provident odit, cumque nulla reprehenderit, et velit recusandae.</p>

                    </div>
                </div>
                <div class="card">
                    <img src="css/assets/bill.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <span class="badge bg-warning text-dark">JavaScript</span>
                        <span class="badge bg-info text-dark">React</span>
                        <h4 class="card-title">Bill Gates</h4>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint ipsum magnam officiis iusto provident neque nobis repudiandae molestias dolores nam quidem et inventore commodi, ratione labore unde. Quaerat, magnam dolorum!</p>

                    </div>
                </div>
                <div class="card">
                    <img src="css/assets/ada.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <span class="badge bg-secondary">Negocios</span>
                        <span class="badge bg-danger">Startups</span>
                        <h4 class="card-title">Ada Lovelace</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A enim distinctio similique minima vitae repudiandae recusandae corporis, atque voluptatibus dignissimos! Aliquam sint dignissimos, adipisci optio commodi assumenda exercitationem quos ipsum!</p>

                    </div>
                </div>
            </div>


        </div>
    </section>

    <section class="section " id="lugarFecha">
        <div class="container infoBsAs ">
            <div class="img-bsas">
                <img src="css/assets/honolulu.jpg" alt="">
            </div>
            <div class="info-bsas">
                <h3>Bs AS - Octubre</h3>
                <p>Buenos Aires es la provincia y localidad más grande del estado de Argentina, en los Estados Unidos. Honololulu es la más sureña de entre las principales ciudades estadounidenses. Aunque el nombre de Honololulu se refiere el área urbana en la costa sureste de la isla de Oahu, la ciudad y el condado de Honololulu han formado una ciudad condado consolidada que cubre toda la ciudad (aproximadamente 600km2 de superficie).</p>
                <button type="button" class="btn btn-secondary">Conoce más</button>
            </div>

        </div>
    </section>

    <section class="section" id="sumarse">
        <div class="container">
            <h4 class="section-title">CONVIÉRTETE EN UN</h4>
            <h2 class="section-title">ORADOR</h2>
            <P> Anótate como orador para dar una charla ignite. Cuéntanos de qué quieres hablar!</P>
            <form class="row g-3" action="insertar.php" method="GET">
                <div class="col-md-6">

                    <input type="text" require class="form-control" id="inputName" placeholder="Nombre" name="nombre">
                </div>
                <div class="col-md-6">

                    <input type="text" require class="form-control" id="inputLastName" placeholder="Apellido" name="apellido">
                </div>
                <div class="col-12">

                    <input type="email" require class="form-control" id="inputEmail" placeholder="Correo Electrónico" name="email">
                </div>
                <div class="col-md-6">
                    <select id="inputState" class="form-select" name="leng">
                        <option selected value="estudiante">Estudiante</option>
                        <option value="trainee">Trainee</option>
                        <option value="junior">Junior</option>
                        <option value="senior">Senior</option>

                    </select>
                </div>
                <div class="col-md-6">

                    <input type="text" class="form-control" id="inputPassword4" placeholder="Número de Contacto" name="phone">
                </div>

                <div class=" col-md-6 form-label d-grid botones-reseteo">
                    <button class="btn btn-primary " type="reset">Borrar</button>
                </div>
                <div class=" col-md-6 form-label d-grid botones-reseteo">
                    <input class="btn btn-primary" type="submit" value="Enviar">
                </div>
            </form>
        </div>
    </section>

    

</main>
<?php
//inserto los valores del formulario en la tabla


include 'vistas/footer.html';
?>