<?php
	$id_music=$u->getId_music();
	echo '<p>id de musique : '.$id_music;
	echo '<br/> Nom : '.$u->getType().'</p>';
	echo '<div class= updt><a href="index.php?controller=music&action=update&id_music='.$id_music.'">
	 Modifier </a></div>';
	echo '<div class= supp><a href="index.php?controller=music&action=delete&id_music='.$id_music.'">
	 Supprimer </a></div> ';
?>


