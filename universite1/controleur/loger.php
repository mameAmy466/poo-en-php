<?php
class loger extends bourcier
{
    private $id_ch;
    // private $id_b;
    public function __contruct($mat="",$nom="",$prenom="",$tel=0,$email="",$date_de_nss=0,$id_type=0,$id_ch=0)
    {
        parent::__construct($mat,$nom,$prenom,$tel,$email,$date_de_nss,$id_type);
        $this->idch=$id_ch;
    }


        /**
         * Get the value of id_ch
         */ 
        public function getId_ch()
        {
                return $this->id_ch;
        }

        /**
         * Set the value of id_ch
         *
         * @return  self
         */ 
        public function setId_ch($id_ch)
        {
                $this->id_ch = $id_ch;

                return $this;
        }

   

    /**
     * Get the value of id_b
     */ 
    public function getId_b()
    {
        return $this->id_b;
    }

    /**
     * Set the value of id_b
     *
     * @return  self
     */ 
    public function setId_b($id_b)
    {
        $this->id_b = $id_b;

        return $this;
    }
}

?>