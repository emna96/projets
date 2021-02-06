<p>L'évenement a bien été créé</p>
<?php
$id_evenement = $u->getId_evenement(); 
echo "<p> location <a href='index.php?controller=evenement&action=read&id_evenemnet=$id_evenement'> $id_evenement</a> </p>" ;
?>