<?php
 include 'autoLoad.php';
 
?>
<?php

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Car Single | </title>

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

		<?php
						$car = new CarsView();
						$var=$_GET['id'];
						$res=$car->showSingleCar($_GET['id']);
						 foreach($res as $car)
						 {
						?>
		<!-- Single Car Header-->
		<div class="rn-single-car-header">
			<div class="rn-overlayer"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						
						<div class="rn-car-single-info">

							<h1><?php echo $car['marque'] ?></h1>
							<p>Cette voiture est <?php echo $car['dispo'] ?> </p>
						</div>
						<div class="rn-car-single-meta">
							<span>
								<i class="rni-car-seat"></i> <?php echo $car['passagers'] ?> Passagers
							</span>
							<!-- <span>
								<i class="rni-suitcase"></i> 2 Bagages
							</span> -->
							<span>
								<i class="rni-petrol-station"></i> <?php echo $car['carburant'] ?>
							</span>
							<span>
								<i class="rni-car-gear"></i> <?php echo $car['km_Actuel'] ?> Km
							</span>
							<span>
								<i class="rni-car-door"></i> <?php echo $car['portes'] ?> Portes
							</span>
						</div>
						<div class="rn-car-single-price">
							<span class="rn-car-price-from">A Partir De</span>
							<span class="rn-car-price-format">
								<span class="rn-car-price-amount"><?php echo $car['coutParJour'] ?> DH</span>
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
						<p>Praesent quis risus maximus arcu luctus egestas. Aliquam rhoncus metus eu dui aliquet, ut imperdiet metus fringilla.
							 Nulla non purus et odio varius condimentum. Maecenas et elit eu lectus feugiat congue. Aenean dictum ligula 
							 vitae orci congue, eu rutrum ex tempus. Donec vel ex a neque congue volutpat. Mauris nec purus eget velit 
							 elementum posuere. Donec libero nisi, blandit non turpis sed, hendrerit suscipit metus. Aliquam ornare tincidunt
							 ctum. Sed laoreet, arcu fringilla fermentum rutrum, quam urna dictum tellus, et rutrum dui lectus ac turpis. 
							 Donec eu sem in libero euismod tristique vel sit amet nibh.</p>
						<a class="btn btn-main btn-lg btn-shadow btn-block" name="louer" href="location.php?idv=<?php echo $car['id_voiture'] ?>">
									<i class="fas fa-search"></i> Louer
						 </a>
						
					</div>
					
					<?php 
					if($car['dispo']=='disponible')
					{
					?>
					<div class="col-lg-4">

						<!-- Check Availability-->

						<div class="rn-small-search-form">
							<div class="rn-small-search-form-title">
								<h2>details de Location</h2>
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
									<i class="fas fa-search"></i> Valider
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
					<?php }else{ ?>
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
				<?php	} ?>
				</div>
				

				<!-- Car Facilities-->
				
				<!-- End Car Facilities-->

			</div>
		</section>
		<?php } ?>
		<!-- End Single Car Content-->

		<!-- Car Reviews-->
		<div class="rn-section rn-section-light-gray">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">

						<!-- Car Reviews-->
						
						<!-- End Car Reviews-->

						<!-- Car Review Form-->
						<div class="rn-review-form">
							<h2 class="rn-simple-title">Ecrire Un Commentaire</h2>
							<form action="post">
								
								<div class="row">
									<div class="col-lg-6">
										<input type="text" placeholder="Nom">
									</div>
									<div class="col-lg-6">
										<input type="email" placeholder="Email">
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

		

		<!-- Site Footer-->
		<?php include 'footer.php';?>
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