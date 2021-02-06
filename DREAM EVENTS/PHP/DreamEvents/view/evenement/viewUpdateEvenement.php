<?php
$id_event=$up->getId_event();
?>
<form method="POST" action="index.php?controller=evenement&action=updated&id_event=<?=$id_event?>">
  <fieldset>
     <legend>Modification de l'évenement </legend> 
 
	 <p>
		 <label for="n">Nom</label> :
		 <input type="text" value= "<?=$up->getType()?>" name="n" id="n"  required/>
     </p> 
	 
	 <p>
		<input type="submit" value="Envoyer" /> 
	 </p>
   </fieldset> 
</form>

