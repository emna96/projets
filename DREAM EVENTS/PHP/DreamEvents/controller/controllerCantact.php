<?php
if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="cantact";	
	
switch ($action) {
    case "cantact":
        $pagetitle = " Cantact Us ";
        $view = "cantact";
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;
    }
        ?>