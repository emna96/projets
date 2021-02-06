<?php

require_once ("Model.php"); 

class ModelLocal extends Model{

  private $id_local;
  private $type;
  protected static $table = 'local';
  protected static $primary = 'id_local';
   
  public function __construct($id_local = NULL, $type = NULL) {
    if (!is_null($id_local) && !is_null($type) ) {
      $this->id_local = $id_local ;
      $this->type = $type;
      
     }
  } 
 public function getId_local() {
       return $this->id_local;  
  }
 public function getType() {
       return $this->type;  
  }
  
}
?>
