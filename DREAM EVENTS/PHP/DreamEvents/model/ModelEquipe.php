<?php

require_once ("Model.php"); 

class ModelEquipe extends Model{

  private $id_equipe;
  private $nom_equipe;
  private $nbr_membre;
  private $id_event;
  protected static $table = 'equipe';
  protected static $primary = 'id_equipe';
   
  public function __construct($id_equipe = NULL, $nom_equipe= NULL, $nbr_membre = NULL, $id_event = NULL) {
    if (!is_null($id_equipe) && !is_null($nom_equipe) && !is_null($nbr_membre)&& !is_null($id_event)) {
      $this->id_equipe = $id_equipe;
      $this->nom_equipe = $nom_equipe;
      $this->nbr_membre= $nbr_membre;
      $this->id_event = $id_event;

     }
  } 
 public function getId_equipe() {
       return $this->id_equipe;  
  }
 public function getNom_equipe() {
       return $this->nom_equipe;  
  }
  public function getNbr_membre() {
       return $this->nbr_membre;  
  }
  public function getId_event() {
    return $this->id_event;  
}
}
?>
