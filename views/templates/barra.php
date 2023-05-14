<?php if(isset($_SESSION['admin'])) {  // Acá pregunta si es admin o no ?>
    <div class="barra-servicios">
    <a class="boton" href="/admin">Ver Citas</a>
    <a class="boton" href="/servicios">Ver Servicios</a>
    <a class="boton" href="/servicios/crear">Nuevo Servicio</a>
    </div>
<?php } ?>
