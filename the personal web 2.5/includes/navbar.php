<!--- Navigation -->

	<nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php"><img src="img/Logosmall.png"></a> <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link <?php if($page=='home'){echo 'active';}?>"
                           href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if($page=='portfolio'){echo 'active';}?>" 
                           href="portfolio.php">Portfolio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if($page=='pricing'){echo 'active';}?>" 
                           href="pricing.php">Pricing</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if($page=='team'){echo 'active';}?>" 
                           href="team.php">Team</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if($page=='contact-us'){echo 'active';}?>" 
                           href="contact-us.php">Contact Us</a>
					</li>
                    	<li class="nav-item">
						<a class="nav-link <?php if($page=='school'){echo 'active';}?>" 
                           href="school.php">School</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!--- End Navigation -->