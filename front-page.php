<?php get_header(); ?>

	<!-- Hero -->
	<!-- Parallax: <section class="hero-fp parallax-window" data-parallax="scroll" data-image-src="/wp-content/themes/dev21/assets/images/banner-1.svg"> -->
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
					<h2>Lorem Ipsum is simply<br> dummy text of the<br> printing.</h2>
					<p><a class="circulo"><i class="far fa-arrow-alt-circle-down"></i></a></p>
				</div>
			</div>
		</div>
	</div>

	<!-- Dev21 -->
	<div id="dev21" class="dev21">
		<div class="container">
			<h1>Dev_21</h1>
			<p class="dev21-par1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<p class="dev21-par2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
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
		<p class="serv-sub">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/icon1.svg" alt="icono de servicio">
					<h4>SERVICIO</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
				
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/icon2.svg" alt="icono de servicio">
					<h4>SERVICIO</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
				
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/icon3.svg" alt="icono de servicio">
					<h4>SERVICIO</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
			</div>

			<hr/>

			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/icon1.svg" alt="icono de servicio">
					<h4>SERVICIO</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/icon2.svg" alt="icono de servicio">
					<h4>SERVICIO</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/icon3.svg" alt="icono de servicio">
					<h4>SERVICIO</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Slogan -->
	<?php get_template_part(slogan) ?>

	<!-- Portafolio -->
	<div id="portafolio-fp" class="portafolio-fp">
		<h2>Portafolio</h2>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
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
		<p class="cont-sub">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
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
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta voluptatem, tenetur eum tempore minus libero voluptates eos doloremque.</p>
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