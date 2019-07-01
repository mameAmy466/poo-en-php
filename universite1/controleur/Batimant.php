<?php
class  Batimant
{
  // private $id;
   private $numbatiment;
   private $nom;  

public function __construct($numbatiment="",$nom="")
{
   // $this->id=$id;
    $this->numbatiment=$numbatiment;
    $this->nom=$nom;
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
   public function setId($id)
   {
      $this->id = $id;

      return $this;
   }

   /**
    * Get the value of numbatiment
    */ 
   public function getNumbatiment()
   {
      return $this->numbatiment;
   }

   /**
    * Set the value of numbatiment
    *
    * @return  self
    */ 
   public function setNumbatiment($numbatiment)
   {
      $this->numbatiment = $numbatiment;

      return $this;
   }

   /**
    * Get the value of nom
    */ 
   public function getNom()
   {
      return $this->nom;
   }

   /**
    * Set the value of nom
    *
    * @return  self
    */ 
   public function setNom($nom)
   {
      $this->nom = $nom;

      return $this;
   }
}

?>
