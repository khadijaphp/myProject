<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>RentNow</title>

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
		<?php 
		include 'header.php';
		?>
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
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="lnr lnr-chevron-left" aria-hidden="true"></span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
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
	<?php
	include 'footer.php';
	?>
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