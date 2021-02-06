 <?php
	$id=$u->getId();
	echo '<p>NCIN Utilisateur : '.$id;
	echo '<br/>Nom : '.$u->getNom().' - Prenom : '.$u->getPrenom().' - Adresse : '.$u->getAdresse().' - Email : '.$u->getEmail().' - Password : '.$u->getPassword().' - Mobile : '.$u->getMobile().' - Role : '.$u->getRole().'</p>';
	echo '<div class= updt><a href="index.php?controller=utilisateur&action=update&id='.$id.'">
	 Modifier </a></div>';
	echo '<div class= supp><a href="index.php?controller=utilisateur&action=delete&id='.$id.'">
	 Supprimer </a></div> ';
?>


