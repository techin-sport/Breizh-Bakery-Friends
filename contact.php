<?php require_once('system/config.php'); ?>
<!DOCTYPE html>
<html dir="ltr" lang="fr-EU">
<head>

<?php
$name = "Contact";
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
			<div id="formulaire-contact" class="content-wrap content-all">
				<div class="content-wrap">
				<h1 class="titre couleur-du-site">Formulaire de contact</h1>
				<form class="container sc" action="mailto:contact@sarl-wbl.fr" method="post" enctype="text/plain">
					<div class="form-item">
						<label for="nom">Nom <span class="word-up">*</span> :</label>
						<input id="nom" type="text" name="nom" require>
					</div>
					<div class="form-item">
						<label for="prenom">Prénom <span class="word-up">*</span> :</label>
						<input id="prenom" type="text" name="prenom" require>
					</div>
					<div class="form-item">
						<label for="phone">Téléphone <span class="word-up">*</span> :</label>
						<input id="phone" type="phone" name="phone" require>
					</div>
					<div class="form-item">
						<label for="email">Mail <span class="word-up">*</span> :</label>
						<input id="email" type="email" name="email" require>
					</div>
					<div class="form-item">
						<label for="">Demande :</label>
						<textarea id="demande" name="demande"></textarea>
					</div>
					<div class="form-item appel">
						<label for="date">Être appelé :</label>
						<input id="date" type="date" name="date">
						<select id="form-select">
							<option value="">Heure d'appel</option>
							<option value="Maintenant">Maintenant</option>
							<option value="9h">9h-10h</option>
							<option value="10h">10h-11h</option>
							<option value="11h">11h-12h</option>
							<option value="12h">12h-13h</option>
							<option value="13h">13h-14h</option>
							<option value="14h">14h-15h</option>
							<option value="15h">15h-16h</option>
							<option value="16h">16h-17h</option>
							<option value="17h">17h-18h</option>
							<option value="18h">18h-19h</option>
						</select>
					</div>
					<div class="form-cgu">
						<input type="checkbox" id="cgu-1" name="cgu-1">
						<label for="cgu-1">J'ai lu et j'accepte les conditions liées à notre <a class="url" href="politique-de-confidentialite.html">politique de confidentialité</a></label>
					</div>
					<p class="form-cgu"><span class="word-up">*</span> ses champs sont obligatoire.</p>
					<div class="form-btn">
						<button type="submit">Envoyer</button>
					</div>
				</form>
					</div>
				</div>
			</div>
			<div id="retrouvez-nous" class="section parallax dark notopmargin noborder" style="padding: 0px 0; background-image: url('images/Page 1/retrouvez-nous-sur.jpg');" data-bottom-top="background-position:0px -250px;" data-top-bottom="background-position:0px -300px;">
				<div class="container center clearfix">
					<div class="emphasis-title">
						<h2 class="titre">Retrouvez-nous sur</h2>
						<p class="lead topmargin-sm flex">
								<a href="https://www.facebook.com/Calista-Conciergerie-de-qualit%C3%A9-1327991510682005/"><i class="icon-facebook cercle"></i></a>
								<a href="https://www.instagram.com/calistaconciergerie"><i class="icon-instagram cercle"></i></a>
								<a href="https://www.linkedin.com/company/calista-conciergerie-de-qualité"><i class="icon-linkedin cercle"></i></a>
						</p>
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
