<?php
	foreach ($tab_u as $u){
	  echo "<p> Nom : ".$u->getNom();
	  echo " Prénom : ".$u->getPrenom();
	  $id=$u->getId();
	  echo " id : 
	  <a href='index.php?controller=utilisateur&action=read&id=$id'>$id</a></p>";
	echo "<div class= 'updt'>
 		<a href='index.php?controller=utilisateur&action=update&id=$id'> Modifier </a>
 	</div>
 	<div class= 'supp'>
 		<a href='index.php?controller=utilisateur&action=delete&id=$id'> Supprimer </a>
 	</div><hr/>";
	}
?>
<div class= 'add'>
	<a href='index.php?controller=utilisateur&action=create'>Ajouter un nouvel utilisateur</a>
</div>


