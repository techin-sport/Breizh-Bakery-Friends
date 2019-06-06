<?php require_once('system/config.php'); ?>
<!DOCTYPE html>
<html dir="ltr" lang="fr-EU">
<head>

<?php
$name = "Page vide";
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
			<div class="content-wrap content-all">
				<div class="content-wrap">
					<div class="container clearfix">
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