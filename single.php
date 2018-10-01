<?php get_header() ?>

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>

		<?php the_post_thumbnail() ?>
		<?php the_title() ?>
		<time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time>
		<?php the_content() ?>

	<?php } ?>
<?php } else { ?>
		<!-- Hero -->
	<section class="hero">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
					<h1><strong>Proyecto<br>Nombre</strong></h1>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">

					<div class="row">
						<div class="col-md-5">
							<h5><strong>Otros proyectos</strong></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti a tempora ratione ipsum unde.</p>
						</div>
						<div class="col-md-7">
							<img src="img/banner.svg" alt="">
						</div>
					</div>

					<div class="row">
						<div class="col-md-5">
							<img src="img/banner.svg" alt="">
						</div>
						<div class="col-md-7">
							<img src="img/banner.svg" alt="">
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>


	<!-- Proyectos -->
	<div class="proyectos">
		<div class="container">
			<div class="proyecto">
				<div class="row">
					<div class="col-md-12">
						<p><strong>Tags:</strong> etiquetas / etiquetas / etiquetas</p>
						<img src="img/banner.svg" alt="">			
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
							<img src="img/banner.svg" alt="">
						</div>
						<div class="col-md-4">
							<img src="img/banner.svg" alt="">
						</div>
						<div class="col-md-4">
							<img src="img/banner.svg" alt="">
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-2">
					<a href="#"><i class="far fa-arrow-alt-circle-right"></i></a>
				</div>
			</div>
		</div>
	</div>
	contenido
<?php } wp_reset_query(); ?>

<?php get_sidebar() ?>
<?php get_footer() ?>