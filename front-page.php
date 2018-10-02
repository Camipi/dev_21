<?php get_header(); ?>

	<!-- Hero -->
	<div class="hero-fp">
		<div class="country">
			<div class="row">
				<div class="col-md-12">
					<span id="country"></span>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="container">
				<div class="col-md-12">
					<h1><strong>Bienvenido a<br> Dev_21</strong></h1>
					<h2>Somos servicios integrales orientados  <br> a nuestros clientes.<br></h2>
					<p><a class="circulo"><i class="far fa-arrow-alt-circle-down"></i></a></p>
				</div>
			</div>
		</div>
	</div>

	<!-- Dev21 -->
	<div id="dev21" class="dev21">
		<div class="container">
			<h1>Dev_21</h1>
			<p class="dev21-par1">Los desafíos se presentan día a día y las áreas de tecnología son piezas fundamentales <br>para resolver todas las necesidades. </p>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<p class="dev21-par2">Somos una empresa de servicios de tecnología de información que brinda un apoyo constante a los procesos críticos del negocio de nuestros clientes. Estamos comprometidos con la calidad de nuestros servicios y contamos con la capacidad técnica y humana para integrar sistemas tecnológicos de alto valor agregado que permitan a nuestros clientes aumentar la productividad de sus negocios.</p>
				</div>
				<div class="col-md-2"></div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<p class="dev21-fp"><a class="circulo2"><i class="far fa-arrow-alt-circle-down"></i></a></p>
				</div>
			</div>
		</div>
	</div>

	<!-- Servicios -->
	<div id="servicios-fp" class="servicios-fp">
		<h2>Servicios</h2>
		<p class="serv-sub">Servicios que dan solución con valor</p>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/icon1.svg" alt="icono de servicio">
					<h6>SOFTWARE A MEDIDA</h6>
					<p>Herramientas amigables y de fácil uso para visibilizar y automatizar los procesos de negocio.</p>
				</div>
				
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/icon2.svg" alt="icono de servicio">
					<h6>SOLUCIONES TECNOLÓGICAS</h6>
					<p>Analizamos sus necesidades y diseñamos y desarrollamos una solución adaptada a sus necesidades.</p>
				</div>
				
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/icon3.svg" alt="icono de servicio">
					<h6>APLICACIONES MÓVILES</h6>
					<p>Amplían y mejoran los canales de comunicación con los clientes.</p>
				</div>
			</div>

			<hr/>

			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/icon4.svg" alt="icono de servicio">
					<h6>DISEÑO UI / UX</h6>
					<p>Nos encargamos de la creatividad y usabilidad de tu proyecto.</p>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/icon5.svg" alt="icono de servicio">
					<h6>INTEGRACIONES DE SISTEMAS</h6>
					<p>Posibilitan la gestión coordinada en tiempo real de distintas áreas de un negocio.</p>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/icon6.svg" alt="icono de servicio">
					<h6>CONSULTORÍA INFORMÁTICA</h6>
					<p>Brindamos consultoría especializada en amplios temas de TI.</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Slogan -->
	<?php get_template_part(slogan) ?>

	<!-- Portafolio -->
	<div id="portafolio-fp" class="portafolio-fp">
		<h2>Portafolio</h2>
		<p>Somos tu partner de Innovación y Tecnología, especialistas en el diseño de proyectos de desarrollo software a medida.</p>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/yagan-2.png" alt="placeholder de imagen">
				</div>

				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/yagan-5.png" alt="placeholder de imagen">
				</div>

				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/yagan-4.png" alt="placeholder de imagen">
				</div>
			</div>
		</div>
	</div>

	<!-- Contacto-->
	<div id="contacto" class="contacto">
		<h2>Contacto</h2>
		<p class="cont-sub">Si tienes un proyecto para tu empresa, cuéntanos y te contactaremos.</p>
		<div id="map"></div>

		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 cont-mail">
					<p><i class="fas fa-envelope"></i> contacto@dev21.cl</p>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 cont-dir justify-content-center">
					<p>
						<i class="fas fa-map-marker-alt"></i> Selecciona la oficina que deseas visitar
						<select class="custom-select">
							<option selected>Oficinas</option>
							<option value="1">Manuel Rodríguez 867. Ofic. 708</option>
							<option value="2">Lord Cochrane 635. Ofic. 1409A</option>
						</select>
					</p>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 cont-telf">
					<p><i class="fas fa-phone-volume"></i> +56 9 7977 3457</p>
				</div>
			</div>
		</div>

		<div id="cotizacion-fp" class="cotizacion-fp">
 			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
						<h4>Pide tu cotización</h4>
						<p>Con uno de nuestros asesores especializados y soluciona todas tus necesidades de tecnología para optimizar el rendimiento, las operaciones y las comunicaciones de tu empresa.</p>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
						<form>

							 <div class="form-row">
							    <div class="form-group col-md-6">
							    	<label for="inputEmail4">Nombre</label>
							    	<input type="email" class="form-control" id="inputEmail4" placeholder="Ingresa tu nombre">
							    </div>
							    <div class="form-group col-md-6">
							    	<label for="inputPassword4">Email</label>
							    	<input type="password" class="form-control" id="inputPassword4" placeholder="Ingresa tu email">
							    </div>
							</div>
						  	<div class="form-group">
						    	<label for="exampleFormControlTextarea1">Mensaje</label>
						    	<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Ingresa tu mensaje"></textarea>
						  	</div>
							<button type="submit" class="btn btn-primary">Enviar</button>

						</form>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126194309-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-126194309-1');
</script>

<script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: -25.344, lng: 131.036};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 8, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
</script>

<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2knWT2b3Q6Wc33EFX_35pINcqpHoAN2g&callback=initMap">
</script>



<?php get_footer(); ?>