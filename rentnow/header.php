<?php 
session_start();
error_reporting("E-NOTICE");

			
			
?>
<header class="rn-header">

			<!-- Topbar-->
			<div class="rn-topbar">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-12 col-sm-5 col-lg-3">

							<!-- Tobar Social-->
							<ul class="rn-social">
								<li>
									<a href="#">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fab fa-google-plus-g"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fab fa-instagram"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fab fa-linkedin-in"></i>
									</a>
								</li>
							</ul>

						</div>
						<div class="col-12 col-sm-7 col-lg-9">

							<!-- Topbar Contact with Icon-->
							<div class="rn-icon-contents">
								<div class="rn-phone rn-icon-content">
									<div class="rn-icon">
										<i class="lnr lnr-phone"></i>
									</div>
									<div class="rn-info">
										<ul>
											<li>(954)-944-1250</li>
											
										</ul>
									</div>
								</div>
								<div class="rn-email rn-icon-content">
									<div class="rn-icon">
										<i class="lnr lnr-envelope"></i>
									</div>
									<div class="rn-info">
										<ul>
											<li>RentNow@gmail.com</li>
											
										</ul>
									</div>
								</div>
								<div class="rn-address rn-icon-content">
									<div class="rn-icon">
										<i class="lnr lnr-map-marker"></i>
									</div>
									<div class="rn-info">
										<ul>
											<li>Blvd Mohammed 6 121 Cité Riad Salam</li>
											<li>Mohammedia, Maroc</li>
										</ul>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<!-- End Topbar-->
				<?php 
				if((!$_SESSION['cin']) && (!$_SESSION['password']))
				{

				
				?>
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
              <div class="container">
                  <h1>Bienvenu </h1>
              </div>
            </nav>

			<!-- Menubar-->
			<div class="rn-menubar">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-4">
							<!-- Logo-->
							<a class="brand-name" href="index.php">
								<img class="img-fluid" src="assets/images/logo.svg" alt="Logo">
							</a>
						</div>
						<div class="col-8">
							<nav class="rn-navbar-container">

								<!-- Navbar Toggle Button for Only Tablet and Phone-->
								<button class="rn-navbar-toggler" id="rn-navbar-toggler">
									<span class="rn-navbar-toggler-bar"></span>
									<span class="rn-navbar-toggler-bar"></span>
									<span class="rn-navbar-toggler-bar"></span>
								</button>

								<!-- Main Nav Menu-->
								<ul class="rn-navbar">
									<li class="active">
										<a href="index.php">Accueil</a>
									</li>
									<li>
										<a href="index.php#">Voitures 
											<i class="lnr lnr-chevron-down"></i>
										</a>
										<ul>
											<li>
												<a href="cars.php">Liste des Voitures</a>
											</li>
											<li>
												<a href="car-search.php">Recherche Voiture</a>
											</li>
											
											
											<li>
												<a href="checkout.php">La Caisse</a>
											</li>
											<li>
												<a href="cart.php">Panier</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="index.php#">Aide &amp; Info 
											<i class="lnr lnr-chevron-down"></i>
										</a>
										<ul>
											<li>
												<a href="service.php">Service Client</a>
											</li>
											<li>
												<a href="contact.php">Contactez-Nous</a>
											</li>
											<li>
												<a href="about.php">A Propos</a>
											</li>
											<li>
										        <a href="fullwidth.php">Conditions &amp; Termes </a>
									        </li>
											
										</ul>
									</li>
									
									<li>
										<a href="index.php#">Blog 
											<i class="lnr lnr-chevron-down"></i>
										</a>
										<ul>
											<li>
												<a href="blog.php">Liste Blog</a>
											</li>
											
											<li>
												<a href="blog-single.php">Article Singulier</a>
											</li>
										</ul>
									</li>
									<li>
										        <a href="logIn.php">LogIn Client </a>
									</li>
									<li>
										        <a href="signUp.php">Inscription Client </a>
									</li>
								  <?php }else{ ?>
									
									<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
              <div class="container">
                  <h1>welcome <?php echo $_SESSION['cin'];?> </h1>
              </div>
            </nav>

			<!-- Menubar-->
			<div class="rn-menubar">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-4">
							<!-- Logo-->
							<a class="brand-name" href="index.php">
								<img class="img-fluid" src="assets/images/logo.svg" alt="Logo">
							</a>
						</div>
						<div class="col-8">
							<nav class="rn-navbar-container">

								<!-- Navbar Toggle Button for Only Tablet and Phone-->
								<button class="rn-navbar-toggler" id="rn-navbar-toggler">
									<span class="rn-navbar-toggler-bar"></span>
									<span class="rn-navbar-toggler-bar"></span>
									<span class="rn-navbar-toggler-bar"></span>
								</button>

								<!-- Main Nav Menu-->
								<ul class="rn-navbar">
									<li class="active">
										<a href="index.php">Accueil</a>
									</li>
									<li>
										<a href="index.php#">Voitures 
											<i class="lnr lnr-chevron-down"></i>
										</a>
										<ul>
											<li>
												<a href="cars.php">Liste des Voitures</a>
											</li>
											<li>
												<a href="car-search.php">Recherche Voiture</a>
											</li>
											
											
											<li>
												<a href="checkout.php">La Caisse</a>
											</li>
											<li>
												<a href="cart.php">Panier</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="index.php#">Aide &amp; Info 
											<i class="lnr lnr-chevron-down"></i>
										</a>
										<ul>
											<li>
												<a href="service.php">Service Client</a>
											</li>
											<li>
												<a href="contact.php">Contactez-Nous</a>
											</li>
											<li>
												<a href="about.php">A Propos</a>
											</li>
											<li>
										        <a href="fullwidth.php">Conditions &amp; Termes </a>
									        </li>
											
										</ul>
									</li>
									
									<li>
										<a href="index.php#">Blog 
											<i class="lnr lnr-chevron-down"></i>
										</a>
										<ul>
											<li>
												<a href="blog.php">Liste Blog</a>
											</li>
											
											<li>
												<a href="blog-single.php">Article Singulier</a>
											</li>
										</ul>
									</li>
									<li>
									 <a href="logOut.php" name="logOut">Log Out</a>
									</li>
								  <?php } ?>
								</ul>

							</nav>
						</div>
					</div>
				</div>
			</div>
			<!-- End Menubar-->
			

		</header>