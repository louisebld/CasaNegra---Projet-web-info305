<?php



function print_avis($avis){
	// BUT : print_avis : Print tous l'avis que contient $avis

	// $avis : tableau associatif contenant les infos lié a chaque commentaire posté par les utilisateurs

	echo '<div class="galery_avis">';
	foreach ($avis as $key => $value) {
		//Affichage des commentaires
		
		echo '<div class="box_avis">';
			echo '<div class="autor"><p>Pseudo: ' . $value["name"] . "</p></div>";
			echo '<div class="commentary"><p>Commentaire: ' . $value["commentary"] . "</p></div>";
			// if (isset($value["answer"])){
			// 	echo '<div class="answer"><p>Reponse :' . $value["answer"] . "</p></div>";
			// }
			

		echo "</div>";
		if (isset($_SESSION['connected'])) {
			if (testif_admin($_SESSION['idcompte'])) {
				echo "<form method='post' action='index.php?page=projets'>";
				// champ hidden pour récupérer l'id pour supprimer
				echo  "<input id='idcom' name='idcom' type='hidden' value= ". $value['id'] . ">" ;


				echo "<input type='submit' name='delcom' value='Supprimer le commentaire'/>" . "</p>";
		}	
	}
	}


	echo '</div>';
}

function print_form_avis($idprojet){
	// BUT : print_for_avis : Fonction qui permet d'afficher le formulaire qui ajoute un avis
	//Obligation d'etre connecté, sinon redirection
	//onsubmit='javascript: return remplicom();'>
	
	?>
	<form method="post" class="formCommentaire" action="index.php?page=projets">

		<p>
			<textarea id="com" id="com" placeholder="Votre avis.." name="com"
			rows="10" cols="35"></textarea>
		</p>

		<p>
			<?php	
				echo  '<input id="idprojet" name="idprojet" type="hidden" value= '. $idprojet . ">" ;
				//Champs invisible qui contient le projet sous lequel le commentaire est ajouté
			?>
		</p>

		<p><input type="submit" name="envoyer_com" id="envoyer_com" value="Enregistrer"/></p>
	</form>

		<?php	 
	}




?>