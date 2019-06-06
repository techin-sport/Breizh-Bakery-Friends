<?php require_once('system/config.php'); ?>
<!DOCTYPE html>
<html dir="ltr" lang="fr-EU">
<head>

<?php
$name = "À propos";
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
			<div id="about">
				<div class="content-wrap">
					<div class="container clearfix">
						<div class="col_two_third">
							<h1>Qu’est ce qu’une conciergerie ?</h1>
							<p class="text-justify">
								Une conciergerie est une entreprise qui prend en charge vos tâches personnelles, pour que vous puissiez vous consacrer pleinement à votre travail et libérer du temps libre pour vous concentrer sur l'essentiel, vous et ceux que vous aimez.Nous nous chargeons de votre pressing, de vos courses, de votre ménage, de votre maison, de votre véhicule, de vos animaux, bref de votre quotidien, et de bien d’autres services détaillés sur notre site.
							</p>
							<h1 class="nv">Nos valeurs</h1>
							<div class="col_one_fourth">
								<img class="mb-3" src="./images/icons/Nos valeurs qualitÇ.svg" alt="" />
								<p>Des services de qualités</p>
							</div>
							<div class="col_one_fourth">
								<img class="mb-3" src="./images/icons/Nos valeurs proximitÇ.svg" alt="" />
								<p>Un réseau de confiance</p>
							</div>
							<div class="col_one_fourth">
								<img class="mb-3" src="./images/icons/Nos valeurs confiance.svg" alt="" />
								<p>Des services de proximité sur le territoire Corrézien</p>
							</div>
							<div class="col_one_fourth col_last">
								<img class="mb-3" src="./images/icons/Nos valeurs confidentialitÇ.svg" alt="" />
								<p>Un engagement de confidentialité</p>
							</div>
							<div class="clear"></div>
							<h1 class="ne">D’où vient le nom CALISTA ?</h1>
							<p class="text-justify">
							Dans la mythologie grecque, CALISTA est l’esprit de la perfection, de la qualité en toute chose. C’est cette recherche de qualité qui nous anime, pour vous proposer les meilleurs services, sélectionner les intervenants avec le plus grand soin et vous apporter une réponse rapide et adaptée à vos besoins.
							</p>
							<?php if($maintenance==0){ ?><h1>Notre équipe</h1>
							<div id="ils-nous-font-confiance" class="container clearfix">
								<div id="oc-clients-full" class="owl-carousel image-carousel carousel-widget" data-margin="30" data-nav="false" data-loop="true" data-autoplay="2000" data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4" data-items-xl="5">
									<div class="oc-item"><a href="#"><img src="images/clients/silab.png" alt="Silab"></a></div>
									<div class="oc-item"><a href="#"><img src="images/clients/thales.png" alt="Thales"></a></div>
									<div class="oc-item"><a href="#"><img src="images/clients/sothys.png" alt="Sothys"></a></div>
									<div class="oc-item"><a href="#"><img src="images/clients/photonis.png" alt="Photonis"></a></div>
									<div class="oc-item"><a href="#"><img src="images/clients/brive-airport.png" alt="Brive Airport"></a></div>
									<div class="oc-item"><a href="#"><img src="images/clients/bledina.png" alt="Blédina"></a></div>
									<div class="oc-item"><a href="#"><img src="images/clients/chu-brive.png" alt="Centre hospitalier de Brive"></a></div>
									<div class="oc-item"><a href="#"><img src="images/clients/entourage.png" alt="Entourage"></a></div>
								</div>
							</div><?php } ?>
						</div>
						<div class="col_one_third col_last">
							<img src="./images/temoignages/hervé-mons.png" />
							<h1>Hervé MONS</h1>
							<span class="citation mb-4">
								« Mon ambition, être le partenaire incontournable de l’amélioration de la qualité de vie sur Brive et sa région. »
							</span>
							<p class="text">
							Originaire de Brive, j’ai fait l’essentiel de ma carrière, commerce et management, en France puis en Europe.
							<br />
							En déplacement la majorité du temps, je me suis rendu compte de la difficulté de concilier vie professionnelle et vie privée. Beaucoup de mes clients employaient les services de conciergeries et vantaient leur efficacité ainsi que le confort apporté.
							<br />
							Aujourd’hui, j’ai décidé de revenir sur Brive, avec la volonté de proposer ces mêmes services en alliant qualité, proximité, disponibilité et réactivité.
							<br />
							</p>
						</div>
					</div>
				</div>
				<div id="notre-agence" class="container clearfix mb-6">
					<h1>Calista près de chez vous !</h1>
					<div class="col_half">
					<iframe src="https://www.google.com/maps/d/embed?mid=1M8PxFeKG8oi4QWL2yREQh0-zeCssRhZX" width="640" height="480"></iframe>
					</div>

					<div class="col_half col_last flex">
						<div class="margin-auto">
							<h3 class="text-center couleur-du-site">Une demande particulière...</h3>
							<div class="text-center"><a href="<?= $url."contact".$extension."#content" ?>" class="bouton rond-min m-f-30">Contactez-nous !</a></div>
								</div>
							</div>
						</div>
					</div>
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