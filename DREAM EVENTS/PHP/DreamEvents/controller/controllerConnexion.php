<?php

require_once ("{$ROOT}{$DS}model{$DS}ModelConnexion.php");

if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="home";	
	
switch ($action) {
    case "login":
        $pagetitle = "LOGIN ";
        $view = "login";
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;
    case "signin":
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $data = [ 'email'=>trim($_REQUEST["email"]),'password'=>trim($_REQUEST["password"])];
        $test = ModelConnexion::findUser($data);
        if ($test==true)
        {
            $recherche = ModelConnexion::getUser($data);
            if(isset($_SESSION["id"])){
                unset($_SESSION["id"]);
            }
            if(isset($_SESSION["utilisateur"])){
                unset($_SESSION["utilisateur"]);
            }
            if(isset($_SESSION["role"])){
                unset($_SESSION["role"]);
            }
                $_SESSION["id"] = $recherche['id'];
                $_SESSION["utilisateur"] = $recherche['prenom'];
                $_SESSION["role"] = $recherche['role'];
                
            
                $pagetitle = "PAGE D'ACCEUIL";
                $view = "Index";
                require ("{$ROOT}{$DS}view{$DS}view.php");
              break;
        }
        
       /* 

        if($recherche!=null)
        
        }*/
        $pagetitle = "ATTENTION";
        $view = "Erreur";
        require ("{$ROOT}{$DS}view{$DS}view.php");
     
    break;

    case "logout":
        session_start();
        session_destroy();

        $pagetitle = "";
        $view = "event";
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;
        case "home";
        
        $pagetitle = "";
        $view = "event";
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;
    }

        ?>