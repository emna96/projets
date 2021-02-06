<?php
	foreach ($tab_u as $u){
	  echo "<p> id_local : ".$u->getId_local();
	  echo " type : ".$u->getType();
	  $id_local=$u->getId_local();
	  echo " id_local : 
	  <a href='index.php?controller=local&action=read&id_local=$id_local'>$id_local</a></p>";
	echo "<div class= 'updt'>
 		<a href='index.php?controller=local&action=update&id_local=$id_local'> Modifier </a>
 	</div>
 	<div class= 'supp'>
 		<a href='index.php?controller=local&action=delete&id_local=$id_local'> Supprimer </a>
 	</div><hr/>";
	}
?>
<div class= 'add'>
	<a href='index.php?controller=local&action=create'>Ajouter un nouvel local</a>
</div>



