<?php include('Affichage.php') ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>About</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script>
			$(document).ready(function(){
				$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		<!--[if lt IE 8]>
			<div style=' clear: both; text-align:center; position: relative;'>
				<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
					<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
				</a>
			</div>
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body class="" id="top">
		<div class="main">
<!--==============================header=================================-->
			<header>
				<div class="menu_block">
					<div class="container_12">
						<div class="grid_12">
							<nav class="horizontal-nav full-width horizontalNav-notprocessed">
								<ul class="sf-menu">
									<li><a href="index.php">Inscription</a></li>
									<li class="current"><a href="index-1.php">Liste</a></li>
									<li><a href="index-2.html">Cars</a></li>
								</ul>
							</nav>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>
			</header>
<!--==============================Content=================================-->
			<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - April 07, 2014!</div>
				<div class="container_12">
					<div class="grid_7">
						<div class="extra_wrapper">
								<!-- ECRITURE DU TABLEAU -->
								<!-- Affichage avec tableau -->
									<!-- Debut -->
									<table>
										<tr>
											<td>Id</td>
											<td>Nom</td>
											<td>Prenom</td>
											<td>Marque voiture</td>
											<td>Numero Matricule</td>
										</tr>
										<!-- Contenu du tableau -->
										<tr> 
											<?php 
													foreach ($affichage as $afficher) {
														echo "<tr>";
														echo '<td>'.$afficher['Pers_id'].'</td>';
														echo '<td>'.$afficher['Pers_nom'].'</td>';
														echo '<td>'.$afficher['Pers_prenom'].'</td>';
														echo '<td>'.$afficher['voiture_nom'].'</td>';
														echo '<td>'.$afficher['voiture_matricule'].'</td>';
														echo "</tr>";
													}
											 ?>							
										</tr>
									</table>
									<!-- Fin -->
								<div class="tmInput">
								</div>
								<br><br>
								<!-- Suppression_personne -->
									<form method="POST" action="Suppression_personne.php">
										<p>Voulez vous Supprimer votre nom dans la liste ?</p>
										<input required name="id" placeHolder="id personne a supprimer" type="text" data-constraints="@NotEmpty @Required ">
										<input type="submit" name="Suppression" class="btn btn-success">
				                    </form>
				                <!-- Suppression_voiture -->
				                <br>
				                <form method="POST" action="Suppression_voiture.php">
										<p>Voulez vous Supprimer votre voiture dans la liste ?</p>
										<input required name="num_voiture" placeHolder="Numero de voiture a supprimer" type="text" data-constraints="@NotEmpty @Required ">
										<input type="submit" name="supprimer" class="btn btn-success">
				                   </form>
							</div>
					</div>
					<div class="grid_4 prefix_1">
						<h3>Actualités</h3>
						<ul class="list li">
							<li class="list_count">1</li>
							<li class="extra_wrapper">
								<div class="text1 color2"><a href="#">Econsecteturpiscinger elit</a></div>
								Sit meter ultricies erat rutrum. Cras er te facilisis, nulla vel viver auctor, leo magna sodales felis, quis malesuad nibh odio ut
							</li>
						</ul>
						<ul class="list li">
							<li class="list_count">2</li>
							<li class="extra_wrapper">
								<div class="text1 color2"><a href="#">Fconsecteturpiscingerelite</a></div>
								Git meter ultricies erat rutrum. Cras er te facilisis, nulla vel viver auctor, leo magna sodales felis, quis malesuad nibh odio
							</li>
						</ul>
						<ul class="list li">
							<li class="list_count">3</li>
							<li class="extra_wrapper">
								<div class="text1 color2"><a href="#">Hconsecteturpiscingeliter</a></div>
								Hit meter ultricies erat rutrum. Cras er te facilisis, nulla vel viver auctor, leo magna sodales felis, quis malesuad nibut velit.
							</li>
						</ul>
						<ul class="list li">
							<li class="list_count">4</li>
							<li class="extra_wrapper">
								<div class="text1 color2"><a href="#">Mconsecteturpiscinr elitwert</a></div>
								Kit meter ultricies erat rutrum. Cras er te facilisis, nulla vel viver auctor, leo magna sodales felis, quis malesuabh odio uter
							</li>
						</ul>
					</div>
					
					<div class="clear"></div>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="f_phone"><span>Numero telephone:</span> + 1800 559 6580</div>
					<div class="socials">
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-google-plus"></a>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</footer>
	</body>
</html>