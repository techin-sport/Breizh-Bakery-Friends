<?php require_once('system/config.php'); ?>
<!DOCTYPE html>
<html dir="ltr" lang="fr-EU">
<head>

<?php
$name = "Comment ça marche ?";
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
			<div id="comment-ca-marche-entreprise" class="content-wrap content-all">
				<div class="content-wrap">
					<div class="container clearfix comment-ca-marche-page">
						<h1 class="titre couleur-du-site">Pour une entreprise</h1>
						<div>
							<div class="col_two_fifth">
								<img src="images/comment-ca-marche/bureau.png" />
							</div>
							<div class="col_three_fifth col_last">
								<h5>Pour bénéficier des services de CALISTA,</h5>
								<p>Vous devez remplir le <a class="url" href="<?php if($maintenance==1){ echo $url."maintenance".$extension; }else{ echo $url."formulaire".$extension."?type=Inscription"; } ?>">formulaire d’inscription</a> en choisissant l’<a class="url" href="<?= $url."nos-services".$extension."#nos-offres" ?>">abonnement</a> adapté à votre situation.</p>
								<p>Vous disposerez ensuite :</p>
								<ul>
									<li><p>D’une interface personnalisée pour le suivi global de votre abonnement avec <strong>Calista</strong>.</p></li>
								</ul>
							</div>
						</div>
						<div class="clear"></div>
						<div class="mt-6">
							<div class="col_three_fifth">
								<h5>Avantages fiscaux pour les entreprises</h5>
								<p>Le montant de votre abonnement auprès de <strong>Calista</strong> :</p>
								<ul>
									<li><p>N’est pas considéré comme une rémunération, il ne sera pas assujetti aux charges.</p></li>
									<li><p>Bénéficie d’un <strong>crédit d’impôt famille</strong> de 25%</p></li>
									<li><p>Et sera <strong>déductible de l’impôt sur les sociétés</strong> de 33%</p></li>
								</ul>
							</div>
							<div class="col_two_fifth col_last">
								<img src="images/comment-ca-marche/finance.png" />
							</div>
						</div>
						<div id="comment-ca-marche-salarie" class="clear" style="height: 5.5rem"></div>
						<h1 class="titre couleur-du-site">Pour un salarié</h1>
						<div>
							<div class="col_two_fifth">
								<img src="images/comment-ca-marche/personne.png" />
							</div>
							<div class="col_three_fifth col_last">
								<h5>Pour bénéficier des services de CALISTA,</h5>

								<p>Votre entreprise doit souscrire à un abonnement. Il vous suffira :</p>
								<ul><li><p>De remplir le <a class="url" <?php if($maintenance==1){ echo $url."maintenance".$extension; }else{ echo $url."formulaire".$extension."?type=Inscription"; } ?>>formulaire d’inscription</a>.</p></li></ul>
								<p>Vous disposerez ensuite :</p>
								<ul>
									<li><p>D’une interface personnalisée pour le suivi de vos demandes.</p></li>
								</ul>
								<p>Enfin, vous règlerez directement le prestataire (possibilité de payer en Chèque Emploi Service Universel). Vous serez éligibles à certaines promotions.</p>
								<p><strong>Avantages fiscaux</strong> : vous pourrez bénéficier d’un crédit d’impôt de 50% pour les paiements en Chèque Emploi Service Universel.</p>
							</div>
						</div>
						<div id="comment-ca-marche-particulier" class="clear" style="height: 5.5rem"></div>
						<h1 class="titre couleur-du-site">Pour un particulier</h1>
						<div>
							<div class="col_two_fifth">
								<img src="images/comment-ca-marche/famille-forest.png" />
							</div>
							<div class="col_three_fifth col_last">
								<h5>Pour bénéficier des services de CALISTA,</h5>
								<p>Vous devez remplir le <a class="url" href="<?php if($maintenance==1){ echo $url."maintenance".$extension; }else{ echo $url."formulaire".$extension."?type=Inscription"; } ?>">formulaire d’inscription</a> en choisissant l’<a class="url" href="<?= $url."nos-services".$extension."#nos-offres" ?>">abonnement</a> adapté à votre situation.</p>
								<p>Vous disposerez ensuite :</p>
								<ul><li><p>D’une interface personnalisée pour le suivi de vos demandes</p></li></ul>
								<p>Enfin, vous règlerez directement le prestataire (possibilité de payer en Chèque Emploi Service Universel). Vous serez éligibles à certaines promotions.</p>
								<p><strong>Avantages fiscaux</strong> : vous pourrez bénéficier d’un crédit d’impôt de 50% pour les paiements en Chèque Emploi Service Universel.</p>
							</div>
						</div>
						<div id="devenir-prestataire" class="clear" style="height: 5.5rem"></div>
						<h1 class="titre couleur-du-site">Vous souhaitez proposer vos services ?</h1>
						<div>
							<div class="col_two_fifth">
								<img src="images/comment-ca-marche/faire confiance Ö calista.jpg" />
							</div>
							<div class="col_three_fifth col_last">
								<h5>Pour devenir un prestataire de Calista,</h5>
								<p>Il vous suffit de remplir le <a class="url" href="<?php if($maintenance==1){ echo $url."maintenance".$extension; }else{ echo $url."formulaire".$extension."?type=Inscription"; } ?>">formulaire d’inscription</a>.</p>
								<ul>
									<br />
									<li><p>Calista vous notifiera des différentes demandes correspondantes à votre activité.</p></li>
									<li><p>Vous disposerez d’une interface personnalisée pour le suivi de vos prestations.</p></li>
								</ul>
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
	<?php require_once("system/js.php"); ?>

</body>
</html>
