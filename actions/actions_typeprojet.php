<?php
	//----------------Partie concernant l'affichage des projets -----------------

	$res = charge_projet($c);
	$titreProjets = "toutes nos réalisations";
	// Affichage de base: tous les projets

	if (isset($_POST['form_typeProjets']) && $_POST['form_typeProjets'] != "allProjets"){
		//Si on precise un type spéciale, on recupere le type et on affiche les projets de ce type

		$res = charge_projetType($_POST['form_typeProjets']);
		$titreProjets = $_POST['form_typeProjets'];

	} elseif (isset($_POST['form_typeProjets']) && $_POST['form_typeProjets'] = "allProjets") {
		// Si on remet tous les projets, alors on reaffiche tous les projets
		$res = charge_projet($c);
		$titreProjets = "toutes nos réalisations";
	}


	//-----------------  insertion d'un nouveau type de projet ----------------------------

	if (isset($_POST['newType']) && !empty($_POST['newType']) && trim($_POST['newType'])){
		// verif à faire : si il y est pas déjà
		$newType = $_POST['newType'];
		insert_typeProjet($newType);
		header('Location: index.php?page=projets');	

	}


// ------------------------------ AFFICHAGE PROJET EQUIPE ---------------------------------------




	if (isset($_POST['projetequipe']) && $_POST['projetequipe'] != "allProjets"){
		//Si on precise un type spéciale
		$res = charge_projetPersonne($_POST['projetequipe']);
		$titreProjets = $_POST['projetequipe'];

	} elseif (isset($_POST['projetequipe']) && $_POST['projetequipe'] = "allProjets") {
		$res = charge_projet($c);
		$titreProjets = "toutes nos réalisations";
	}



?>