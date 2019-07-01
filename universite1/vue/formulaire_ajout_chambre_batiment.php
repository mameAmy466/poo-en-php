 <?php
include "../controleur/connection.php";
$conn=conn();
  $req=$conn->prepare('SELECT * FROM batiment');
  $req->execute();
  $linge=$req->fetchAll();
function chargerMaClasse($classe) {
     require "../controleur/".$classe.".php";
     }
  spl_autoload_register('chargerMaClasse');
  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
  $sR= new  ServicebatimentChambre($conn);

     

          
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<?php
    include "menu.php";
    ?>
<div class="cotainer-flud ">
   <div class="row bg-light justify-content-center" >
         <h3 class="text-center">Ajouter des Chambre et Batiment</h3>
    </div>
</div>
<hr>
<div class="cotainer">
    <div class="row justify-content-center">
        <div class="col-md-5">
          <div class="form">
            <h5 class="text-center">Ajouter un batiment</h5>
                <form action="#" method="POST">
                  <label for="email" class="col-md-4" >Numero Batiment</label>
                    <div class="form-group">
                      <input type="text" class="form-control" name="btim">
                    </div>
                    <label for="email" class="col-md-4" >Nom Batiment</label>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nom">
                    </div>
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-success" name="valu">
                            Validation
                        </button>
                    </div>
                </form>
            </div>
        </div>
       <div class="col-md-5">
       <h5 class="text-center">Ajouter un chambre</h5>
       <form action="#" method="POST">
                <label for="email" class="col-md-4">Nom</label>
                <div class="form-group">
                  <input type="text" class="form-control" name="nomc">
                </div>
                <label for="email" class="col-md-4">Nom Batiment</label>
                <div class="form-group">
                <select class="browser-default custom-select" name="batim">
                   <option selected>nom batiment</option>
                   <?php 
                    foreach ($linge as $key => $val) {
                  ?>
                   <option value="<?=$val['id']?>"><?=$val['nom']?></option>
                  <?php 
                   }
                  ?>
                </select>
                </div>
                <div class="col-md-6 offset-md-4">
                 <button type="submit" class="btn btn-success" name="val">
                     Validation  
                </button>
                </div>
            </form>
        </div>
    </div>
</div>
<hr>
<div class="cotainer">
<div class="row justify-content-center">
<div class="col-md-5">
        <h2 class="text-center text-primary">Liste des Batiments</h2>
              <table class="table table-striped" cellspacing="0" width="100%">
                    <thead>
                            <tr>
                            <th>N+</th>
                            <th>Numero</th>
                            <th>Nom</th>
                            </tr>
                    </thead>
                    <tbody>
                          <?php
                          $sR->getBatiment(); 
                          ?>
                    </tbody>
              </table>
           </div>
           <div class="col-md-5">
        <h2 class="text-center text-primary">Liste des Batiments</h2>
              <table class="table table-striped" cellspacing="0" width="100%">
                    <thead>
                            <tr>
                            <th>N+</th>
                            <th>Nom</th>
                            <th>Nom Batiment</th>
                            </tr>
                    </thead>
                    <tbody>
                          <?php
                          $sR->getChambre(); 
                          ?>
                    </tbody>
              </table>
           </div>
     </div>
 </div>
<footer>
    <?php
    include "footer.php";
    ?>
    </footer>
<?PHP
if (isset($_POST['valu'])) {
    $mat=$_POST['btim'];
    $nom=$_POST['nom'];
  
    $bt= new Batimant($mat,$nom);
    $sR->addBatiment($bt);
}
if (isset($_POST['val'])) {
    $nom=$_POST['nomc'];
    $mat=$_POST['batim'];
    $ch= new Chambre($nom,$mat);
    $sR->addChambre($ch);
}

 ?>
</body>
</html>