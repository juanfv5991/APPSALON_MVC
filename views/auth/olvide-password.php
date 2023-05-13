<h1 class="nombre-pagina">Olvide Password</h1>
<p class="descripcion-pagina">Reestablece el password escribiendo tu email a continuación</p>

<?php include_once __DIR__ . '/../templates/alertas.php' ?>

<form class="formulario" action="/olvide" method="POST">
    <div class="campo">
        <label for="email">Email</label>
        <input 
            type="email"
            id="email"
            name="email"
            placeholder="Tu Email"
        />
    </div>

    <input type="submit" value="Enviar Instrucciones" class="boton">

    <div class="acciones">
        <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
        <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crea una</a>
    </div>
</form>