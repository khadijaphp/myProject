<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Car Single | RentNow - Responsive Car Rental Template</title>

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
									<a href="car-single.html#">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li>
									<a href="car-single.html#">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="car-single.html#">
										<i class="fab fa-google-plus-g"></i>
									</a>
								</li>
								<li>
									<a href="car-single.html#">
										<i class="fab fa-instagram"></i>
									</a>
								</li>
								<li>
									<a href="car-single.html#">
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
									<li>
										<a href="index.html">Accueil</a>
									</li>
									<li>
										<a href="car-single.html#">Voitures 
											<i class="lnr lnr-chevron-down"></i>
										</a>
										<ul>
											<li>
												<a href="cars.html">Liste Des Voitures</a>
											</li>
											<li>
												<a href="car-search.html">Recherche Voiture</a>
											</li>
											<li>
												<a href="car-single.html#">Gallerie 
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
											<li class="active">
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
										<a href="car-single.html#">Aide Et Info 
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
										<a href="fullwidth.html">Conditions Et Termes</a>
									</li>
									<li>
										<a href="car-single.html#">Blog 
											<i class="lnr lnr-chevron-down"></i>
										</a>
										<ul>
											<li>
												<a href="blog.html">Liste De Blog</a>
											</li>
											<li>
												<a href="blog-grid.html">Grille De Blog</a>
											</li>
											<li>
												<a href="blog-grid-sidebar.html">Grille De Blog- Barre Latérale</a>
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

		<!-- Single Car Header-->
		<div class="rn-single-car-header">
			<div class="rn-overlayer"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="rn-car-single-info">
							<h1>Toyta Corrola</h1>
							<p>Mauris semper nisl a massa convallis</p>
						</div>
						<div class="rn-car-single-meta">
							<span>
								<i class="rni-car-seat"></i> 3 Passagers
							</span>
							<span>
								<i class="rni-suitcase"></i> 2 Bagages
							</span>
							<span>
								<i class="rni-petrol-station"></i> Gaz
							</span>
							<span>
								<i class="rni-car-gear"></i> Auto
							</span>
							<span>
								<i class="rni-car-door"></i> 4 Portes
							</span>
						</div>
						<div class="rn-car-single-price">
							<span class="rn-car-price-from">A Partir De</span>
							<span class="rn-car-price-format">
								<span class="rn-car-price-amount">9000 DH</span>
								<span class="rn-car-price-per">/Jour</span>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Single Car Header-->

		<!-- Single Car Content-->
		<section class="rn-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<p>Praesent quis risus maximus arcu luctus egestas. Aliquam rhoncus metus eu dui aliquet, ut imperdiet metus fringilla. Nulla non purus et odio varius condimentum. Maecenas et elit eu lectus feugiat congue. Aenean dictum ligula vitae orci congue, eu rutrum ex tempus. Donec vel ex a neque congue volutpat. Mauris nec purus eget velit elementum posuere. Donec libero nisi, blandit non turpis sed, hendrerit suscipit metus. Aliquam ornare tincidunt dictum. Sed laoreet, arcu fringilla fermentum rutrum, quam urna dictum tellus, et rutrum dui lectus ac turpis. Donec eu sem in libero euismod tristique vel sit amet nibh.</p>
						<p>Integer pellentesque fermentum mi in accumsan. Phasellus congue risus urna, eget maximus ante ullamcorper et. Aenean malesuada, magna a ultrices hendrerit, ante lectus semper odio, quis imperdiet odio tellus at ex. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc eu tellus quam. Cras sit amet sapien at est lacinia consectetur in efficitur ante. Nulla pellentesque metus et rutrum placerat. Aliquam erat volutpat.</p>
						<p>Donec pellentesque neque mi, ac tristique purus vestibulum et. Donec sagittis laoreet mauris, eget interdum tortor gravida nec. Maecenas suscipit nisi ex, eu dictum enim accumsan ut. Pellentesque vel sagittis ex. Duis vitae est ut diam blandit consectetur in eget risus. Donec faucibus ex consectetur, sodales quam ac, feugiat mi. Sed ultrices mi ac ultricies egestas. In varius ligula a ipsum facilisis, quis ornare neque euismod.</p>
					</div>
					<div class="col-lg-4">

						<!-- Check Availability-->
						<div class="rn-small-search-form">
							<div class="rn-small-search-form-title">
								<h2>Voir Les Disponibilités</h2>
							</div>
							<form action="car-single.html">
								<div class="rn-icon-input">
									<i class="fas fa-map-marker-alt"></i>
									<input type="text" placeholder="Lieu De Location">
								</div>
								<div class="rn-icon-input">
									<i class="fas fa-map-marker-alt"></i>
									<input type="text" placeholder="Lieu De Retour">
								</div>
								<div class="rn-date-time-input">
									<div class="row">
										<div class="col-7">
											<div class="rn-icon-input">
												<i class="far fa-calendar-alt"></i>
												<input type="text" placeholder="Date De Location" id="pickup-date">
											</div>
										</div>
										<div class="col-5">
											<div class="rn-icon-input">
												<i class="far fa-clock"></i>
												<input type="text" placeholder="Heure" id="pickup-time">
											</div>
										</div>
									</div>
								</div>
								<div class="rn-date-time-input">
									<div class="row">
										<div class="col-7">
											<div class="rn-icon-input">
												<i class="far fa-calendar-alt"></i>
												<input type="text" placeholder="Date De Retour" id="drop-date">
											</div>
										</div>
										<div class="col-5">
											<div class="rn-icon-input">
												<i class="far fa-clock"></i>
												<input type="text" placeholder="Heure" id="drop-time">
											</div>
										</div>
									</div>
								</div>
								<button class="btn btn-main btn-lg btn-shadow btn-block" type="submit">
									<i class="fas fa-search"></i> Vérifier Maintenant
								</button>
							</form>
						</div>
						<!-- End Check Availability-->

						<!-- Car Sharing Buttons-->
						<div class="rn-car-share">
							<span>Partager Cette Voiture:</span>
							<ul>
								<li>
									<a href="car-single.html#">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li>
									<a href="car-single.html#">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="car-single.html#">
										<i class="fab fa-google-plus-g"></i>
									</a>
								</li>
								<li>
									<a href="car-single.html#">
										<i class="fab fa-linkedin-in"></i>
									</a>
								</li>
							</ul>
						</div>
						<!-- End Car Sharing Buttons-->

					</div>
				</div>

				<!-- Car Facilities-->
				<div class="row rn-facilities">
					<div class="col-lg-12">
						<h2 class="rn-simple-title">Installations</h2>
					</div>
					<div class="col-md-3 col-6">
						<ul>
							<li>
								<i class="fas fa-check"></i> Entrée audio
							</li>
							<li>
								<i class="fas fa-check"></i> Bluetooth
							</li>
							<li>
								<i class="fas fa-check"></i> sièges chauffants
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-6">
						<ul>
							<li>
								<i class="fas fa-check"></i> Traction Intégrale
							</li>
							<li>
								<i class="fas fa-check"></i> Entrée USB 
							</li>
							<li>
								<i class="fas fa-check"></i> Radio FM
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-6">
						<ul>
							<li>
								<i class="fas fa-check"></i> Navigation GPS
							</li>
							<li>
								<i class="fas fa-check"></i> Securisé
							</li>
							<li>
								<i class="fas fa-check"></i> Climatisation
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-6">
						<ul>
							<li>
								<i class="fas fa-times"></i>  Capteur de stationnement
							</li>
							<li>
								<i class="fas fa-times"></i> WI-FI
							</li>
							<li>
								<i class="fas fa-times"></i> Toit ouvrant
							</li>
						</ul>
					</div>
				</div>
				<!-- End Car Facilities-->

			</div>
		</section>
		<!-- End Single Car Content-->

		<!-- Car Reviews-->
		<div class="rn-section rn-section-light-gray">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">

						<!-- Car Reviews-->
						<div class="rn-reviews mb-50">
							<h2 class="rn-simple-title">Avis Client</h2>

							<!-- Review Item-->
							<div class="rn-review-item">
								<div class="rn-review-meta">
									<img src="assets/images/author-1.jpg" alt="Barbara Miller" srcset="assets/images/author-1.jpg 1x, assets/images/author-1@2x.jpg 2x"/>
									<div class="rn-reviewer-info">
										<div class="rn-reviewer-name">Barbara Miller</div>
										<div class="rn-review-time">13 Mai, 2018 à 8:21 PM</div>
									</div>
								</div>
								<div class="rn-review-content">
									<div class="rn-review-ratings">
										<div class="rn-review-rating">
											<div class="rn-review-rating-title">Qualité:</div>
											<div class="rn-review-rating-stars">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
										</div>
										<div class="rn-review-rating">
											<div class="rn-review-rating-title">Prix:</div>
											<div class="rn-review-rating-stars">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="far fa-star"></i>
											</div>
										</div>
										<div class="rn-review-rating">
											<div class="rn-review-rating-title">Confort:</div>
											<div class="rn-review-rating-stars">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
										</div>
										<div class="rn-review-rating">
											<div class="rn-review-rating-title">Conduite:</div>
											<div class="rn-review-rating-stars">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
										</div>
									</div>
									<div class="rn-review-body">
										<p>Mauris quis sollicitudin ipsum. Morbi venenatis sem eros, quis pulvinar lacus pharetra nec. Vestibulum odio ante, venenatis ut volutpat nec, scelerisque vel purus. Nunc tempor eros a interdum blandit.</p>
									</div>
								</div>
							</div>
							<!-- End Review Item-->


							<!-- Review Item-->
							<div class="rn-review-item">
								<div class="rn-review-meta">
									<img src="assets/images/author-2.jpg" alt="Joe Shaw" srcset="assets/images/author-2.jpg 1x, assets/images/author-2@2x.jpg 2x"/>
									<div class="rn-reviewer-info">
										<div class="rn-reviewer-name">Joe Shaw</div>
										<div class="rn-review-time">13 Mai, 2018 à 8:21 PM</div>
									</div>
								</div>
								<div class="rn-review-content">
									<div class="rn-review-ratings">
										<div class="rn-review-rating">
											<div class="rn-review-rating-title">Qualité:</div>
											<div class="rn-review-rating-stars">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
										</div>
										<div class="rn-review-rating">
											<div class="rn-review-rating-title">Prix:</div>
											<div class="rn-review-rating-stars">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="far fa-star"></i>
											</div>
										</div>
										<div class="rn-review-rating">
											<div class="rn-review-rating-title">Comfort:</div>
											<div class="rn-review-rating-stars">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
										</div>
										<div class="rn-review-rating">
											<div class="rn-review-rating-title">Conduite:</div>
											<div class="rn-review-rating-stars">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
										</div>
									</div>
									<div class="rn-review-body">
										<p>Mauris quis sollicitudin ipsum. Morbi venenatis sem eros, quis pulvinar lacus pharetra nec. Vestibulum odio ante, venenatis ut volutpat nec, scelerisque vel purus. Nunc tempor eros a interdum blandit.</p>
									</div>
								</div>
							</div>
							<!-- End Review Item-->


							<!-- Review Item-->
							<div class="rn-review-item">
								<div class="rn-review-meta">
									<img src="assets/images/author-3.jpg" alt="Kimberly Jenkins" srcset="assets/images/author-3.jpg 1x, assets/images/author-3@2x.jpg 2x"/>
									<div class="rn-reviewer-info">
										<div class="rn-reviewer-name">Kimberly Jenkins</div>
										<div class="rn-review-time">13 Mai, 2018 à 8:21 PM</div>
									</div>
								</div>
								<div class="rn-review-content">
									<div class="rn-review-ratings">
										<div class="rn-review-rating">
											<div class="rn-review-rating-title">Qualité:</div>
											<div class="rn-review-rating-stars">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
										</div>
										<div class="rn-review-rating">
											<div class="rn-review-rating-title">Prix:</div>
											<div class="rn-review-rating-stars">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="far fa-star"></i>
											</div>
										</div>
										<div class="rn-review-rating">
											<div class="rn-review-rating-title">Confort:</div>
											<div class="rn-review-rating-stars">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
										</div>
										<div class="rn-review-rating">
											<div class="rn-review-rating-title">Conduite:</div>
											<div class="rn-review-rating-stars">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
										</div>
									</div>
									<div class="rn-review-body">
										<p>Mauris quis sollicitudin ipsum. Morbi venenatis sem eros, quis pulvinar lacus pharetra nec. Vestibulum odio ante, venenatis ut volutpat nec, scelerisque vel purus. Nunc tempor eros a interdum blandit.</p>
									</div>
								</div>
							</div>
							<!-- End Review Item-->

							<div class="text-center">
								<a class="btn btn-lg btn-outline-light" href="car-single.html#">Charger Plus</a>
							</div>
						</div>
						<!-- End Car Reviews-->

						<!-- Car Review Form-->
						<div class="rn-review-form">
							<h2 class="rn-simple-title">Ecrire Un Commentaire</h2>
							<form action="post">
								<div class="row">
									<div class="col-md-3 col-6">
										<div class="rn-rating-input rn-rating-input-quality">
											<label>Qualité:</label>
											<div class="rn-rating-input-inner">
												<input class="rn-rating-value-input" type="hidden"/>
												<div class="rn-rating-main-input"></div>
											</div>
										</div>
									</div>
									<div class="col-md-3 col-6">
										<div class="rn-rating-input rn-rating-input-price">
											<label>Prix:</label>
											<div class="rn-rating-input-inner">
												<input class="rn-rating-value-input" type="hidden"/>
												<div class="rn-rating-main-input"></div>
											</div>
										</div>
									</div>
									<div class="col-md-3 col-6">
										<div class="rn-rating-input rn-rating-input-comfort">
											<label>Confort:</label>
											<div class="rn-rating-input-inner">
												<input class="rn-rating-value-input" type="hidden"/>
												<div class="rn-rating-main-input"></div>
											</div>
										</div>
									</div>
									<div class="col-md-3 col-6">
										<div class="rn-rating-input rn-rating-input-driving">
											<label>Conduite:</label>
											<div class="rn-rating-input-inner">
												<input class="rn-rating-value-input" type="hidden"/>
												<div class="rn-rating-main-input"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<input type="text" placeholder="Nom">
									</div>
									<div class="col-lg-4">
										<input type="email" placeholder="Email">
									</div>
									<div class="col-lg-4">
										<input type="url" placeholder="SiteWeb">
									</div>
								</div>
								<textarea cols="30" rows="10" placeholder="Ecrire Votre Commentaire"></textarea>
								<div class="text-right">
									<input class="btn btn-main btn-lg btn-shadow" type="submit" value="Poster Le Commentaire">
								</div>
							</form>
						</div>
						<!-- End Car Review Form-->

					</div>
				</div>
			</div>
		</div>
		<!-- End Car Reviews-->

		<!-- Similar Cars-->
		<section class="rn-car-list rn-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">

						<!-- Section Title-->
						<div class="rn-section-title   ">
							<h2 class="rn-title">Voitures Similaires </h2>
							<p>Inbecilloque elegans errorem concedo etsi electram.</p>
							<span class="rn-title-bg"> Voitures Similaires</span>
						</div>

					</div>
					<div class="col-lg-4 col-md-6">

						<!-- Car Item-->
						<div class="rn-car-item">
							<div class="rn-car-item-review">
								<div class="fas fa-star"></div> 5.0
							</div>
							<div class="rn-car-item-thumb">
								<a href="car-single.html">
									<img class="img-fluid" src="assets/images/car-1.jpg" alt="Toyta Corrola" srcset="assets/images/car-1.jpg 1x, assets/images/car-1@2x.jpg 2x"/>
								</a>
							</div>
							<div class="rn-car-item-info">
								<h3>
									<a href="car-single.html">Toyta Corrola</a>
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
									<img class="img-fluid" src="assets/images/car-2.jpg" alt="Toyta Corrola" srcset="assets/images/car-2.jpg 1x, assets/images/car-2@2x.jpg 2x"/>
								</a>
							</div>
							<div class="rn-car-item-info">
								<h3>
									<a href="car-single.html">Toyta Corrola</a>
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
									<img class="img-fluid" src="assets/images/car-3.jpg" alt="Toyta Corrola" srcset="assets/images/car-3.jpg 1x, assets/images/car-3@2x.jpg 2x"/>
								</a>
							</div>
							<div class="rn-car-item-info">
								<h3>
									<a href="car-single.html">Toyta Corrola</a>
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
				</div>
			</div>
		</section>
		<!-- End Similar Cars-->

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
									<p>Sed sit amet ligula ac nulla finibus euismod nec nec diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent semper, risus eget ornare maximus, ipsum ante semper.</p>
									<ul class="rn-widget-social">
										<li>
											<a href="car-single.html#">
												<i class="fab fa-facebook-f"></i>
											</a>
										</li>
										<li>
											<a href="car-single.html#">
												<i class="fab fa-twitter"></i>
											</a>
										</li>
										<li>
											<a href="car-single.html#">
												<i class="fab fa-instagram"></i>
											</a>
										</li>
										<li>
											<a href="car-single.html#">
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
													<a href="car-single.html#">A Propos </a>
												</li>
												<li>
													<a href="car-single.html#">Contactez-Nous</a>
												</li>
												<li>
													<a href="car-single.html#">Support</a>
												</li>
												<li>
													<a href="car-single.html#">Voir Réservation</a>
												</li>
												<li>
													<a href="car-single.html#">Programmes d'Affiliation</a>
												</li>
												<li>
													<a href="car-single.html#">Marketplace</a>
												</li>
											</ul>
										</div>
										<div class="col-6">
											<ul>
												<li>
													<a href="car-single.html#">Plan Du Site</a>
												</li>
												<li>
													<a href="car-single.html#">Carrières</a>
												</li>
												<li>
													<a href="car-single.html#">Presse</a>
												</li>
												<li>
													<a href="car-single.html#">Obtenu Un Reçu</a>
												</li>
												<li>
													<a href="car-single.html#">Communauté</a>
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
							<p>Copyright &copy; RentNow 2018. Tous le drois sont réservés.</p>
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