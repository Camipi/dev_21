<?php get_header() ?>


<!-- Hero -->
<section class="hero-blog">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
				<h1><strong>Dev_21<br>Noticias</strong></h1>
				<h5>No documentes el problema, arréglalo.</h5>
				<p>Atli Björgvin Oddsson – programador</p>
				<div class="menu">
						<ul>
							<li><a href="#"><i class="fas fa-caret-right"></i> Sobre Dev_21</a></li>
							<li><a href="#"><i class="fas fa-caret-right"></i> Tecnología</a></li>
							<li><a href="#"><i class="fas fa-caret-right"></i> Tendencias</a></li>
							<li><a href="#"><i class="fas fa-caret-right"></i> Informática</a></li>
						</ul>
					</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
				<h4><strong>Noticias más recientes</strong></h4>

				<div class="row noti_reciente-1">
					<div class="col-md-6">
						<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/facebook.jpg" alt="icono de servicio">
					</div>
					<div class="col-md-6">
						<h6>Un ciberataque a Facebook deja expuestas casi 50 millones de cuentas</h6>
						<p>Casi 50 millones de cuentas de Facebook quedaron expuestas a ...</p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/Apple_I_Computer.jpg" alt="icono de servicio">
					</div>
					<div class="col-md-6">
						<h6>Apple-I: cómo era el primer modelo de computadora fabricado por Apple (que acaba de venderse por US$375.000)</h6>
						<p>Fue fabricada en 1976 y es una de las pocas unidades funcionales de esa época que quedan en el mundo... </p>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>


<?php

	$arg = array (
		'post_type'      => 'news',
		'post_per_page'  => 10 ,
	);

	$get_arg = new WP_Query( $arg );

	while( $get_arg->have_posts() ){
		$get_arg->the_post();

	?>
	
	<!-- Noticias -->
	<div class="noticias-blog">
		<div class="container">

			<!-- Noticia 1 -->
			<div class="noticia-blog">
				<div class="row">
					<div class="col-md-12">
						<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/facebook.jpg" alt="icono de servicio">
						<div class="row">
							<div class="col-md-8">
								<h3 class="noti-titulo"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
							</div>
							<div class="col-md-4">
								<p class="izq noti-fecha"><i class="far fa-clock"></i> 28 Septiembre 2018</p>
							</div>
						</div>
						<p class="noti-text">Casi 50 millones de cuentas de Facebook quedaron expuestas a una intrusión ilegal ocurrida el pasado 25 de septiembre, informó la compañía este viernes.
						El equipo técnico de la red social dijo que trabaja para determinar "si estas cuentas se usaron incorrectamente o si se accedió a la información" de sus usuarios, según un comunicado.
						El cofundador de la red social Mark Zuckerberg explicó que tras una primera revisión "no hay ninguna evidencia que sugiera que estas cuentas han sido comprometidas"
						</p>
						<button><a href="<?php the_permalink() ?>"><i class="far fa-arrow-alt-circle-right"></i> Leer más</a></button>
						<div class="row">
							<div class="col-md-8">
								<p><strong>Tags:</strong> Tecnología / Facebook / Internet</p>
							</div>
							<div class="col-md-4">
								<p class="izq"><strong>Autor:</strong> BBC News Mundo</p>
							</div>
						</div>				
					</div>
				</div>

			</div>


			<!-- Noticia 2 
			<div class="noticia-blog">
				<div class="row">
					<div class="col-md-12">

						<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/Apple_I_Computer.jpg" alt="icono de servicio">

						<div class="row">
							<div class="col-md-8">
								<h3 class="noti-titulo"><?php the_title() ?></h3>
							</div>

							<div class="col-md-4">
								<p class="izq noti-fecha"><i class="far fa-clock"></i> 27 Septiembre 2018</p>
							</div>
						</div>

						<p class="noti-text">Fue fabricada en 1976 y es una de las pocas unidades funcionales de esa época que quedan en el mundo. Su precio original era de US$666 dólares... pero acaba de venderse en una subasta por US$375.000.

						Hablamos de una Apple-I, el primero modelo de computadora fabricado y comercializado por Apple.

						Fue diseñada por Steve Wozniak, mejor conocido como Woz, el cofundador de Apple.

						Y su socio, Steve Jobs, lo convenció de empaquetar y vender las máquinas.

						Se estima que Wozniak y Jobs vendieron unas 200 computadoras Apple-I en menos de un año, gracias a un acuerdo con una tienda de computadoras en Palo Alto, California, Estados Unidos.
						</p>

						<button><i class="far fa-arrow-alt-circle-right"></i> Leer más</button>
						
						<div class="row">
							<div class="col-md-8"> 
								<p><strong>Tags:</strong> Tecnología / Computación / Apple</p>
							</div>
							<div class="col-md-4">
								<p class="izq"><strong>Autor:</strong> Dave Lee</p>
							</div>
						</div>				
					</div>
				</div>
				<hr/>
			</div>-->
				
			
			<!-- Noticia 3 
			<div class="noticia-blog">
				<div class="row">
					<div class="col-md-12">

						<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/traductor.jpg" alt="icono de servicio">

						<div class="row">
							<div class="col-md-8">
								<h3 class="noti-titulo"><?php the_title() ?></h3>
							</div>
							<div class="col-md-4">
								<p class="izq noti-fecha"><i class="far fa-clock"></i> 27 Septiembre 2018</p>
							</div>
						</div>

						<p class="noti-text">Durante el Mundial de Rusia hubo un aumento brutal en el uso de Google Translate. La compañía dice que los aficionados trataban de entablar conversaciones con sus anfitriones y con otros asistentes al evento de todos los rincones del mundo.
						Por eso las palabras "estadio" y "cerveza" estuvieron entre las más buscadas a lo largo del torneo.

						Rusia 2018: 5 usos de Google Translate que tal vez no conocías y que lo hacen muy popular en el Mundial de fútbol.

						Los diccionarios no tardarán en desaparecer. Una encuesta reciente del British Council, en Reino Unido, encontró que cerca de dos tercios de los jóvenes entre 16 y 34 años usan aplicaciones de traducción para aprender idiomas y comprender la jerga local.
						</p>

						<button><i class="far fa-arrow-alt-circle-right"></i> Leer más</button>
						
						<div class="row">
							<div class="col-md-8">
								<p><strong>Tags:</strong> Tecnología / Idiomas / Inteligencia artificial</p>
							</div>
							<div class="col-md-4">
								<p class="izq"><strong>Autor:</strong> Emma Woollacott</p>
							</div>
						</div>
						
					</div>
				</div>
			</div> -->
			

			<!-- Flechas -->
			<div class="flechas-blog">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-2">
							<a href="#"><i class="far fa-arrow-alt-circle-left"></i></a>
						</div>
						<div class="col-sm-12 col-md-8">
							<div class="paginacion-blog">
								<ul class="pagination pagination-sm">
							    	<li class="page-item disabled">
							      		<a class="page-link" href="#" tabindex="-1">1</a>
							    	</li>
							    	<li class="page-item"><a class="page-link" href="#">2</a></li>
							    	<li class="page-item"><a class="page-link" href="#">3</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-12 col-md-2">
							<a href="#"><i class="far fa-arrow-alt-circle-right"></i></a>
						</div>
				</div>
				</div>
			</div>
		</div>
	</div>

	

	
	<?php }  wp_reset_postdata();

?>

<?php get_footer() ?>