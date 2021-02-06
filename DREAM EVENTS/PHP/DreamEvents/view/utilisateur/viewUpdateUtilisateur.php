<?php
$id=$up->getId();
?>
<form method="POST" action="index.php?controller=utilisateur&action=updated&id=<?=$id?>">
  <fieldset>
     <legend>Modification d'un utilisateur </legend> 
	  
	 <p>
		 <label for="n">Nom</label> :
		 <input type="text" value= "<?=$up->getNom()?>" name="n" id="n"  required/>
     </p> 
	 <p>
		 <label for="p">Prenom</label> :
		 <input type="text" value= "<?=$up->getPrenom()?>" name="p" id="p"  required/>
	 </p> 
	     <label for="a">Adresse</label> :
			<input type="text" value= "<?=$up->getAdresse()?>" name="a" id="a"  required/>
     </p> 
     <p>
         <label for="e">Email</label> :
			<input type="text" value= "<?=$up->getEmail()?>" name="e" id="e"  required/>
     </p> 
     <p>
         <label for="pas">Password</label> :
			<input type="text" value= "<?=$up->getPassword()?>" name="pas" id="pas"  required/>
     </p> 
     <p>
         <label for="m">Mobile</label> :
			<input type="text" value= "<?=$up->getMobile()?>" name="m" id="m"  required/>
     </p> 
     <p>
         <label for="r">Role</label> :
			<input type="text" value= "<?=$up->getRole()?>" name="r" id="r"  required/>
     </p>  
	 <p>
		<input type="submit" value="Envoyer" /> 
	 </p>
   </fieldset> 
</form>

