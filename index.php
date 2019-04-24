<!-- 
****************************************************************
			FRONT E BACK-END BY GABRIEL A. BARBOSA
			E-MAIL: gabrielbarbosaweb7@gmail.com
			SITE: http://gabrieldaluz7.co.nf/
			DATA INICIO: 01-05-2018
****************************************************************
-->
<!doctype html>
<html lang="pt-br">
<head>
	<?php 
		$pageTitle = "Davi Moraes - Oficial";
		include "includes/header.php"; 
	?>
</head>
<body class="background01">

	<!-- pageContainer -->
	<div id="pageContainer">

		<!-- Section: Home -->
		<section id="home" class="pageContainer">
			<!-- container -->
			<div class="container">
				<!-- Davi-Logo -->
				<div class="davi-logo">
					<a href="./"><img src="img/davi-logo.png" /></a>
				</div>
				<!-- Menu Button -->
				<div class="menu-button" id="menu-button-open">
					<i class="glyphicon glyphicon-menu-hamburger"></i> 
				</div>
				<!-- Davi-Home -->
				<div class="davi-home">
					<img src="img/davi-home.png" /> 
				</div>
			</div>
		</section>
		
		<!-- Section: Menu -->
		<?php include "includes/menu.php"; ?>
		
	</div>

	<?php include "includes/footer.php"; ?>
	

	  
</body>
</html>