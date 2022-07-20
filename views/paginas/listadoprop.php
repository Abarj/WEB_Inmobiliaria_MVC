<div class="contenedor-anuncios">
        <?php foreach($propiedades as $propiedad) { ?>
        
        <div class="anuncio" data-cy="anuncio">
            <img loading="lazy" src="/imagenes/<?php echo $propiedad->imagen; ?>" alt="Anuncio">

            <div class="contenido-anuncio">
                <h3><?php echo $propiedad->titulo; ?></h3>
                <p class="parrafo"><?php echo $propiedad->descripcion; ?></p>
                <p class="precio"><?php echo number_format($propiedad->precio, 2); ?> €</p>
                
                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" loadign="lazy" src="build/img/icono_wc.svg" alt="Icono wc">
                        <p><?php echo $propiedad->wc; ?></p>
                    </li>
                    <li>
                        <img class="icono" loadign="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono estacionamiento">
                        <p><?php echo $propiedad->estacionamiento; ?></p>
                    </li>
                    <li>
                        <img class="icono" loadign="lazy" src="build/img/icono_dormitorio.svg" alt="Icono dormitorio">
                        <p><?php echo $propiedad->habitaciones; ?></p>
                    </li>
                </ul>

                <a data-cy="enlace-propiedad" href="/propiedad?id=<?php echo $propiedad->id; ?>" class="boton boton-amarillo-block">Ver propiedad</a>
            </div> <!--.contenido-anuncio-->
        </div> <!--anuncio-->

        <?php } ?>
</div> <!--.contenedor-anuncios-->