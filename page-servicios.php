<?php get_header() ?>
	<!-- <?php the_post() ?>
	
	<?php the_post_thumbnail() ?>
	<?php the_title() ?>
	<?php the_content(); ?> -->

	<!-- Hero -->
	<section class="hero-serv">
		<div class="container">
			<h2><strong>Nuestros<br> Servicios</strong></h2>
			<p><a class="circulo3"><i class="far fa-arrow-alt-circle-down"></i></a></p>
		</div>
	</section>

	<!-- Servicios -->
	<div class="servicios-serv" id="servicios-serv">
		<div class="container">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<p id="serv-sub">Soluciones informáticas y tecnológicas para empresas y profesionales. Ofrecemos un amplio catálogo de soluciones y productos.

					Cada empresa presenta problemas o necesidades influidas por el entorno en el que trabaja. Dev21 proporciona soluciones particularizadas a esas necesidades tras el análisis de la situación, implementando mejoras que optimizan el rendimiento global del cliente.
					</p>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/icon1.svg" alt="icono de servicio">
					<h4>SOFTWARE A MEDIDA</h4>
					<p>Herramientas amigables y de fácil uso para visibilizar y automatizar los procesos de negocio, y con ello disminuir costos y mejorar las ventas e ingresos de la empresa.</p>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/icon2.svg" alt="icono de servicio">
					<h4>SOLUCIONES TECNOLÓGICAS</h4>
					<p>Desarrollamos sus aplicaciones web a medida. Usted decide si desea simplemente mostrar información referente a su empresa para facilitar el contacto con nuevos posibles clientes, o si desea crear su propia tienda on-line o sus catálogos digitales.</p>
				</div>
			</div>

			<hr/>

			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/icon3.svg" alt="icono de servicio">
					<h4>APLICACIONES MÓVILES</h4>
					<p>Amplían y mejoran los canales de comunicación con los clientes, diferencian positivamente a las empresas de su competencia y logran fidelizar y crean nuevas experiencias para el cliente final.</p>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/icon4.svg" alt="icono de servicio">
					<h4>DISEÑO UI / UX</h4>
					<p>Nos encargamos de la creatividad y usabilidad de tu proyecto a través de un enfoque que fusiona el diseño, el arte, la publicidad y la tecnología, ofreciendo estrategias comunicativas en multiformatos digitales y offline.</p>
				</div>
			</div>

			<hr/>
			
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/icon5.svg" alt="icono de servicio">
					<h4>INTEGRACIONES DE SISTEMAS</h4>
					<p>Posibilitan la gestión coordinada en tiempo real de distintas áreas de un negocio, integrando distintas tecnologías para optimizar la gestión y la inversión en los procesos.</p>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/icon6.svg" alt="icono de servicio">
					<h4>CONSULTORÍA INFORMÁTICA</h4>
					<p>Brindamos consultoría especializada en amplios temas de TI, basados en las buenas practicas de la Industria y con profesionales altamente capacitados.</p>
				</div>
			</div>
		</div>
	</div>

	<?php get_template_part(cotizacion) ?>

<?php get_footer() ?>