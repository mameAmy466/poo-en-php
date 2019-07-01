<?php
class Chambre
{
    private $id_b;
    private $nom;  
    public function __construct($nom="",$id_b=0){
        $this->nom=$nom;
        $this->id_b=$id_b;
   }

    /**
     * Get the value of id_batim
     */ 
    public function getId_b()
    {
        return $this->id_b;
    }

    /**
     * Set the value of id_batim
     *
     * @return  self
     */ 
    public function setId_b($id_b)
    {
        $this->id_b= $id_b;

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
