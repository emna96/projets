<?php
// __DIR__ est une constante "magique" de PHP qui contient le chemin du dossier courant
$ROOT = __DIR__;
//echo '$ROOT= '.$ROOT;
// DS contient le slash des chemins de fichiers, c'est-à-dire '/' sur Linux et '\' sur Windows
$DS = DIRECTORY_SEPARATOR;

 $controleur_default = "connexion" ;

if(!isset($_REQUEST['controller']))
				//$controller récupère $controller_default;
				$controller=$controleur_default;
			else 
				// recupère l'action passée dans l'URL
				$controller = $_REQUEST['controller'];

/*if(!isset($_REQUEST['action']))
		$_REQUEST['action'] = "readAll";
*/	 

switch ($controller) {



			case "about" :
					require ("{$ROOT}{$DS}controller{$DS}controllerAbout.php");
					break;

				
			case "connexion" :
				require ("{$ROOT}{$DS}controller{$DS}controllerConnexion.php");
				break;

				
			case "cantact" :
				require ("{$ROOT}{$DS}controller{$DS}controllerCantact.php");
				break;


			case "music" :
					require ("{$ROOT}{$DS}controller{$DS}controllerMusic.php");
					break;


			case "local" :
						require ("{$ROOT}{$DS}controller{$DS}controllerLocal.php");
						break;


			case "aliment" :
				require ("{$ROOT}{$DS}controller{$DS}controllerAliment.php");
				break;

							
			case "evenement" :
				require ("{$ROOT}{$DS}controller{$DS}controllerEvenement.php");
				break;


			case "equipe" :
					require ("{$ROOT}{$DS}controller{$DS}controllerEquipe.php");
					break;


			case "reservation" :
						require ("{$ROOT}{$DS}controller{$DS}controllerReservation.php");
						break;

			case "utilisateur" :
				require ("{$ROOT}{$DS}controller{$DS}controllerUtilisateur.php");
				break;	

				
			case "default" :
				require ("{$ROOT}{$DS}controller{$DS}controllerHome.php");
				break;
}
?>