	<div class="row" style="background-color: #aaa;">
		<div class="container">
			<p class="header_adresse"><span class="fas fa-phone">&ensp;</span>  (06621) 74443 &emsp;<span class="fas fa-envelope">&ensp;</span>info@kinderhaus-hersfeld.de</p>
		</div>
	</div>
	<nav class="navbar navbar-expand-md navbar-light" style="background-color: #fff; padding: 0;"  >  <!-- Панель меню фиксированная и налагается на текст -->
	<div style="padding: 0;" class="container">
			<img class="navbar-brand" src="img/logo.png" alt="Das Kinderhaus">
			<button  class="navbar-toggler" type="button" data-toggle="collapse"  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
				<ul class="navbar-nav">
					<li class="nav-item <?php echo $home_active; ?>">
						<a class="nav-link" href="index.php"><i class="fas fa-home"></i><br>Home</a></a>
					</li>				
					<li class="nav-item dropdown <?php echo $about_active; ?>">
						<a class="nav-link dropdown-toggle" href="group.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-users"></i><br>Über uns</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="group.php">Unsere Gruppe</a>
							<a class="dropdown-item" href="hours.php">Öffnungszeiten</a>
							<a class="dropdown-item" href="rooms.php">Unsere Räume</a>
							<a class="dropdown-item" href="team.php">Unsere Team</a>
						</div>
					 </li>
					<li class="nav-item dropdown <?php echo $work_active; ?>">
						<a class="nav-link dropdown-toggle" href="schedule.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-clipboard-list"></i><br>Wie wir arbeiten</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="schedule.php">Unser Tagesablauf</a>
							<a class="dropdown-item" href="week.php">Aktivitäten</a>
							<a class="dropdown-item" href="concept.php">Konzept</a>
							<a class="dropdown-item" href="holidays.php">Feste</a>
						</div>
					 </li>					
					<li class="nav-item dropdown <?php echo $parents_active; ?>">
						<a class="nav-link dropdown-toggle" href="community.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-handshake"></i><br>Elterninitiative</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="community.php">Der Verein</a>
							<a class="dropdown-item" href="parents.php">Elternmitarbeit</a>
						</div>
					 </li>	
					
					<li class="nav-item <?php echo $payments_active; ?>">
						<a class="nav-link" href="payment.php"><i class="fas fa-euro-sign"></i><br>Beiträge</a>
					</li>
					<li class="nav-item <?php echo $promotion_active; ?>">
						<a class="nav-link" href="promotion.php"><i class="fas fa-hand-holding-heart"></i><br>Förderer</a>
					</li>
					<li class="nav-item <?php echo $contacts_active; ?>">
						<a class="nav-link" href="contact.php"><i class="fas fa-envelope"></i><br>Kontakt</a>
					</li>
				</ul>			
			</div><!--/.nav-collapse -->			
	</div>
	</nav>
	
<div style="padding: 0" class="container">
	<a  href="index.php"><img src="img/kindergarten_1.jpg" class="img-fluid" width="100%" alt="Header"></a>
</div>




