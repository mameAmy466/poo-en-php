<?php 
abstract class etudiant
{
  
  private $mat;
  private $nom;
  private $prenom;
  private $tel;
  private  $date_de_nss;
  private $email;
  public function __construct($mat="",$nom="",$prenom="",$tel=0,$email="",$date_de_nss=0)
  {
    $this->mat=$mat;
    $this->nom=$nom;
    $this->prenom=$prenom;
    $this->tel=$tel;
    $this->email=$email;
    $this->date_de_nss=$date_de_nss;
  } 
  public function getNom()
  {
    return $this->nom;
  }
  public function setNom($nom)
  {
    $this->nom = $nom;

    return $this;
  }
  public function getPrenom()
  {
    return $this->prenom;
  } 
  public function setPrenom($prenom)
  {
    $this->prenom = $prenom;

    return $this;
  }
  public function getTel()
  {
    return $this->tel;
  }
  public function setTel($tel)
  {
    $this->tel = $tel;

    return $this;
  } 
  public function getDate_de_nss()
  {
    return $this->date_de_nss;
  }
  public function setDate_de_nss($date_de_nss)
  {
    $this->date_de_nss = $date_de_nss;

    return $this;
  } 
  public function getEmail()
  {
    return $this->email;
  }
  public function setEmail($email)
  {
    $this->email = $email;

    return $this;
  } 
  public function getMat()
  {
    return $this->mat;
  } 
  public function setMat($mat)
  {
    $this->mat = $mat;

    return $this;
  }
}

?>