<p> le local a bien été modifié</p>
<?php
$id_local = $u->getId_local(); 
echo "<p> local <a href='index.php?controller=local&action=read&id_local=$id_local'> $id_local </a> </p>" ;
?>