<form method="POST" action="index.php?controller=reservation&action=created">
  <fieldset>
     <legend>  resrvation  </legend> 
	 
	 
	 <p>
     <label for="p">equipe </label> :
     
     <select name="id_equipe" id="id_equipe" >
                    <?php
                    foreach( $tab_e as $equipe ) {
                    ?>
                    <option value="<?php echo $equipe->getId_equipe(); ?>"><?php echo $equipe->getNom_equipe(); ?></option>
                    <?php
                    }
                    ?>
                </select>
     </p>

     <p>
     <label for="a">musique </label> :
   
      <select name="id_music" id="id_music" >
                    <?php
                    foreach( $tab_m as $music ) {
                    ?>
                    <option value="<?php echo $music->getId_music(); ?>"><?php echo $music->getType(); ?></option>
                    <?php
                    }
                    ?>
                </select>
     </p> 
     <p>
     <label for="e">local</label> :
    
      <select name="id_local" id="id_local" >
                    <?php
                    foreach( $tab_l as $local ) {
                    ?>
                    <option value="<?php echo $local->getId_local(); ?>"><?php echo $local->getType(); ?></option>
                    <?php
                    }
                    ?>
                </select>
     </p> 
     <p>
     <label for="pas">aliment</label> :
    
      <select name="id_aliment" id="id_aliment" >
                    <?php
                    foreach( $tab_a as $aliment ) {
                    ?>
                    <option value="<?php echo $aliment->getId_aliment(); ?>"><?php echo $aliment->getType(); ?></option>
                    <?php
                    }
                    ?>
                </select>
     </p> 

     <p>
     <label for="r">nombre des personnes </label> :
     <input type="text" name="nbr_personnes" id="nbr_personnes"  required/>
     </p>

     <p>
     <label for="m">budget</label> :
     <input type="text" name="budget" id="budget"  required/>
     </p> 
 
     <p>
     <input type="submit" value="reserver" /> 
	 </p> 

   </fieldset> 
</form>

