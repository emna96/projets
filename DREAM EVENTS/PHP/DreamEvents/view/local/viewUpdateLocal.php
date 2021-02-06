<?php
$id_local=$up->getId_local();
?>
<form method="POST" action="index.php?controller=local&action=updated&id_local=<?=$id_local?>">
  <fieldset>
     <legend>Modification de local </legend> 

	 <p>
		 <label for="n">Nom</label> :
		 <input type="text" value= "<?=$up->getType()?>" name="n" id="n"  required/>
     </p> 
	 
	 <p>
		<input type="submit" value="Envoyer" /> 
	 </p>
   </fieldset> 
</form>

