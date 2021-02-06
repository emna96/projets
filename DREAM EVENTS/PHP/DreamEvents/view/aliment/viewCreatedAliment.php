<p>L'aliment a bien été créé</p>
<?php
$id_aliment = $u->getId_aliment(); 
echo "<p> Aliment <a href='index.php?controller=aliment&action=read&id_aliment=$id_aliment'> $id_aliment </a> </p>" ;
?>