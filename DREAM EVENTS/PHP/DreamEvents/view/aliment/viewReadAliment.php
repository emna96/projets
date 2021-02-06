<?php

	$id_aliment=$u->getId_aliment();
	echo '<p>id de aliment : '.$id_aliment;
	echo '<br/> Nom : '.$u->getType().'</p>';
	echo '<div class= updt><a href="index.php?controller=aliment&action=update&id_aliment='.$id_aliment.'">
	 Modifier </a></div>';
	echo '<div class= supp><a href="index.php?controller=aliment&action=delete&id_aliment='.$id_aliment.'">
	 Supprimer </a></div> ';
?>


