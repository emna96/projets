<?php

require_once ("Model.php"); 

class ModelReservation extends Model{

  private $id_client;
  private $id_equipe;
  private $id_music;
  private $id_local;
  private $id_aliment;
  private $budget;
  private $nbr_personnes;
  protected static $table = 'reservation';

  public function __construct($id_client = NULL, $id_equipe = NULL, $id_music = NULL, $id_local = NULL, $id_aliment = NULL, $budget = NULL, $nbr_personnes = NULL) {
    if (!is_null($id_client) && !is_null($id_equipe) && !is_null($id_music)&& !is_null($id_local)&& !is_null($id_aliment)&& !is_null($budget)&& !is_null($nbr_personnes)) {
      $this->id_client= $id_client;
      $this->id_equipe = $id_equipe;
      $this->id_music = $id_music;
      $this->id_local = $id_local;
      $this->id_aliment= $id_aliment;
      $this->budget= $budget;
      $this->nbr_personnes = $nbr_personnes;
      


     }
    }
 
 public function getId_client() {
       return $this->id_client;  
  }
 public function getId_equipe() {
       return $this->id_equipe;  
  }
  public function getId_music() {
       return $this->id_music;  
  }
  public function getId_local() {
    return $this->id_local;  
}
public function getId_aliment() {
  return $this->id_aliment;  
}
public function getBudget() {
  return $this->budget;  
}
public function getNbr_personnes() {
  return $this->nbr_personnes;  
}

}
?>
