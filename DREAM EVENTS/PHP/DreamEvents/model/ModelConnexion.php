<?php

require_once ("Model.php"); 

class ModelConnexion extends Model{

  private $id;
  private $nom;
  private $prenom;
  private $adresse;
  private $email;
  private $motdepasse;
  private $mobile;
  private $role;
  protected static $table = 'utilisateur';
  protected static $primary = 'id';
   
  public function __construct($id = NULL, $nom = NULL, $prenom = NULL,$adresse = NULL,$email = NULL,$motdepasse = NULL,$mobile = NULL,$role = NULL) {
    if (!is_null($id) && !is_null($nom) && !is_null($prenom)&& !is_null($adresse)&& !is_null($email)&& !is_null($motdepasse)&& !is_null($mobile)&& !is_null($role)) {
      $this->id = $id;
      $this->nom = $nom;
      $this->prenom = $prenom;
      $this->adresse = $adresse;
      $this->email = $email;
      $this->motdepasse = $motdepasse;
      $this->mobile = $mobile;
      $this->role = $role;
     }
  } 
 public function getid() {
       return $this->id;  
  }
 public function getnom() {
       return $this->nom;  
  }
  public function getprenom() {
       return $this->prenom;  
  }
  public function getadresse() {
    return $this->adresse;  
}
public function getemail() {
    return $this->email;  
}
public function getmotdepasse() {
    return $this->motdepasse;  
}
public function getmobile() {
    return $this->mobile;  
}
public function getrole() {
    return $this->role;  
}
}
?>
