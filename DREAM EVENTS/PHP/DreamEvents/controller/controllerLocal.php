<?php
//$controller = "local";
require_once ("{$ROOT}{$DS}model{$DS}ModelLocal.php"); // chargement du modèle

if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="readAll";	
	
switch ($action) {
    case "readAll":
        $pagetitle = "Liste des locales ";
        $view = "readAll";
       	$tab_u = ModelLocal::getAll();//appel au modèle pour gerer la BD
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;

	case "read":	
		if(isset($_REQUEST['id_music'])){
			$id_local = $_REQUEST['id_local'];
			$u = ModelLocal::select($id_local);
				if($u!=null){
					$pagetitle = "Details des locales";
					$view = "read";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
		
	case "delete":
		if(isset($_REQUEST['id_local'])){
			$id_local = $_REQUEST['id_local'];
			$del = ModelLocal::select($id_local);
			if($del!=null){
			$del->delete($id_local);
			header('Location: index.php?controller=local&action=readAll');
			}
		}
	    break;
		
	case "create":
		$pagetitle = "Enregistrer un lacal";
		$view = "create";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
	case "created":
			$n = $_REQUEST["type"];
			$id_local= NULL; 
			
			
				$u = new ModelLocal($id_local, $n);	
				$tab = array(
				"id_local" => $id_local,
				"type" => $n,
				
				);				
				$u->insert($tab);
				$pagetitle = "local Enregistré";
				$view = "created";
				require ("{$ROOT}{$DS}view{$DS}view.php");
				
		
		break;
	
	case "update":
		if(isset($_REQUEST['id_local'])){
			$id_local = $_REQUEST['id_local'];
			$up = ModelLocal::select($id_local);
			if($up!=null){
				$pagetitle = "Modifier le local";
				$view = "update";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
        case "updated":
            if(isset($_REQUEST['id_local']) && isset($_REQUEST['n'])){
                $oldid_local = $_REQUEST['id_local'];
                $tab = array(
                    "id_local" => $_REQUEST["id_local"],
                    "type" => $_REQUEST["n"],
                   
                    );
                $o = ModelLocal::select($oldid_local);
                if($o!=null){
                    $u = $o->update($tab, $oldid_local);		
                    $pagetitle = "local modifié";
                    $view = "updated";
                    require ("{$ROOT}{$DS}view{$DS}view.php");
                }
            }	
            break;
}
?>
