<?php
include 'autoLoad.php';
if(isset($_POST["signUp"]))
{
	
    if(empty($_POST["cin"])|| empty($_POST["password"]))
    {
        echo'<label> les champs sont obligatoire</label>';
    }
    else
    {
        $cin=$_POST["cin"];
		$prenom=$_POST["prenom"];
		$nom=$_POST["nom"];
		$dateNaiss=$_POST["dateNaiss"];
		$adresse=$_POST["adresse"];
		$ville=$_POST["ville"];
		$tel=$_POST["tel"];
		$email=$_POST["email"];
		$dateInscription=date("y/m/d");
		$password=$_POST["password"];
			try
			{
				$c = new ClientController();
				// $sql="INSERT INTO client (id_client,prenom,nom,adresse,ville,tel,email,username,password) 
				// VALUES (?,?,?,?,?,?,?,?,?)";
	 
				// $stmt=$con->connect()->prepare($sql);
				// $stmt->execute([$id,$prenom,$nom,$adresse,$ville,$tel,$email,$username,$pwd]);
				$c->createClient($cin,$prenom,$nom,$dateNaiss,$adresse,$ville,$tel,$email,$dateInscription,$password);
				session_start();
				$_SESSION['cin']=$cin;
				$_SESSION['password']=$password;
				header("location:cars.php");
				
			
			}catch(PDOException $ex)
			{
				echo $ex->getMessage();
			}
          
           
        
           
   }


}
?>
<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>S'inscrire</title>

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

  
    <!-- <link rel="stylesheet" href="css/logIn.css"> -->
    
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
				
			</div>
		</div>
		<!-- End Page Title-->

		<!-- Page Content-->
		<section class="rn-section">
			<div class="container mb-10">
				<div class="row">
					<div class="col-lg-6">

						<!-- Contact details-->
						<h2 class="rn-simple-title">S'inscrire</h2>
                    <form action="" method="POST">
					 
                        <!-- ID-->
						<div class="rn-input-group">
							<label> ID </label>
							<input type="text" name="cin" placeholder="CIN">
						</div>
                        <!-- End ID-->
                    <!-- Full Name-->
						<div class="row">
							<div class="col-md-6">
								<div class="rn-input-group">
									<label>Prénom</label>
									<input type="text" name="prenom" placeholder="Prenom">
								</div>
							</div>
							<div class="col-md-6">
								<div class="rn-input-group">
									<label>Nom</label>
									<input type="text" name="nom" placeholder="Nom">
								</div>
							</div>
						</div>
						<!-- End Fullname-->
						<div class="rn-input-group">
							<label> Date Naissance </label>
							<input type="date" name="dateNaiss" placeholder="">
						</div>
                        
						<!-- Address-->
						<div class="rn-input-group">
							<label> Addresse </label>
							<input type="text" name="adresse" placeholder="Adresse">
						</div>
						
						<div class="rn-input-group">
							<label> Ville </label>
							<input type="text" name="ville" placeholder="Ville">
						</div>
						
						<!-- End Address-->

						<!-- Phone & Email-->
						<div class="row">
							<div class="col-md-6">
								<div class="rn-input-group">
									<label>Telephone</label>
									<input type="text" name="tel" placeholder="Telephone">
								</div>
							</div>
							<div class="col-md-6">
								<div class="rn-input-group">
									<label>E-mail</label>
									<input type="text" name="email" placeholder="Email">
								</div>
							</div>
						</div>
						
                        <!-- password-->
                        <div class="rn-input-group">
							<label> Password </label>
							<input type="password" name="password" placeholder="Password">
                        </div>
                        <!--End password-->
						 <!-- button s'inscrire-->
                         <div class="rn-input-group">
							
							<input type="submit"name="signUp" value="s'inscrire">
                        </div>
                        <!--End password-->

                    </form>
						
						
						

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