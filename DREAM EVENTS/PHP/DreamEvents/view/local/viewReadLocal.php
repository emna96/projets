<?php
	$id_local=$u->getId_local();
	echo '<p>id de local : '.$id_local;
	echo '<br/> Nom : '.$u->getType().'</p>';
	echo '<div class= updt><a href="index.php?controller=local&action=update&id_local='.$id_local.'">
	 Modifier </a></div>';
	echo '<div class= supp><a href="index.php?controller=local&action=delete&id_local='.$id_local.'">
	 Supprimer </a></div> ';
?>


