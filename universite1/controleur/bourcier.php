<?php
class bourcier extends  etudiant
{
   //private $id;
   private $id_type;
   public function __contructe($mat="",$nom="",$prenom="",$tel=0,$email="",$date_de_nss=0,$id_type=0)
   {
      parent::__construct($mat,$nom,$prenom,$tel,$email,$date_de_nss);
     // $this->id=$id;
      $this->id_type=$id_type;
   }
   public function getid_type()
   {
      return $this->id_type;
   }

   /**
    * Set the value of id_type
    *
    * @return  self
    */ 
   public function setid_type($id_type)
   {
      $this->id_type = $id_type;

      return $this;
   }
}

?>