<form method="POST" action="index.php?controller=aliment&action=created">
  <fieldset>
     <legend> Ajout un Aliment </legend> 
	
	 <p>
		 <label for="type">Nom</label> :
		 <input type="text"  name="type" id="type"  required/>
	  </p> 
	
	 <p>
     <input type="submit" value="Envoyer" /> 
	 </p>
   </fieldset> 
</form>



<p>L'aliment a bien été créé</p>
<?php
/*
$ncin = $u->getNcin(); 
echo "<p> Utilisateur <a href='index.php?controller=music&action=read'> $ncin </a> </p>" ;
*/?>
