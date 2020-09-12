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
		<button  class="navbar-toggler" type="button" data-toggle="collapse"  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
			<ul class="navbar-nav">
				<li class="nav-item <?php echo $home_active; ?>">
					<a class="nav-link" href="javascript:linkHandler('content/index.html')"><i class="fas fa-home"></i><br>Home</a></a>
				</li>				
				<li class="nav-item dropdown <?php echo $about_active; ?>">
					<a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-users"></i><br>Über uns</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="javascript:linkHandler('content/group.html')">Unsere Gruppe</a>
						<a class="dropdown-item" href="javascript:linkHandler('content/hours.html')">Öffnungszeiten</a>
						<a class="dropdown-item" href="javascript:linkHandler('content/rooms.html')">Unsere Räume</a>
						<a class="dropdown-item" href="javascript:linkHandler('content/team.html')">Unsere Team</a>
					</div>
				 </li>
				<li class="nav-item dropdown <?php echo $work_active; ?>">
					<a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-clipboard-list"></i><br>Wie wir arbeiten</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="javascript:linkHandler('content/schedule.html')">Unser Tagesablauf</a>
						<a class="dropdown-item" href="javascript:linkHandler('content/week.html')">Aktivitäten</a>
						<a class="dropdown-item" href="javascript:linkHandler('content/concept.html')">Konzept</a>
						<a class="dropdown-item" href="javascript:linkHandler('content/holidays.html')">Feste</a>
					</div>
				 </li>					
				<li class="nav-item dropdown <?php echo $alternative_active; ?>">
					<a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-handshake"></i><br>Elterninitiative</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="javascript:linkHandler('content/community.html')">Der Verein</a>
						<a class="dropdown-item" href="javascript:linkHandler('content/parents.html')">Elternmitarbeit</a>
					</div>
				 </li>	
				
				<li class="nav-item <?php echo $payment_active; ?>">
					<a class="nav-link" href="javascript:linkHandler('content/payment.html')"><i class="fas fa-euro-sign"></i><br>Beiträge</a>
				</li>
				<li class="nav-item <?php echo $promotion_active; ?>">
					<a class="nav-link" href="javascript:linkHandler('content/promotion.html')"><i class="fas fa-hand-holding-heart"></i><br>Förderer</a>
				</li>
				<li class="nav-item <?php echo $contact_active; ?>">
					<a class="nav-link" href="javascript:linkHandler('content/contact.html')"><i class="fas fa-envelope"></i><br>Kontakt</a>
				</li>
			</ul>			
		</div><!--/.nav-collapse -->			
	</div>
</nav>

<div style="padding: 0" class="container">
	<a  href="javascript:linkHandler('content/index.html')"><img src="img/header.jpg" class="img-fluid" width="100%" alt="Header"></a>
</div>

<?php
	include($content);
?>

<footer class="footer-own" style="padding: 1em 0 1em 0;">
		<div class="container">
			<p class="float-right" style="margin-bottom: 0;"><a class="footer_herf" href="#">Zurück nach oben</a></p>
			<p style="margin-bottom: 0;"><span class="far fa-copyright"></span>  2017-2018 Das Kinderhaus, Hainstraße 10, 36251 Bad Hersfeld &middot;
				<a class="footer_herf" href="javascript:linkHandler('content/impressum.html')">Impressum</a> &middot;
				<a class="footer_herf" href="javascript:linkHandler('content/disclaimer.html')">Haftungsausschluss</a>
			</p>
		</div>
</footer>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/windowresizer.js"></script>