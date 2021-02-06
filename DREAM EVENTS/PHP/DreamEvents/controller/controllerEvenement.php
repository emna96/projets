<?php
//$controller = "evenement";
require_once ("{$ROOT}{$DS}model{$DS}ModelEvenement.php"); // chargement du modèle

if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="readAll";	
	
switch ($action) {
    case "readAll":
        $pagetitle = "Liste des évenements ";
        $view = "readAll";
       	$tab_u = ModelEvenement::getAll();//appel au modèle pour gerer la BD
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;

	case "read":	
		if(isset($_REQUEST['id_event'])){
			$id_event = $_REQUEST['id_event'];
			$u = ModelEvenement::select($id_event);
				if($u!=null){
					$pagetitle = "Details des évenements";
					$view = "read";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
		
	case "delete":
		if(isset($_REQUEST['id_event'])){
			$id_event = $_REQUEST['id_event'];
			$del = ModelEvenement::select($id_event);
			if($del!=null){
			$del->delete($id_event);
			header('Location: index.php?controller=evenement&action=readAll');
			}
		}
	    break;
		
	case "create":
		$pagetitle = "Enregistrer un évenement";
		$view = "create";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
	case "created":
			$n = $_REQUEST["type"];
			$id_event= NULL; 
			
			
				$u = new ModelEvenement($id_event, $n);	
				$tab = array(
				"id_event" => $id_event,
				"type" => $n,
				
				);				
				$u->insert($tab);
				$pagetitle = "évenement Enregistré";
				$view = "created";
				require ("{$ROOT}{$DS}view{$DS}view.php");
				
		
		break;
	
	case "update":
		if(isset($_REQUEST['id_event'])){
			$id_event = $_REQUEST['id_event'];
			$up = ModelEvenement::select($id_event);
			if($up!=null){
				$pagetitle = "Modifier l'évenement";
				$view = "update";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
        case "updated":
            if(isset($_REQUEST['id_event']) && isset($_REQUEST['n'])){
                $oldid_event = $_REQUEST['id_event'];
                $tab = array(
                    "id_event" => $_REQUEST["id_event"],
                    "type" => $_REQUEST["n"],
                   
                    );
                $o = ModelEvenement::select($oldid_event);
                if($o!=null){
                    $u = $o->update($tab, $oldid_event);		
                    $pagetitle = "évenement modifié";
                    $view = "updated";
                    require ("{$ROOT}{$DS}view{$DS}view.php");
                }
            }	
            break;
}
?>
