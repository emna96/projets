<?php
$id_music=$up->getId_music();
?>
<form method="POST" action="index.php?controller=music&action=updated&id_music=<?=$id_music?>">
  <fieldset>
     <legend>Modification de musique </legend> 
	 
	 <p>
		 <label for="n">Nom</label> :
		 <input type="text" value= "<?=$up->getType()?>" name="n" id="n"  required/>
     </p> 
	 
	 <p>
		<input type="submit" value="Envoyer" /> 
	 </p>
   </fieldset> 
</form>



