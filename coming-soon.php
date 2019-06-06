<!DOCTYPE html>
<html dir="ltr" lang="fr-EU">
<head>

<?php
require_once("system/meta.php");
$name = "Coming soon";
?>

	<!-- Document Title
	============================================= -->
	<title>BBF - <?= $name ?></title>

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
						<a href="index.php" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo/logo-bbf-v2.jpg" alt="Canvas Logo"></a>
						<a href="index.php" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo/logo-bbf-v2.jpg" alt="Canvas Logo"></a>
					</div>

					<?php require_once("system/navbar.php"); ?>

				</div>

			</div>

		</header><!-- #header end -->


		<!-- Content
		============================================= -->
    <section id="content" style="background-image: url('images/Page 1/breads-2.jpg')">

			<div style="padding-top:90px" class="content-wrap">

				<div class="container subscribe-widget clearfix">

					<div style="background-color:white; margin-left:12%;padding-top:25px; margin-right:12%" class="heading-block title-center nobottomborder">
						<h1 class="titres" style="padding-bottom:20px">COMING SOON !</h1>
						<span style="padding-bottom:20px;">Découvrez bientôt notre concept et notre gamme imaginée par notre équipe sur notre site e-commerce et l’application de commandes disponible sur iOS et Android.</span>
          	<a href="index.php" style="margin-top:30px; margin-bottom:30px" class="button button-border button-rounded button-custom center"><div>RETOUR À L'ACCUEIL</div></a>
          </div>

					<div id="countdown-ex1" class="countdown countdown-large divcenter bottommargin" style="max-width:700px;"></div>

					<div class="clear"></div>



					<div class="divider divider-center divider-short divider-margin"><i class="icon-time"></i></div>

					<div class="widget-subscribe-form-result"></div>
					<form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="nobottommargin">
						<div class="input-group input-group-lg divcenter" style="max-width:600px;">


						</div>
					</form>

				</div>

			</div>

		</section><!-- #content end -->


		<!-- Footer
		============================================= -->

		<?php require_once("system/footer.php"); ?>
	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->

	<div id="gotoTop" class="icon-angle-up"></div>

	<?php require_once("system/js.php"); ?>

</body>
</html>
