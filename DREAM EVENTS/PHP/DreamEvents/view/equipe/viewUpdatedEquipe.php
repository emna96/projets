<p> l'équipe a bien été modifié</p>
<?php
$id_equipe = $u->getId_equipe(); 
echo "<p> location <a href='index.php?controller=equipe&action=read&id_equipe=$id_equipe'> $id_equipe </a> </p>" ;
?>