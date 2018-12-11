<!DOCTYPE html>
<html lang="DE">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Ihr Kinderhaus in Bad Hersfeld. Hier finden Sie die wichtige Informationen über unsere Kindergarten."> <!--  Задается описание страницы сайта в поиске -->
    <meta name="author" content="">
	 <link rel="icon" href="ico/favicon.ico">
	
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
			$contacts_active = "active";
			include('header.php');
		?>
		
		<div class="container pad_seite">
			<h2>Kontakt</h2>
		</div>
		<div class="container pad_seite">
			<p class="lead">Wir vergeben regelmäßig, auch mitten im Kindergartenjahr, Plätze und freuen uns auf Nachwuchs. Rufen Sie uns an oder kommen Sie einfach vorbei.</p>
			<div class="row row_pad">
				<div class="col-md-4 bottom_text">
					<address>
					  <strong>Das Kinderhaus</strong><br>
					  Hainstraße 10<br>
					  36251, Bad Hersfeld<br>
					  <abbr title="Phone">Tel.:</abbr> (06621) 74443<br>
					  <a href="mailto:#"> info@kinderhaus-hersfeld.de</a>
					</address>
				</div>
				<div class="google-map col-md-8">
					<div style="width: 100%;">
						<iframe src="https://maps.google.com/maps?width=700&amp;height=250&amp;hl=en&amp;q=hainstrasse%2010%2C%20Bad%20Hersfeld%2C%20Germany+(Titel)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
					</div>
				</div>
				<br>
			</div>
			<p class="lead"><span style="color: #9BCA3B;">Öffnungszeiten:</span> täglich 7.30-14.30 Uhr<br>
				<span style="font-size:small;">Außerhalb der Öffnungszeiten erreichen Sie uns unter der <abbr title="Phone">Tel.:</abbr> (06621) 794490 <span>
			</p>
			<h4>Wenn Sie Fragen haben, schreiben Sie uns eine Nachricht:</h4>
			<div class="row" style="padding-bottom: 0em;">
				<div class="form-group col-md-6">
					<label for="name" class="p">Name</label>
					<input type="text" class="form-control" id="name" placeholder="Ihr Name" required>
				</div>
				<div class="form-group col-md-6">
					<label for="email" class="p">Email</label>
					<input type="email" class="form-control" id="email" placeholder="Ihr email" required>
				</div>
			</div>
			<div class="form-group">
				<label for="message" class="p ">Nachricht</label>
				<textarea id="message" class="form-control" rows="5" placeholder="Schreiben SIe eine Nachricht" required></textarea>
			</div>
			<div style="padding-bottom: 25px;">
				<button type="submit" class="btn btn-success">Submit</button>
			</div>
			<br>
		</div>
	
		<!-- FOOTER -->
		<?php
			include('footer.html');
		?>
		
		<script src="js/script.js"></script>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
		<script src="../../new/assets/js/vendor/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
  </body>
</html>