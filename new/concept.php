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
			$work_active = "active";
			include('header.php');
		?>
		
		<div class="container pad_seite">
			<h2>Unser Konzept</h2>
		</div>
		<div class="container pad_seite">		
		
			<div class = "row">	
				<div class="col-md-8">
					<h4>Worauf es uns ankommt</h4>	
					<blockquote class="blockquote">
						<p class="mb-0">Eine Welt ohne Kinder wäre wie ein Himmel ohne Sterne. </p>
						<footer class="blockquote-footer">Phil Bosman</footer>
					</blockquote>
					<p class="lead">
						Unser Kinderhaus ist ein Ort des Miteinanders. Wir möchten, dass sich die Kinder bei uns wohlfühlen und in warmer, familiärer Atmosphäre eine unbeschwerte Zeit verbringen.
						<br>
						In unserer pädagogischen Arbeit steht das Kind im Mittelpunkt. Jedes Kind ist einzigartig mit all seinen Gefühlen, Träumen, Wünschen und Ängsten. Wir nehmen jedes Kind so an wie es ist , mit seinen Stärken und Schwächen, und begegnen ihm mit Liebe und Toleranz. Wir achten auf ein Miteinander, das geprägt ist von Rücksichtnahme und Einfühlungsvermögen.
						<br>
						Kinder kommen mit sehr unterschiedlichen Voraussetzungen zu uns. Wir möchten die Kinder dort abholen, wo sie stehen, in ihrer körperlichen, emotionalen und geistigen Entwicklung begleiten und sie entsprechend ihrer individuellen Möglichkeiten unterstützen und fördern.
					</p>
				</div>
				<div class="col-md-4 ">
					<img class="img-responsive pull-right img_konzept" src="img/konzept/title1.png" alt="Worauf es uns ankommt">
				</div>
			</div>
			<hr>
			<div class = "row row_pad">	
				<div class="col-md-8">
					<h4>Pädagogische Ziele unserer Arbeitt</h4>
					<blockquote class="blockquote">
						<p class="mb-0">Man kann den Menschen nichts beibringen.<br>
										Man kann ihnen nur helfen, es in sich selbst zu entdecken. </p>
						<footer class="blockquote-footer">Galileo Galilei</footer>
					</blockquote>
					<p class="lead">
					Jedes Kind kommt mit unterschiedlichen Fähigkeiten und Fertigkeiten zu uns ins Kinderhaus. Wir wollen diese in unterschiedlichen Lernbereichen weiterentwickeln und die Selbst-, Sach- und Sozialkompetenzen der Kinder stärken.
						<ul class="liste">
							<li>Stärkung des Selbstbewusstseins, der Selbstständigkeit und der Eigeninitiative der Kinder</li>
							<li>Förderung der Lernfreude, der Neugierde, der Lust am Experimentieren und Entdecken</li>
							<li>Förderung des Sozialverhaltens und des Gemeinsinns</li>
							<li>Förderung der kindlichen Phantasie und Kreativität</li>
							<li>Förderung der Kommunikationsfähigkeit</li>
							<li>Befähigung zur Konfliktbewältigung</li>
							<li>Entwicklung kognitiver Fähigkeiten</li>
							<li>Förderung der Konzentrationsfähigkeit</li>
							<li>Entwicklung motorischer Fähigkeiten und Fertigkeiten</li>
							<li>Sensibilisierung der Sinne</li>
						</ul>
					</p>
				</div>
				<div class="col-md-4 ">
					<img class="img-responsive pull-right img_konzept" src="img/konzept/title2.png" alt="Pädagogische Ziele unserer Arbeitt">
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