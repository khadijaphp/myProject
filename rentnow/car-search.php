<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Recherche Voiture | RentNow - Responsive Car Rental Template</title>

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

		<!-- Page Title-->
		<div class="rn-page-title">
			<div class="rn-pt-overlayer"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="rn-page-title-inner">
							<h1>Recherche Voiture</h1>
							<p>Trouver Votre Voiture Préféré.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Page Title-->
		<!-- Car Search Form-->
		<div class="rn-search-form-big rn-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
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
													<input type="text" placeholder="Date De Location" id="pickup-date">
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
			<div class="rn-shape rn-shape-bottom"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
	<path class="rn-shape-fill" d="M500.2,94.7L0,0v100h1000V0L500.2,94.7z"/>
</svg>
			</div>
		</div>
		<!-- End Car Search Form-->

		<!-- Car Results-->
		<div class="rn-section rn-car-search-results">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">

						<!-- Car Search Filters-->
						<div class="rn-car-search-filters">
							<div class="rn-car-search-filter-item">
								<label>Marque De Voiture:</label>
								<select>
									<option value="Any">Any</option>
									<option value="Rover">Rover</option>
									<option value="Lexus">Lexus</option>
									<option value="BMW">BMW</option>
									<option value="Tesla">Tesla</option>
									<option value="Lamborghini">Lamborghini</option>
								</select>
							</div>
							<div class="rn-car-search-filter-item">
								<label>les passagers:</label>
								<select>
									<option value="Any">Any</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
								</select>
							</div>
							<div class="rn-car-search-filter-item">
								<label>Couleur:</label>
								<ul class="rn-car-color-filter">
									<li>
										<label>
											<input type="checkbox">
											<span class="rn-color-silver"></span>
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox">
											<span class="rn-color-black"></span>
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox">
											<span class="rn-color-white"></span>
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox">
											<span class="rn-color-red"></span>
										</label>
									</li>
								</ul>
							</div>
							<div class="rn-car-search-filter-item rn-csf-item-last">
								<label>Trier Par:</label>
								<select>
									<option value="Default">défaut</option>
									<option value="Relavent">Relavent</option>
									<option value="Price: High to Low">Prix: De Haut En Bas</option>
									<option value="Price: Low to High">Prix: De Bas En Haut</option>
									<option value="Name: A to Z">Nom: A à Z</option>
									<option value="Name: Z to A">Nom: Z à A</option>
								</select>
							</div>
						</div>
						<!-- End Car Search Filters-->

						<!-- Car Search Item-->
						<div class="rn-car-search-item">
							<div class="rn-car-search-item-thumb">
								<a href="car-single.html">
									<img class="img-fluid" src="assets/images/car-search-item-1.jpg" alt="" srcset="assets/images/car-search-item-1.jpg 1x, assets/images/car-search-item-1@2x.jpg 2x"/>
								</a>
							</div>
							<div class="rn-car-search-item-info">
								<h2 class="rn-car-search-item-title">
									<a href="car-search.html#">Black Sedan</a>
								</h2>
								<div class="rn-car-reviews">
									<div class="rn-car-stars">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="far fa-star"></i>
									</div>
									<a href="car-search.html#">3 Commentaires</a>
								</div>
								<p>Mauris semper nisl a massa convallis</p>
								<div class="rn-car-meta">
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
								<a class="rn-car-more-info" href="car-search.html#">Plus d'informations</a>
							</div>
							<div class="rn-car-search-item-pricing">
								<div class="rn-car-total-price">
									<span>14000 DH</span>/total
								</div>
								<div class="rn-car-price">
									<span>7000 DH</span>/Jour
								</div>
								<a class="btn btn-main btn-lg btn-shadow" href="car-search.html#">Réserver Maintenant</a>
							</div>
						</div>
						<!-- End Car Search Item-->


						<!-- Car Search Item-->
						<div class="rn-car-search-item">
							<div class="rn-car-search-item-thumb">
								<a href="car-single.html">
									<img class="img-fluid" src="assets/images/car-search-item-2.jpg" alt="" srcset="assets/images/car-search-item-2.jpg 1x, assets/images/car-search-item-2@2x.jpg 2x"/>
								</a>
							</div>
							<div class="rn-car-search-item-info">
								<h2 class="rn-car-search-item-title">
									<a href="car-search.html#">Toyota Etios</a>
								</h2>
								<div class="rn-car-reviews">
									<div class="rn-car-stars">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="far fa-star"></i>
									</div>
									<a href="car-search.html#">3 Commentaires</a>
								</div>
								<p>Mauris semper nisl a massa convallis</p>
								<div class="rn-car-meta">
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
								<a class="rn-car-more-info" href="car-search.html#">Plus d'informations</a>
							</div>
							<div class="rn-car-search-item-pricing">
								<div class="rn-car-total-price">
									<span>14000 DH</span>/total
								</div>
								<div class="rn-car-price">
									<span>7000 DH</span>/Jour
								</div>
								<a class="btn btn-main btn-lg btn-shadow" href="car-search.html#">Réserver Maintenant</a>
							</div>
						</div>
						<!-- End Car Search Item-->


						<!-- Car Search Item-->
						<div class="rn-car-search-item">
							<div class="rn-car-search-item-thumb">
								<a href="car-single.html">
									<img class="img-fluid" src="assets/images/car-search-item-3.jpg" alt="" srcset="assets/images/car-search-item-3.jpg 1x, assets/images/car-search-item-3@2x.jpg 2x"/>
								</a>
							</div>
							<div class="rn-car-search-item-info">
								<h2 class="rn-car-search-item-title">
									<a href="car-search.html#">Red Sporty Car</a>
								</h2>
								<div class="rn-car-reviews">
									<div class="rn-car-stars">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="far fa-star"></i>
									</div>
									<a href="car-search.html#">3 Commentaires</a>
								</div>
								<p>Mauris semper nisl a massa convallis</p>
								<div class="rn-car-meta">
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
								<a class="rn-car-more-info" href="car-search.html#">Plus d'informations</a>
							</div>
							<div class="rn-car-search-item-pricing">
								<div class="rn-car-total-price">
									<span>14000 DH</span>/total
								</div>
								<div class="rn-car-price">
									<span>7000 DH</span>/Jour
								</div>
								<a class="btn btn-main btn-lg btn-shadow" href="car-search.html#">Réserver Maintenant</a>
							</div>
						</div>
						<!-- End Car Search Item-->


						<!-- Car Search Item-->
						<div class="rn-car-search-item">
							<div class="rn-car-search-item-thumb">
								<a href="car-single.html">
									<img class="img-fluid" src="assets/images/car-search-item-4.jpg" alt="" srcset="assets/images/car-search-item-4.jpg 1x, assets/images/car-search-item-4@2x.jpg 2x"/>
								</a>
							</div>
							<div class="rn-car-search-item-info">
								<h2 class="rn-car-search-item-title">
									<a href="car-search.html#">Mercedes AMG E63</a>
								</h2>
								<div class="rn-car-reviews">
									<div class="rn-car-stars">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="far fa-star"></i>
									</div>
									<a href="car-search.html#">3 Commentaires</a>
								</div>
								<p>Mauris semper nisl a massa convallis</p>
								<div class="rn-car-meta">
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
								<a class="rn-car-more-info" href="car-search.html#">More Information</a>
							</div>
							<div class="rn-car-search-item-pricing">
								<div class="rn-car-total-price">
									<span>14000 DH</span>/total
								</div>
								<div class="rn-car-price">
									<span>7000 DH</span>/day
								</div>
								<a class="btn btn-main btn-lg btn-shadow" href="car-search.html#">Réserver Maintenant</a>
							</div>
						</div>
						<!-- End Car Search Item-->

						<!-- Load More Cars-->
						<div class="text-center">
							<a class="btn btn-lg btn-outline-light mb-40" href="car-search.html#">Charger Plus</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Car Results-->

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