<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Contactez-Nous | RentNow</title>

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
							<h1>Contactez-Nous</h1>
							<p>Cras eros lorem, rhoncus ac risus sit amet, fringilla ultrices purus.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Page Title-->

		<!-- Page Content-->
		<section class="rn-section">
			<div class="container">
				<div class="row mb-90">
					<div class="col-lg-12">
						<!-- Google Map-->
						<div class="rn-google-map" id="rn-google-map"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">

						<!-- Contact Form-->
						<h2 class="rn-simple-title">Envoyer un message</h2>
						<div class="rn-contact-form">
							<form action="contact.html">
								<div class="row mb-30">
									<div class="col-6">
										<div class="rn-icon-input">
											<i class="far fa-user"></i>
											<input type="text" placeholder="Nom Complet">
										</div>
									</div>
									<div class="col-6">
										<div class="rn-icon-input">
											<i class="far fa-envelope"></i>
											<input type="text" placeholder="Votre Email">
										</div>
									</div>
								</div>
								<div class="rn-icon-input rn-icon-top mb-30">
									<i class="far fa-comment"></i>
									<textarea placeholder="Votre Message" rows="5"></textarea>
								</div>
								<div class="text-right">
									<input class="btn btn-main btn-lg btn-shadow" type="submit" value="Envoyer Message">
								</div>
							</form>
						</div>
						<!-- End Contact Form-->

					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-12">
								<h2 class="rn-simple-title">Détails du contact</h2>
							</div>
							<div class="col-sm-6">

								<!-- Contact Info Item-->
								<div class="rn-contact-info">
									<div class="rn-info-icon">
										<i class="lnr lnr-map-marker"></i>
									</div>
									<div class="rn-info-content">
										<h2 class="rn-contact-title">Siège social</h2>
										<address>Blvd Mohammed 6 121 Cité Riad Salam
											<br>Mohammedia, Maroc
										</address>
									</div>
								</div>
								<!-- End Contact Info Item-->

							</div>
							<div class="col-sm-6">

								<!-- Contact Info Item-->
								<div class="rn-contact-info">
									<div class="rn-info-icon">
										<i class="lnr lnr-map-marker"></i>
									</div>
									<div class="rn-info-content">
										<h2 class="rn-contact-title">Branche 1</h2>
										<address>1425 Pointe Lane, Miami
											<br>Florida – 33169, USA
										</address>
									</div>
								</div>
								<!-- End Contact Info Item-->

							</div>
							<div class="col-sm-6">

								<!-- Contact Info Item-->
								<div class="rn-contact-info">
									<div class="rn-info-icon">
										<i class="lnr lnr-map-marker"></i>
									</div>
									<div class="rn-info-content">
										<h2 class="rn-contact-title">Branche 2</h2>
										<address>1425 Pointe Lane, Miami
											<br>Florida – 33169, USA
										</address>
									</div>
								</div>
								<!-- End Contact Info Item-->

							</div>
							<div class="col-sm-6">

								<!-- Contact Info Item-->
								<div class="rn-contact-info">
									<div class="rn-info-icon">
										<i class="lnr lnr-map-marker"></i>
									</div>
									<div class="rn-info-content">
										<h2 class="rn-contact-title">Branche 3</h2>
										<address>1425 Pointe Lane, Miami
											<br>Florida – 33169, USA
										</address>
									</div>
								</div>
								<!-- End Contact Info Item-->

							</div>
							<div class="col-sm-6">

								<!-- Contact Info Item-->
								<div class="rn-contact-info">
									<div class="rn-info-icon">
										<i class="lnr lnr-phone"></i>
									</div>
									<div class="rn-info-content">
										<h2 class="rn-contact-title">Telephone</h2>
										<address>(954)-944-1250
											
										</address>
									</div>
								</div>
								<!-- End Contact Info Item-->

							</div>
							<div class="col-sm-6">

								<!-- Contact Info Item-->
								<div class="rn-contact-info">
									<div class="rn-info-icon">
										<i class="lnr lnr-envelope"></i>
									</div>
									<div class="rn-info-content">
										<h2 class="rn-contact-title">E-mail</h2>
										<address>RentNow@gmail.com
											
										</address>
									</div>
								</div>
								<!-- End Contact Info Item-->

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Page Content-->

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