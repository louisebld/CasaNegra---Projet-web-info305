<?php


function affiche_rdv($rdv){
	//afficher les rdv 
	echo'<div class="listerdv">';
	echo'<h2> Vos rendez vous : </h2>';
	foreach ($rdv as $key => $value) {

			echo'<div class="rdvbox">';
			echo'<p> Le : ' . changedate($value["daterdv"]) . "</p>"; // voir pour retravailler le format de la date 
			echo'<p> A : ' . $value["heurerdv"] . "</p> </div>";
			echo'<p> RDV avec : ' . recupmemebrenom($value["idmembre"]) . "</p>";
			echo'</div>';
if (testif_admin($_SESSION['idcompte'])){
echo "<form method='post' action='index.php?page=moncompte'>";
		echo  "<input id='idasuppr' name='idasupprcompte' type='hidden' value= ". $value['idmembre'] . ">" ;
		echo "<input class='btnsupprrdv' type='submit' name='asupprimerrdv' value='Supprimer'/>";
}
			
		}

		echo"</div>";
	
	}



function print_form_rdv($idclient){
	//Fonction qui permet d'afficher le formulaire qui ajoute un rdv
	//Obligation d'etre connecté, sinon redirection
	?>

	<form method="post" action="index.php?page=prendrerdv">

		<label> Date </label>
		<input type="date" name="date" required>

		<label>Heure</label>
		<input type="time" name="heure" min="09:00" max="17:00" required>

		<p> Les rendez-vous sont disponibles de 9h à 17h. </p>
		<p> Si vous souhaitez un rendez-vous en dehors de ces horaires, merci de nous contacter. </p>
		<p> Nous ne prenons pas de rendez-vous le dimanche.</p>
		<p>
			<?php	
				echo  '<input id="idclient" name="idclient" type="hidden" value= '. $idclient . ">" ;
				?>
		<label> Rendez-vous avec : </label>
		<?php
				listederoulemembres();
			?>
		</p>

		<p><input type="submit" name="envoyer_rdv" id="envoyer_rdv" value="Enregistrer"/></p>
	</form>

		<?php	 
	}

// a revoir : ne fonctionne pas 
function listederoulemembres(){
	global $listemembres; // le pb vient de la ????
	?>
	<select name="equipe">
		<?php

	for ($i = 0; $i < count($listemembres); $i++){
	$membrecourant = $listemembres[$i];
	echo "<option>" . $membrecourant['fname'] . "</option>" ; // equipe ???
}
?>
</select>

<?php


}


?>