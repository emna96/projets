<?php
	$id_evenement=$u->getId_evenement();
	echo '<p>id de evenement : '.$id_event;
	echo '<br/> Nom : '.$u->getType().'</p>';
	echo '<div class= updt><a href="index.php?controller=evenement&action=update&id_event='.$id_event.'">
	 Modifier </a></div>';
	echo '<div class= supp><a href="index.php?controller=evenement&action=delete&id_event='.$id_event.'">
	 Supprimer </a></div> ';
?>


