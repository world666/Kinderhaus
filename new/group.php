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
			<h2>Unsere Gruppe</h2>
		</div>
		<div class="container pad_seite">
			<div class = "row row_pad">	
				<div class="col-md-8">
			
				<p class="lead">Bei uns werden die Kinder in einer altersgemischten Gruppe betreut. Die überschaubare Gruppengröße mit dem guten Personalschlüssel ist ein großer Vorteil des Kinderhauses. 
					<br> <br>
					<img  src="img/ueber_uns/zahlen.png" style="display: block; margin: 0 auto;" width="50%" class="img-fluid mx-auto" alt="3 Erzieher für 18 Kinder" >
				</p>
				<p class="lead">Das Konzept der kleinen, altersgemischten Gruppe eröffnet den    Kindern die Möglichkeit, spielend voneinander zu lernen. Im gemeinsamen Gruppenalltag orientieren sich die Kleinen an ihren älteren Spielkameraden, die Großen lernen den verantwortungs- und rücksichtsvollen Umgang miteinander und mit den jüngeren Kindern. </p>
				<p class="lead">Deshalb versuchen wir, möglichst viele Aktivitäten altersübergreifend zu gestalten. So werden bei uns Mahlzeiten (Frühstück und Mittagessen) grundsätzlich gemeinsam eingenommen. Auch Ausflüge, Turnen, Singen und Vorlesen finden für alle Kinder statt.</p>
				<p class="lead">Jedoch hat jede Altersgruppe ihre besonderen Bedürfnisse und den besonderen Förderbedarf. Es ist deshalb sinnvoll und wichtig, dass im Rahmen des täglichen Gruppengeschehens Kinder unterschiedlicher Altersstufen zeitweise getrennt betreut werden. So können sich z.B. die Kleinen zum Vorlesen oder zum Ausruhen ins Kuschelzimmer zurückziehen, während mit den Vorschulkindern im Spielzimmer Verkehrsregeln geübt werden. </p>
				<p class="lead">Zur Zeit haben wir folgende Gruppenstruktur:
				<ul class="liste">
					<li>Die Kleinen (2-3 jährige): Emilia, Niels, Alexander, Lien, Neal, Florian</li>
					<li>Die Mittleren (3-4 jährige): Ben, Eva, Finn, Jonas, Luisa, Phil, Amelie</li>
					<li>Die Großen (Vorschulkinder): David, Felizia, Marie, Nina, Emma</li>
				</ul>
				</p>
				<p class="lead">Wir achten darauf, ein ausgewogenes Verhältnis zwischen den Altersgruppen sowie zwischen Jungen und Mädchen zu erhalten. </p>
			 </div>
				<div class="col-md-4 ">
					<img  src="img/ueber_uns/unsere_gruppe.jpg"  width="100%" class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image" >
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