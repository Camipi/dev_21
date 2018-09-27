<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8"/>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<title>Dev_21</title>
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>
</head>
<body>

<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header_menu' ) ); ?>
<?php } ?>

<header>
		<!--Navbar-->  
		<nav class="navbar navbar-expand-lg fixed-top">
			<a class="navbar-brand" href="index.html">
				<img class="navbar-brand" src="<?php echo get_bloginfo('template_url') ?>/assets/images/logo_dev21.svg" width="120" height="auto" alt="logo dev21">
  			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
			</button>

			<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
			    <ul class="nav">
					<li class="nav-item">
					    <a class="nav-link active" href="http://localhost:8888/servicios/">Dev21</a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="servicios.html">Servicios</a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="portafolio.html">Portafolio</a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="blog.html">Blog</a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="#contacto">Contacto</a>
					</li>				  
				</ul>
			</div>

			<?php get_template_part(redes) ?>
		</nav>
	</header>