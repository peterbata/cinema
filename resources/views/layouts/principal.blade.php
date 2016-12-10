{{--PARTE REPETITIVA DE LA PARTE FRONTEND DE LAS VISTAS DE LA PAGINA--}}
<!DOCTYPE html>
<!--REPITE-->
<html>
<head>
<title>CINEMA - BRAYAN MURPHY</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cinema Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
	<!-- header-section-starts -->
	<div class="full">
			<div class="menu"> <!-- MENU DEL COSTADO-->
				<ul>
					<li><a class="active" href="/"><i class="home"></i></a></li>
					<li><a href="/reviews"><div class="cat"><i class="watching"></i><i class="watching1"></i></div></a></li>
					<li><a href="contacto"><div class="cnt"><i class="contact"></i><i class="contact1"></i></div></a></li>
				</ul>
			</div>
		<div class="main">
      <!--FIN REPITE-->

<!-- LA PARTE QUE REPITE O EN COMUN A LAS VIAS SE PONE EN ESTE DOCUMENTO Y DESPUES SE HEREDA DEJANDO SOLO LA PARTE QUE ES CARACTERISTICA DE LA VISTA, POR EJEMPLO INDEX, CONTACTO Y OTROS CAMPOS QUE SON DIFERENTES -->
 		@yield('content') <!--ACA HACEMOS REFERENCIA QUE EN ESTA PARTE IRA EL CONTENIDO DIFERENTE Y SERA LO QUE HEREDAREMOS-->






<!--REPITE-->
	<div class="footer">
		<h6>DECLARACION : </h6>
		<p class="claim">Este es un freebies y no un sitio web oficial, no tengo intención de revelar ninguna película, marca, noticias. Mi objetivo aquí es entrenar o ejercitar mi habilidad y compartir este freebies.</p>
		<h4>CORREO:</h4>
		<a href="https://www.facebook.com/brayanmurphy.crespoespinoza">BrayanMurphyC@gmail.com</a>
		<h4>FACEBOOK:</h4>
		<a href="https://www.facebook.com/brayanmurphy.crespoespinoza">brayanmurphy.crespoespinoza</a>
		<div class="copyright">
			<p> Template by  <a href="http://w3layouts.com">  W3layouts</a></p>
		</div>
	</div>
	</div>
	</div>
			<script type="text/javascript">
		$(window).load(function() {

		  $("#flexiselDemo1").flexisel({
				visibleItems: 6,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: false,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint:480,
						visibleItems: 2
					},
					landscape: {
						changePoint:640,
						visibleItems: 3
					},
					tablet: {
						changePoint:768,
						visibleItems: 4
					}
				}
			});
			});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	<div class="clearfix"></div>
</body>
</html>
<!--FIN REPITE-->
