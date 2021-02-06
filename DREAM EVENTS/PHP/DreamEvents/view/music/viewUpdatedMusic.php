<p>La musique a bien été modifié</p>
<?php
$id_music = $u->getId_music(); 
echo "<p> music <a href='index.php?controller=music&action=read&id_music=$id_music'> $id_music </a> </p>" ;
?>