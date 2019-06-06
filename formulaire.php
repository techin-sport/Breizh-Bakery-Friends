<?php require_once('system/config.php'); ?>
<!DOCTYPE html>
<html dir="ltr" lang="fr-EU">
<head>

<?php
$type = "Inscription";
if(isset($_GET['type']) && !empty($_GET['type'])) {
	$type = htmlspecialchars($_GET['type']);
}
$name = "Formulaire - ".$type;
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
					<div id="formulaire" class="container clearfix">

					<form class="row" action="include/form.php" method="post" enctype="multipart/form-data">
									<div class="form-process"></div>
									<div class="col-12 form-group">
										<label>Code entreprise* :</label>
										<input type="text" name="code-entreprise" id="code-entreprise" class="form-control required" value="">
									</div>
									<div class="col-12 form-group">
										<label>Civilité* :</label><br/>
										<div class="form-check form-check-inline">
											<input class="form-check-input required" type="radio" name="realestate-enquiry-from"id="realestate-enquiry-from-individual" value="M">
											<label class="form-check-label nott ml-2" for="realestate-enquiry-from-individual">M.</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input required" type="radio" name="realestate-enquiry-from"id="realestate-enquiry-from-individual" value="Mme">
											<label class="form-check-label nott ml-2" for="realestate-enquiry-from-individual">Mme</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input required" type="radio" name="realestate-enquiry-from"id="realestate-enquiry-from-individual" value="Mlle">
											<label class="form-check-label nott ml-2" for="realestate-enquiry-from-individual">Mlle</label>
										</div>
									</div>
									<div class="col-12 form-group">
										<label>Nom* :</label>
										<input type="text" name="nom" id="nom" class="form-control required" value="">
									</div>
									<div class="col-12 form-group">
										<label>Prénom* :</label>
										<input type="text" name="prenom" id="prenom" class="form-control required" value="">
									</div>
									<div class="col-12 form-group">
										<label>Situation familiale :</label>
										<select class="form-control required" name="civilite" id="civilite">
											<option value="">-- Choisir --</option>
											<option value="celibataire">Célibataire</option>
											<option value="mari">Mari(e)</option>
											<option value="pacse">Pacsé(e)</option>
											<option value="divorce">Divorcé(e)</option>
											<option value="separe">Séparé(e)</option>
											<option value="en-couple">En couple</option>
										</select>
									</div>
									<div class="col-12 form-group">
										<label>Nombre d'enfant :</label>
										<select class="form-control required" name="civilite" id="civilite">
											<option value="">-- Choisir --</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="plus">Plus</option>
										</select>
									</div>
									<div class="col-12 form-group">
										<label>Loisir(s) et centre(s) d'intérêt(s):</label>
										<textarea name="jobs-application-message" id="jobs-application-message" class="form-control required" cols="30" rows="10"></textarea>
									</div>
									<div class="col-12 form-group">
										<label>E-mail* :</label>
										<input type="email" name="email" id="email" class="form-control required" value="">
									</div>
									<div class="col-12 form-group">
										<div class="row">
											<div class="col-md-6 form-group">
												<label>Phone:</label>
												<input type="text" name="jobs-application-phone" id="jobs-application-phone" class="form-control required" value="" placeholder="Enter your Phone">
											</div>
											<div class="col-md-6 form-group">
												<label>Location:</label>
												<input type="text" name="jobs-application-location" id="jobs-application-location" class="form-control" value="" placeholder="Enter your City as Location">
											</div>
											<div class="w-100"></div>
											<div class="col-md-6 form-group">
												<label>Date Of Birth:</label>
												<input type="text" class="form-control dobpicker required" name="jobs-application-date-of-birth" id="jobs-application-date-of-birth" value="" placeholder="MM/DD/YYYY" data-date-end-date="-18y">
											</div>
											<div class="col-md-6 form-group">
												<label>Gender:</label>
												<div class="btn-group btn-group-toggle d-flex" data-toggle="buttons">
													<label class="btn btn-outline-secondary ls0 nott">
														<input type="radio" name="jobs-application-gender" id="jobs-application-gender-male" autocomplete="off" value="Male"> Male
													</label>
													<label class="btn btn-outline-secondary ls0 nott">
														<input type="radio" name="jobs-application-gender" id="jobs-application-gender-female" autocomplete="off" value="Female"> Female
													</label>
												</div>
											</div>
											<div class="w-100"></div>
											<div class="col-md-6 form-group">
												<label>Type:</label>
												<select class="form-control required" name="jobs-application-type" id="jobs-application-type">
													<option value="">-- Select One --</option>
													<option value="Part-Time">Part-Time</option>
													<option value="Full-Time">Full-Time</option>
													<option value="Internship">Internship</option>
													<option value="Freelance">Freelance</option>
												</select>
											</div>
											<div class="col-md-6 form-group">
												<label>Experience:</label>
												<select class="form-control required" name="jobs-application-experience" id="jobs-application-experience">
													<option value="">-- Select One --</option>
													<option value="Less than 1 Year">Less than 1 Year</option>
													<option value="1-4 Years">1-4 Years</option>
													<option value="4-7 Years">4-7 Years</option>
													<option value="7+ Years">7+ Years</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label>Upload CV:</label>
											<input type="file" id="jobs-application-resume" name="jobs-application-resume" class="file-loading required" data-show-preview="false" />
										</div>
										<div class="form-group">
											<label>Describe Yourself:</label>
											<textarea name="jobs-application-message" id="jobs-application-message" class="form-control required" cols="30" rows="10"></textarea>
										</div>
									</div>
									<div class="col-12 hidden">
										<input type="text" id="jobs-application-botcheck" name="jobs-application-botcheck" value="" />
									</div>
									<div class="col-12">
										<button type="submit" name="jobs-application-submit" class="btn btn-secondary">Send Message</button>
									</div>

									<input type="hidden" name="prefix" value="jobs-application-">
								</form>
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
