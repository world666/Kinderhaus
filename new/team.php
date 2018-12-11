<!DOCTYPE html>
<html lang="DE">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> <!--  Задается отображение согласно ширине устройсва, пользователь не может масштабировать, только скролл -->
	<meta name="description" content="Ihr Kinderhaus in Bad Hersfeld. Hier finden Sie die wichtige Informationen über unsere Kindergarten."> <!--  Задается описание страницы сайта в поиске -->
	<link rel="shortcut icon" href="ico/favicon.ico">
	
    <title>Kinderhaus in Bad Hersfeld</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->

    <link href="css/main.css" rel="stylesheet"> 	<!-- ?????Нужно свой файл создавать или подключить bootstrap css?????? -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  
	<body>
	
		<?php
			$about_active = "active";
			include('header.php');
		?>
		
		<div class="container pad_seite">
			<h2>Unsere Team</h2>
		</div>
		<div class="container pad_seite">
			<div class = "row">	
				<div class="col-md-8">
					<h4>Nancy Weidemann</h4>
					<p class="p_own">Mein Name ist Nancy Weidemann und ich arbeite seit 2007 in unserem Kinderhaus. Dort habe ich mein Anerkennungsjahr absolviert und bin seitdem als staatlich anerkannte Erzieherin tätig.
					</p>
					<p class="p_own">In meiner Arbeit lege ich Wert darauf, dass wir mit den Kindern einen harmonischen Vormittag erleben. Wir versuchen den Kindern zu vermitteln, wie wichtig es ist, sich gegenseitig zu akzeptieren und zu respektieren. Dies ist besonders im Zusammenleben zwischen unseren Kleinsten und den Vorschulkindern von großer Bedeutung. Einen hohen Stellenwert hat für mich auch die individuelle Förderung jedes einzelnen Kindes.
					</p>
					<p class="p_own">Die Schwerpunkte meiner Arbeit liegen in der Naturpädagogik, dem Kreativen und der Kleinkindpädagogik. Hier ist es mir sehr wichtig, die Kleinsten liebevoll in unsere Gruppe zu integrieren und ihnen als feste Bezugsperson den Start in das Kindergartenleben zu erleichtern. </p>
					</p>
				</div>
				<div class="col-md-4 ">
					<img  src="img/unsere_team/nancy.png"  width="100%" class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image" >
				</div>
			</div>
			<hr>
			<div class = "row">	
				<div class="col-md-8">
					<h4>Manuella</h4>
					<p class="p_own">Mein Name ist Nancy Weidemann und ich arbeite seit 2007 in unserem Kinderhaus. Dort habe ich mein Anerkennungsjahr absolviert und bin seitdem als staatlich anerkannte Erzieherin tätig.
					</p>
					<p class="p_own">In meiner Arbeit lege ich Wert darauf, dass wir mit den Kindern einen harmonischen Vormittag erleben. Wir versuchen den Kindern zu vermitteln, wie wichtig es ist, sich gegenseitig zu akzeptieren und zu respektieren. Dies ist besonders im Zusammenleben zwischen unseren Kleinsten und den Vorschulkindern von großer Bedeutung. Einen hohen Stellenwert hat für mich auch die individuelle Förderung jedes einzelnen Kindes.
					</p>
					<p class="p_own">Die Schwerpunkte meiner Arbeit liegen in der Naturpädagogik, dem Kreativen und der Kleinkindpädagogik. Hier ist es mir sehr wichtig, die Kleinsten liebevoll in unsere Gruppe zu integrieren und ihnen als feste Bezugsperson den Start in das Kindergartenleben zu erleichtern. </p>
					</p>
				 </div>
				<div class="col-md-4 ">
					<img  src="img/unsere_team/nancy.png"  width="100%" class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image" >
				</div>
			</div>
			<hr>
			<div class = "row row_pad">	
				<div class="col-md-8">
					<h4>Kevin</h4>
					<p class="p_own">Mein Name ist Nancy Weidemann und ich arbeite seit 2007 in unserem Kinderhaus. Dort habe ich mein Anerkennungsjahr absolviert und bin seitdem als staatlich anerkannte Erzieherin tätig.
					</p>
					<p class="p_own">In meiner Arbeit lege ich Wert darauf, dass wir mit den Kindern einen harmonischen Vormittag erleben. Wir versuchen den Kindern zu vermitteln, wie wichtig es ist, sich gegenseitig zu akzeptieren und zu respektieren. Dies ist besonders im Zusammenleben zwischen unseren Kleinsten und den Vorschulkindern von großer Bedeutung. Einen hohen Stellenwert hat für mich auch die individuelle Förderung jedes einzelnen Kindes.
					</p>
					<p class="p_own">Die Schwerpunkte meiner Arbeit liegen in der Naturpädagogik, dem Kreativen und der Kleinkindpädagogik. Hier ist es mir sehr wichtig, die Kleinsten liebevoll in unsere Gruppe zu integrieren und ihnen als feste Bezugsperson den Start in das Kindergartenleben zu erleichtern. </p>
					</p>
				 </div>
				<div class="col-md-4 ">
					<img  src="img/unsere_team/nancy.png"  width="100%" class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image" >
				</div>
			</div>
		</div>
	
		<!-- FOOTER -->
		<?php
			include('footer.html');
		?>
	
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
		<script src="../../new/assets/js/vendor/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
  </body>
</html>