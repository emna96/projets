

<link rel="stylesheet" href="./css/stylesheet.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Cabin|Roboto:400,700|Roboto+Condensed:400,700" rel="stylesheet">
   

 <?php
 if (session_status() == PHP_SESSION_NONE) {
    session_start();
    }
 if (isset($_SESSION["id"]) && ($_SESSION["role"]==1)):
 ?>  
<nav class="navbar">
    <div class="container">
    <div class="row">
    <div class=" nav-brand">
       <a href='index.php?controller=connexion&action=home'><img src="img/logologo.png"  width="150" height="100" class="d-inline-block align-top " alt=""></a>
    </div>
    </div>
        <div class="nav-items ">
        <ul>
        <li><a href='index.php?controller=reservation&action=readAll'>Reservations</a></li>    
        <li><a href='index.php?controller=evenement'>Events</a></li>
        <li><a href='index.php?controller=utilisateur&action=readAllClient'>clients</a></li>
        <li><a href='index.php?controller=utilisateur&action=readAllPlanificateur'> Planners </a></li>  
        <li><a href='index.php?controller=connexion&action=logout'>Logout  </a></li>    

        </ul>
        </div>
    </div>       
 </nav>
 <?php
 elseif (isset($_SESSION["id"]) && ($_SESSION["role"]==2)):
?>
<nav class="navbar">
    <div class="container">
    <div class="row">
    <div class=" nav-brand">
       <a href='index.php?controller=connexion&action=home'><img src="img/logologo.png"  width="150" height="100" class="d-inline-block align-top " alt=""></a>
    </div>
    </div>
        <div class="nav-items ">
        <ul>
        <li><a href='index.php?controller=evenement'>Events</a></li>
        <li><a href='index.php?controller=equipe'>Teams</a></li>
        <li><a href='index.php?controller=aliment'>Aliment</a></li>
        <li><a href='index.php?controller=music'>Music</a></li>
        <li><a href='index.php?controller=local'>Local</a></li>
        <li><a href='index.php?controller=connexion&action=logout'>Logout</a></li>
        </ul>
        </div>
    </div>       
 </nav>



 <?php
 elseif (isset($_SESSION["id"]) && ($_SESSION["role"]==3)):
?>
<nav class="navbar">
    <div class="container">
    <div class="row">
    <div class=" nav-brand">
       <a href='index.php?controller=connexion&action=home'><img src="img/logologo.png"  width="150" height="100" class="d-inline-block align-top " alt=""></a>
    </div>
    </div>
        <div class="nav-items ">
        <ul>
        <li><a href='index.php?controller=connexion&action=home'>Home</a></li>    
        <li><a href='index.php?controller=about'>About</a></li>  
        <li><a href='index.php?controller=connexion&action=home#features'>Services</a></li>
        <li><a href='index.php?controller=reservation&action=create'>Reserver</a></li>
        <li><a href='index.php?controller=cantact'>Contact us </a></li>  
        <li><a href='index.php?controller=connexion&action=logout'> Logout</a></li>  
        </ul>
        </div>
    </div>       
 </nav>


<?php
 else:
?>
<nav class="navbar">
    <div class="container">
    <div class="row">
    <div class=" nav-brand">
       <a href='index.php?controller=connexion&action=home'><img src="img/logologo.png"  width="150" height="100" class="d-inline-block align-top " alt=""></a>
    </div>
    </div>
        <div class="nav-items ">
        <ul>
        <li><a href='index.php?controller=connexion&action=home'>Home</a></li>    
        <li><a href='index.php?controller=about'>About</a></li>  
        <li><a href="index.php?controller=connexion&action=home#features">Services</a></li>
        <li><a href='index.php?controller=connexion&action=login'> Connexion </a></li>  
        <li><a href='index.php?controller=cantact'>Contact us </a></li> 
        </ul>
        </div>
    </div>       
 </nav>

 <?php
 endif;
?>


