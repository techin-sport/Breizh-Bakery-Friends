<?php require_once('system/config.php'); ?>
<!DOCTYPE html>
<html dir="ltr" lang="fr-EU">
<head>

<?php
$name = "Nos services";
require_once("system/meta.php");
?>

	<!-- Document Title
	============================================= -->
	<title>Calista - <?= $name ?></title>

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
						<a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/calista-1.png" alt="Canvas Logo"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/calista-1.png" alt="Canvas Logo"></a>
					</div>

					<?php require_once("system/navbar.php"); ?>

				</div>

			</div>

		</header><!-- #header end -->
		<?php require_once("system/slider.php"); ?>
		<!-- Content
		============================================= -->
		<section id="content">
			<?php require_once("system/service.php"); ?>
			<div id="nos-services">
				<div class="content-wrap">
					<div class="container clearfix">
						<h1 id="partie-1" class="titre couleur-du-site">Nos services</h1>
						<div class="col_one_third text-center">
							<img src="./images/nos-services/nos services - service livraison.jpg" />
							<h2 class="mt-4">Services livraisons</h2>
							<ul>
								<li>Courses</li>
								<li>Réception et envoi colis</li>
								<li>Traiteur</li>
								<li>Commande/livraison repas</li>
								<li>Poste (suivi courrier)</li>
							</ul>
						</div>
						<div class="col_one_third text-center">
							<img src="./images/nos-services/nos services - services administratifs.jpg" />
							<h2 class="mt-4">Services administratifs</h2>
							<ul>
								<li>Conseils financiers</li>
								<li>Aide aux nouveaux arrivants (administratif, logement déméménagement école pour les enfants,...)</li>
							</ul>
						</div>
						<div class="col_one_third col_last text-center">
							<img src="./images/nos-services/nos services - services immobiliers.jpg" />
							<h2 class="mt-4">Services immobiliers</h2>
							<ul>
								<li>Mise en relation avec artisans; constructeurs</li>
								<li>Mise en relation avec les banques</li>
								<li>Équipement maison</li>
								<li>Aménagement</li>
								<li>Prestataire déménagement</li>
							</ul>
						</div>
						<div class="clear"></div>
						<div id="partie-2" class="col_one_third text-center">
							<img src="./images/nos-services/nos services - services du quotidien.jpg" />
							<h2 class="mt-4">Services du quotidien</h2>
							<ul>
								<li>Pressing, repassage, cordonnerie, clefs,...</li>
								<li>Entretien, lavage automobile</li>
								<li>Médecin</li>
								<li>Assurances</li>
								<li>Abonnement, téléphone, internet, télévision</li>
							</ul>
						</div>
						<div class="col_one_third text-center">
							<img src="./images/nos-services/nos services - services loisirs.jpg" />
							<h2 class="mt-4">Services loisirs</h2>
							<ul>
								<li>Achat cadeaux, fleurs</li>
								<li>Bien être (soins esthétiques, coiffeur, massage, yoga,...)</li>
								<li>Transport (taxi, train, avion,...)</li>
								<li>Organisation de voyages privées ou professionnels</li>
								<li>Organisation d'évènements (anniversaire, réunion, arbre de Noël,...)</li>
								<li>Gestion de séminaires, incentives et challenges d'équipe, animations thématiques</li>
							</ul>
						</div>
						<div class="col_one_third col_last text-center">
							<img src="./images/nos-services/nos services - services Ö domicile.jpg" />
							<h2 class="mt-4">Services à domiciles</h2>
							<ul>
								<li>Garde d'enfant, école</li>
								<li>Pet-sitting (promenade, toilettage, vétérinaire; garde,...)</li>
								<li>Entretien extérieur (jardin, piscine,...)</li>
								<li>Entretien maison, intérieur (ménage, repassage,...)</li>
								<li>Électricté, gaz, fuel</li>
								<li>Résidence secondaires, AirBnb (accueil, gestion du départ,...)</li>
								<li>Accueil des artisans</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="section parallax dark notopmargin noborder separateur" style="padding: 0px 0; background-image: url('images/sliders/faire-confiance-Ö-calista.jpg');" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
					<div class="container center clearfix">
						<div class="emphasis-title">
							<h2>Nos offres</h2>
							<div class="lead topmargin-sm pcrfd"><p>Calista s’adapte à votre entreprise et vous propose des offres sur-mesure !</p></div>
						</div>
					</div>
				</div>
			</div>
			<div id="nos-offres" class="content-wrap content-all" style="margin-top:60px;padding-top:60px">
				<div class="content-wrap">
					<div class="container clearfix">
						<h2 class="couleur-du-site text-center">Quelle que soit l'offre, bénéficiez de tous les services de Calista !</h2>
						<div class="row pricing bottommargin clearfix mt-6">
							<div class="col-lg-3">

								<div class="pricing-box">
									<div class="pricing-title">
										<h3>OFFRE ESSENTIELS</h3>
										<span>réservée aux entreprises<span class="word-up">*</span></span>
									</div>
									<div class="pricing-features">
										<ul>
											<li>Du lundi au vendredi de 9h à 19h</li>
											<br />
											<li>6 demandes par salariés / mois</li>
										</ul>
									</div>
									<div class="pricing-action">
										<a href="#" class="btn btn-danger btn-block btn-lg bg-couleur-du-site">S'abonner</a>
									</div>
								</div>

							</div>

							<div class="col-lg-3">

								<div class="pricing-box best-price">
									<div class="pricing-title">
										<h3>OFFRE PREMIUM</h3>
										<span>réservée aux entreprises<span class="word-up">*</span></span>
									</div>
									<div class="pricing-features">
										<ul>
											<li>Du lundi au vendredi de 9h à 19h<br />Samedi de 9h à 17h</li>
											<br />
											<li>Demandes illimitées / mois</li>
										</ul>
									</div>
									<div class="pricing-action">
										<a href="#" class="btn btn-danger btn-block btn-lg bgcolor border-color bg-couleur-du-site-important">S'abonner</a>
									</div>
								</div>

							</div>

							<div class="col-lg-3">

								<div class="pricing-box">
									<div class="pricing-title">
										<h3>OFFRE VIP</h3>
										<span>réservée aux particuliers<span class="word-up">*</span></span>
									</div>
									<div class="pricing-features">
										<ul>
											<li>Du lundi au vendredi de 9h à 19h</li>
											<br />
											<li>15 demandes / mois</li>
										</ul>
									</div>
									<div class="pricing-action">
										<a href="#" class="btn btn-danger btn-block btn-lg bg-couleur-du-site">S'abonner</a>
									</div>
								</div>

							</div>

							<div class="col-lg-3">

								<div class="pricing-box">
									<div class="pricing-title">
										<h3>OFFRE VIP +</h3>
										<span>réservée aux particuliers<span class="word-up">*</span></span>
									</div>
									<div class="pricing-features">
										<ul>
											<li>Du lundi au vendredi de 9h à 19h<br />Samedi de 9h à 17h</li>
											<li>Demandes illimitées / mois</li>
										</ul>
									</div>
									<div class="pricing-action">
										<a href="#" class="btn btn-danger btn-block btn-lg bg-couleur-du-site">S'abonner</a>
									</div>
								</div>
							</div>
							<div class="tarif"><p>* tarif étudié au cas par cas</p></div>
						</div>
					</div>
			<h1 class="titre couleur-du-site">Une demande particulière...</h1>
			<div class="text-center mb-6"><a href="<?= $url."contact".$extension."#content" ?>" class="bouton rond-min">Contactez-nous !</a></div>
				</div>
			</div>
		</section>
<?php require_once("system/footer.php"); ?>
	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>
	<?php require_once("system/js.php"); ?>

</body>
</html>