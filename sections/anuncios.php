<?php

use App\Propiedad\Propiedad;

$propiedades = (new Propiedad())->getAll();
?>
<main class="contenedor seccion">
	<h2>Casas y Depas en Venta</h2>
	<div class="contenedor-anuncios">
		<?php foreach ($propiedades as $propiedad): ?>
			<div class="anuncio">
				<img loading="lazy" src="" alt="anuncio">
				<div class="contenido-anuncio">
					<h3><?php echo $propiedad->getTitulo(); ?></h3>
					<p><?php echo $propiedad->getDescripcion(); ?></p>
					<p class="precio"><?php echo $propiedad->getPrecio(); ?>$</p>
					<ul class="iconos-caracteristicas">
						<li>
							<img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
							<p><?php echo $propiedad->getWc(); ?></p>
						</li>
						<li>
							<img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
							<p><?php echo $propiedad->getEstacionamiento(); ?></p>
						</li>
						<li>
							<img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
							<p><?php echo $propiedad->getHabitaciones(); ?></p>
						</li>
					</ul>
					<a href="#" class="boton-amarillo-block">
						Ver Propiedad
					</a>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</main>