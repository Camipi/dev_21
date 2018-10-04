<?php get_template_part(header_main) ?>
	<!-- ?php the_post() ?>
	
	<?php the_post_thumbnail() ?>
	<?php the_title() ?>
	<?php the_content(); ?> -->

	<?php

	$arg = array (
		'post_type'      => 'portfolio',
	);

	$get_arg = new WP_Query( $arg );

	while( $get_arg->have_posts() ){
		$get_arg->the_post();

	?>

	<!-- Hero -->
	<section class="hero-port">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h1><strong>Nuestro<br> Portafolio</strong></h1>
					<p>Nuestro portafolio incluye servicios completos desde la externalización de áreas de TI, servicios de soporte y consultoría, procesos de TI, construcción o integración de soluciones de software y hasta la administración de infraestructuras, aplicaciones y servicios asociados.
				</div>
			</div>
		</div>
	</section>

	<!-- Proyectos -->
	<div class="proyectos-port">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h5><a href="<?php the_permalink() ?>"><i class="far fa-arrow-alt-circle-right"></i> Proyecto</a></h5>
					<p><a href="http://yagan.world"> yagan.world</a></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<img class="img-fluid logo-proyecto" src="<?php echo get_bloginfo('template_url') ?>/assets/images/yagan.png" alt="icono de servicio">
				</div>
			</div>
			

			<div class="gal-img-2">
				<div class="row">
					<div class="col-md-3">
						<a href="<?php echo get_bloginfo('template_url') ?>/assets/images/yagan-2.png" data-fancybox="gallery" data-caption="Caption #3"><img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/yagan-2.png" alt="icono de servicio"></a>
					</div>
					<div class="col-md-6">
						<a href="<?php echo get_bloginfo('template_url') ?>/assets/images/yagan-5.png" data-fancybox="gallery" data-caption="Caption #4"><img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/yagan-5.png" alt="icono de servicio"></a>
					</div>
					<div class="col-md-3">
						<a href="<?php echo get_bloginfo('template_url') ?>/assets/images/yagan-4.png" data-fancybox="gallery" data-caption="Caption #5"><img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/yagan-4.png" alt="icono de servicio"></a>
					</div>
				</div>
			</div>

			
			<!-- <hr class="port-separador"/>
			<div class="row">
				<div class="col-md-8">
					<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/banner.svg" alt="icono de servicio">
				</div>
				<div class="col-md-4">
					<h5><a href="#"><i class="far fa-arrow-alt-circle-right"></i> Proyecto</a></h5>
					<p>Lorem ipsum dolor sit amet.</p>
					<h6>Cliente</h6>
					<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/banner.svg" alt="icono de servicio">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				</div>
			</div>
			<div class="gal-img-2">
				<div class="row">
					<div class="col-md-3">
						<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/banner.svg" alt="icono de servicio">
					</div>
					<div class="col-md-6">
						<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/banner.svg" alt="icono de servicio">
					</div>
					<div class="col-md-3">
						<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/banner.svg" alt="icono de servicio">
					</div>
				</div>
			</div>
			<hr class="port-separador" />
			<div class="row">
				<div class="col-md-4">
					<h5><a href="#"><i class="far fa-arrow-alt-circle-right"></i> Proyecto</a></h5>
					<p>Lorem ipsum dolor sit amet.</p>
					<h6>Cliente</h6>
					<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/banner.svg" alt="icono de servicio">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				</div>
				<div class="col-md-8">
					<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/banner.svg" alt="icono de servicio">
				</div>
			</div>
			<div class="gal-img-3">
				<div class="row">
					<div class="col-md-3">
						<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/banner.svg" alt="icono de servicio">
					</div>
					<div class="col-md-6">
						<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/banner.svg" alt="icono de servicio">
					</div>
					<div class="col-md-3">
						<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/banner.svg" alt="icono de servicio">
					</div>
				</div>
			</div> -->
		</div>
	</div>

	<?php }  wp_reset_postdata();

?>

	<?php get_template_part(cotizacion) ?>

<?php get_footer() ?>