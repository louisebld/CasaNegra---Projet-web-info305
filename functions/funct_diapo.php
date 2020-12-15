<?php

/*function affiche_diapo(){ 
	?>
	<div class="cadre-diapo">
<?php
for ($i = 1; $i <= 11; $i++){
	echo"<img class='diapo' src='images/diapo" . $i .".jpg' alt>";
}
?>
<button class="precedent" aria-label="précédent" onclick="boutons(-1)">❮</button>
<button class="suivant" aria-label="suivant" onclick="boutons(1)">❯</button>
</div>

<script type="text/javascript" src="js/diapo.js"></script>
<?php
}*/


function affiche_diapo(){ 
    // BUT : affiche_diapo : Affiche les diapositives de chaque image des projets

    global $c;
    $cpt = 0;
    $i = 0;
    ?>

    <div class="cadre-diapo">
    <?php
    while ($cpt < countprojet()["COUNT(*)"]){
        if (file_exists('projets/diapo' . $i .'.jpg') and $cpt==0){

            echo'<div style="visibility:visible" class="compGen" id="diapo' . $i . '"/><a href="index.php?page=projets#diapo' . $i . '.jpg"><img class="diapo_img" src="projets/diapo' . $i .'.jpg"></a></div>';
            $cpt = $cpt + 1;
        }
        elseif (file_exists('projets/diapo' . $i .'.jpg')) {
            echo'<div class="compGen" id="diapo' . $i . '"/><a href="index.php?page=projets#diapo' . $i . '.jpg"><img class="diapo_img" src="projets/diapo' . $i .'.jpg"></a></div>';
            $cpt = $cpt + 1;
        }
        $i = $i + 1;
    }


    ?>
    <div class="suivant" id="leftArrow"><h1>❯</h1></div>
    <!-- Bouton droit -->

    <div class="precedent" id="rightArrow"><h1>❮</h1></div>
    <!-- bouton gauche -->

    </div>

    <script type="text/javascript" src="js/diapo.js" ></script>
    <!-- script concernant le diapo, permet de faire defiler les images -->

<?php

}





