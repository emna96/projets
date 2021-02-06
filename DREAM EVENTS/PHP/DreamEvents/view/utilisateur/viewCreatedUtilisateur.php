<p>L'utilisateur a bien été créé</p>
<?php
$id = $u->getId(); 
echo "<p> location <a href='index.php?controller=utilisateur&action=read&id=$id'> $id </a> </p>" ;
?>