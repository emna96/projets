<?php
	foreach ($tab_u as $u){
	  echo "<p> id_aliment : ".$u->getId_aliment();
	  echo " type : ".$u->getType();
	  $id_aliment=$u->getId_aliment();
	  echo " id_aliment : 
	  <a href='index.php?controller=aliment&action=read&id_aliment=$id_aliment'>$id_aliment</a></p>";
	echo "<div class= 'updt'>
 	<a href='index.php?controller=aliment&action=update&id_aliment=$id_aliment'> Modifier </a>
 	</div>
 	<div class= 'supp'>
 		<a href='index.php?controller=aliment&action=delete&id_aliment=$id_aliment'> Supprimer </a>
 	</div><hr/>";
	}
?>
<div class= 'add'>
	<a href='index.php?controller=aliment&action=create'>Ajouter un nouvel aliment</a>
</div>





