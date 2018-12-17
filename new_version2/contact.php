<!DOCTYPE html>
<html lang="DE">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="Ihr Kinderhaus in Bad Hersfeld. Hier finden Sie die wichtige Informationen über unsere Kindergarten.">
		<meta name="author" content="">
		<link rel="icon" href="ico/favicon.ico">

		<title>Kinderhaus in Bad Hersfeld</title>

		<link href="css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="fontawesome/css/all.css">
		<link href="css/main.css" rel="stylesheet">
		<link rel="stylesheet" href="css/animate.css">
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
					 <span class="fas fa-phone"></span>  (06621) 74443<br>
					 <span class="fas fa-envelope"></span><a href="mailto:info@kinderhaus-hersfeld.de"> info@kinderhaus-hersfeld.de</a>
					</address>
				</div>
				<div class="google-map col-md-8">
					<div>
						<iframe width="100%" height="250 px" src="https://maps.google.com/maps?width=700&amp;height=250&amp;hl=en&amp;q=hainstrasse%2010%2C%20Bad%20Hersfeld%2C%20Germany+(Titel)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
					</div>
				</div>
				<br>
			</div>
			<p class="lead"><span style="color: #cbd92a;"> <span class="fas fa-clock"></span> Öffnungszeiten:</span> täglich 7.30-14.30 Uhr<br>
				<span style="font-size:small;">Außerhalb der Öffnungszeiten erreichen Sie uns unter der Tel.: (06621) 794490 <span>
			</p>	
		</div>
		
		<div class="container pad_seite">
			<h4>Wenn Sie Fragen haben, schreiben Sie uns eine Nachricht:</h4>
			
			<form role="form" id="contactForm" data-toggle="validator" class="shake">
				<div class="row" style="padding-bottom: 0em;">
					<div class="form-group col-md-6">
						<label for="name" class="p">Name</label>
						<input type="text" class="form-control" id="name" placeholder="Ihr Name" required data-error="NEW ERROR MESSAGE">
					</div>
					<div class="form-group col-md-6">
						<label for="email" class="p">Email</label>
						<input type="email" class="form-control" id="email" placeholder="Ihr email" required>
					</div>
				</div>
				<div class="form-group">
					<label for="message" class="p ">Nachricht</label>
					<textarea id="message" class="form-control" rows="5" placeholder="Schreiben SIe eine Nachricht" required></textarea>
					<div class="help-block with-errors"></div>
				</div>
				<div style="padding-bottom: 25px;">
					<button type="submit" class="btn btn-success" id="form-submit">Submit</button>
				</div>
				<div id="msgSubmit" class="h3 text-center hidden"></div>
				<div class="clearfix"></div>
			</form>
			<br>
		</div>
	
		<!-- FOOTER -->
		<?php
			include('footer.html');
		?>

		<script src="js/validator.min.js"></script>
		<script src="js/form-scripts.js"></script>
		
  </body>
</html>