<?php

class EtudiantService {
    private $_bdd;
    public function __construct($bdd) {
        $this->setDb($bdd);
    } 
    public function addEtudiant(etudiant $etudiant,$id_type) {
        $req = $this->_bdd->prepare('INSERT INTO etudient
                                             SET 
                                                 mat  =  :mat,
                                                 nom    =  :nom,                                                                                                                                      
                                                 prenom = :prenom,
                                                 tel    = :tel,
                                                 date_de_nss = :date_de_nss,
                                                 Email  = :email
                                    ');
        
        //$req->bindValue(':id',$etudiant->getId(),PDO::PARAM_STR);                            
        $req->bindValue(':mat',$etudiant->getMat(),PDO::PARAM_STR);
        $req->bindValue(':nom',$etudiant->getNom(),PDO::PARAM_STR);
        $req->bindValue(':prenom',$etudiant->getPrenom(),PDO::PARAM_STR);
        $req->bindValue(':tel',$etudiant->getTel(),PDO::PARAM_INT);
        $req->bindValue(':email',$etudiant->getEmail(),PDO::PARAM_STR);
        $req->bindValue(':date_de_nss',$etudiant->getDate_de_nss());
        $req->execute();
        $req->closeCursor();
        $id=0;
       $req = $this->_bdd->query('SELECT  MAX(id) as id FROM etudient');
       while ($datas = $req->fetch()) {
          $id=$datas['id'];
          break;
           }  
        if (get_class($etudiant)=='bourcier') {
            //var_dump(get_class($etudiant));
            //die();
            $req = $this->_bdd->prepare('INSERT INTO boursier
                                             SET 
                                                 id_etu=:id_etu,
                                                 id_type =:id_type                                                       
                                    ');
                    $req->bindValue(':id_etu',$id,PDO::PARAM_INT);  
                    $req->bindValue(':id_type',$id_type,PDO::PARAM_INT);                            
                    $req->execute();
                    $req->closeCursor(); 


        }else {
           
            //$br=new nonbourcier();
            $req = $this->_bdd->prepare('INSERT INTO nomBoursier
            SET 
                                            id_etu=:id_etu,
                                            adress=:adress                                                      
                                            ');
                    $req->bindValue(':id_etu',$id);  
                    $req->bindValue(':adress',$etudiant->getAdress(),PDO::PARAM_STR);
                   // var_dump($etudiant->getAdress());
                    //die();                           
                    $req->execute();
                    $req->closeCursor();
        }
    }

    public function addLoger(loger $l,$id_ch)
    {
        $req = $this->_bdd->query('SELECT  MAX(id) as id FROM etudient');
        while ($datas = $req->fetch()) {
           $id=$datas['id'];
           break;
            }  
          
             $req = $this->_bdd->prepare('INSERT INTO loger
                                              SET 
                                                  id_cha=:id_cha,
                                                  id_b =:id_b                                                       
                                     ');
                     $req->bindValue(':id_cha',$id_ch,PDO::PARAM_INT);  
                     $req->bindValue(':id_b',$id,PDO::PARAM_INT);                            
                     $req->execute();
                    // var_dump($req);
                    // die();
                     $req->closeCursor(); 
 
 
    }
   
    // Methode de suppression d'un etudiant dans la BDD
    public function deleteEtudiant(etudiant $etudiant) {
        $this->_bdd->exec('DELETE FROM etudiant WHERE id = ' . $etudiant->getId());
    }
    
    //Methode de selection d'un etudiant avec clause WHERE
    public function getEtudiant($id) {
        $id = (int) $id;
        $req = $this->_bdd->query('SELECT * FROM  etudiant WHERE id = '. $id);
        $datas = $req->fetch(PDO::FETCH_ASSOC);
        //var_dump($datas);
        return new EtudiantTable($datas);
        
        $req->closeCursor();
    }   
    public function getEtudiantbymat($id) {
        $req = $this->_bdd->query('SELECT * FROM etudiant WHERE etudient.id=boursier.id_etu ');
        while ($datas = $req->fetch()) {
           $id=$datas['id'];
           break;
            }
        return  $id;
        $req->closeCursor();
    }   
    //controle de saisie
 // Methode de selection de toute la liste des etudiants
    public function getListEtudiant() {
        $etudie = [];
        
        $req = $this->_bdd->query('SELECT * FROM etudient ORDER BY id');
        
        while ($tab = $req->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <tr>
                <td><?=$tab['mat']?></td>
                <td><?=$tab['nom']?></td>
                <td><?=$tab['prenom']?></td>
                <td><?=$tab['tel']?></td>
                <td><?=$tab['date_de_nss']?></td>
                <td><?=$tab['email']?></td>
            </tr>
             <?php
        }
        //var_dump($etudie);
        return $etudie;
        
        $req->closeCursor();
    }
    public function getListEtudiantboursier() {
        //$etudie = [];
        $req = $this->_bdd->query('SELECT * FROM etudient,boursier WHERE etudient.id=boursier.id_etu');
        
        while ($tab = $req->fetch(PDO::FETCH_ASSOC)) {
         ?>
        <tr>
            <td><?=$tab['mat']?></td>
            <td><?=$tab['nom']?></td>
            <td><?=$tab['prenom']?></td>
            <td><?=$tab['tel']?></td>
            <td><?=$tab['date_de_nss']?></td>
            <td><?=$tab['email']?></td>
        </tr>
         <?php
        }
        $req->closeCursor();
    }
    public function getListEtudiantnonboursier() {
        //$etudie = [];
        $req = $this->_bdd->query('SELECT nomBoursier.adress AS adress,etudient.mat
        ,etudient.nom,etudient.prenom,etudient.tel,etudient.date_de_nss,email
         FROM etudient,nomBoursier WHERE etudient.id=nomBoursier.id_etu');
        
        while ($tab = $req->fetch(PDO::FETCH_ASSOC)) {
         ?>
        <tr>
            <td><?=$tab['mat']?></td>
            <td><?=$tab['nom']?></td>
            <td><?=$tab['prenom']?></td>
            <td><?=$tab['tel']?></td>
            <td><?=$tab['date_de_nss']?></td>
            <td><?=$tab['email']?></td>
            <td><?=$tab['adress']?></td>
        </tr>
         <?php
        }
        $req->closeCursor();
    }
    
    // Methode de mise à jour d'un etudiant dans la BDD
    public function updateEtudiant(Etudiant  $etudiant) {
        $req = $this->_bdd->prepare('UPDATE etudiant
                                        SET nom = :nom,
                                            prenom     = :prenom,
                                            tel     = :tel,
                                            date_de_nss = :date_de_nss
                                      WHERE id         = :id
                                    ');
        
        
        $req->bindValue(':nom',$etudiant->getNom(),PDO::PARAM_STR);
        $req->bindValue(':prenom',$etudiant->getPrenom(),PDO::PARAM_INT);
        $req->bindValue(':tel',$etudiant->getTel(),PDO::PARAM_INT);
        $req->bindValue(':date_de_nss',$etudiant->getdate_de_nss(),PDO::PARAM_INT);
        $req->bindValue(':email',$etudiant->getEmail(),PDO::PARAM_INT);
        $req->bindValue(':id',$etudiant->getId(),PDO::PARAM_INT);

        
        
        $req->execute();
        
        $req->closeCursor();
    }
    
    
    /*
     * Méthodes Mutateurs (Setters) - Pour modifier la valeur des attributs
     */
    public function setDb(PDO $bdd) {
        $this->_bdd = $bdd;
    }

    /**
     * Get the value of tabetudie
     */ 
   
}