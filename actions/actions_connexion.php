<?php

// DEBUT CONNEXION
// Nous devons prendre les données du formulaire de connexion

// si il est envoyé

if (isset($_POST['connexion'])) {

	$verif = verificationadressemailmdp($compte, $_POST["mail"], $_POST["motdepasse"]);
	$erreur=[];
// non vide
	
	if (empty($_POST["motdepasse"])) {
		$erreur[]="Vous n'avez pas renseigné le mot de passe";

	}

	if (empty($_POST["mail"])) {
		$erreur[]="Vous n'avez pas renseigné l'adresse mail";

	}

// Si on a des champs vide
	if (count($erreur)>0) {

// on met les valeurs dans une variable de session
		$_SESSION["faute"]= $erreur;
		$_SESSION["donneeutil"]= $_POST;

	}

// Si il n'y a pas deux valeurs correctes
	elseif ($verif==false) {
		//$_SESSION["incorrect"]=verificationadressemailmdp($compte, $_POST["mail"], $_POST["motdepasse"]);
		// on met le tableau dans la variable de session
		unset($_SESSION["faute"]);
		// on change la valeur de la variable de session
		$erreur[]="Mot de passe ou adresse mail incorrect";
		$_SESSION["faute"]=$erreur;
	}

// Si les deux valeurs sont correctes =2
	else {
		unset($_SESSION["incorrect"]);
		unset($_SESSION["faute"]);
		unset($_SESSION["donneeutil"]);

	// on garde l'adresse mail pour ensuite faire une recherche dessus pour avoir les infos du compte
		$_SESSION['monadressemail'] = $_POST["mail"];
		
		// redirection vers une page membre ??

	}

}



?>