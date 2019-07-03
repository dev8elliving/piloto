<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ICALMA | EXEQUIEL </title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Encode+Sans:300,400,500,600,700" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="assets/css/style.css?ver=1.0">
	
	<!-- Global site tag (gtag.js) - Google Ads: 785660069 --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-785660069"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-785660069'); </script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128130978-3"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-128130978-3');
	</script>

	<!-- Google Analytics -->
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-128130978-3', 'auto');
	ga('send', 'pageview');
	</script>
	<!-- End Google Analytics -->

	<!-- INFLUENCIAME -->
    <!-- Global site tag (gtag.js) - Google Ads: 785660069 --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-785660069"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-785660069'); </script>

    <!-- Event snippet for Icalma - Barcelona conversion page In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. --> <script> function gtag_report_conversion(url) { var callback = function () { if (typeof(url) != 'undefined') { window.location = url; } }; gtag('event', 'conversion', { 'send_to': 'AW-785660069/MMpvCIvCkosBEKXx0PYC', 'value': 50.0, 'currency': 'CLP', 'event_callback': callback }); return false; } </script>

</head>
<body>
	
	<!-- LOADER -->
	<div class="loader">
		<img src="assets/images/icalma.svg" alt="logo icalma">
	</div>
	
	<!-- HEADER -->
	<header>
		<nav class="nav-1">
		  <div class="shadow-mob"></div>
		  <div class="container cont-laptop">
		    <div class="row row-0m">
		      <div class="col-lg-3 col-12">
		        <div class="hamburguesa"> 
		          <div class="pan"></div>
		          <div class="carne"></div>
		          <div class="queso"></div>
		        </div>
		        <a href="#home" class="soft"><img class="logo" src="assets/images/icalma.svg" alt="Inmobiliaria ICALMA"></a>
		      </div>
		      <div class="col-lg-9 col-12 menu_mob">
		        <ul>
		          <li><a href="#desc" class="soft">El Proyecto</a></li>
		          <li><a href="#ubicacion" class="soft">Ubicación</a></li>
		          <li><a href="#elige_tu_depa" class="soft">Elige tu Depto</a></li>
<!-- 		          <li><a href="#simula-credito" class="soft">Simula tu Crédito</a></li> -->
<!-- 		          <li><a href="#" class="cotiza soft">Post Venta</a></li>
 -->		          <li><a onclick="ga('send', 'event', 'btn', 'click', 'btn_cotiza_aqui_header');" href="#modal_formulario" data-toggle="modal" class="cotiza soft">Cotiza Aquí</a></li>
		        </ul>
		      </div>
		    </div>
		  </div>
		</nav>
	</header>

	<!-- wrapper -->
	<div class="wrapper">

		<!-- HOME -->
		<section id="home"
			data-paroller-factor="0.3"
			data-paroller-factor-sm="0.3"
			data-paroller-factor-xs="0.3">
			<div class="container">
				<div class="texto_home">
					<h3 class="text2 text--a">
						<img src="assets/images/exequiel.svg" alt="exequiel logo">
					</h3>
					<h4 class="text3 text--a">
						Vive hiperconectado, en el mejor sector de la Florida.						
					</h4>
				</div>
			</div>
		</section>

		<!-- DESC -->
		<section id="desc">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="p-alto">
							Diseño, <span>creatividad</span> y ubicación únicas.
						</p>
					</div>
				</div>
			
			<!-- galeria -->
			<?php include('galeria.php'); ?>
			<!-- fin galeria -->

		</section>
		<!-- FIN DESC -->
		
		<!-- ELIGE TU DEPA -->
		<?php include('elige-tu-depa.php') ?>
		<!-- FIN ELIGE TU DEPA -->

		<!-- UBICACION -->
		<section id="ubicacion" class="ubi--off">
			<div class="container">
				<div class="border--top"></div>
				<div class="row">
					<div class="col-lg-12 position-relative">
						<p class="ubicacion">
							Ubicación Sala de Ventas
						</p>
						<p class="direccion">
							Av. Departamental 0797, La Florida
						</p>														
					</div>
					<div class="col-lg-12">
						<p class="conecta">
							Vive cerca de todo lo que más te gusta, conectado a malls, autopistas y a pocos minutos de Ñuñoa, Providencia, Peñalolén y el sector sur de Santiago.
						</p>
					</div>
				</div>
			</div>
			<!-- mapa barcelona -->
			<div class="mapa-icalma">        
				<iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3326.6956689806652!2d-70.6054908842634!3d-33.50929420792184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662d0694fe5d685%3A0x913f49a16e74a16a!2sAv.+Departamental+797%2C+La+Florida%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses!2scl!4v1550697785138" frameborder="0" style="border:0" allowfullscreen=""></iframe>
			</div>
			<div class="container">
				<div class="row">
					<ul class="btns_ubicacion">
						<li class="nop bro">
							<div class="dot"></div>
							<a class="lis" href="">DESCARGA BROCHURE</a>
						</li>
						<li class="nop">
							<div class="dot"></div>
							<a class="lis" href="callto:56934144965">(+56 9) <span>3414 4965</span></a>
						</li>
						<li>
							<a href="#modal_formulario" data-toggle="modal">
								VEN A VISITARNOS <br>
								<span>Lunes a domingo, de 10:00 a 19:00 hrs.</span>								
							</a>
						</li>
					</ul>
				</div>
			</div>
		</section>
		<!-- FIN UBICACION -->

		<!-- CONOCE -->
		<section id="conoce">
			<h2>
				Conoce más proyectos Icalma
			</h2>
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="boxconoce">
							<a href="http://www.inmobiliariaicalma.cl/macul" class="link" target="_blank">
								<img src="assets/images/conoce_thumb3.jpg" alt="inmobiliaria icalma thumb11">
								<div class="textconoce p-4">
									<p class="ical">
										<img src="assets/images/icalma-isotipo.svg" alt="Icalma isotipo">
									</p>
									<p class="lugar">MACUL 3401</p>
									<p class="dir">MACUL</p>
									<p class="des">Descubre el valor de vivir en una gran comuna.</p>
								</div>
							</a>
						</div>
					</div>					
					<div class="col-lg-4">
						<div class="boxconoce">
							<a href="http://www.inmobiliariaicalma.cl/barcelona" class="link" target="_blank">
								<img src="assets/images/conoce_thumb1.jpg" alt="inmobiliaria icalma thumb11">
								<div class="textconoce p-4">
									<p class="ical">
										<img src="assets/images/icalma-isotipo.svg" alt="Icalma isotipo">
									</p>
									<p class="lugar">BARCELONA</p>
									<p class="dir">LA FLORIDA</p>
									<p class="des">Descubre el privilegio de vivir conectado a todo lo que quieres.</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="boxconoce">
							<a href="http://www.inmobiliariaicalma.cl/cuarta_avenida" class="link" target="_blank">
								<img src="assets/images/conoce_thumb2.jpg" alt="inmobiliaria icalma thumb22">
								<div class="textconoce p-4">
									<p class="ical">
										<img src="assets/images/icalma-isotipo.svg" alt="Icalma isotipo">
									</p>
									<p class="lugar">CUARTA AVENIDA</p>
									<p class="dir">SAN MIGUEL</p>
									<p class="des">Elige vivir con calidad en un barrio histórico y actual.</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="invisible"></div>
		</section>
		<!-- FIN CONOCE -->

	</div>

	<!-- CONTFIX -->
	<div class="contfix">
		<!-- baja -->
		<section id="baja">
			<div class="container">
				<div class="row">
					<img src="assets/images/logo_baja.png" alt="logo icalma baja">
				</div>
			</div>
		</section>
		<!-- fin baja -->

		<!-- LEY -->
		<section id="ley">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="ley">
							Las imágenes, planos, textos y medidas contenidas en esta web son referenciales, por lo que no representan necesariamente la realidad ﬁnal del proyecto, no constituyen parte de un documento legal relacionado con esta propiedad. Lo anterior se informa en virtud de lo señalado en la Ley Nº 19.472.
						</p>						
					</div>
				</div>
			</div>
		</section>
		<!-- FIN LEY -->

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<p>Inmobiliaria Icalma © 2018 Todos los derechos reservados</p>
					</div>
<!-- 					<div class="col-lg-6">
						<img src="assets/images/kma.png" alt="KMA IMG">
					</div> -->
				</div>
			</div>
		</footer>
	</div>	
	<!-- FIN CONTFIX -->
	
	<!-- formulario -->
	<?php include('form.php'); ?>

	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="appform/jquery.rut.js"></script>
	<script src="appform/ajax.js"></script>	
  	<script src="assets/js/jquery.paroller.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.fancybox.min.js"></script>
	<script src="assets/js/app.js"></script>
</body>
</html>