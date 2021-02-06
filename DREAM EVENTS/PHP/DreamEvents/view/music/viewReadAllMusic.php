<?php
	foreach ($tab_u as $u){
	  echo "<p> id_music : ".$u->getId_music();
	  echo " type : ".$u->getType();
	  $id_music=$u->getId_music();
	  echo " id_music : 
	  <a href='index.php?controller=music&action=read&id_music=$id_music'>$id_music</a></p>";
	echo "<div class= 'updt'>
 		<a href='index.php?controller=music&action=update&id_music=$id_music'> Modifier </a>
 	</div>
 	<div class= 'supp'>
 		<a href='index.php?controller=music&action=delete&id_music=$id_music'> Supprimer </a>
 	</div><hr/>";
	}
?>
<div class= 'add'>
	<a href='index.php?controller=music&action=create'>Ajouter une nouvelle musique</a>
</div>



