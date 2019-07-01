<?php
class nonbourcier extends  etudiant
{  
   private $adress;
   public function __construct($mat="",$nom="",$prenom="",$tel=0,$email="",$date_de_nss=0,$adress="")
   {
      parent::__construct($mat,$nom,$prenom,$tel,$email,$date_de_nss);
     // $this->$id_etu=$id_etu;
      $this->adress=$adress;
   }
   public function getAdress()
   {
      return $this->adress;
   }
   public function setAdress($adress)
   {
      $this->adress = $adress;

      return $this;
   }
}

?>