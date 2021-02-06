<?php

require_once ("Model.php"); 

class ModelAliment extends Model{

  private $id_aliment;
  private $type;
  protected static $table = 'aliment';
  protected static $primary = 'id_aliment';
   
  public function __construct($id_aliment = NULL, $type = NULL) {
    if (!is_null($id_aliment) && !is_null($type) ) {
      $this->id_aliment = $id_aliment ;
      $this->type = $type;
      
     }
  } 
 public function getId_aliment() {
       return $this->id_aliment;  
  }
 public function getType() {
       return $this->type;  
  }
  
}
?>
