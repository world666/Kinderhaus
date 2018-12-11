<div style="padding: 0" class="container">
	<a  href="home.php"><img src="img/kindergarten_1.jpg" class="img-fluid  max-width: 100%" alt="Header"></a>
</div>
<div style="padding: 0" class="container-fluid">
	<nav class="navbar navbar-expand-md navbar-light bg-light fixed blog-nav" style="padding-top: 0; padding-bottom: 0">  <!-- Панель меню фиксированная и налагается на текст -->
			<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
				<ul class="navbar-nav">
					<li class="nav-item <?php echo $home_active; ?>">
						<a class="nav-link" href="home.php">Home</a>
					</li>				
					<li class="nav-item dropdown <?php echo $about_active; ?>">
						<a class="nav-link dropdown-toggle" href="group.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Über uns</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="group.php">Unsere Gruppe</a>
							<a class="dropdown-item" href="hours.php">Öffnungszeiten</a>
							<a class="dropdown-item" href="rooms.php">Unsere Räume</a>
							<a class="dropdown-item" href="team.php">Unsere Team</a>
						</div>
					 </li>
					<li class="nav-item dropdown <?php echo $work_active; ?>">
						<a class="nav-link dropdown-toggle" href="schedule.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Wie wir arbeiten</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="schedule.php">Unser Tagesablauf</a>
							<a class="dropdown-item" href="week.php">Aktivitäten</a>
							<a class="dropdown-item" href="concept.php">Konzept</a>
							<a class="dropdown-item" href="holidays.php">Feste</a>
						</div>
					 </li>					
					<li class="nav-item dropdown <?php echo $parents_active; ?>">
						<a class="nav-link dropdown-toggle" href="community.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Elterninitiative</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="community.php">Der Verein</a>
							<a class="dropdown-item" href="parents.php">Elternmitarbeit</a>
						</div>
					 </li>	
					
					<li class="nav-item <?php echo $payments_active; ?>">
						<a class="nav-link" href="payment.php">Beiträge</a>
					</li>
					<li class="nav-item <?php echo $promotion_active; ?>">
						<a class="nav-link" href="promotion.php">Förderer</a>
					</li>
					<li class="nav-item <?php echo $contacts_active; ?>">
						<a class="nav-link" href="contact.php">Kontakt</a>
					</li>
				</ul>
			</div><!--/.nav-collapse -->
			<button class="navbar-toggler" type="button" data-toggle="collapse"  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
	    </div>
	</nav>
</div>