<?php



function print_formulairenouveauequipe() {
	//Affiche le formulaire pour ajouter un nouveau membre

	?>
	<div id="formulairequipe">
		<form method="post" action="index.php?page=pageadmin">

			<p>
				<input type = "text" placeholder="Nom" name ="nom" id="ajout" ></p>
			<p>
				<input type = "text" placeholder="Prénom" name ="prénom" id="ajout" ></p>

			<p>
				<input type = "text" placeholder="Age" name ="age" id="ajout" ></p>

			<p>
				<input type = "text" placeholder="Prénom" name ="prénom" id="ajout" ></p>

			<p>
				<textarea id="com" placeholder="Description" name="description" rows="10" cols="35"></textarea>
			</p>


				<p><input type="submit" name="envoiequipe" id="action" value="Ajouter"/></p>
			</form>
		</div>
		<?php	 
	}

function listederoulmetier () {
	global $c;
?>
	<select name="metier" size="1">
<option>lundi

</select>

<?php




}



?>