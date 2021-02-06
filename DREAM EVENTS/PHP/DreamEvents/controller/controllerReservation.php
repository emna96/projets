<?php
//$controller = "reservation";
require_once ("{$ROOT}{$DS}model{$DS}ModelReservation.php"); // chargement du modèle
require_once ("{$ROOT}{$DS}model{$DS}ModelMusic.php");
require_once ("{$ROOT}{$DS}model{$DS}ModelLocal.php");
require_once ("{$ROOT}{$DS}model{$DS}ModelAliment.php");
require_once ("{$ROOT}{$DS}model{$DS}ModelEquipe.php");

if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="readAll";	
	
switch ($action)
 {
    case "readAll":
        $pagetitle = "Liste des reservations";
        $view = "readAll";
       	$tab_u = ModelReservation::getAll();//appel au modèle pour gerer la BD
		
	   require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
		break;		

	

		
	case "create":
		$pagetitle = "Enregistrer la reservation";
		$view = "create";

		$tab_m = ModelMusic::getAll();
		$tab_l = ModelLocal::getAll();
		$tab_a = ModelAliment::getAll();
		$tab_e = ModelEquipe::getAll();

		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
	case "created":
			$id_equipe = $_REQUEST["id_equipe"];
			$id_music = $_REQUEST["id_music"];
			$id_local = $_REQUEST["id_local"];
			$id_aliment = $_REQUEST["id_aliment"];
			$budget = $_REQUEST["budget"];
			$nbr_personnes = $_REQUEST["nbr_personnes"];
		
			if (session_status() == PHP_SESSION_NONE) {
				session_start();
			}
		$id_client= $_SESSION["id"];
				$u = new ModelReservation($id_client, $id_equipe, $id_music,$id_local,$id_aliment,$budget,$nbr_personnes);	
				$tab = array(
					
				"id_client" => $id_client,
				"id_equipe" => $id_equipe,
				"id_music" => $id_music,
				"id_local" => $id_local,
				"id_aliment" => $id_aliment,
				"budget" => $budget,
				"nbr_personnes" => $nbr_personnes,
				
				);				
				$u->insert($tab);
				$pagetitle = "reservation  Enregistré";
				$view = "created";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			
		
		break;
	
		

}
?>
