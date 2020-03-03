<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>La Caisse | RentNow - Responsive Car Rental Template</title>

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
									<a href="checkout.html#">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li>
									<a href="checkout.html#">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="checkout.html#">
										<i class="fab fa-google-plus-g"></i>
									</a>
								</li>
								<li>
									<a href="checkout.html#">
										<i class="fab fa-instagram"></i>
									</a>
								</li>
								<li>
									<a href="checkout.html#">
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
											<li><li>Blvd Mohammed 6 121 Cité Riad Salam</li></li>
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
										<a href="checkout.html#">Voitures 
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
												<a href="checkout.html#">Gallerie 
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
											<li class="active">
												<a href="checkout.html">La Caisse</a>
											</li>
											<li>
												<a href="cart.html">Panier</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="checkout.html#">Aide &amp; Info 
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
										<a href="fullwidth.html">Conditions &amp; Termes</a>
									</li>
									
									<li>
										<a href="checkout.html#">Blog 
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
												<a href="blog-grid-sidebar.html"> Grille De Blog - Barre Latérale</a>
											</li>
											<li>
												<a href="blog-single.html"> Article Singulier</a>
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

		<!-- Page Title-->
		<div class="rn-page-title">
			<div class="rn-pt-overlayer"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="rn-page-title-inner">
							<h1>La Caisse</h1>
							<p>Cras eros lorem, rhoncus ac risus sit amet, fringilla ultrices purus.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Page Title-->

		<!-- Page Content-->
		<section class="rn-section">
			<div class="container mb-10">
				<div class="row">
					<div class="col-lg-6">

						<!-- Contact details-->
						<h2 class="rn-simple-title">Détails Du Contact</h2>

						<!-- Full Name-->
						<div class="row">
							<div class="col-md-6">
								<div class="rn-input-group">
									<label>Prénom</label>
									<input type="text">
								</div>
							</div>
							<div class="col-md-6">
								<div class="rn-input-group">
									<label>Nom</label>
									<input type="text">
								</div>
							</div>
						</div>
						<!-- End Fullname-->

						<!-- Country-->
					
						<!-- End Country-->

						<!-- Address-->
						<div class="rn-input-group">
							<label> Addresse 1</label>
							<input type="text">
						</div>
						<div class="rn-input-group">
							<label> Addresse 2</label>
							<input type="text">
						</div>
						<div class="rn-input-group">
							<label> Ville </label>
							<input type="text">
						</div>
						<!-- <div class="row">
							<div class="col-md-4">
								<div class="rn-input-group">
									<label>Ville</label>
									<input type="text">
								</div>

							</div>					
						</div> -->
						<!-- End Address-->

						<!-- Phone & Email-->
						<div class="row">
							<div class="col-md-6">
								<div class="rn-input-group">
									<label>Telephone</label>
									<input type="text">
								</div>
							</div>
							<div class="col-md-6">
								<div class="rn-input-group">
									<label>E-mail</label>
									<input type="text">
								</div>
							</div>
						</div>
						<!-- End Contact details-->

						<!-- Billing details-->
						<h2 class="mt-50 rn-simple-title">Détails de la facturation</h2>
						<!-- Full Name-->
						<div class="row">
							<div class="col-md-6">
								<div class="rn-input-group">
									<label>Prénom</label>
									<input type="text">
								</div>
							</div>
							<div class="col-md-6">
								<div class="rn-input-group">
									<label>Nom</label>
									<input type="text">
								</div>
							</div>
						</div>
						<!-- End Fullname-->

						<!-- Country-->
						
						<!-- End Country-->

						<!-- Address-->
						<div class="rn-input-group">
							<label> Addressz 1</label>
							<input type="text">
						</div>
						<div class="rn-input-group">
							<label> Addresse 2</label>
							<input type="text">
						</div>
						<div class="rn-input-group">
							<label> Ville </label>
							<input type="text">
						</div>

						<!-- <div class="row">
							<div class="col-md-4">
								<div class="rn-input-group">
									<label>Ville</label>
									<input type="text">
								</div>
							</div>
							
						</div> -->
						<!-- End Address-->

						<!-- Phone & Email-->
						<div class="row">
							<div class="col-md-6">
								<div class="rn-input-group">
									<label>Telephone</label>
									<input type="text">
								</div>
							</div>
							<div class="col-md-6">
								<div class="rn-input-group">
									<label>E-mail</label>
									<input type="text">
								</div>
							</div>
						</div>
						<!-- Billing details-->

					</div>
					<div class="col-lg-6">
						<div class="rn-input-group">
							<label>Notes d'ordre (optionnel)</label>
							<textarea></textarea>
						</div>

						<!-- Checkout Form-->
						<div class="rn-checkout-items">

							<!-- Checkout Item-->
							<div class="rn-checkout-item">
								<div class="rn-checkout-item-thumb">
									<img class="img-fluid" src="assets/images/cart-item-1.jpg" alt="Cart Item" srcset="assets/images/cart-item-1.jpg 1x, assets/images/cart-item-1@2x.jpg 2x"/>
								</div>
								<div class="rn-checkout-item-info">
									<div class="rn-checkout-item-title-price">
										<h2>
											<a href="car-single.html">Toyta Corrola</a>
										</h2>
										<span>7000 DH/Jour</span>
									</div>
									<div class="rn-locations">
										<div class="rn-pickup-location">
											<div class="rn-location">New York</div>
											<div class="rn-date-n-time">08/25/2018 8:00 AM</div>
										</div>
										<div class="rn-drop-location">
											<div class="rn-location">Los Angeles</div>
											<div class="rn-date-n-time">08/26/2018 8:00 AM</div>
										</div>
									</div>
									<div class="rn-checkout-item-extra">
										<h3>ajouter des services supplémentaires</h3>
										<label class="rn-extra-service">
											<span class="rn-extra-service-name">
												<i class="fas fa-check"></i> Chauffeur
											</span>
											<span class="rn-extra-service-price">+1000 DH/Jour</span>
										</label>
										<label class="rn-extra-service">
											<span class="rn-extra-service-name">
												<i class="fas fa-times"></i> Snacks
											</span>
											<span class="rn-extra-service-price">+500 DH/Jour</span>
										</label>
									</div>
								</div>
								<div class="rn-checkout-total-container">
									<div class="rn-cart-total">Total: 8000 DH </div>
								</div>
							</div>
							<!-- End Checkout Item-->


							<!-- Checkout Item-->
							<div class="rn-checkout-item">
								<div class="rn-checkout-item-thumb">
									<img class="img-fluid" src="assets/images/cart-item-2.jpg" alt="Cart Item" srcset="assets/images/cart-item-2.jpg 1x, assets/images/cart-item-2@2x.jpg 2x"/>
								</div>
								<div class="rn-checkout-item-info">
									<div class="rn-checkout-item-title-price">
										<h2>
											<a href="car-single.html">Toyta Corrola</a>
										</h2>
										<span>7000 DH/day</span>
									</div>
									<div class="rn-locations">
										<div class="rn-pickup-location">
											<div class="rn-location">New York</div>
											<div class="rn-date-n-time">08/25/2018 8:00 AM</div>
										</div>
										<div class="rn-drop-location">
											<div class="rn-location">Los Angeles</div>
											<div class="rn-date-n-time">08/26/2018 8:00 AM</div>
										</div>
									</div>
									<div class="rn-checkout-item-extra">
										<h3>ajouter des services supplémentaires</h3>
										<label class="rn-extra-service">
											<span class="rn-extra-service-name">
												<i class="fas fa-check"></i> Chauffeur
											</span>
											<span class="rn-extra-service-price">+1000 DH/Jour</span>
										</label>
										<label class="rn-extra-service">
											<span class="rn-extra-service-name">
												<i class="fas fa-times"></i> Snacks
											</span>
											<span class="rn-extra-service-price">+500 DH/Jour</span>
										</label>
									</div>
								</div>
								<div class="rn-checkout-total-container">
									<div class="rn-cart-total">Total: 8000 DH</div>
								</div>
							</div>
							<!-- End Checkout Item-->

							<div class="rn-checkout-subtotal"><strong>Sous-Total:</strong>
								<span>16000.00 DH</span>
							</div>
							<div class="rn-checkout-discount"><strong>Remise:</strong>
								<span>3000.00 DH</span>
							</div>
							<div class="rn-checkout-total"><strong>Total:</strong>
								<span>13000.00 DH</span>
							</div>

							<!-- Payment Methods-->
							
							<div class="text-right">
								<input class="btn btn-main btn-lg btn-shadow" type="submit" value="Continuer au paiement">
							</div>
						</div>
						<!-- End Checkout Form-->

					</div>
				</div>
			</div>
		</section>
		<!-- End Page Content-->

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
											<a href="checkout.html#">
												<i class="fab fa-facebook-f"></i>
											</a>
										</li>
										<li>
											<a href="checkout.html#">
												<i class="fab fa-twitter"></i>
											</a>
										</li>
										<li>
											<a href="checkout.html#">
												<i class="fab fa-instagram"></i>
											</a>
										</li>
										<li>
											<a href="checkout.html#">
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
													<a href="checkout.html#">A propos </a>
												</li>
												<li>
													<a href="checkout.html#">Contactez-Nous </a>
												</li>
												<li>
													<a href="checkout.html#">Support</a>
												</li>
												<li>
													<a href="checkout.html#">Voir Réservation</a>
												</li>
												<li>
													<a href="checkout.html#">Programmes d'affiliation</a>
												</li>
												<li>
													<a href="checkout.html#">Marketplace</a>
												</li>
											</ul>
										</div>
										<div class="col-6">
											<ul>
												<li>
													<a href="checkout.html#">Plan Du Site</a>
												</li>
												<li>
													<a href="checkout.html#">Carrières</a>
												</li>
												<li>
													<a href="checkout.html#">Presse</a>
												</li>
												<li>
													<a href="checkout.html#">Obtenu Un Reçu</a>
												</li>
												<li>
													<a href="checkout.html#">Communauté</a>
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
							<p>Copyright &copy; RentNow 2018. Tous les droits sont réservés.</p>
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