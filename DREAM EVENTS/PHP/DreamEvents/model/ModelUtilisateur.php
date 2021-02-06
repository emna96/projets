<?php

require_once ("Model.php"); 

class ModelUtilisateur extends Model{

  private $id;
  private $nom;
  private $prenom;
  private $adresse;
  private $email;
  private $password;
  private $mobile;
  private $role;
  protected static $table = 'utilisateur';
  protected static $primary = 'id';
   
  public function __construct($id = NULL, $nom = NULL, $prenom = NULL, $adresse = NULL, $email = NULL, $password = NULL, $mobile = NULL, $role = NULL) {
    if (!is_null($id) && !is_null($nom) && !is_null($prenom)&& !is_null($adresse)&& !is_null($password)&& !is_null($mobile)&& !is_null($mobile)&& !is_null($role)) {
      $this->id = $id;
      $this->nom = $nom;
      $this->prenom = $prenom;
      $this->adresse = $adresse;
      $this->email = $email;
      $this->password = $password;
      $this->mobile = $mobile;
      $this->role = $role;


     }
  } 
  public function setRole($role){
$this->role=$role;


  }
 public function getId() {
       return $this->id;  
  }
 public function getNom() {
       return $this->nom;  
  }
  public function getPrenom() {
       return $this->prenom;  
  }
  public function getAdresse() {
    return $this->adresse;  
}
public function getEmail() {
  return $this->email;  
}
public function getPassword() {
  return $this->password;  
}
public function getMobile() {
  return $this->mobile;  
}
public function getRole() {
  return $this->role;  
}
}
?>
