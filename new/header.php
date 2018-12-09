<div style="padding: 0" class="container">
	<img src="img/kindergarten_1.jpg" class="img-fluid  max-width: 100%" alt="Header">
</div>
<div style="padding: 0" class="container-fluid">
	<nav class="navbar navbar-expand-md navbar-light bg-light fixed blog-nav">  <!-- Панель меню фиксированная и налагается на текст -->
		<div class="container">
			<a class="navbar-brand" href="index.php" style="color: #ef61a3;">Kinderhaus</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse"  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
				<ul class="navbar-nav">
					<li class="nav-item <?php echo $home_active; ?>">
						<a class="nav-link" href="index.php">Home</a>
					</li>				
					<li class="nav-item dropdown <?php echo $about_active; ?>">
						<a class="nav-link dropdown-toggle" href="unsere_gruppe.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Über uns</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="unsere_gruppe.php">Unsere Gruppe</a>
							<a class="dropdown-item" href="oeffnungszeiten.php">Öffnungszeiten</a>
							<a class="dropdown-item" href="unsere_raeume.php">Unsere Räume</a>
							<a class="dropdown-item" href="unsere_team.php">Unsere Team</a>
						</div>
					 </li>
					<li class="nav-item dropdown <?php echo $work_active; ?>">
						<a class="nav-link dropdown-toggle" href="unser_tagesablauf.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Wie wir arbeiten</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="unser_tagesablauf.php">Unser Tagesablauf</a>
							<a class="dropdown-item" href="aktivitaeten.php">Aktivitäten</a>
							<a class="dropdown-item" href="konzept.php">Konzept</a>
							<a class="dropdown-item" href="feste.php">Feste</a>
						</div>
					 </li>					
					<li class="nav-item dropdown <?php echo $parents_active; ?>">
						<a class="nav-link dropdown-toggle" href="verein.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Elterninitiative</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="verein.php">Der Verein</a>
							<a class="dropdown-item" href="mitarbeit.php">Elternmitarbeit</a>
						</div>
					 </li>	
					
					<li class="nav-item <?php echo $payments_active; ?>">
						<a class="nav-link" href="beitrag.php">Beiträge</a>
					</li>
					<li class="nav-item <?php echo $promotion_active; ?>">
						<a class="nav-link" href="forder.php">Förderer</a>
					</li>
					<li class="nav-item <?php echo $contacts_active; ?>">
						<a class="nav-link" href="adresse.php">Kontakt</a>
					</li>
				</ul>
			</div><!--/.nav-collapse -->
	    </div>
	</nav>
</div>