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
			$work_active = "active";
			include('header.php');
		?>
		
		<div class="container pad_seite">
			<h2>Aktivitäten während der Woche</h2>
		</div>
		<div class="container pad_seite">
			<p class="lead"> Fester Bestandteil unserer Angebote sind regelmäßige Aktivitäten, die wir mit den Kindern unternehmen. Sie strukturieren die Woche und geben unseren Kindern Halt und Orientierung.
			</p>
			<div class = "row">	
				<div class="col-md-6">
					<img  src="img/aktivitaeten/montag.png" style="display: block; margin: 0 auto;" width="50%" class="img-fluid mx-auto" alt="Montag" >
					<br>
					<p class="p_own">Der <b>Montag</b> steht uns zur <em>freien Verfügung</em> und wird nach Bedarf genutzt. Die Kinder haben Zeit, um nach dem Wochenende im Kinderhaus anzukommen. Im Morgenkreis erzählen sie von ihren Wochenenderlebnissen. 
					</p>
					<br>
					<img  src="img/aktivitaeten/dienstag.png" style="display: block; margin: 0 auto;" width="50%" class="img-fluid mx-auto" alt="Montag" >
					<br>
					<p class="p_own"><b>Dienstags</b> ist unser <em>Entdecker- oder Ausflugstag</em>.  Wir verbringen den Vormittag im Freien: in den Hersfelder Parks, im Wald oder auf den Spielplätzen der Stadt. Regelmäßige Besuche der Stadtbücherei und des Bahnhofs stehen häufig auf dem Programm. So oft es geht, richten wir uns hierbei nach den Wünschen der Kinder. Zu den Erlebnistagen der besonderen Art gehören unsere Besuche in der Kinderakademie Fulda und bei der Feuerwehr. 
					</p>
					<br>
					<img  src="img/aktivitaeten/mittwoch.png" style="display: block; margin: 0 auto;" width="50%" class="img-fluid mx-auto" alt="Montag" >
					<br>
					<p class="p_own"><b>Mittwochs</b> gehen wir im 2-Wochen-Rhythmus zum <em>Turnen</em> in die benachbarte Turnhalle der Wilhelm-Neuhaus-Schule. Hier stehen uns 1,5 Stunden zur freien Verfügung. Genügend Zeit für Spiele, für das Turnen an Geräten und jede Menge Spaß.
					</p>
					<br>
				</div>
				<div class="col-md-6">
					<img  src="img/aktivitaeten/donnerstag.png" style="display: block; margin: 0 auto;" width="50%" class="img-fluid mx-auto" alt="Montag" >
					<br>
					<p class="p_own"><b>Donnerstags</b> findet unser wöchentlicher <em>Englisch-Spielkreis</em> statt. Das spielerische Kennenlernen der Sprache steht hier im Vordergrund. Die Kinder lernen die fremde Sprache über das Singen, Tanzen, Malen, Basteln und Spielen.
					</p>
					<br>
					<img  src="img/aktivitaeten/freitag.png" style="display: block; margin: 0 auto;" width="50%" class="img-fluid mx-auto" alt="Montag" >
					<br>
					<p class="p_own"><b>Freitags</b> ist unser <em>Kochtag</em>. Gemeinsam bereiten wir ein gesundes, kindgemäßes Mittagessen zu. Wir wollen den Kindern Lust und Freude am Zubereiten, Kochen und Essen gesunder Nahrungsmittel nahebringen. Da wird geschnippelt, geraspelt, geknetet, gerührt und gebraten und mit allen Kindern ein leckeres Menü gezaubert.
					</p>
					<br>
				</div>
			</div>
		</div>
	
		<!-- FOOTER -->
		<?php
			include('footer.html');
		?>
	
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
		<script src="../../new/assets/js/vendor/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
  </body>
</html>