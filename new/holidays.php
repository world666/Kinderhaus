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
			<h2>Feste und Feiern</h2>
		</div>
		<div class="container pad_seite" style="padding-bottom: 2em;">
			<p class="lead" style="font-style: oblique;">Im Kinderhaus feiern wir regelmäßig folgende Feste:
				<dl class="lead" >
					<dt style="text-align: left;">Kindergeburtstage</dt>
					<dd>An diesem Tag steht das Geburtstagskind im Mittelpunkt. Wir feiern mit Spielen und einem gemeinsamen Geburtstagsfrühstück.</dd>
					<dt style="text-align: left;">Fasching</dt>
					<dd>Vor unserem Faschingsfest basteln wir, um das Kinderhaus für unser Faschingsfest zu dekorieren. Am Rosenmontag erscheinen wir verkleidet im Kinderhaus und feiern den Tag mit tollen Spielen.</dd>
					<dt style="text-align: left;">Ostern</dt>
					<dd>Wir basteln für Ostern und veranstalten einen ganztägiger Ausflug mit Ostereiersuche</dd>
					<dt style="text-align: left;">Sommerfest in Licherode</dt>
					<dd>Seit vielen Jahren ist unser Sommerfest in Licherode Tradition. An einem Sommerwochenende übernachten wir gemeinsam mit der ganzen Familie im Ökologischen Schullandheim. Wir haben Zeit für Spiele, zum Wandern, Grillen und um die Schulanfänger zu verabschieden.</dd>
					<dt style="text-align: left;">Laternenfest</dt>
					<dd>Am Martinstag laufen wir mit unseren selbst gebastelten Laternen durch den Wald oder durch die Stadt. Anschließend gibt es ein leckeres gemeinsames Abendessen.</dd>
					<dt style="text-align: left;">Weihnachtsfeier</dt>
					<dd>Kinder und Erzieherinnen gestalten ein Fest mit verschiedenen Darbietungen. Die zuvor im Kinderhaus gebackenen Plätzchen dürfen nun probiert werden. Für Herzhaftes wird auch gesorgt. Gegen Abend kommt dann der Weihnachtsmann...</dd>
					<dt style="text-align: left;">Übernachtung im Kinderhaus</dt>
					<dd>Einmal im Jahr übernachten die Kinder im Kinderhaus. Wir kochen etwas Leckeres und machen anschließend eine kleine „Nachtwanderung“.</dd>
				</dl>
			</p>
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