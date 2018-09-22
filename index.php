<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Home</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="booking/css/booking.css">
		<link rel="stylesheet" href="css/camera.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/camera.js"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="js/jquery.mobile.customized.min.js"></script>
		<!--<![endif]-->
		<script src="booking/js/booking.js"></script>
		<script>
			$(document).ready(function(){
				jQuery('#camera_wrap').camera({
					loader: false,
					pagination: false ,
					minHeight: '444',
					thumbnails: false,
					height: '28.28125%',
					caption: true,
					navigation: true,
					fx: 'mosaic'
				});
				$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
	</head>
	<body class="page1" id="top">
		<div class="main">
<!--==============================header=================================-->
			<header>
				<div class="menu_block ">
					<div class="container_12">
						<div class="grid_12">
							<nav class="horizontal-nav full-width horizontalNav-notprocessed">
								<ul class="sf-menu">
									<li class="current"><a href="index.php">Inscription</a></li>
									<li><a href="index-1.php">Liste</a></li>
									<li><a href="index-2.html">Car</a></li>
								</ul>
							</nav>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>
			</header>
			<div class="slider_wrapper ">
				<div id="camera_wrap" class="">
					<div data-src="images/big7.jpg" ></div>
					<div data-src="images/big8.jpg" ></div>
					<div data-src="images/big9.jpg"></div>
				</div>
			</div>
			<div class="container_12">
				<div class="grid_4">
					<div class="banner">
						<div class="maxheight">
							<div class="banner_title">
								<img src="images/icon1.png" alt="">
								<div class="extra_wrapper">TSOTRA
								</div>
							</div>
							Dorem ipsum dolor sit amet, consectetur adipiscinger elit. In mollis erat mattis neque facilisis, sit ameter ultricies erat rutrum. Cras facilisis, nulla vel viver auctor, leo magna sodales felis, quis malesuad
							<a href="#" class="fa fa-share-square"></a>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<div class="maxheight">
							<div class="banner_title">
								<img src="images/icon2.png" alt="">
								<div class="extra_wrapper">MORA
									<div class="color1">VIDY</div>
								</div>
							</div>
							Hem ipsum dolor sit amet, consectetur adipiscinger elit. In mollis erat mattis neque facilisis, sit ameter ultricies erat rutrum. Cras facilisis, nulla vel viver auctor, leo magna sodales felis, quis malesuader
							<a href="#" class="fa fa-share-square"></a>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="c_phone">
				<div class="container_12">
					<div class="grid_12">
						<div class="fa fa-phone"></div>+ 1800 559 6580
						<span>LAHARANTAROBIA</span>
					</div>
					<div class="clear"></div>
				</div>
			</div>
<!--==============================Content=================================-->
			<div class="content"><div class="ic"></div>
				<!-- fORMULAIRE D'INSCRIPTION -->
				<div class="container_12">
					<div class="grid_5">
						<h3>INSCRIPTION</h3>
						<form id="bookingForm" method="POST" action="inscription.php">
							<div class="fl1">
								<div class="tmInput">
									<input name="Nom" placeHolder="Nom:" type="text" data-constraints='@NotEmpty @Required @AlphaSpecial' required>
								</div>
								<div class="tmInput">
									<input required name="Prenom" placeHolder="Prenom:" type="text" data-constraints="@NotEmpty @Required ">
								</div>
							</div>
							<div class="fl1">
								<div class="tmInput mr0">
									<input required name="Voiture" placeHolder="Nom de votre voiture" type="text" data-constraints="@NotEmpty @Required">
								</div>

							</div>
							<input type="submit" name="Envoyer" class="btn btn-primary">
					<!--              FIN INSCRIPTION    -->
							</div>
						</form>
					</div>
					<div class="grid_6 prefix_1">
						<a href="#" class="type"><img src="images/page1_img1.jpg" alt=""><span class="type_caption">Economy</span></a>
						<a href="#" class="type"><img src="images/page1_img2.jpg" alt=""><span class="type_caption">Standard</span></a>
						<a href="#" class="type"><img src="images/page1_img3.jpg" alt=""><span class="type_caption">Lux</span></a>
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