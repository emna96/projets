<p>L'équipe a bien été créé</p>
<?php
$id_equipe = $u->getId_equipe(); 
echo "<p> location <a href='index.php?controller=evenement&action=read&id_equipe=$id_equipe'> $id_equipe </a> </p>" ;
?>