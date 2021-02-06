<?php
	foreach ($tab_u as $u){
	  echo "<p> id_equipe : ".$u->getId_equipe();
      echo " nom_equipe : ".$u->getNom_equipe();
      echo " nbr_membre : ".$u->getNbr_membre();
      echo " id_event : ".$u->getId_event();
	  $id_equipe=$u->getId_equipe();
	  echo " id_equipe : 
	  <a href='index.php?controller=equipe&action=read&id_equipe=$id_equipe'>$id_equipe</a></p>";
	echo "<div class= 'updt'>
 		<a href='index.php?controller=equipe&action=update&id_equipe=$id_equipe'> Modifier </a>
 	</div>
 	<div class= 'supp'>
 		<a href='index.php?controller=equipe&action=delete&id_equipe=$id_equipe'> Supprimer </a>
 	</div><hr/>";
	}
?>
<div class= 'add'>
	<a href='index.php?controller=equipe&action=create'>Ajouter une nouvelle equipe </a>
</div>



