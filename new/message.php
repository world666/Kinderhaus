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

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href="css/main.css" rel="stylesheet">	<!-- ?????Нужно свой файл создавать или подключить bootstrap css?????? -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  
	<body>
	
		<?php
			$message_active = "active";
			include('header.php');
		?>
		
		<div class="container pad_seite">
			<h2>Nachricht</h2>
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
	
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
		<script src="../../new/assets/js/vendor/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
  </body>
</html>