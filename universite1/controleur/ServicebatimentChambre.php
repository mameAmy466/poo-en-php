<?php
class ServicebatimentChambre
{ 
    private $bd;
    public function __construct($bd)
    {
      $this->setBd($bd);
    }
    public function addBatiment(Batimant $bt)
    {
        $req=$this->bd->prepare('INSERT INTO batiment SET numerobt=:numerobt,nom=:nom');
        $req->bindValue(':numerobt',$bt->getNumbatiment(),PDO::PARAM_STR);
        $req->bindValue(':nom',$bt->getNom(),PDO::PARAM_STR);
        $req->execute();
        $req->closeCursor();   
    }
    public function addChambre(Chambre $ch)
    {
        $req=$this->bd->prepare('INSERT INTO chambre SET nom=:nom, id_b=:id_b');
        $req->bindValue(':nom',$ch->getNom(),PDO::PARAM_STR);
        $req->bindValue(':id_b',$ch->getId_b(),PDO::PARAM_INT);
        //var_dump($ch->getId_b());
       // die();
        $req->execute();
       
        $req->closeCursor();   
    }
    public function getBatiment() {
        $req = $this->bd->query('SELECT * FROM  batiment');
        while ($tab = $req->fetch()) {
            ?>
            <tr>
                <td><?=$tab['id']?></td>
                <td><?=$tab['numerobt']?></td>
                <td><?=$tab['nom']?></td>
            </tr>
             <?php
             }
         $req->closeCursor();
    } 
    public function getChambre() {
        $req = $this->bd->query('SELECT batiment.nom AS nomb,chambre.id,chambre.nom FROM  chambre,batiment WHERE chambre.id_b= batiment.id');
        while ($tab = $req->fetch()) {
            ?>
            <tr>
                <td><?=$tab['id']?></td>
                <td><?=$tab['nom']?></td>
                <td><?=$tab['nomb']?></td>
            </tr>
             <?php
             }
         $req->closeCursor();
    } 
    public function setBd($bd)
    {
        $this->bd = $bd;
        return $this;
    }
}

?>