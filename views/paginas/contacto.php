<main class="contenedor seccion">
    <h1 data-cy="heading-contacto">Contacto</h1>

    <?php if($mensaje) { ?>
        <p data-cy="alerta-envio-formulario" class='alerta exito'><?php echo $mensaje; ?></p>;
    <?php } ?>
    
    <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp">
        <source srcset="build/img/destacada3.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen contacto">
    </picture>

    <h2 data-cy="heading-formulario">Rellene el formulario de contacto</h2>

    <form  data-cy="formulario-contacto" class="formulario" action="/contacto" method="POST">
        <fieldset>
            <legend>Información Personal</legend>
            
            <label for="nombre">Nombre</label>
            <input data-cy="input-nombre" type="text" placeholder="Nombre" id="nombre" name="contacto[nombre]" required>

            <label for="mensaje">Mensaje:</label>
            <textarea data-cy="input-mensaje" id="mensaje" name="contacto[mensaje]" required></textarea>
        </fieldset>

        <fieldset>
            <legend>Información sobre la propiedad</legend>
            
            <label for="opciones">Compra o venta:</label>
            <select data-cy="input-opciones" id="opciones" name="contacto[tipo]" required>
                <option value="" disabled selected>-- Seleccione --</option>
                <option value="Compra">Compra</option>
                <option value="Venta">Venta</option>
            </select>
        
            <label for="presupuesto">Precio o presupuesto</label>
            <input data-cy="input-precio" type="number" placeholder="Precio o presupuesto" id="presupuesto" name="contacto[precio]" required>
        </fieldset>

        <fieldset>
            <legend>Contacto</legend>

            <p>Forma de contacto preferida</p>

            <div class="forma-contacto">
                <label for="contactar-telefono">Teléfono</label>
                <input data-cy="forma-contacto" type="radio" value="telefono" id="contactar-telefono" name="contacto[contacto]" required>

                <label for="contactar-email">E-mail</label>
                <input data-cy="forma-contacto" type="radio" value="email" id="contactar-email" name="contacto[contacto]" required>
            </div>

            <div id="contacto"></div>

            </fieldset>

        <input type="submit" value="Enviar" class="boton-verde">
    </form>

</main>