<?php
//$controller = "aliment";
require_once ("{$ROOT}{$DS}model{$DS}ModelAliment.php"); // chargement du modèle

if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="readAll";	
	
switch ($action) {
    case "readAll":
        $pagetitle = "Liste des Aliment ";
        $view = "readAll";
       	$tab_u = ModelAliment::getAll();//appel au modèle pour gerer la BD
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;

	case "read":	
		if(isset($_REQUEST['id_aliment'])){
			$id_aliment = $_REQUEST['id_aliment'];
			$u = ModelAliment::select($id_aliment);
				if($u!=null){
					$pagetitle = "Details des aliments";
					$view = "read";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
		
	case "delete":
		if(isset($_REQUEST['id_aliment'])){
			$id_aliment = $_REQUEST['id_aliment'];
			$del = ModelAliment::select($id_aliment);
			if($del!=null){
			$del->delete($id_aliment);
			header('Location: index.php?controller=aliment&action=readAll');
			}
		}
	    break;
		
	case "create":
		$pagetitle = "Enregistrer un Aliment";
		$view = "create";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
	case "created":
			$n = $_REQUEST["type"];
			$id_aliment= NULL; 
			
			
				$u = new ModelAliment($id_aliment, $n);	
				$tab = array(
				"id_aliment" => $id_aliment,
				"type" => $n,
				
				);				
				$u->insert($tab);
				$pagetitle = "Aliment Enregistré";
				$view = "created";
				require ("{$ROOT}{$DS}view{$DS}view.php");
				
		
		break;
	
	case "update":
		if(isset($_REQUEST['id_aliment'])){
			$id_aliment = $_REQUEST['id_aliment'];
			$up = ModelAliment::select($id_aliment);
			if($up!=null){
				$pagetitle = "Modifier l'aliment";
				$view = "update";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
        case "updated":
            if(isset($_REQUEST['id_aliment']) && isset($_REQUEST['n'])){
                $oldid_aliment = $_REQUEST['id_aliment'];
                $tab = array(
                    "id_aliment" => $_REQUEST["id_aliment"],
                    "type" => $_REQUEST["n"],
                   
                    );
                $o = ModelAliment::select($oldid_aliment);
                if($o!=null){
                    $u = $o->update($tab, $oldid_aliment);		
                    $pagetitle = "Aliment modifié";
                    $view = "updated";
                    require ("{$ROOT}{$DS}view{$DS}view.php");
                }
            }	
            break;
}
?>
