<form method="POST" action="index.php?controller=utilisateur&action=created">
  <fieldset>
     <legend>Ajout d'un utilisateur </legend> 
	 
	 <p>
		 <label for="n">Nom</label> :
		 <input type="text"  name="n" id="n"  required/>
	  </p> 
	 <p>
     <label for="p">Prenom</label> :
     <input type="text" name="p" id="p"  required/>
     </p>
     <p>
     <label for="a">Adresse</label> :
     <input type="text" name="a" id="a"  required/>
     </p> 
     <p>
     <label for="e">Email</label> :
     <input type="text" name="e" id="e"  required/>
     </p> 
     <p>
     <label for="pas">Password</label> :
     <input type="text" name="pas" id="pas"  required/>
     </p> 
     <p>
     <label for="m">Mobile</label> :
     <input type="text" name="m" id="m"  required/>
     </p> 
     <p>
     <label for="r">Role</label> :
     <input type="text" name="r" id="r"  required/>
     </p>  
	 <p>
     <input type="submit" value="Envoyer" /> 
	 </p>
   </fieldset> 
</form>

