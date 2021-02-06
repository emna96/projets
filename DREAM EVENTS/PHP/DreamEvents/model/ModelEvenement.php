<?php

require_once ("Model.php"); 

class ModelEvenement extends Model{

  private $id_event;
  private $type;
  protected static $table = 'evenement';
  protected static $primary = 'id_event';
   
  public function __construct($id_event = NULL, $type = NULL) {
    if (!is_null($id_event) && !is_null($type) ) {
      $this->id_event = $id_event;
      $this->type = $type;
      
     }
  } 
 public function getId_event() {
       return $this->id_event;  
  }
 public function getType() {
       return $this->type;  
  }
  
}
?>
