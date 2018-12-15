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
			<h2>Unsere Öffnungszeiten</h2>
		</div>
		<div class="container pad_seite">
				<dl class="row zeit">
					<dt class="col-md-2" style="text-align: left;">Montag</dt>
					<dd class="col-md-10">7.15 bis 14.30 Uhr</dd>
					<dt class="col-md-2" style="text-align: left;">Dienstag</dt>
					<dd class="col-md-10">7.15 bis 14.30 Uhr</dd>
					<dt class="col-md-2" style="text-align: left;">Mittwoch*</dt>
					<dd class="col-md-10">7.15 bis 14.45 Uhr</dd>
					<dt class="col-md-2" style="text-align: left;">Donnerstag</dt>
					<dd class="col-md-10">7.15 bis 14.30 Uhr</dd>
					<dt class="col-md-2" style="text-align: left;">Freitag</dt>
					<dd class="col-md-10">7.15 bis 14.30 Uhr</dd>
				</dl>
				<p style="padding-bottom: 2em; font-style: oblique;">*Ein "Langer Tag" in der Woche, variabel   <span class="glyphicon glyphicon-circle-arrow-right"></span>    zur Zeit Mittwoch.</p>
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