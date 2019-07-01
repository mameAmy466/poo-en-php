<?php
 
abstract class etudiant
{
 // private $id_etu;
  private $mat;
  private $nom;
  private $prenom;
  private $tel;
  private  $dateNs;
  private $email;
  public function __construct($mat="",$nom="",$prenom="",$tel=0,$dateNs=0,$email="")
  {
   // $this->$id_etu=$id_etu;
    $this->mat=$mat;
    $this->nom=$nom;
    $this->prenom=$prenom;
    $this->tel=$tel;
    $this->dateNs=$dateNs;
    $this->email=$email;
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
  public function getDateNs()
  {
    return $this->dateNs;
  }
  public function setDateNs($dateNs)
  {
    $this->dateNs = $dateNs;

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

  /**
   * Get the value of mat
   */ 
  public function getMat()
  {
    return $this->mat;
  }

  /**
   * Set the value of mat
   *
   * @return  self
   */ 
  public function setMat($mat)
  {
    $this->mat = $mat;

    return $this;
  }

  /**
   * Get the value of id
   */ 
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set the value of id
   *
   * @return  self
   */ 
  public function setId($id_etu)
  {
    $this->id = $id_etu;

    return $this;
  }
}

?>