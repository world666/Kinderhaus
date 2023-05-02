<!DOCTYPE html>
<html lang="DE">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="keywords" content="Kindertagesstätte, Kitas, Kita, Kindergarten, Kinderkrippe, Bad Hersfeld">
		<meta name="description" content="Ihr Kinderhaus in Bad Hersfeld. Hier finden Sie die wichtige Informationen über unsere Kindergarten.">
		<meta name="author" content="Hanna Stepnykh, hanna.stepnykh@gmail.com">
		<link rel="shortcut icon" href="ico/favicon.ico">

		<title>Kinderhaus in Bad Hersfeld</title>

		<link rel="manifest" href="manifest.webmanifest">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="fontawesome/css/all.css">
		<link rel="stylesheet"  href="css/main.css">
		<script src="js/navigation-0.0.4.js"></script>
		<script src="js/validator-3.3.1.min.js"></script>
		<script type="application/ld+json">
		{"@context" : "http://schema.org",
		 "@type" : "Organization",  
		  "name" : "Kinderhaus",
		  "url" : "https://kinderhaus-hersfeld.de/",
		  "image" : "https://kinderhaus-hersfeld.de/img/logo.png",
		  "logo": "https://kinderhaus-hersfeld.de/img/logo.png" }
		</script>
	</head>
	<body>
		<div class="row" style="background-color: #aaa; margin:0">
			<div class="container">
				<p class="header_adresse"><span class="fas fa-phone">&ensp;</span><span style="color: #fff;">  (06621) 74443 </span>&emsp;<span class="fas fa-envelope">&ensp;</span>
					<a href="mailto:info@kinderhaus-hersfeld.de" style="color: #fff;">info@kinderhaus-hersfeld.de</a>
				</p>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fff; padding: 0;">
			<div style="padding: 0;" class="container">
				<img class="navbar-brand" src="img/logo.png" alt="Das Kinderhaus">
				<button id="navButton" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
					<ul class="navbar-nav">
						<li id="home_active" class="nav-item <?php echo $home_active; ?>">
							<a class="nav-link" href="javascript:linkHandler('content/indexContent.php', '#home_active')"><i class="fas fa-home"></i><br>Home</a></a>
						</li>				
						<li id="about_active" class="nav-item dropdown <?php echo $about_active; ?>">
							<a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-users"></i><br>Über uns</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="javascript:linkHandler('content/groupContent.php', '#about_active')">Unsere Gruppe</a>
								<a class="dropdown-item" href="javascript:linkHandler('content/hoursContent.php', '#about_active')">Öffnungszeiten</a>
								<a class="dropdown-item" href="javascript:linkHandler('content/roomsContent.php', '#about_active')">Unsere Räume</a>
								<a class="dropdown-item" href="javascript:linkHandler('content/teamContent.php', '#about_active')">Unsere Team</a>
							</div>
						 </li>
						<li id="work_active" class="nav-item dropdown <?php echo $work_active; ?>">
							<a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-clipboard-list"></i><br>Wie wir arbeiten</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="javascript:linkHandler('content/scheduleContent.php', '#work_active')">Unser Tagesablauf</a>
								<a class="dropdown-item" href="javascript:linkHandler('content/weekContent.php', '#work_active')">Aktivitäten</a>
								<a class="dropdown-item" href="javascript:linkHandler('content/conceptContent.php', '#work_active')">Konzept</a>
								<a class="dropdown-item" href="javascript:linkHandler('content/holidaysContent.php', '#work_active')">Feste</a>
							</div>
						 </li>					
						<li id="alternative_active" class="nav-item dropdown <?php echo $alternative_active; ?>">
							<a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-handshake"></i><br>Elterninitiative</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="javascript:linkHandler('content/communityContent.php', '#alternative_active')">Der Verein</a>
								<a class="dropdown-item" href="javascript:linkHandler('content/parentsContent.php', '#alternative_active')">Elternmitarbeit</a>
							</div>
						 </li>	
						
						<li id="payment_active" class="nav-item <?php echo $payment_active; ?>">
							<a class="nav-link" href="javascript:linkHandler('content/paymentContent.php', '#payment_active')"><i class="fas fa-euro-sign"></i><br>Beiträge</a>
						</li>
						<li id="promotion_active" class="nav-item <?php echo $promotion_active; ?>">
							<a class="nav-link" href="javascript:linkHandler('content/promotionContent.php', '#promotion_active')"><i class="fas fa-hand-holding-heart"></i><br>Förderer</a>
						</li>
						<li id="contact_active" class="nav-item <?php echo $contact_active; ?>">
							<a class="nav-link" href="javascript:linkHandler('content/contactContent.php', '#contact_active')"><i class="fas fa-envelope"></i><br>Kontakt</a>
						</li>
					</ul>			
				</div><!--/.nav-collapse -->			
			</div>
		</nav>

		<div style="padding: 0">
			<a  href="javascript:linkHandler('content/indexContent.php', '#home_active')"><img src="img/header.jpg" class="img-fluid" width="100%" alt="Header"></a>
		</div>

		<div id="content">
		<?php
			include($content);
		?>
		</div>

		<footer class="footer-own" style="padding: 1em 0 1em 0;">
				<div class="container">
					<p class="float-right" style="margin-bottom: 0;"><a class="footer_herf" href="#">Zurück nach oben</a></p>
					<p style="margin-bottom: 0;"><span class="far fa-copyright"></span>  2017-2023 Das Kinderhaus, Hainstraße 10, 36251 Bad Hersfeld &middot;
						<a class="footer_herf" href="javascript:linkHandler('content/impressumContent.php')">Impressum</a> &middot;
						<a class="footer_herf" href="javascript:linkHandler('content/disclaimerContent.php')">Haftungsausschluss</a>
					</p>
				</div>
		</footer>

		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap-3.3.1.min.js"></script>
		<script src="js/windowresizer-0.0.1.js"></script>
   </body>
</html>