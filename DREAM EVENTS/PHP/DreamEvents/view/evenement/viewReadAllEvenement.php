<?php

	foreach ($tab_u as $u){
	  echo "<p> id_event : ".$u->getId_event();
	  echo " type : ".$u->getType();
	  $id_event=$u->getId_event();
	  echo " id_event : 
	  <a href='index.php?controller=evenement&action=read&id_event=$id_event'>$id_event</a></p>";
	echo "<div class= 'updt'>
 		<a href='index.php?controller=evenement&action=update&id_event=$id_event'> Modifier </a>
 	</div>
 	<div class= 'supp'>
 		<a href='index.php?controller=evenement&action=delete&id_event=$id_event'> Supprimer </a>
 	</div><hr/>";
	}
?>
<div class= 'add'>
	<a href='index.php?controller=evenement&action=create'>Ajouter un nouvel évenement </a>
</div>



