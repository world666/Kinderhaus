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
			$parents_active = "active";
			include('header.php');
		?>
		
		<div class="container pad_seite">
			<h2>Der Verein</h2>
		</div>
		<div class="container pad_seite" style="padding-bottom: 2em;">
			<p class="lead">Das Kinderhaus ist eine öffentlich anerkannte, gemeinnützige Einrichtung zur Kinderbetreuung, gegründet und getragen von einer selbstverwalteten Elterninitiative – dem <em>Verein „Eltern-Kind-Gruppe e.V.“</em>
				<br>Das Hauptorgan des Vereins ist die Elternversammlung. Die Versammlung wählt den Vorstand, welcher zur Zeit aus zwei Mitgliedern besteht. Weiterhin werden ein Kassenwart und zwei Kassenprüfer gewählt. 
				<br>Die Grundlage der Vereinsarbeit ist die Satzung, die auch alle wichtigen Informationen zur Mitgliedschaft enthält.
				<br>Die Finanzierung des Vereins wird durch die monatlichen Beiträge der Mitglieder sowie die Fördermittel der Stadt Bad Hersfeld und des Landes Hessen sichergestellt.
			</p>
			<p class="lead">Eltern, die ihre Kinder bei uns anmelden, werden automatisch Mitglieder im Verein und somit in die Planung und Organisation des Kindergartenlebens mit einbezogen. Ein Einsatz, der mit hohem Maß an Transparenz und Mitgestaltungsmöglichkeiten belohnt wird. Als Elternteil bekommt man bei uns sehr viel von dem mit, was das Kind täglich erlebt und wie es sich entwickelt. Es findet ständig ein konstruktiver Austausch mit den Erzieherinnen und anderen Eltern statt, der von allen Beteiligten als eine Bereicherung empfunden wird. Nicht zuletzt entstehen durch die aktive Beteiligung der Eltern engere und vertrautere Bindungen, die sich auch auf die Kinder übertragen und die in dieser Form in den anderen, größeren Kindergärten nicht zu finden sind. 
			</p>
			<p class="lead">Regelmäßig treffen sich Eltern und Erzieherinnen zu einem Elternabend und besprechen anstehende Vorhaben, Projekte oder auch Probleme. Wir pflegen einen freundschaftlichen und offenen Umgang miteinander. Vorschläge und konstruktive Kritik sind jederzeit willkommen. Gegenseitiges Vertrauen, Unvoreingenommenheit, Kritikfähigkeit und gemeinsames Engagement bilden das Fundament für die gute Vereinsarbeit und somit für die Qualität des Kinderhauses. Die Freude, mit der unsere Kinder die Einrichtung besuchen, zeigt uns, dass es funktioniert.</p>
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