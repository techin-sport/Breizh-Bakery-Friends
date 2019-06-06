<!DOCTYPE html>
<html dir="ltr" lang="fr-EU">
<head>

<?php
require_once("system/meta.php");
$name = "Accueil";
?>

	<!-- Document Title
	============================================= -->
	<title>Breizh Bakery Friends</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->

					<div id="logo">
						<a href="#" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo/logo-bbf-v2.jpg" alt="Canvas Logo"></a>
						<a href="#" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo/logo-bbf-v2.jpg" alt="Canvas Logo"></a>
					</div>

					<?php require_once("system/navbar.php"); ?>

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Slider
		============================================= -->

		<?php require_once("system/slider.php"); ?>

		<!-- Content
		============================================= -->

			<section id="content">
				<?php require_once("system/service.php"); ?>
				<div class="content-wrap content-all">
					<div class="content-wrap">
						<div class="container clearfix">
							<div id="nos-savoir-faire">
								<div id="presentation-bbf" class="container clearfix">
									<div class="container clearfix">
										<div class="col_one_third block">
											<div class="text-center">
												<img src="images/Page 1/heart-2 oui.png" />
												<h4 class="titres">Une équipe passionnée</h4>
											</div>
										</div>
										<div class="col_one_third block">
											<div class="text-center">
												<img src="images/Page 1/croissant-2.png" />
												<h4 class="titres">Une fabrication artisanale</h4>
											</div>
										</div>
										<div class="col_one_third col_last block">
											<div class="text-center">
												<img src="images/Page 1/shipped-2.png" />
												<h4 class="titres">Une livraison 7/7 jours</h4>
											</div>
										</div>
									</div>

									<!-- BLOCS PRÉSENTATION
									==================================================== -->

									<div class="section nobg topmargin-lg" data-animate="fadeInLeft">
										<div class=" clearfix">
											<div class="col_half center">
												<img src="images/Page 1/bbf.jpg" alt="Image">
											</div>
											<div class="col_half nobottommargin col_last">
												<div class="heading-block" style="padding-top: 40px;">
													<h2 class="titres">BREIZH BAKERY FRIENDS</h2>
													<span></span>
												</div>
												<p>Notre Chef boulanger et son équipe préparent avec passion et dans le respect d'une fabrication traditionnelle, du pain de qualité et des viennoiseries authentiques pour satisfaire vos papilles et retrouver les valeurs de la boulangerie artisanale.</p>
											</div>
										</div>
									</div>
								</div>
						<div id="nos-services">
							<div style="margin-bottom:50px" class="section nobg" data-animate="fadeInRight">
								<div class="container clearfix">
									<div class="col_half nobottommargin">
										<div class="heading-block" style="padding-top: 40px;">
											<h2 class="titres">NOS SERVICES</h2>
											<span></span>
										</div>
										<p>Pour votre confort de vie et de temps, nous avons imaginé un service de livraison gratuit et 7/7 jours vous permettant de recevoir votre pain, viennoiseries, crêpes, galettes, burgers et sandwichs  à domicile ou sur votre lieu de travail.</p>
										<div class="bouton-livraison">
											<a href="coming-soon.php"class="button button-rounded button-border button-mobile button-custom center"><span class="titres">Faites-vous livrer !</span></a>
										</div>
									</div>
									<div class="col_half nobottommargin center col_last">
										<img src="images/Page 1/nos-services.jpg" alt="Image">
									</div>
								</div>
							</div>
						</div>

							<!-- PORTFOLIO
							==================================================== -->

							<!-- Portfolio Items
							============================================= -->
							<h3 id="titres" style="margin-top:50px" class="heading-block center nomargin oui">Breizh Bakery Friends vous propose</h3>
							<div id="portfolio" style="margin-bottom:80px; margin-top:50px" class="portfolio grid-container portfolio-3 clearfix">

								<article class="portfolio-item pf-media pf-icons">
									<div class="portfolio-image">
										<a href="portfolio-single.html">
											<img src="images/produits/produit-1.jpg" alt="Open Imagination">
										</a>
										<div class="portfolio-overlay">
											<div class="titres portfolio-desc">
												<h3 class=titres>PAINS</h3>
												<a href="coming-soon.php" class="bouton-camion mt-3"><i class="i-circled icon-truck"></i></a>
												<!--<span><a href="#">Moi </a><a href="#">aussi</a></span>-->
											</div>
										</div>
									</div>
								</article>

								<article class="portfolio-item pf-media pf-icons">
									<div class="portfolio-image">
										<a href="portfolio-single.html">
											<img src="images/produits/produit-2.jpg" alt="Open Imagination">
										</a>
										<div class="portfolio-overlay">
											<div class="titres portfolio-desc">
												<h3 class=titres>VIENNOISERIES</h3>
												<a href="coming-soon.php" class="bouton-camion mt-3"><i class="i-circled icon-truck"></i></a>
												<!--<span><a href="#">Moi </a><a href="#">aussi</a></span>-->
											</div>
										</div>
									</div>
								</article>

								<article class="portfolio-item pf-media pf-icons">
									<div class="portfolio-image">
										<a href="portfolio-single.html">
											<img src="images/produits/produit-3.jpg" alt="Open Imagination">
										</a>
										<div class="portfolio-overlay">
											<div class="titres portfolio-desc">
												<h3 class=titres>CRÊPES</h3>
												<a href="coming-soon.php" class="bouton-camion mt-3"><i class="i-circled icon-truck"></i></a>
												<!--<span><a href="#">Moi </a><a href="#">aussi</a></span>-->
											</div>
										</div>
									</div>
								</article>

								<article class="portfolio-item pf-media pf-icons">
									<div class="portfolio-image">
										<a href="portfolio-single.html">
											<img src="images/produits/produit-4.jpg" alt="Open Imagination">
										</a>
										<div class="portfolio-overlay">
											<div class="titres portfolio-desc">
												<h3 class=titres>GALETTES</h3>
												<a href="coming-soon.php" class="bouton-camion mt-3"><i class="i-circled icon-truck"></i></a>
												<!--<span><a href="#">Moi </a><a href="#">aussi</a></span>-->
											</div>
										</div>
									</div>
								</article>

								<article class="portfolio-item pf-media pf-icons">
									<div class="portfolio-image">
										<a href="portfolio-single.html">
											<img src="images/produits/produit-5.jpg" alt="Open Imagination">
										</a>
										<div class="portfolio-overlay">
											<div class="titres portfolio-desc">
												<h3 class=titres>BURGERS</h3>
												<a href="coming-soon.php" class="bouton-camion mt-3"><i class="i-circled icon-truck"></i></a>
												<!--<span><a href="#">Moi </a><a href="#">aussi</a></span>-->
											</div>
										</div>
									</div>
								</article>

								<article class="portfolio-item pf-media pf-icons">
									<div class="portfolio-image">
										<a href="portfolio-single.html">
											<img src="images/produits/produit-6.jpg" alt="Open Imagination">
										</a>
										<div class="portfolio-overlay">
											<div class="titres portfolio-desc">
												<h3 class=titres>SANDWICHES</h3>
												<a href="coming-soon.php" class="bouton-camion mt-3"><i class="i-circled icon-truck"></i></a>
												<!--<span><a href="#"> </a><a href="#"> </a></span>-->
											</div>
										</div>
									</div>
								</article>




							</div><!-- #portfolio end -->

						</div>
					</div>
					<div id="livraison" class="parallax-test">
						<div class="section parallax dark notopmargin noborder separateur" style="padding: 0px 0; background-size: cover; background-image: url('images/Page 1/breads-2.jpg'); width: 100%" data-bottom-top="background-position:0px 80px;" data-top-bottom="background-position:0px -80px;">
							<div class="container center clearfix">
								<div id="offre"><p>Découvrez bientôt notre concept et notre gamme imaginée par notre équipe sur notre site e-commerce et l’application de commandes disponible sur iOS et Android.</p></div>
							</div>
						</div>
					</div>
				</div>
				<div id="comment-ca-marche">
				<div class="content-wrap">
					<div class="container clearfix">
						<div class="schema-explicatif">
							<h3 id="titres" class="heading-block center nomargin oui">COMMENT ÇA MARCHE ?</h3>
							<!-- SCHÉMA EXPLICATIF <img src="">-->
						</div>
					</div>
					<div id="notre-histoire">
						<div id="notre-histoire" class="section parallax dark noborder" style="padding: 50px 0; background-size: cover; background-image: url('images/Page 1/ble.jpg'); width: 100%" data-bottom-top="background-position:0px 80px;" data-top-bottom="background-position:0px -80px;">
							<div class="container clearfix">
								<h3 id="titres" class="titres heading-block center nomargin">NOTRE HISTOIRE</h3>
								<div id="colonnes" class="col_one_third block">
									<div class="titres fancy-title nobottomborder title-bottom-border">
										<h4 class="titres">Un amour pour le<br>bon pain</h4>
									</div>
									<p style="text-align:justify;">L’association d’un savoir-faire et d’un service est née à Vannes, d’un projet à double ambition. La première étant la passion pour le bon pain de tradition française et des viennoiseries de qualité. La seconde s’articulant autour du service de livraison à domicile de ces produits.</p>
								</div>
								<div id="colonnes" class="col_one_third block">
									<div class="titres fancy-title nobottomborder title-bottom-border">
										<h4 class="titres">Des viennoiseries à<br>domicile</h4>
									</div>
									<p style="text-align:justify;">Sibylle et Charly ont ainsi pensé un projet alliant la production de pain et viennoiseries frais à la livraison aux particuliers et professionnels de la région vannetaise.</p>
								</div>
								<div id="colonnes" class="col_one_third col_last block">
									<div class="titres fancy-title nobottomborder title-bottom-border">
										<h4 class="titres">Des boulangers<br>passionnés</h4>
									</div>
									<p style="text-align:justify;">Le savoir-faire et l’expérience de nos boulangers Pierre et Maxime, se lient à leur sensibilité des produits proposés. Le tout, mêlé à des matières premières de qualité qui vous assurent une fabrication artisanale. Leur traçabilité est minutieusement suivie dans un souci d’exigence.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

				<!-- BLOC CONTACT
				============================================== -->

				<div class="contenu-contact">
				<div class="bloc-contact container">
					<div class="formulaire-de-contact">
						<div id="formulaire-de-contact">
							<h3 id="titres" class="heading-block center nomargin">CONTACTEZ - NOUS</h3>
						</div>

					<div class="form-widget">

						<div class="form-result"></div>

						<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/form.php" method="post">

							<div class="form-process"></div>

							<div class="col_one_third">
								<label for="template-contactform-name">Nom et prénom <small>*</small></label>
								<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
							</div>

							<div class="col_one_third">
								<label for="template-contactform-email">Email <small>*</small></label>
								<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
							</div>

							<div class="col_one_third col_last">
								<label for="template-contactform-phone">Téléphone</label>
								<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
							</div>

							<div class="clear"></div>

							<div class="mb-3">
								<label for="template-contactform-subject">Objet <small>*</small></label>
								<input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />
							</div>

							<div class="clear"></div>

							<div class="col_full">
								<label for="template-contactform-message">Message <small>*</small></label>
								<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="4" cols="30"></textarea>
							</div>

							<div class="col_full hidden">
								<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" class="sm-form-control" />
							</div>
							<p class="form-cgu"><span class="word-up">*</span> ces champs sont obligatoires.</p>
							<div style="margin:15px 0" class="form-cgu">
								<input type="checkbox" id="cgu-1" name="cgu-1">
								<label for="cgu-1">J'ai lu et j'accepte les conditions liées à notre <a class="url" href="politique-de-confidentialite.html">politique de confidentialité</a></label>
							</div>
							<div class="col_full center">
								<button class="button button-3d button-xlarge button-rounded button-amber" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Envoyer</button>
							</div>

							<input type="hidden" name="prefix" value="template-contactform-">

						</form>
					</div>
				</div>
			</div>
		</div>


						<!-- SLIDER PARTENAIRES
						========================================== -->

				<!--<div id="ils-nous-font-confiance" style="margin-top:50px" class="container clearfix">

					<div id="oc-clients-full" class="owl-carousel owl-carousel-full image-carousel carousel-widget" data-loop="true" data-speed="1250" data-margin="30" data-nav="true" data-pagi="false" data-autoplay="3000" data-items-xs="3" data-items-sm="3" data-items-md="5" data-items-lg="5" data-items-xl="5">

						<div class="oc-item"><a href="#"><img src="images/clients/bestcourtage.png" alt="BestCourtage"></a></div>
						<div class="oc-item"><a href="#"><img src="images/clients/contact-immo.png" alt="Contact Immo"></a></div>
						<div class="oc-item"><a href="#"><img src="images/clients/creatif-bois.png" alt="Creatif Bois"></a></div>
						<div class="oc-item"><a href="#"><img src="images/clients/elancia.png" alt="Elancia"></a></div>
						<div class="oc-item"><a href="#"><img src="images/clients/finance-conseil.png" alt="Finance Conseil"></a></div>
						<div class="oc-item"><a href="#"><img src="images/clients/grand-hotel.png" alt="Grand Hotel"></a></div>
						<div class="oc-item"><a href="#"><img src="images/clients/intellidom.png" alt="Intellidom"></a></div>
						<div class="oc-item"><a href="#"><img src="images/clients/intranot.png" alt="Intranot"></a></div>
						<div class="oc-item"><a href="#"><img src="images/clients/koden.png" alt="Koden"></a></div>
						<div class="oc-item"><a href="#"><img src="images/clients/lapataterie.png" alt="La Pataterie"></a></div>
						<div class="oc-item"><a href="#"><img src="images/clients/ld-informatique.png" alt="LD Informatique"></a></div>
						<div class="oc-item"><a href="#"><img src="images/clients/leComplexe.png" alt="Le Complexe"></a></div>
						<div class="oc-item"><a href="#"><img src="images/clients/leroy-merlin.png" alt="LeRoy Merlin"></a></div>
						<div class="oc-item"><a href="#"><img src="images/clients/odile-rencontres.png" alt="Odile Rencontres"></a></div>
						<div class="oc-item"><a href="#"><img src="images/clients/pmo19.png" alt="PMO19"></a></div>
						<div class="oc-item"><a href="#"><img src="images/clients/resop.png" alt="Resop"></a></div>
						<div class="oc-item"><a href="#"><img src="images/clients/tanphat.png" alt="Tan Phat"></a></div>
						<div class="oc-item"><a href="#"><img src="images/clients/wbl.png" alt="WBL"></a></div>

					</div>
				</div>-->

						<!-- RÉSEAUX SOCIAUX
						========================================= -->

				<div id="retrouvez-nous" class="section parallax dark notopmargin noborder separateur" style="padding: 0px 0; background-size: cover; background-image: url('images/Page 1/retrouvez-nous-sur.jpg'); width: 100%" data-bottom-top="background-position:0px 80px;" data-top-bottom="background-position:0px -80px;">
					<div class="container center clearfix">
						<div class="emphasis-title">
							<h2 class="titres">Retrouvez-nous sur :</h2>
							<p class="lead topmargin-sm flex">
								<a href="#"><i class="icon-facebook cercle"></i></a>
								<a href="#"><i class="icon-instagram cercle"></i></a>
								<a href="#"><i class="icon-youtube cercle"></i></a>
								<a href="#"><i class="icon-linkedin cercle"></i></a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->

		<?php require_once("system/footer.php"); ?>
	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->

	<div id="gotoTop" class="icon-angle-up block"></div>

	<?php require_once("system/js.php"); ?>

</body>
</html>
