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
			$payments_active = "active";
			include('header.php');
		?>
		
		<div class="container pad_seite">
			<h2>Beiträge</h2>
		</div>
		<div class="container pad_seite" style="padding-bottom: 2em;">
			<p class="lead"> 
				<span style="color: #9BCA3B;" class="fas fa-euro-sign"></span> 
				Der einheitliche monatliche Beitrag beträgt zur Zeit <em>160 Euro pro Kind</em>.
				<br><span style="font-size: small;">Die Kosten für das Mittagessen sind in diesem Betrag nicht enthalten. </pan>
			</p>
			<p class="lead">Ermäßigungen sind nicht vorgesehen, es besteht jedoch für finanziell schlechter gestellte Familien die Möglichkeit, vom Jugendamt einen Zuschuss zum Kindergartenbeitrag zu bekommen.</p>
			<p class="lead">Für Kinder, die sich im letzten Kindergartenjahr vor der Einschulung befinden, wird ein Zuschuss in Höhe von derzeit 100 Euro pro Monat und Kind aus dem BAMBINI-Programm des Landes Hessen gezahlt.</p>
			<p class="lead">Neben den Elternbeiträgen tragen die Stadt Bad Hersfeld und das Land Hessen mit ihren Fördermitteln einen wesentlichen Teil zur Finanzierung des Kinderhauses bei. </p>
			<p class="lead">Durch eine solide Kassenführung und durch das tatkräftige und andauernde Engagement der Vereinsmitglieder konnte für die Arbeit des Kinderhauses eine sichere finanzielle Basis geschaffen werden.</p>
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