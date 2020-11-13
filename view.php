<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<main>
		<header>

		<!-- Pour la connexion -->

		<div id="inscription">
			<a href="index.php?page=inscription"> Inscription </a>
		</div>

		<div id="connexion">
			<a href="index.php?page=connexion"> Connexion </a>
		</div>


		<!-- Pour l'entête -->
		<?php
		include ("pages/entete.php");

		?>
		
		</header>
	</main>

	<?php
		//Inclusion de la page selon la valeur de $page
	if ($page == "accueil"){
		include ("pages/accueil.php");
		include("pages/diapo.php");

	}

	elseif ($page == "presentation"){
		include ("pages/presentation.php");
	}

	elseif ($page == "inscription") {
		include ("pages/inscription.php");

	}

	elseif ($page == "connexion") {
		include ("pages/connexion.php");

	}


	elseif ($page == "avis") {
		include ("pages/avis.php");

	}

	elseif ($page == "prendrerdv") {
		include ("pages/rdv.php");

	}

	elseif ($page == "contact") {
		include ("pages/contact.php");

	}

	elseif ($page == "moncompte") {
		include ("pages/moncompte.php");

	}




	?>

	<!-- Pour le footer -->
	<?php
	include("pages/footer.php");
	?>



</body>
</html>
