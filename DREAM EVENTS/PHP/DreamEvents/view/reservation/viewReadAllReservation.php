<?php
	foreach ($tab_u as $u){
	  echo "<p>  clients : ".$u->getId_client();
      echo "  equipe : ".$u->getId_equipe();
      echo "  music : ".$u->getId_music();
      echo "  local : ".$u->getId_local();
      echo "  aliment : ".$u->getId_aliment();
      echo "  budget : ".$u->getBudget();
      echo "  nbr_personnes : ".$u->getNbr_personnes();


	 echo" </p> ";
	  }
?>

