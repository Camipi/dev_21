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
					<p><strong>Tags:</strong> Chile / Turismo / Experiencias</p>
				</div>

				<!-- <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<div class="row">
						<div class="col-md-4">
							<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/yagan-8.png" alt="icono de servicio">
						</div>
						<div class="col-md-8">
							<h5><strong>Otros proyectos</strong></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</section>


	<!-- Proyectos -->
	<div class="proyectos">
		<div class="container">
			<div class="proyecto">
				<div class="row">
					<div class="col-md-12">
						<img class="img-fluid portada-proyecto" src="<?php echo get_bloginfo('template_url') ?>/assets/images/yagan-1.png" alt="icono de servicio">			
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
							<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/yagan-2.png" alt="icono de servicio">
						</div>
						<div class="col-md-4">
							<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/yagan-7.png" alt="icono de servicio">
						</div>
						<div class="col-md-4">
							<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/yagan-4.png" alt="icono de servicio">
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