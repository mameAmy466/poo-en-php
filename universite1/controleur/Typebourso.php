<?php
class Typebourso
{
  //  private $id;
    private $lib;
    private $montant;
//public function __construct($numbatiment="",$nom="")
public function __construct($id=0,$lib="",$montant=0)
        {
           // $this->id=$id;
            $this->lib=$lib;
            $this->montant=$montant;

        }
    public function getLib()
    {
        return $this->lib;
    }

     
    public function setLib($lib)
    {
        $this->lib=$lib;

        return $this;
    }

    public function getMontant()
    {
        return $this->montant;
    }

   
    public function setMontant($id)
    {
        $this->montant=$montant;

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
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
?>