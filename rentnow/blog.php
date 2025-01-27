<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Blog | RentNow - Responsive Car Rental Template</title>

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
									<a href="blog.html#">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li>
									<a href="blog.html#">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="blog.html#">
										<i class="fab fa-google-plus-g"></i>
									</a>
								</li>
								<li>
									<a href="blog.html#">
										<i class="fab fa-instagram"></i>
									</a>
								</li>
								<li>
									<a href="blog.html#">
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
										<a href="blog.html#">Voitures 
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
												<a href="blog.html#">Gallerie 
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
										<a href="blog.html#">Aide &amp; Info 
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
										<a href="blog.html#">Blog 
											<i class="lnr lnr-chevron-down"></i>
										</a>
										<ul>
											<li class="active">
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

		<!-- Page Title-->
		<div class="rn-page-title">
			<div class="rn-pt-overlayer"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="rn-page-title-inner">
							<h1>Nouvelles  &amp; Mises à jour</h1>
							<p>Cras eros lorem, rhoncus ac risus sit amet, fringilla ultrices purus.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Page Title-->

		<!-- Page Content-->
		<div class="rn-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 rn-post-list">

						<!-- Blog Post Item -->
						<article class="rn-post-item rn-post-size-lg">
							<div class="rn-post-item-thumb">
								<a href="blog.html#">
									<img class="img-fluid" src="assets/images/post-item-1.jpg" alt="A standard blog post with image"/>
								</a>
							</div>
							<div class="rn-post-item-header">
								<div class="rn-post-date">
									<div class="rn-post-date-inner">
										<div class="rn-post-date-d">15</div>
										<div class="rn-post-date-m-y">May, 2018</div>
									</div>
								</div>
								<div class="rn-post-item-title-meta">
									<div class="rn-post-item-title-meta-inner">
										<div class="rn-post-item-meta">
											<span class="rn-post-item-categories">Les 
												<a href="blog.html#">Nouveautés</a>
											</span>
											<span class="rn-post-item-author">Par 
												<a href="blog.html#">John Doe</a>
											</span>
										</div>
										<h3 class="rn-post-item-title">
											<a href="blog.html#">A standard blog post with image</a>
										</h3>
									</div>
								</div>
							</div>
							<div class="rn-post-item-body">
								<p>Aliquam erat volutpat. Morbi eget velit ut lectus efficitur vulputate dictum vel ex. Etiam bibendum libero eget lorem malesuada, id mattis est egestas. Mauris eu quam bibendum, placerat odio non, ultrices leo. Proin laoreet purus nisl, non elementum tortor accumsan vitae. Proin commodo vulputate purus, eu dignissim ipsum lobortis ut. Sed ac nisi velit. Integer magna mi, faucibus a sapien eget, volutpat euismod dolor.</p>
							</div>
							<div class="rn-post-item-footer">
								<div class="rn-post-read-more">
									<a class="btn btn-dark" href="blog.html#">Lire la suite</a>
								</div>
								<ul class="rn-post-love-n-view">
									<li>
										<button>
											<i class="fas fa-heart"></i>
										</button>
										<span>1k</span>
									</li>
									<li>
										<span class="rn-post-view-icon">
											<i class="far fa-eye"></i>
										</span>
										<span>50k</span>
									</li>
								</ul>
							</div>
						</article>
						<!-- End Blog Post Item -->


						<!-- Blog Post Item -->
						<article class="rn-post-item rn-post-size-lg">
							<div class="rn-post-item-thumb">
								<a href="blog.html#">
									<img class="img-fluid" src="assets/images/post-item-2.jpg" alt="A standard blog post with image"/>
								</a>
							</div>
							<div class="rn-post-item-header">
								<div class="rn-post-date">
									<div class="rn-post-date-inner">
										<div class="rn-post-date-d">15</div>
										<div class="rn-post-date-m-y">May, 2018</div>
									</div>
								</div>
								<div class="rn-post-item-title-meta">
									<div class="rn-post-item-title-meta-inner">
										<div class="rn-post-item-meta">
											<span class="rn-post-item-categories">Les 
												<a href="blog.html#">Nouveautés</a>
											</span>
											<span class="rn-post-item-author">Par 
												<a href="blog.html#">John Doe</a>
											</span>
										</div>
										<h3 class="rn-post-item-title">
											<a href="blog.html#">A standard blog post with image</a>
										</h3>
									</div>
								</div>
							</div>
							<div class="rn-post-item-body">
								<p>Aliquam erat volutpat. Morbi eget velit ut lectus efficitur vulputate dictum vel ex. Etiam bibendum libero eget lorem malesuada, id mattis est egestas. Mauris eu quam bibendum, placerat odio non, ultrices leo. Proin laoreet purus nisl, non elementum tortor accumsan vitae. Proin commodo vulputate purus, eu dignissim ipsum lobortis ut. Sed ac nisi velit. Integer magna mi, faucibus a sapien eget, volutpat euismod dolor.</p>
							</div>
							<div class="rn-post-item-footer">
								<div class="rn-post-read-more">
									<a class="btn btn-dark" href="blog.html#">Lire la suite</a>
								</div>
								<ul class="rn-post-love-n-view">
									<li>
										<button>
											<i class="fas fa-heart"></i>
										</button>
										<span>1k</span>
									</li>
									<li>
										<span class="rn-post-view-icon">
											<i class="far fa-eye"></i>
										</span>
										<span>50k</span>
									</li>
								</ul>
							</div>
						</article>
						<!-- End Blog Post Item -->


						<!-- Blog Post Item -->
						<article class="rn-post-item rn-post-size-lg">
							<div class="rn-post-item-header">
								<div class="rn-post-date">
									<div class="rn-post-date-inner">
										<div class="rn-post-date-d">15</div>
										<div class="rn-post-date-m-y">May, 2018</div>
									</div>
								</div>
								<div class="rn-post-item-title-meta">
									<div class="rn-post-item-title-meta-inner">
										<div class="rn-post-item-meta">
											<span class="rn-post-item-categories">Les 
												<a href="blog.html#">Nouveautés</a>
											</span>
											<span class="rn-post-item-author">Par 
												<a href="blog.html#">John Doe</a>
											</span>
										</div>
										<h3 class="rn-post-item-title">
											<a href="blog.html#">A standard blog post without image</a>
										</h3>
									</div>
								</div>
							</div>
							<div class="rn-post-item-body">
								<p>Aliquam erat volutpat. Morbi eget velit ut lectus efficitur vulputate dictum vel ex. Etiam bibendum libero eget lorem malesuada, id mattis est egestas. Mauris eu quam bibendum, placerat odio non, ultrices leo. Proin laoreet purus nisl, non elementum tortor accumsan vitae. Proin commodo vulputate purus, eu dignissim ipsum lobortis ut. Sed ac nisi velit. Integer magna mi, faucibus a sapien eget, volutpat euismod dolor.</p>
							</div>
							<div class="rn-post-item-footer">
								<div class="rn-post-read-more">
									<a class="btn btn-dark" href="blog.html#">Lire la suite</a>
								</div>
								<ul class="rn-post-love-n-view">
									<li>
										<button>
											<i class="fas fa-heart"></i>
										</button>
										<span>1k</span>
									</li>
									<li>
										<span class="rn-post-view-icon">
											<i class="far fa-eye"></i>
										</span>
										<span>50k</span>
									</li>
								</ul>
							</div>
						</article>
						<!-- End Blog Post Item -->

						<!-- Post Pagination-->
						<nav class="rn-pagination">
							<ul>
								<li>
									<a href="blog.html#">
										<i class="fas fa-angle-left"></i>
									</a>
								</li>
								<li>
									<a class="rn-active" href="blog.html#">1</a>
								</li>
								<li>
									<a href="blog.html#">2</a>
								</li>
								<li>
									<a href="blog.html#">3</a>
								</li>
								<li>
									<a href="blog.html#">4</a>
								</li>
								<li>
									<a href="blog.html#">
										<i class="fas fa-angle-right"></i>
									</a>
								</li>
							</ul>
						</nav>

					</div>
					<div class="col-lg-4">

						<!-- Sidebar-->
						<aside class="rn-widget-area" id="secondary">

							<!-- Widget Item-->
							<div class="rn-widget">
								<div class="rn-widget-content">
									<a href="blog.html#">
										<img class="img-fluid" src="assets/images/banner.png" alt="banner" srcset="assets/images/banner.png 1x, assets/images/banner@2x.png 2x">
									</a>
								</div>
							</div>
							<!-- End Widget Item-->


							<!-- Widget Item-->
							<section class="rn-widget">
								<h2 class="rn-widget-title">Categories</h2>
								<div class="rn-widget-content">
									<ul>
										<li>
											<a href="blog.html#">Style de vie</a>
										</li>
										<li>
											<a href="blog.html#">Voyage</a>
										</li>
										<li>
											<a href="blog.html#">Fashion</a>
										</li>
										<li>
											<a href="blog.html#">Musique</a>
										</li>
										<li>
											<a href="blog.html#">Branding</a>
										</li>
									</ul>
								</div>
							</section>
							<!-- End Widget Item-->


							<!-- Widget Item-->
							<section class="rn-widget">
								<h2 class="rn-widget-title">Publication Récent</h2>
								<div class="rn-widget-content">
									<ul class="rn-recent-posts">
										<li>

											<!-- Extra Small Post-->
											<div class="rn-recent-post-item">
												<div class="rn-recent-post-item-thumb">
													<a href="blog.html#">
														<img class="img-fluid" src="assets/images/blog-item-xs-1.jpg" alt="A standard blog post with image" srcset="assets/images/blog-item-xs-1.jpg 1x, assets/images/blog-item-xs-1@2x.jpg 2x"/>
													</a>
												</div>
												<div class="rn-recent-post-item-info">
													<div class="rn-recent-post-item-meta">
														<span class="rn-recent-post-item-categories">Les 
															<a href="blog.html#">Nouveautés</a>
														</span>
														<span class="rn-recent-post-item-author">Le 
															<a href="blog.html#">15 May, 2018</a>
														</span>
													</div>
													<div class="rn-recent-post-item-title">
														<h3>
															<a href="blog.html#">A standard blog post with image</a>
														</h3>
													</div>
												</div>
											</div>
											<!-- End Extra Small Post-->

										</li>
										<li>

											<!-- Extra Small Post-->
											<div class="rn-recent-post-item">
												<div class="rn-recent-post-item-thumb">
													<a href="blog.html#">
														<img class="img-fluid" src="assets/images/blog-item-xs-2.jpg" alt="A standard blog post with image" srcset="assets/images/blog-item-xs-2.jpg 1x, assets/images/blog-item-xs-2@2x.jpg 2x"/>
													</a>
												</div>
												<div class="rn-recent-post-item-info">
													<div class="rn-recent-post-item-meta">
														<span class="rn-recent-post-item-categories">Les
															<a href="blog.html#">Nouveautés</a>
														</span>
														<span class="rn-recent-post-item-author">Le 
															<a href="blog.html#">15 May, 2018</a>
														</span>
													</div>
													<div class="rn-recent-post-item-title">
														<h3>
															<a href="blog.html#">A standard blog post with image</a>
														</h3>
													</div>
												</div>
											</div>
											<!-- End Extra Small Post-->

										</li>
										<li>

											<!-- Extra Small Post-->
											<div class="rn-recent-post-item">
												<div class="rn-recent-post-item-thumb">
													<a href="blog.html#">
														<img class="img-fluid" src="assets/images/blog-item-xs-3.jpg" alt="A standard blog post with image" srcset="assets/images/blog-item-xs-3.jpg 1x, assets/images/blog-item-xs-3@2x.jpg 2x"/>
													</a>
												</div>
												<div class="rn-recent-post-item-info">
													<div class="rn-recent-post-item-meta">
														<span class="rn-recent-post-item-categories">Les 
															<a href="blog.html#">Nouveautés</a>
														</span>
														<span class="rn-recent-post-item-author">Le 
															<a href="blog.html#">15 May, 2018</a>
														</span>
													</div>
													<div class="rn-recent-post-item-title">
														<h3>
															<a href="blog.html#">A standard blog post with image</a>
														</h3>
													</div>
												</div>
											</div>
											<!-- End Extra Small Post-->

										</li>
									</ul>
								</div>
							</section>
							<!-- End Widget Item-->


							<!-- Widget Item-->
							<section class="rn-widget">
								<h2 class="rn-widget-title">Mots Clés</h2>
								<div class="rn-widget-content">
									<div class="tags">
										<a href="blog.html#">video</a>
										<a href="blog.html#">audio</a>
										<a href="blog.html#">images</a>
										<a href="blog.html#">javascript</a>
										<a href="blog.html#">php</a>
										<a href="blog.html#">wordpress</a>
										<a href="blog.html#">travel</a>
										<a href="blog.html#">music</a>
										<a href="blog.html#">python</a>
										<a href="blog.html#">ui/ux</a>
										<a href="blog.html#">cars</a>
									</div>
								</div>
							</section>
							<!-- End Widget Item-->

						</aside>
						<!-- End Sidebar-->

					</div>
				</div>
			</div>
		</div>
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
											<a href="blog.html#">
												<i class="fab fa-facebook-f"></i>
											</a>
										</li>
										<li>
											<a href="blog.html#">
												<i class="fab fa-twitter"></i>
											</a>
										</li>
										<li>
											<a href="blog.html#">
												<i class="fab fa-instagram"></i>
											</a>
										</li>
										<li>
											<a href="blog.html#">
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
													<a href="blog.html#">A Propos</a>
												</li>
												<li>
													<a href="blog.html#">Contactez-Nous</a>
												</li>
												<li>
													<a href="blog.html#">Support</a>
												</li>
												<li>
													<a href="blog.html#">Voir réservation</a>
												</li>
												<li>
													<a href="blog.html#">Programme d'affiliation</a>
												</li>
												<li>
													<a href="blog.html#">Marketplace</a>
												</li>
											</ul>
										</div>
										<div class="col-6">
											<ul>
												<li>
													<a href="blog.html#">Plan Du Site</a>
												</li>
												<li>
													<a href="blog.html#">Carrières</a>
												</li>
												<li>
													<a href="blog.html#">Presse</a>
												</li>
												<li>
													<a href="blog.html#">Obtenu Un Reçu</a>
												</li>
												<li>
													<a href="blog.html#">Communauté</a>
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