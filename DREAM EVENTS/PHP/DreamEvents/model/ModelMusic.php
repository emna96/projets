<?php

require_once ("Model.php"); 

class ModelMusic extends Model{

  private $id_music;
  private $type;
  protected static $table = 'music';
  protected static $primary = 'id_music';
   
  public function __construct($id_music = NULL, $type = NULL) {
    if (!is_null($id_music) && !is_null($type) ) {
      $this->id_music = $id_music ;
      $this->type = $type;
      
     }
  } 
 public function getId_music() {
       return $this->id_music;  
  }
 public function getType() {
       return $this->type;  
  }
  
}
?>
