<?php
	$id_equipe=$u->getId_equipe();
	echo '<p>id de equipe : '.$id_equipe;
	echo '<br/> Nom : '.$u->getNom_equipe().'Nbr_membre : '.$u->getNbr_membre().'id_equipe : '.$u->getId_equipe().'</p>';
	echo '<div class= updt><a href="index.php?controller=equipe&action=update&id_equipe='.$id_equipe.'">
	 Modifier </a></div>';
	echo '<div class= supp><a href="index.php?controller=equipe&action=delete&id_equipe='.$id_equipe.'">
	 Supprimer </a></div> ';
?>


