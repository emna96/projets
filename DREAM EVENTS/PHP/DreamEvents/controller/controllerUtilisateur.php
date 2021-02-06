<?php
//$controller = "utilisateur";
require_once ("{$ROOT}{$DS}model{$DS}ModelUtilisateur.php"); // chargement du modèle

if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="readAll";	
	
switch ($action) {
    case "readAll":
        $pagetitle = "Liste des utilisateurs";
        $view = "readAll";
       	$tab_u = ModelUtilisateur::getAll();//appel au modèle pour gerer la BD
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
		break;		

	case "readAllClient":
			$pagetitle = "Liste des utilisateurs";
			$view = "readAll";
			$tab_u = ModelUtilisateur::selectFK(3);//appel au modèle pour gerer la BD
			require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
			break;
			
	case "readAllPlanificateur":
			$pagetitle = "Liste des utilisateurs";
			$view = "readAll";
			$tab_u = ModelUtilisateur::selectFK(2);//appel au modèle pour gerer la BD
			require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
			break;

	case "read":	
		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
			$u = ModelUtilisateur::select($id);
				if($u!=null){
					$pagetitle = "Details de l'utilisateur";
					$view = "read";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
		
	case "delete":
		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
			$del = ModelUtilisateur::select($id);
			if($del!=null){
			$del->delete($ncin);
			header('Location: index.php?controller=utilisateur&action=readAll');
			}
		}
	    break;
		
	case "create":
		$pagetitle = "Enregistrer un utilisateur";
		$view = "create";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
	case "created":
		if(isset($_REQUEST['id']) && isset($_REQUEST['n']) && isset($_REQUEST['p'])  && isset($_REQUEST['a']) && isset($_REQUEST['e']) && isset($_REQUEST['pas']) && isset($_REQUEST['m']) && isset($_REQUEST['r'])){
			$id = $_REQUEST["id"];
			$n = $_REQUEST["n"];
			$p = $_REQUEST["p"];
			$p = $_REQUEST["a"];
			$p = $_REQUEST["e"];
			$p = $_REQUEST["pas"];
			$p = $_REQUEST["m"];
			$p = $_REQUEST["r"];
			
			$recherche = ModelUtilisateur::select($id);
			if($recherche==null){
				$u = new ModelUtilisateur($id, $n, $p,$a,$e,$pas,$m,$r);	
				$tab = array(
				"id" => $id,
				"nom" => $n,
				"prenom" => $p,
				"adresse" => $a,
				"email" => $e,
				"password" => $pas,
				"mobile" => $m,
				"role" => $r
				);				
				$u->insert($tab);
				$pagetitle = "Utilisateur Enregistré";
				$view = "created";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}	
		}
		break;
	
	case "update":
		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
			$up = ModelUtilisateur::select($id);
			if($up!=null){
				$pagetitle = "Modifier l'utilisateur";
				$view = "update";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
	case "updated":
		if(isset($_REQUEST['id']) && isset($_REQUEST['n']) && isset($_REQUEST['p'])  && isset($_REQUEST['a']) && isset($_REQUEST['e']) && isset($_REQUEST['pas']) && isset($_REQUEST['m']) && isset($_REQUEST['r'])){
			$oldid = $_REQUEST['id'];
			$tab = array(
   			 "id" => $_REQUEST["id"],
   			 "nom" => $_REQUEST["n"],
			"prenom" => $_REQUEST["p"],
			"adresse" => $_REQUEST["a"],
			"email" => $_REQUEST["e"],
			"password" => $_REQUEST["pas"],
			"mobile" => $_REQUEST["m"],
			"role" => $_REQUEST["r"]
   			 );
			$o = ModelUtilisateur::select($oldid);
			if($o!=null){
				$u = $o->update($tab, $oldid);		
				$pagetitle = "Utilisateur modifié";
				$view = "updated";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}
		}	
		break;
}
?>
