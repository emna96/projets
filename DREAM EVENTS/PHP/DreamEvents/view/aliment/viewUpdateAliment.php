<?php
$id_aliment=$up->getId_aliment();
?>
<form method="POST" action="index.php?controller=aliment&action=updated&id_aliment=<?=$id_aliment?>">
  <fieldset>
     <legend>Modification d'aliment </legend> 
 
	 <p>
		 <label for="n">Nom</label> :
		 <input type="text" value= "<?=$up->getType()?>" name="n" id="n"  required/>
     </p> 
	 
	 <p>
		<input type="submit" value="Envoyer" /> 
	 </p>
   </fieldset> 
</form>


