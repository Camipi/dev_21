<?php get_header() ?>

<?php

	$arg = array (
		'post_type'      => 'news',
	);

	$get_arg = new WP_Query( $arg );

	while( $get_arg->have_posts() ){
		$get_arg->the_post();

	?>


		<div class="noticia-single">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/facebook.jpg" alt="icono de servicio">
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<h3 class="noti-titulo">Un ciberataque a Facebook deja expuestas casi 50 millones de cuentas</h3>
					<p class="noti-fecha"><i class="far fa-clock"></i> 28 Septiembre 2018</p>
					<div class="noti-text-single">
						<p>Casi 50 millones de cuentas de Facebook quedaron expuestas a una intrusión ilegal ocurrida el pasado 25 de septiembre, informó la compañía este viernes.</p>

						<p>El equipo técnico de la red social dijo que trabaja para determinar "si estas cuentas se usaron incorrectamente o si se accedió a la información" de sus usuarios, según un comunicado.</p>

						<p>El cofundador de la red social Mark Zuckerberg explicó que tras una primera revisión "no hay ninguna evidencia que sugiera que estas cuentas han sido comprometidas".</p>

						<p>"Nos enfrentamos a constantes ataques de personas que quieren tomar cuentas o robar información en todo el mundo. Aunque me alegra que hayamos encontrado esto, reparado la vulnerabilidad, y asegurado las cuentas que pueden estar en riesgo, la realidad es que tenemos que seguir desarrollando nuevas herramientas para evitar que esto ocurra en primer lugar", dijo Zuckerberg en su perfil.</p>

						<p>8 razones que muestran que Facebook alcanzó su punto máximo y ahora puede estar perdiendo influencia
						"Nuestra investigación aún está en sus primeras etapas. Pero está claro que los atacantes explotaron una vulnerabilidad en el código de Facebook", informó la compañía estadounidense.</p>

						<p>Como medida de seguridad, los usuarios de 90 millones de cuentas -40 millones más que las que se cree fueron vulneradas- fueron puestas bajo aviso sobre la intrusión.</p>

						<p>Según Facebook, después de que hayan vuelto a iniciar sesión, los usuarios recibirán una notificación explicando lo sucedido.</p>

						<p>La investigación de Facebook indica que el ataque ocurrió a través del código que usa la red social en la función "Ver como".</p>

						<p>Esta característica permite a los usuarios tener una vista previa de cómo ven otros su perfil.</p>

						<p>El código fue vulnerado por los ciberatacantes que "robaron tokens"de acceso a Facebook, los cuales son claves digitales que mantienen a los usuarios conectados a la red social sin tener que volver a poner sus contraseñas.</p>

						<p>El informe que revela que Facebook sabe incluso cómo mueves tu mouse. Esos tokens "podrían ser utilizados para acceder a las cuentas de las personas", explicó la compañía.</p>

						<p>"Hemos desactivando temporalmente la función 'Ver como' mientras llevamos a cabo una revisión de seguridad exhaustiva", añadió.</p>

						<p>Esta falla de seguridad se produjo en un momento en el que Facebook está intentando convencer a los legisladores estadounidenses y en el resto del mundo de que es capaz de proteger la información de sus usuarios.</p>

						<p>Este viernes, durante una conferencia telefónica, Zuckerberg dijo que la empresa se toma con seriedad los temas de seguridad ante lo que calificó como ataques constantes por parte de personas con malas intenciones.</p>

						<p>Las acciones de la empresa, que tiene más de 2.000 millones de usuarios en todo el mundo, cayeron más de 3% durante la jornada.
						</p>
					</div>

					<p><strong>Autor:</strong> BBC News Mundo</p>
					<p><strong>Tags:</strong> Tecnología / Facebook / Internet</p>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-4">
					<h5><strong>Noticias más recientes</strong></h5>
					<h6>Apple-I: cómo era el primer modelo de computadora fabricado por Apple (que acaba de venderse por US$375.000)</h6>
					<p>Fue fabricada en 1976 y es una de las pocas unidades funcionales de esa época que quedan en el mundo...</p>
					<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/Apple_I_Computer.jpg" alt="icono de servicio">
					<hr/>
					<h6>Los errores más vergonzosos de las aplicaciones de traducción (y cómo pretenden solucionarlos)</h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti a tempora ratione ipsum unde.</p>
					<img class="img-fluid" src="<?php echo get_bloginfo('template_url') ?>/assets/images/traductor.jpg" alt="icono de servicio">
				</div>
			</div>
		</div>
	</div>
<?php } wp_reset_query(); ?>


<?php get_footer() ?>