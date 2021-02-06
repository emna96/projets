<?php
//$controller = "equipe";
require_once ("{$ROOT}{$DS}model{$DS}ModelEquipe.php"); // chargement du modèle

if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="readAll";	
	
switch ($action) {
    case "readAll":
        $pagetitle = "Liste des éequipes ";
        $view = "readAll";
       	$tab_u = ModelEquipe::getAll();//appel au modèle pour gerer la BD
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;

	case "read":	
		if(isset($_REQUEST['id_equipe'])){
			$id_equipe = $_REQUEST['id_equipe'];
			$u = ModelEquipe::select($id_equipe);
				if($u!=null){
					$pagetitle = "Details des équipes";
					$view = "read";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
		
	case "delete":
		if(isset($_REQUEST['id_equipe'])){
			$id_equipe = $_REQUEST['id_equipe'];
			$del = ModelEquipe::select($id_equipe);
			if($del!=null){
			$del->delete($id_equipe);
			header('Location: index.php?controller=equipe&action=readAll');
			}
		}
	    break;
		
	case "create":
		$pagetitle = "Enregistrer un équipe";
		$view = "create";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
	case "created":
			$n = $_REQUEST["type"];
			$id_event= NULL; 
			
			
				$u = new ModelEquipe($id_equipe, $n, $nb, $id_event);	
				$tab = array(
				"id_event" => $id_event,
                "nom_equipe" => $n,
                "nbr_membre" => $nb,
				"id_event" => $id_event,

				);				
				$u->insert($tab);
				$pagetitle = "équipe Enregistré";
				$view = "created";
				require ("{$ROOT}{$DS}view{$DS}view.php");
				
		
		break;
	
	case "update":
		if(isset($_REQUEST['id_equipe'])){
			$id_equipe = $_REQUEST['id_equipe'];
			$up = ModelEquipe::select($id_equipe);
			if($up!=null){
				$pagetitle = "Modifier l'équipe";
				$view = "update";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
        case "updated":
            if(isset($_REQUEST['id_equipe']) && isset($_REQUEST['n']) && isset($_REQUEST["nb"]) && isset($_REQUEST["id_event"])){
                $oldid_equipe = $_REQUEST['id_equipe'];
                $tab = array(
                    "id_equipe" => $_REQUEST["id_equipe"],
                    "nom_equipe" => $_REQUEST["n"],
                    "nbr_membre" => $_REQUEST["nb"],
                    "id_event" => $_REQUEST["id_event"]
                
                    );
                $o = ModelEquipe::select($oldid_equipe);
                if($o!=null){
                    $u = $o->update($tab, $oldid_equipe);		
                    $pagetitle = "équipe modifié";
                    $view = "updated";
                    require ("{$ROOT}{$DS}view{$DS}view.php");
                }
            }	
            break;
}
?>
