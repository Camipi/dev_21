# Dev_21 #

## Perfil del cliente ##
La empresa de soluciones tecnológicas llamada Dev_21 pide crear una página web, donde se muestren los servicios que ofrecen, así como también,los productos que han desarrollado para sus clientes.


## Requerimientos del cliente: ##

* Debe tener un home y 3 páginas internas.
	*Servicios
	*Portafolio
	*Blog

* Debe ser responsiva.


## Requerimientos generales ##

	- Una pagina web tipo landing page que contiene:
		- 1 barra de navegación 
		- 1 footer
		- 4 secciones
			§ 1ra sección: Es el header.
			§ 2da sección: Dev_21, información sobre la empresa
			§ 3ra sección: Servicios, introducción sobre los servicios ofrecidos en la empresa
			§ 4ta sección: Portafolio, portada de los productos realizados por la empresa
			§ 5ta sección: Contacto, información sobre correo de contacto, ubicación de oficinas y teléfonos de contacto
			§ 6ta sección: COtización, invitación al usuario a cotizar los productos ofrecidos por la empresa a través de un   formulario

	- 3 páginas internas:
		- Página de servicios, debe contener:
			§ Introdcucción a los servicios que ofrece la empresa
			§ Explicar los 6 servicios que ofrece la empres
			§ Sección que invite al usuario a cotizar los servicios de la empresa

		- Página de portafolio, debe contener:
			§ Introdcucción a los servicios que ofrece la empresa
			§ Portada de proyecto a mostrar( nombre del proyecto, nombre y logo del cliente)
			§ Invitación al usuario a cotizar los servicios de la empresa

		- Página de blog, debe contener:
			§ Portada con las noticias mas recientes
			§ Noticias: 
				•Portada de la noticia
				•Titulo
				•Fecha
				•Introdcucción de la noticia
				•Botón Ver más
				•Tags
				•Autor


## Requerimientos específicos ##

		- Desarrollarse en Wordpress(utilizar wp_boilerplate para la construcción de la plantilla)
		- Integrar Google Analytics
		- Integrar Google Maps
		- Secciones con grilla
		- Usar bootstrap


## Requisitos técnicos ##

* Debe desarrollarse en Wordpress
  Por lo que se deberá utilizar wp_boilerplate para la construcción de la plantilla.

* Debe integrar google analytics

* Debe integrar google maps


## Requerimientos visuales ##

- Layout
		- Utilizar bootstrap
	- Fuentes (Google Fonts)


		- Titulos: Maven Pro Bold / Heavy
		- Parrafos: Maven Pro Regular
		- Textos secundarios: Maven Pro Medio
	- Colores
		- Tipografia: 
			§ #58595B para textos de párrafos sobre fondo blanco y gris pálido.
			§ #2B4690 para textos de títulos
			§ #14264D para textos de títulos secundarios
		- Fondos:
			§ Barra de navegación: #FFFFFF
			§ Footer: #14264D
			§ Header: Imagen
	- Imágenes:
		- Entregadas por el cliente, en la guía de estilos proporcionada por el diseñador.
	- Iconos:
		- Íconos de FontAwesome


## Wireframes para desktop y mobile ##

![Wireframe](assets/images/desktop.png?raw=true "Desktop")

![Wireframe](assets/img/mobile.jpg?raw=true "Mobile")


## HTML/CSS ##

*Index*

.hero-fp
.country

.dev21
.dev21-par1
.dev21-par2
.dev21-fp

.servicios-fp
.serv-sub

.portafolio-fp

.contacto
.cont-sub

*Servicios*

.hero-serv

.servicios-serv

*Portafolio*

.hero-port

.proyectos-port

*Blog*

.hero-blog

.noticias-blog
.noticia-blog
.noti-titulo
.noti-fecha
.noti-text
.izq


### Link to GitHub ###
https://github.com/Camipi/dev_21


## Directorio ##

dev_21(carpeta raíz)
|
|__ wordpress 
				|__wp-admin  
				|				|__css
				|				|
				|				|__images
				|				|
				|				|__includes
				|				|
				|				|__js
				|				|
				|				|__maint
				|
				|	
				|__wp-content
				|				|
				|				|__languages
				|				|
				|				|__plugins
				|				|
				|				|__uploads
				|				|
				|				|__upgrade
				|				|
				|				|___themes
				|							|__dev21 
				|										|__ _includes
				|										|
				|										|__assets
				|										|
				|										|__functions
				|										|
				|										|__src
				|										|
				|										|__woocommerce
				|										|
				|										|__node_modules	
				|
				|
				|__wp-includes
								|__certificates
								|
								|__css
								|
								|__customize
								|
								|__fonts
								| 
								|__ID3
								|
								|__images
								|
								|__IXR
								|
								|__js
								|
								|__pomo
								|
								|__random_compat
								|
								|__Requests
								|
								|__rest-api
								|
								|__SimplePie
								|
								|__Text
								|
								|__theme-compat
								|
								|__widgets




## Usuario y contraseña de Wordpress ##

* Usuario:
  dev21

* Clave:
  eAN3mVTdX*Nt6H5DIq



## Instrucciones de despliegue ##

* Descargar o clonar el repositorio de github
 * https://github.com/Camipi/dev_21

* Descargar MAMP
 * Ir a http://localhost:8888/phpMyAdmin/
 * Importar la base de datos del proyecto (Ubicada en la carpeta raíz del proyecto)
 * Ir a http://localhost:8888/wp-myadmin
 * Iniciar sesión









