<p>La musique a bien été créé</p>
<?php
$id_music = $u->getId_music(); 
echo "<p> Utilisateur <a href='index.php?controller=music&action=read&id_music=$id_music'> $id_music </a> </p>" ;
?>