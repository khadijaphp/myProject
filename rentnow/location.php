<?php
include 'autoLoad.php';	
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Location</title>

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
                
				<?php
						$car = new CarsView();
						// $var=$_GET['id'];
						$res=$car->showSingleCar($_GET['idv']);
						 foreach($res as $car)
						 {
						?>
						<!-- Cart Item-->
						<div class="rn-cart-item">
							<div class="rn-cart-item-thumb">
								<img class="img-fluid" src="assets/images/cart-item-1.jpg" alt="Cart Item" srcset="assets/images/cart-item-1.jpg 1x, assets/images/cart-item-1@2x.jpg 2x"/>
							</div>
							<div class="rn-cart-item-info">
								<div class="rn-cart-item-title-price">
									<h2>
										<a href="cart.html#"></a>
									</h2>
									<span><?php echo $car['coutParJour'] ?> DH/Jour</span>
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
								
							</div>
							<div class="rn-cart-item-actions">
								<div class="rn-cart-total">Total: 7000.00 DH</div>
								<a class="btn btn-main" href="cart.html#">Modifier</a>
								<a class="btn btn-delete" href="cart.html#">Retirer</a>
							</div>
						</div>
						<!-- End Cart Item-->
						 <?php } ?>
                       

					</div>
					

							

							<!-- Payment Methods-->
							
							<div class="text-right">
								<input class="btn btn-main btn-lg btn-shadow" type="submit" value="Continuer au paiement">
							</div>
						</div>
						<!-- End Checkout Form-->

					
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