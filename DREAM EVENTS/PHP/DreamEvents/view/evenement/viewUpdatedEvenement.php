<p> l'évenement a bien été modifié</p>
<?php
$id_event = $u->getId_event(); 
echo "<p> location <a href='index.php?controller=evenement&action=read&id_event=$id_event'> $id_event </a> </p>" ;
?>