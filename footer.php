<?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'header_menu' ) ); ?>
<?php } ?>

<?php wp_footer() ?>

<!-- Footer -->
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4 justify-content-center">
					<img src="<?php echo get_bloginfo('template_url') ?>/images/robot-head.svg" alt="logo dev21">
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
		<ul class="nav justify-content-center">
		  <li class="nav-item">
		    <a class="nav-link active" href="#dev21">Dev21</a>
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
		<ul class="nav justify-content-center redes-foo">
		  <li class="nav-item">
		    <a class="nav-link active" href="#"><i class="fab fa-facebook-square"></i></a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="#"><i class="fab fa-twitter-square"></i></a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="#"><i class="fab fa-linkedin"></i></a>
		  </li>				  		  
		</ul>
		<p>Dev_21 2018 <i class="far fa-copyright"></i></p>
	</div>
</body>
</html>
