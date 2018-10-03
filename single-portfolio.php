<?php get_header() ?>

<?php

	$arg = array (
		'post_type'      => 'portfolio',
	);

	$get_arg = new WP_Query( $arg );

	while( $get_arg->have_posts() ){
		$get_arg->the_post();

	?>


		<!-- Hero -->
	<section class="hero">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
					<h1><strong><?php the_title() ?></strong></h1>
					<p>Descubre experiencias y vive tu propio Chile.</p>
				</div>
			</div>
				
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
					<p class="tags"><strong>Tags:</strong> Chile / Turismo / Experiencias</p>
					<p>Nuestro portafolio incluye servicios completos desde la externalización de áreas de TI, servicios de soporte y consultoría, procesos de TI, construcción o integración de soluciones de software y hasta la administración de infraestructuras, aplicaciones y servicios asociados.</p>
				</div>
			</div>
			
		</div>
	</section>


	<!-- Proyectos -->
	<div class="proyectos">
		<div class="container">
			<div class="proyecto">
				<div class="row">
					<div class="col-md-4">
						<a href="<?php echo get_bloginfo('template_url') ?>/assets/images/yagan.png" data-fancybox="gallery" data-caption="Caption #1"><img class="img-fluid logo-proyecto" src="<?php echo get_bloginfo('template_url') ?>/assets/images/yagan.png" alt="icono de servicio"></a>
					</div>
					<div class="col-md-8">
						<a href="<?php echo get_bloginfo('template_url') ?>/assets/images/yagan-1.png" data-fancybox="gallery" data-caption="Caption #2"><img class="img-fluid portada-proyecto" src="<?php echo get_bloginfo('template_url') ?>/assets/images/yagan-1.png" alt="icono de servicio"></a>
					</div>
				</div>

				<div class="gal-img-1">
					<div class="row">
						<div class="col-md-12">
							<a href="<?php echo get_bloginfo('template_url') ?>/assets/images/yagan-6.png" data-fancybox="gallery" data-caption="Caption #3"><img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/yagan-6.png" alt="icono de servicio"></a>
						</div>
					</div>
				</div>


				<div class="gal-img-2">
					<div class="row">
						<div class="col-md-3">
							<a href="<?php echo get_bloginfo('template_url') ?>/assets/images/yagan-2.png" data-fancybox="gallery" data-caption="Caption #4"><img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/yagan-2.png" alt="icono de servicio"></a>
						</div>
						<div class="col-md-6">
							<a href="<?php echo get_bloginfo('template_url') ?>/assets/images/yagan-5.png" data-fancybox="gallery" data-caption="Caption #5"><img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/yagan-5.png" alt="icono de servicio"></a>
						</div>
						<div class="col-md-3">
							<a href="<?php echo get_bloginfo('template_url') ?>/assets/images/yagan-4.png" data-fancybox="gallery" data-caption="Caption #6"><img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/yagan-4.png" alt="icono de servicio"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- Flechas -->
	<div class="flechas-proyecto">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-2">
					<a href="#"><i class="far fa-arrow-alt-circle-left"></i></a>
				</div>
				<div class="col-sm-12 col-md-8">
					<div class="row">
						<div class="col-md-4">
							<a href="<?php echo get_bloginfo('template_url') ?>/assets/images/yagan-2.png" data-fancybox="gallery" data-caption="Caption #2"><img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/yagan-2.png" alt="icono de servicio"></a>
						</div>
						<div class="col-md-4">
							<a href="<?php echo get_bloginfo('template_url') ?>/assets/images/yagan-7.png" data-fancybox="gallery" data-caption="Caption #3"><img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/yagan-7.png" alt="icono de servicio"></a>
						</div>
						<div class="col-md-4">
							<a href="<?php echo get_bloginfo('template_url') ?>/assets/images/yagan-4.png" data-fancybox="gallery" data-caption="Caption #4"><img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/yagan-4.png" alt="icono de servicio">
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-2">
					<a href="#"><i class="far fa-arrow-alt-circle-right"></i></a>
				</div>
			</div>
		</div>
	</div>
<?php } wp_reset_query(); ?>

<?php get_sidebar() ?>
<?php get_footer() ?>