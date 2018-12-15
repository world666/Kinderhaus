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

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
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
			<h2>Unsere Räume</h2>
		</div>
		<div class="container pad_seite">
			<div class = "row row_pad">	
				<div class="col-md-8">
				<p class="lead">Seit 1994 ist das Kinderhaus in der Hainstraße 10, im Fachwerkhaus gegenüber der Hauptpost untergebracht. Von hier aus sind Parks und Spielplätze der Stadt sowie die Fuldawiesen schnell zu Fuß zu erreichen.
				</p>
				<p class="lead"> Uns steht eine große Altbauwohnung im Erdgeschoss des Hauses zur Verfügung. Die Räume sind hell, freundlich gestaltet und nach Funktion und Art der Aktivitäten aufgeteilt:
				<ul class="liste">
					<li>Eingangs- und Garderobenbereich</li>
					<li>Ess- und Gruppenraum</li>
					<li>Spielraum</li>
					<li>Tobezimmer</li>
					<li>Kuschelzimmer</li>
					<li>Spielraum</li>
					<li>Ruhe- und Wickelraum</li>
					<li>Küche</li>
					<li>Toiletten- und Waschraum</li>
				</ul>
				</p>
				<p class="lead">Draußen im Hof steht uns ein Stück Garten zur Verfügung, das wir Eltern zum Spielplatz umgebaut haben: mit einem großen Sandkasten und vielen anderen Spielgeräten.
				</p>
				<img  src="img/unsere_raeume/raum2.png"  width="49%" class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Raum 2" >
				<img  src="img/unsere_raeume/raum3.png"  width="49%" class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Raum 3" >
			 </div>
				<div class="col-md-4 ">
					<img  src="img/unsere_raeume/raum1.png"  width="100%" class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Raum 1" ><br><br>
					<img  src="img/unsere_raeume/raum2.png"  width="100%" class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Raum 2" ><br><br>
					<img  src="img/unsere_raeume/raum3.png"  width="100%" class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Raum 3" >
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