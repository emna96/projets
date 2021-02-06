<?php
$id_equipe=$up->getId_equipe();
?>
<form method="POST" action="index.php?controller=equipe&action=updated&id_equipe=<?=$id_equipe?>">
  <fieldset>
     <legend>Modification de l'équipe </legend> 
 
	 <p>
		 <label for="n">Nom</label> :
		 <input type="text" value= "<?=$up->getNom_equipe()?>" name="n" id="n"  required/>
     </p> 
	 
	 <p>
		 <label for="n">Nombre des membres</label> :
		 <input type="text" value= "<?=$up->getNbr_membre()?>" name="n" id="n"  required/>
     </p>
     
	 <p>
		 <label for="n">Evenement</label> :
		 <input type="text" value= "<?=$up->getId_evenement()?>" name="n" id="n"  required/>
     </p>
	 <p>
		<input type="submit" value="Envoyer" /> 
	 </p>
   </fieldset> 
</form>

