<?php require_once('system/config.php'); ?>
<!DOCTYPE html>
<html dir="ltr" lang="fr-EU">
<head>

<?php
if($maintenance==1){
	header('Location: maintenance.php');
}else{
$name = "Nos prestataires";
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
						<?php if($maintenance==1){require_once('maintenace.php?content=TRUE');}else{ ?>
						<div class="cat tabs clearfix" id="tab-3">
							<ul class="tab-nav tab-nav2 clearfix">
								<li><a href="#tabs-1">Livraisons</a></li>
								<li><a href="#tabs-2">Administatifs</a></li>
								<li><a href="#tabs-3">Immobiliers</a></li>
								<li><a href="#tabs-4">Quotidien</a></li>
								<li><a href="#tabs-5">Loisirs</a></li>
								<li><a href="#tabs-5">À domicile</a></li>
							</ul>
							<div class="tab-container">
								<div class="tab-content clearfix" id="tabs-1">
									<div class="clear"></div>
									<div class="prestataires shadow-1 w-100 mb-5 mt-5 pb-1">
										<div class="col_one_fourth">
											<img src="images/prestataires/dgpaysage.png" alt="" />
										</div>
										<div class="col_three_fourth col_last">
											<p>
												Martinus agens illas provincias pro praefectis aerumnas innocentium graviter gemens saepeque obsecrans. Martinus agens illas provincias pro praefectis aerumnas innocentium graviter gemens saepeque obsecrans,…  
												Martinus agens illasgemens saepeque obsecrans. Martinus agens illas provincias pro praefectis aerumnas innocentium graviter gemens saepeque obsecrans, Martinus agens illas
											</p>
										</div>
									</div>
									<div class="clear"></div>
									<div class="prestataires shadow-1 w-100 pb-1">
										<div class="col_one_fourth">
											<img src="images/prestataires/clean-cut.png" alt="" />
										</div>
										<div class="col_three_fourth col_last">
											<p>
												Martinus agens illas provincias pro praefectis aerumnas innocentium graviter gemens saepeque obsecrans. Martinus agens illas provincias pro praefectis aerumnas innocentium graviter gemens saepeque obsecrans,…  
												Martinus agens illasgemens saepeque obsecrans. Martinus agens illas provincias pro praefectis aerumnas innocentium graviter gemens saepeque obsecrans, Martinus agens illas
											</p>
										</div>
									</div>
									<div class="clear"></div>
									<div class="prestataires shadow-1 w-100 mt-5 pb-1">
										<div class="col_one_fourth">
											<img src="images/prestataires/azur.png" alt="" />
										</div>
										<div class="col_three_fourth col_last">
											<p>
												Martinus agens illas provincias pro praefectis aerumnas innocentium graviter gemens saepeque obsecrans. Martinus agens illas provincias pro praefectis aerumnas innocentium graviter gemens saepeque obsecrans,…  
												Martinus agens illasgemens saepeque obsecrans. Martinus agens illas provincias pro praefectis aerumnas innocentium graviter gemens saepeque obsecrans, Martinus agens illas
											</p>
										</div>
									</div>
									<div class="clear"></div>
									<div class="prestataires shadow-1 w-100 mt-5 pb-1">
										<div class="col_one_fourth">
											<img src="images/prestataires/nounou19.png" alt="" />
										</div>
										<div class="col_three_fourth col_last">
											<p>
												Martinus agens illas provincias pro praefectis aerumnas innocentium graviter gemens saepeque obsecrans. Martinus agens illas provincias pro praefectis aerumnas innocentium graviter gemens saepeque obsecrans,…  
												Martinus agens illasgemens saepeque obsecrans. Martinus agens illas provincias pro praefectis aerumnas innocentium graviter gemens saepeque obsecrans, Martinus agens illas
											</p>
										</div>
									</div>
								</div>
								<div class="tab-content clearfix" id="tabs-2">

								</div>
								<div class="tab-content clearfix" id="tabs-3">

								</div>
								<div class="tab-content clearfix" id="tabs-4">

								</div>
								<div class="tab-content clearfix" id="tabs-5">

								</div>
							</div>
						</div>
						<?php } ?>
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
<?php } ?>