<?php
class Servicetypebourso
{
    private $db;
    private $tabtypeboursier;

    public function __construct($db)
    {
        $this->setDb($db);
        $this->tabtypeboursier = [];

    }
    public function addTypebourse(Typebourso $tpb)
    {
        $req=$this->db->prepare('INSERT INTO typeBourse SET lib=:lib,montant=:montant');
        $req->bindValue(':lib',$tpb->getLib(),PDO::PARAM_STR);
        $req->bindValue(':montant',$tpb->getMontant(),PDO::PARAM_INT);
        $req->execute();
       // var_dump($req);
        //die();
        $req->closeCursor();                     
    }
    public function find()
    {
          //  $tpb=[];
            $req = $this->db->query('SELECT * FROM typeBourse');
            while ($tab = $req->fetch()) 
            {
              ?>
              <tr>
                  <td><?=$tab['lib']?></td>
                  <td><?=$tab['montant']?></td>
              </tr>
               <?php
            }           
     }
    public function setDb($db)
    {
        $this->db = $db;
        return $this;
    }
    public function findtab(Typeboursier $typeboursier)
    {
        $this->tabtypeboursier[] =$typeboursier;
    }
}

?>