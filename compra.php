<?php

//en este archivo se obtienen los tickets, y se compran, ingresando al JS
include 'vistas/header.html';
?>
<section class="section">
    <div class="promociones">
        <article class="promo estudiante">
            <h3>Estudiante</h3>
            <p>Tiene un descuento </p>
            <h3>80%</h3>
            <small>*presentar documentación</small>
        </article>
        <article class="promo trainee">
            <h3>Trainee</h3>
            <p>Tiene un descuento </p>
            <h3>50%</h3>
            <small>*presentar documentación</small>
        </article>
        <article class="promo junior">
            <h3>Junior</h3>
            <p>Tiene un descuento </p>
            <h3>15%</h3>
            <small>*presentar documentación</small>
        </article>
    </div>

    <h4 class="section-title" id="comprarTickets">VENTA</h4>
    <h2 class="section-title">VALOR DE TICKET $200</h2>

    <!-- acá va el formulario de descuentos y promociones que tendrá JS -->
    <form class="row g-3 contact-form">
        <div class="col-md-6">
            <input type="text" class="form-control" id="inputNombre" placeholder="Nombre" name="name" title="Nombre sólo acepta letras y espacios en blanco" required pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$">
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" id="inputApellido" placeholder="Apellido" name="lastName" title="Apellido sólo acepta letras y espacios en blanco" required pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$">
        </div>
        <div class="col-12">
            <input type="email" class="form-control" id="inputEmail" placeholder="Correo" title="Email incorrecto" name="email" required pattern="^[a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$">

        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Cantidad</label>
            <input type="number" class="form-control" id="inputCantidad" name="cantidad" required>
        </div>
        <div class="col-md-6">
            <label for="inputState" class="form-label">Categoría</label>
            <select id="inputCategoria" class="form-select">
                <option value="basico" selected 0>Basico</option>
                <option value="estudiante">Estudiante</option>
                <option value="trainee">Trainee</option>
                <option value="junior">Junior</option>
            </select>
        </div>

        <div class="alert alert-success" role="alert" id="totalCompra">
            Total a pagar: $
        </div>

        <div class=" col-md-6 form-label d-grid botones-reseteo">
            <button class="btn btn-primary " type="reset">Borrar</button>
        </div>
        <div class=" col-md-6 form-label d-grid botones-reseteo">
            <button class="btn btn-primary" type="button" onclick="resumen()">Resumen</button>
        </div>
        </div>
</section>


<?php
include 'vistas/footer.html';
?>