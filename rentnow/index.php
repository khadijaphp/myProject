<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>RentNow - Responsive Car Rental Template</title>

		<!-- Preloader CSS-->
		<style>#preloader:after,#preloader:before{content:"";display:block;left:-1px;top:-1px}#preloader-overlayer,#preloader:after,#preloader:before{position:absolute;height:100%;width:100%}#preloader-overlayer{position:fixed;top:0;left:0;background-color:#112E3B;z-index:999}#preloader{height:40px;width:40px;position:fixed;top:50%;left:50%;margin-top:-20px;margin-left:-20px;z-index:9999}#preloader:before{-webkit-animation:rotation 1s linear infinite;animation:rotation 1s linear infinite;border:2px solid #42DB0C;border-top:2px solid transparent;border-radius:100%}#preloader:after{border:1px solid rgba(255,255,255,.1);border-radius:100%}@media only screen and (min-width:768px){#preloader{height:60px;width:60px;margin-top:-30px;margin-left:-30px}#preloader:before{left:-2px;top:-2px;border-width:2px}}@media only screen and (min-width:1200px){#preloader{height:80px;width:80px;margin-top:-40px;margin-left:-40px}}@-webkit-keyframes rotation{from{-webkit-transform:rotate(0);transform:rotate(0)}to{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}@keyframes rotation{from{-webkit-transform:rotate(0);transform:rotate(0)}to{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}</style>

		<!--
		All CSS Codes Loaded
		Ex: bootstrap, fontawesome, style, etc.
		-->
		<link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/libs/fontawesome/css/fontawesome-all.min.css">
		<link rel="stylesheet" href="assets/libs/linearicons/linearicons.css">
		<link rel="stylesheet" href="assets/css/rentnow-icons.css">
		<link rel="stylesheet" href="assets/libs/flatpickr/flatpickr.min.css">
		<link rel="stylesheet" href="assets/css/magnific-popup.css">
		<link rel="stylesheet" href="assets/css/style.css">

		<!-- Google Map JS-->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOdKtT5fapH3_OfhV3HFeZjqFs4OfNIew"></script>
	</head>
	<body class="rn-preloader">
		<div id="preloader"></div>
		<div id="preloader-overlayer"></div>

		<!-- Header-->
		<header class="rn-header">

			<!-- Topbar-->
			<div class="rn-topbar">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-12 col-sm-5 col-lg-3">

							<!-- Tobar Social-->
							<ul class="rn-social">
								<li>
									<a href="index.html#">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li>
									<a href="index.html#">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="index.html#">
										<i class="fab fa-google-plus-g"></i>
									</a>
								</li>
								<li>
									<a href="index.html#">
										<i class="fab fa-instagram"></i>
									</a>
								</li>
								<li>
									<a href="index.html#">
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


			<!-- Menubar-->
			<div class="rn-menubar">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-4">
							<!-- Logo-->
							<a class="brand-name" href="index.html">
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
										<a href="index.html">Accueil</a>
									</li>
									<li>
										<a href="index.html#">Voitures 
											<i class="lnr lnr-chevron-down"></i>
										</a>
										<ul>
											<li>
												<a href="cars.html">Liste des Voitures</a>
											</li>
											<li>
												<a href="car-search.html">Recherche Voiture</a>
											</li>
											<li>
												<a href="index.html#">Gallerie 
													<i class="lnr lnr-chevron-right"></i>
												</a>
												<ul>
													<li>
														<a href="gallery-col-2.html">2 Colonne</a>
													</li>
													<li>
														<a href="gallery-col-3.html">3 Colonne</a>
													</li>
													<li>
														<a href="gallery-col-4.html">4 Colonne</a>
													</li>
												</ul>
											</li>
											<li>
												<a href="car-single.html">Voiture Singulière</a>
											</li>
											<li>
												<a href="checkout.html">La Caisse</a>
											</li>
											<li>
												<a href="cart.html">Panier</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="index.html#">Aide &amp; Info 
											<i class="lnr lnr-chevron-down"></i>
										</a>
										<ul>
											<li>
												<a href="service.html">Service Client</a>
											</li>
											<li>
												<a href="contact.html">Contactez-Nous</a>
											</li>
											<li>
												<a href="about.html">A Propos</a>
											</li>
											
										</ul>
									</li>
									<li>
										<a href="fullwidth.html">Conditions &amp; Termes </a>
									</li>
									<li>
										<a href="index.html#">Blog 
											<i class="lnr lnr-chevron-down"></i>
										</a>
										<ul>
											<li>
												<a href="blog.html">Liste Blog</a>
											</li>
											<li>
												<a href="blog-grid.html">Grille De Blog</a>
											</li>
											<li>
												<a href="blog-grid-sidebar.html">Grille De Blog - Barre Latérale</a>
											</li>
											<li>
												<a href="blog-single.html">Article Singulier</a>
											</li>
										</ul>
									</li>
									
								</ul>

							</nav>
						</div>
					</div>
				</div>
			</div>
			<!-- End Menubar-->

		</header>
		<!-- End Header-->

		<!-- Slider-->
		<div class="rn-carousel carousel slide" id="carouselExampleControls" data-ride="carousel">
			<div class="carousel-inner">

				<!-- Slider Item 1-->
				<div class="carousel-item beactive">
					<div class="carousel-caption">
						<h2 class="rn-fade-bottom mb-25">#1 Service de location de voiture Dans votre ville </h2>
						<p class="rn-fade-bottom rn-caption-item-2 mb-35">Louez n’importe quel véhicule pour toutes les situations !.</p>
						<a class="btn btn-main btn-lg rn-fade-bottom rn-caption-item-3" href="index.html#">Réservez Maintenant</a>
					</div>
					<div class="rn-slider-overlayer"></div>
					<img class="d-block w-100" src="assets/images/slide1.jpg" alt="slide">
				</div>

				<!-- Slider Item 2-->
				<div class="carousel-item">
					<div class="carousel-caption">
						<h2 class="rn-fade-bottom mb-25">Des voitures de qualité avec des miles illimités</h2>
						<p class="rn-fade-bottom rn-caption-item-2 mb-35">RentNow dispose d’un grand parc de voitures économique,moyen et Luxe, louez le véhicule qui vous correspond ! .</p>
						<a class="btn btn-main btn-lg rn-fade-bottom rn-caption-item-3" href="index.html#">Réservez Maintenant</a>
					</div>
					<div class="rn-slider-overlayer"></div>
					<img class="d-block w-100" src="assets/images/slide2.jpg" alt="slide">
				</div>

				<!-- Slider Item 3-->
				<div class="carousel-item">
					<div class="carousel-caption">
						<h2 class="rn-fade-bottom mb-25"> Guarantie de support Client 24/7</h2>
						<p class="rn-fade-bottom rn-caption-item-2 mb-35">Appliquant une politique de savoir faire, et mettant votre disposition un personnel qualifié.</p>
						<a class="btn btn-main btn-lg rn-fade-bottom rn-caption-item-3" href="index.html#">Réservez Maintenant</a>
					</div>
					<div class="rn-slider-overlayer"></div>
					<img class="d-block w-100" src="assets/images/slide3.jpg" alt="slide">
				</div>

			</div>
			<!-- Slider Controls -->
			<a class="carousel-control-prev" href="index.html#carouselExampleControls" role="button" data-slide="prev">
				<span class="lnr lnr-chevron-left" aria-hidden="true"></span>
			</a>
			<a class="carousel-control-next" href="index.html#carouselExampleControls" role="button" data-slide="next">
				<span class="lnr lnr-chevron-right" aria-hidden="true"></span>
			</a>
		</div>
		<!-- End slider-->

		<!-- Car Search Form-->
		<section class="rn-search-form-big rn-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">

						<!-- Section Title-->
						<div class="rn-section-title  rn-title-bg-color-white-10 rn-title-color-white">
							<h2 class="rn-title">Rechercher &amp; Louer Des Voitures</h2>
							<span class="rn-title-bg">Rechercher &amp; Louer Des Voitures</span>
						</div>

					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">

						<!-- Main Big Search Form-->
						<div class="rn-big-search-form rn-big-search-form-dark">
							<form action="car-search.html">
								<div class="row">
									<div class="col-lg-3 col-sm-6">
										<div class="rn-icon-input">
											<i class="fas fa-map-marker-alt"></i>
											<input type="text" placeholder="Lieu De Location">
										</div>
									</div>
									<div class="col-lg-3 col-sm-6">
										<div class="rn-icon-input">
											<i class="fas fa-map-marker-alt"></i>
											<input type="text" placeholder="Lieu De Retour">
										</div>
									</div>
									<div class="col-lg-3 rn-date-time-input">
										<div class="row">
											<div class="col-lg-7 col-md-8 col-8">
												<div class="rn-icon-input">
													<i class="far fa-calendar-alt"></i>
													<input type="text" placeholder=" Date De Location" id="pickup-date">
												</div>
											</div>
											<div class="col-lg-5 col-md-4 col-4">
												<div class="rn-icon-input">
													<i class="far fa-clock"></i>
													<input type="text" placeholder="Heure" id="pickup-time">
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 rn-date-time-input">
										<div class="row">
											<div class="col-lg-7 col-md-8 col-8">
												<div class="rn-icon-input">
													<i class="far fa-calendar-alt"></i>
													<input type="text" placeholder="Date De Retour" id="drop-date">
												</div>
											</div>
											<div class="col-lg-5 col-md-4 col-4">
												<div class="rn-icon-input">
													<i class="far fa-clock"></i>
													<input type="text" placeholder="Heure" id="drop-time">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="text-center">
									<button class="btn btn-orange btn-lg mt-30 btn-shadow" type="submit">
										<i class="fas fa-search"></i> Trouver Maintenant
									</button>
								</div>
							</form>
						</div>

					</div>
				</div>
			</div>
			<!-- Section Shape-->
			<div class="rn-shape rn-shape-bottom"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
	<path class="rn-shape-fill" d="M500.2,94.7L0,0v100h1000V0L500.2,94.7z"/>
</svg>
			</div>
		</section>
		<!-- End Car Search Form-->

		<!-- Why People Like Us Section-->
		<section class="rn-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">

						<!-- Section Title-->
						<div class="rn-section-title   ">
							<h2 class="rn-title">Pourquoi Les Gens Nous Aiment?</h2>
							<p>Nous ne mettons à votre disposition que des véhicules neufs d’une durée de vie d’une année..</p>
							<span class="rn-title-bg">Pourquoi RentNow</span>
						</div>

					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-6">

						<!-- Feature with dot-->
						<div class="rn-dot-feature">
							<div class="rn-the-dot"></div>
							<div class="rn-dot-feature-info">
								<h3>meilleur prix garanti</h3>
								<p>Obtenez le meilleur prix lors de votre réservation.</p>
							</div>
						</div>
						<!-- End Feature with dot-->

					</div>
					<div class="col-lg-3 col-md-6">

						<!-- Feature with dot-->
						<div class="rn-dot-feature">
							<div class="rn-the-dot"></div>
							<div class="rn-dot-feature-info">
								<h3>Pas de frais d'annulation</h3>
								<p>Voyagez à votre façon en choisissant parmi notre collection de voitures neuves,.</p>
							</div>
						</div>
						<!-- End Feature with dot-->

					</div>
					<div class="col-lg-3 col-md-6">

						<!-- Feature with dot-->
						<div class="rn-dot-feature">
							<div class="rn-the-dot"></div>
							<div class="rn-dot-feature-info">
								<h3>Meilleures voitures de qualité</h3>
								<p>Voyagez à votre façon en choisissant parmi notre collection de voitures neuves.</p>
							</div>
						</div>
						<!-- End Feature with dot-->

					</div>
					<div class="col-lg-3 col-md-6">

						<!-- Feature with dot-->
						<div class="rn-dot-feature">
							<div class="rn-the-dot"></div>
							<div class="rn-dot-feature-info">
								<h3>Réservation A Tout Moment</h3>
								<p>nous sommes là pour vous à tout moment.</p>
							</div>
						</div>
						<!-- End Feature with dot-->

					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-6">

						<!-- Feature with dot-->
						<div class="rn-dot-feature">
							<div class="rn-the-dot"></div>
							<div class="rn-dot-feature-info">
								<h3>chauffeur personnel</h3>
								<p>Europcar se réjouit d’être à votre service dans son agence de location de voiture .</p>
							</div>
						</div>
						<!-- End Feature with dot-->

					</div>
					<div class="col-lg-3 col-md-6">

						<!-- Feature with dot-->
						<div class="rn-dot-feature">
							<div class="rn-the-dot"></div>
							<div class="rn-dot-feature-info">
								<h3> Miles illimités</h3>
								<p>Souvenez-vous de toujours apporter votre permis de conduire, une carte de crédit valide et une preuve d’identité supplémentaire (comme un passeport si vous louez à l’étranger).</p>
							</div>
						</div>
						<!-- End Feature with dot-->

					</div>
					<div class="col-lg-3 col-md-6">

						<!-- Feature with dot-->
						<div class="rn-dot-feature">
							<div class="rn-the-dot"></div>
							<div class="rn-dot-feature-info">
								<h3>De Ville En Ville</h3>
								<p>Service aimable, voitures neuves et prix bas font partie de notre offre quotidienne.</p>
							</div>
						</div>
						<!-- End Feature with dot-->

					</div>
					<div class="col-lg-3 col-md-6">

						<!-- Feature with dot-->
						<div class="rn-dot-feature">
							<div class="rn-the-dot"></div>
							<div class="rn-dot-feature-info">
								<h3>Service Client 24/7</h3>
								<p>Appliquant une politique de savoir faire, et mettant votre disposition un personnel qualifié.</p>
							</div>
						</div>
						<!-- End Feature with dot-->

					</div>
				</div>
			</div>
		</section>
		<!-- End Why People Like Us Section-->

		<!-- Popular Cars Section-->
		<section class="rn-section rn-section-light-gray">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">

						<!-- Section Title-->
						<div class="rn-section-title  rn-title-bg-color-white ">
							<h2 class="rn-title">Voitures Populaires</h2>
							<p>nous avons des voitures populaires.</p>
							<span class="rn-title-bg">Voitures Les Plus Populaires</span>
						</div>

					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6">

						<!-- Car Item-->
						<div class="rn-car-item">
							<div class="rn-car-item-review">
								<div class="fas fa-star"></div> 5.0
							</div>
							<div class="rn-car-item-thumb">
								<a href="car-single.html">
									<img class="img-fluid" src="assets/images/car-1.jpg" alt="Black Sedan" srcset="assets/images/car-1.jpg 1x, assets/images/car-1@2x.jpg 2x"/>
								</a>
							</div>
							<div class="rn-car-item-info">
								<h3>
									<a href="car-single.html">Black Sedan</a>
								</h3>
								<p>Mauris semper nisl a massa convallis</p>
								<div class="rn-car-list-n-price">
									<ul>
										<li>4 vitres latérales</li>
										<li>Coffre Geant</li>
										<li> Comportement sain</li>
									</ul>
									<div class="rn-car-price-wrap">
										<a class="rn-car-price" href="car-single.html">
											<span class="rn-car-price-from">A partir De</span>
											<span class="rn-car-price-format">
												<span class="rn-car-price-amount">8000 DH</span>
												<span class="rn-car-price-per">/Jour</span>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End Car Item-->

					</div>
					<div class="col-lg-4 col-md-6">

						<!-- Car Item-->
						<div class="rn-car-item">
							<div class="rn-car-item-review">
								<div class="fas fa-star"></div> 5.0
							</div>
							<div class="rn-car-item-thumb">
								<a href="car-single.html">
									<img class="img-fluid" src="assets/images/car-2.jpg" alt="Toyota Etios" srcset="assets/images/car-2.jpg 1x, assets/images/car-2@2x.jpg 2x"/>
								</a>
							</div>
							<div class="rn-car-item-info">
								<h3>
									<a href="car-single.html">Toyota Etios</a>
								</h3>
								<p>Mauris semper nisl a massa convallis</p>
								<div class="rn-car-list-n-price">
									<ul>
										<li>Coffre Geant</li>
										<li>Comportement sain</li>
										<li>4 vitres Latérale</li>
									</ul>
									<div class="rn-car-price-wrap">
										<a class="rn-car-price" href="car-single.html">
											<span class="rn-car-price-from">A partir De</span>
											<span class="rn-car-price-format">
												<span class="rn-car-price-amount">6000 DH</span>
												<span class="rn-car-price-per">/Jour</span>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End Car Item-->

					</div>
					<div class="col-lg-4 col-md-6">

						<!-- Car Item-->
						<div class="rn-car-item">
							<div class="rn-car-item-review">
								<div class="fas fa-star"></div> 5.0
							</div>
							<div class="rn-car-item-thumb">
								<a href="car-single.html">
									<img class="img-fluid" src="assets/images/car-3.jpg" alt="Mercedes AMG E63" srcset="assets/images/car-3.jpg 1x, assets/images/car-3@2x.jpg 2x"/>
								</a>
							</div>
							<div class="rn-car-item-info">
								<h3>
									<a href="car-single.html">Mercedes AMG E63</a>
								</h3>
								<p>Mauris semper nisl a massa convallis</p>
								<div class="rn-car-list-n-price">
									<ul>
										<li>4 vitres Latérales</li>
										<li>Coffre Geant</li>
										<li> Comportement Sain</li>
									</ul>
									<div class="rn-car-price-wrap">
										<a class="rn-car-price" href="car-single.html">
											<span class="rn-car-price-from">A Partir De</span>
											<span class="rn-car-price-format">
												<span class="rn-car-price-amount">6500 DH</span>
												<span class="rn-car-price-per">/Jour</span>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End Car Item-->

					</div>
					<div class="col-lg-4 col-md-6">

						<!-- Car Item-->
						<div class="rn-car-item">
							<div class="rn-car-item-review">
								<div class="fas fa-star"></div> 5.0
							</div>
							<div class="rn-car-item-thumb">
								<a href="car-single.html">
									<img class="img-fluid" src="assets/images/car-4.jpg" alt="BMW X5" srcset="assets/images/car-4.jpg 1x, assets/images/car-4@2x.jpg 2x"/>
								</a>
							</div>
							<div class="rn-car-item-info">
								<h3>
									<a href="car-single.html">BMW X5</a>
								</h3>
								<p>Mauris semper nisl a massa convallis</p>
								<div class="rn-car-list-n-price">
									<ul>
										<li>Comprtement Sain</li>
										<li> Coffre Geant</li>
										<li> 4 Vitres Latérale</li>
									</ul>
									<div class="rn-car-price-wrap">
										<a class="rn-car-price" href="car-single.html">
											<span class="rn-car-price-from">A Partir De</span>
											<span class="rn-car-price-format">
												<span class="rn-car-price-amount">9000 DH</span>
												<span class="rn-car-price-per">/Jour</span>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End Car Item-->

					</div>
					<div class="col-lg-4 col-md-6">

						<!-- Car Item-->
						<div class="rn-car-item">
							<div class="rn-car-item-review">
								<div class="fas fa-star"></div> 5.0
							</div>
							<div class="rn-car-item-thumb">
								<a href="car-single.html">
									<img class="img-fluid" src="assets/images/car-7.jpg" alt="Toyota Avalon" srcset="assets/images/car-7.jpg 1x, assets/images/car-7@2x.jpg 2x"/>
								</a>
							</div>
							<div class="rn-car-item-info">
								<h3>
									<a href="car-single.html">Toyota Avalon</a>
								</h3>
								<p>Mauris semper nisl a massa convallis</p>
								<div class="rn-car-list-n-price">
									<ul>
										<li>  4 Vitres Latérales</li>
										<li>Coffre Geant</li>
										<li>Comportement Sain</li>
									</ul>
									<div class="rn-car-price-wrap">
										<a class="rn-car-price" href="car-single.html">
											<span class="rn-car-price-from">A Partir De</span>
											<span class="rn-car-price-format">
												<span class="rn-car-price-amount">8500 DH</span>
												<span class="rn-car-price-per">/Jour</span>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End Car Item-->

					</div>
					<div class="col-lg-4 col-md-6">

						<!-- Car Item-->
						<div class="rn-car-item">
							<div class="rn-car-item-review">
								<div class="fas fa-star"></div> 5.0
							</div>
							<div class="rn-car-item-thumb">
								<a href="car-single.html">
									<img class="img-fluid" src="assets/images/car-8.jpg" alt="Audi A8" srcset="assets/images/car-8.jpg 1x, assets/images/car-8@2x.jpg 2x"/>
								</a>
							</div>
							<div class="rn-car-item-info">
								<h3>
									<a href="car-single.html">Audi A8</a>
								</h3>
								<p>Mauris semper nisl a massa convallis</p>
								<div class="rn-car-list-n-price">
									<ul>
										<li>Comportement  Sain</li>
										<li>Coffre Geant</li>
										<li>4 Vitres Latérale</li>
									</ul>
									<div class="rn-car-price-wrap">
										<a class="rn-car-price" href="car-single.html">
											<span class="rn-car-price-from">A Partir De</span>
											<span class="rn-car-price-format">
												<span class="rn-car-price-amount">8000 DH</span>
												<span class="rn-car-price-per">/Jour</span>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End Car Item-->

					</div>
				</div>
			</div>
		</section>
		<!-- End Popular Cars Section-->

		<!-- Car Categories-->
		<section class="rn-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">

						<!-- Section Title-->
						<div class="rn-section-title   ">
							<h2 class="rn-title">Voiture Par Type</h2>
							<p>Choisissez Votre Type préféré.</p>
							<span class="rn-title-bg">Voiture Par Type</span>
						</div>

					</div>
				</div>
				<div class="row">
					<div class="col-lg-2 col-6 col-md-4">
						<!-- Car Category-->
						<div class="rn-car-type">
							<a href="cars.html">
								<span class="rn-car-type-icon">
									<i class="rni-car-type-sedan"></i>
								</span>
								<span class="rn-car-type-title">Sedan</span>
							</a>
						</div>
					</div>
					<div class="col-lg-2 col-6 col-md-4">
						<!-- Car Category-->
						<div class="rn-car-type">
							<a href="cars.html">
								<span class="rn-car-type-icon">
									<i class="rni-car-type-roadster"></i>
								</span>
								<span class="rn-car-type-title">Roadster</span>
							</a>
						</div>
					</div>
					<div class="col-lg-2 col-6 col-md-4">
						<!-- Car Category-->
						<div class="rn-car-type">
							<a href="cars.html">
								<span class="rn-car-type-icon">
									<i class="rni-car-type-coupe"></i>
								</span>
								<span class="rn-car-type-title">Coupe</span>
							</a>
						</div>
					</div>
					<div class="col-lg-2 col-6 col-md-4">
						<!-- Car Category-->
						<div class="rn-car-type">
							<a href="cars.html">
								<span class="rn-car-type-icon">
									<i class="rni-car-type-minivan"></i>
								</span>
								<span class="rn-car-type-title">Minivan</span>
							</a>
						</div>
					</div>
					<div class="col-lg-2 col-6 col-md-4">
						<!-- Car Category-->
						<div class="rn-car-type">
							<a href="cars.html">
								<span class="rn-car-type-icon">
									<i class="rni-car-type-statio-wagon"></i>
								</span>
								<span class="rn-car-type-title">Station Wagon</span>
							</a>
						</div>
					</div>
					<div class="col-lg-2 col-6 col-md-4">
						<!-- Car Category-->
						<div class="rn-car-type">
							<a href="cars.html">
								<span class="rn-car-type-icon">
									<i class="rni-car-type-limousine"></i>
								</span>
								<span class="rn-car-type-title">Limousine</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Car Categories-->

		

		

		<!-- Site Footer-->
		<footer class="rn-footer">

			<!-- Footer Widgets-->
			<div class="rn-footer-widgets">
				<div class="container">
					<div class="row">
						<div class="col-md-4">

							<!-- Widget Item-->
							<section class="rn-widget">
								<h2 class="rn-widget-title">A Propos</h2>
								<div class="rn-widget-content">
									<a class="brand-name" href="index.html">
										<img src="assets/images/logo.svg" alt="Logo">
									</a>
									<p>RentNow, facilitera votre voyage entre les beaux lieux du pays, découvrir les lieux touristiques, les plages, et beaucoup d'autres endroits, tout en gardant votre liberté de mouvement.</p>
									<ul class="rn-widget-social">
										<li>
											<a href="index.html#">
												<i class="fab fa-facebook-f"></i>
											</a>
										</li>
										<li>
											<a href="index.html#">
												<i class="fab fa-twitter"></i>
											</a>
										</li>
										<li>
											<a href="index.html#">
												<i class="fab fa-instagram"></i>
											</a>
										</li>
										<li>
											<a href="index.html#">
												<i class="fab fa-linkedin-in"></i>
											</a>
										</li>
									</ul>
								</div>
							</section>
							<!-- End Widget Item-->

						</div>
						<div class="col-md-5">

							<!-- Widget Item-->
							<section class="rn-widget">
								<h2 class="rn-widget-title">Liens Rapids</h2>
								<div class="rn-widget-content">
									<div class="row rn-quick-links">
										<div class="col-6">
											<ul>
												<li>
													<a href="index.html#"> A Propos</a>
												</li>
												<li>
													<a href="index.html#">Contactez-Nous</a>
												</li>
												<li>
													<a href="index.html#">Support</a>
												</li>
												<li>
													<a href="index.html#">Voir Réservation</a>
												</li>
												<li>
													<a href="index.html#"> Programmes d'Affiliation</a>
												</li>
												<li>
													<a href="index.html#">Marketplace</a>
												</li>
											</ul>
										</div>
										<div class="col-6">
											<ul>
												<li>
													<a href="index.html#">Plan Du Site</a>
												</li>
												<li>
													<a href="index.html#">Carriéres</a>
												</li>
												<li>
													<a href="index.html#">Press</a>
												</li>
												<li>
													<a href="index.html#">Get a Receipt</a>
												</li>
												<li>
													<a href="index.html#">Communauté</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</section>
							<!-- End Widget Item-->

						</div>
						<div class="col-md-3">

							<!-- Widget Item-->
							<section class="rn-widget">
								<h2 class="rn-widget-title">Contactez-Nous</h2>
								<div class="rn-widget-content">
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
							</section>
							<!-- End Widget Item-->

						</div>
					</div>
				</div>
			</div>
			<!-- End Footer Widgets-->

			<!-- Footer Copyright-->
			<div class="rn-footer-copyright">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-6">
							<p>Copyright &copy; RentNow 2018. Tous Les Droits Sont Réservés.</p>
						</div>
						
					</div>
				</div>
			</div>
			<!-- End Footer Copyright-->

		</footer>
		<!-- End Site Footer-->

		<!--
		All JavaScripts Codes Loaded
		Ex: jquery, bootstrap, etc.
		-->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/libs/flatpickr/flatpickr.min.js"></script>
		<script src="assets/js/starrr.min.js"></script>
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
		<script src="assets/js/scripts.js"></script>
	</body>
</html>