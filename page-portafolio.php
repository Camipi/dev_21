<?php get_header() ?>
	<<!-- ?php the_post() ?>
	
	<?php the_post_thumbnail() ?>
	<?php the_title() ?>
	<?php the_content(); ?> -->

	<!-- Hero -->
	<section class="hero-port">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<h1><strong>Nuestro<br> Portafolio</strong></h1>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. 
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Proyectos -->
	<div class="proyectos-port">
		<div class="container">
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
			<div class="gal-img-1">
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
			</div>
		</div>
	</div>

	<?php get_template_part(cotizacion) ?>

<?php get_footer() ?>