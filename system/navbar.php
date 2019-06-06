<?php
$extension=".php";
?>
<nav id="primary-menu">
						<ul>
							<li <?php if($name=="Accueil"){echo "class='current'";} ?>><a href="#"><div>Accueil</div></a>
							</li>
							<li <?php if($name=="Savoir-faire"){echo "class='current'";} ?>><a href="#nos-savoir-faire"><div>Nos savoir-faire</div></a>
							</li>
							<li <?php if($name=="Nos services"){echo "class='current'";} ?>><a href="#nos-services"><div>Nos services</div></a>
							</li>
							<div id="logo" class="logo">
								<a href="#" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo/logo-bbf-v2.jpg" alt="Canvas Logo"></a>
								<a href="#" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo/logo-bbf-v2.jpg" alt="Canvas Logo"></a>
							</div>
							<li <?php if($name=="Comment ça marche ?"){echo "class='current'";} ?>><a href="#comment-ca-marche"><div>Comment ça marche ?</div></a>
							</li>
							<li <?php if($name=="Notre histoire"){echo "class='current'";} ?>><a href="#notre-histoire"><div>Notre Histoire</div></a>
							</li>
							<li <?php if($name=="Contact"){echo "class='current'";} ?>><a href="#formulaire-de-contact"><div>Contact</div></a>
							</li>
						</ul>
					</nav>
					<div id="appeler" class="h-100">
						<div class="appel rond-1">
							<a href="<?= "coming-soon".$extension ?>"><i class="fas fa-phone"></i></a>
						</div>
					</div>
