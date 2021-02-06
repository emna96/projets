<?php
//$controller = "utilisateur";
require_once ("{$ROOT}{$DS}model{$DS}ModelMusic.php"); // chargement du modèle

if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="readAll";	
	
switch ($action) {
    case "readAll":
        $pagetitle = "Liste des Musiques";
        $view = "readAll";
       	$tab_u = ModelMusic::getAll();//appel au modèle pour gerer la BD
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;

	case "read":	
		if(isset($_REQUEST['id_music'])){
			$id_music = $_REQUEST['id_music'];
			$u = ModelMusic::select($id_music);
				if($u!=null){
					$pagetitle = "Details de musiques";
					$view = "read";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
		
	case "delete":
		if(isset($_REQUEST['id_music'])){
			$id_music = $_REQUEST['id_music'];
			$del = ModelMusic::select($id_music);
			if($del!=null){
			$del->delete($id_music);
			header('Location: index.php?controller=music&action=readAll');
			}
		}
	    break;
		
	case "create":
		$pagetitle = "Enregistrer une musique";
		$view = "create";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
	case "created":
			$n = $_REQUEST["type"];
			$id_music= NULL; 
			
			
				$u = new ModelMusic($id_music, $n);	
				$tab = array(
				"id_music" => $id_music,
				"type" => $n,
				
				);				
				$u->insert($tab);
				$pagetitle = "musique Enregistré";
				$view = "created";
				require ("{$ROOT}{$DS}view{$DS}view.php");
				
		
		break;
	
	case "update":
		if(isset($_REQUEST['id_music'])){
			$id_music = $_REQUEST['id_music'];
			$up = ModelMusic::select($id_music);
			if($up!=null){
				$pagetitle = "Modifier la musique";
				$view = "update";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
	case "updated":
		if(isset($_REQUEST['id_music']) && isset($_REQUEST['n'])){
			$oldid_music = $_REQUEST['id_music'];
			$tab = array(
   			 "id_music" => $_REQUEST["id_music"],
   			 "type" => $_REQUEST["n"],
   			
   			 );
			$o = ModelMusic::select($oldid_music);
			if($o!=null){
				$u = $o->update($tab, $oldid_music);		
				$pagetitle = "musique modifié";
				$view = "updated";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}
		}	
		break;
}
?>
