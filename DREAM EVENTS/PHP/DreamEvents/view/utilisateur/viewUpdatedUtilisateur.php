<p>L'utilisateur a bien été modifié</p>
<?php
$id = $u->getId(); 
echo "<p> Utilisateur <a href='index.php?controller=utilisateur&action=read&id=$id'> $id </a> </p>" ;
?>