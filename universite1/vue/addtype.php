<?php
include "../controleur/connection.php";
$conn=conn();
function chargerMaClasse($classe) {
     require "../controleur/".$classe.".php";
     }
  spl_autoload_register('chargerMaClasse');
  $srt= new Servicetypebourso($conn);
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
<div class="cotainer-flud p-3 mb-2 bg-light text-dark">
<h2 class="text-center"> l'insertion des type de bourse</h2>
 </div>
 <div class="cotainer">
    <div class="row justify-content-center">
         <div class="col-md-6">
         <h2 class="text-center text-primary">!Ajoute Bourse</h2>
           <div class="form">
                <form action="#" method="POST">
                   <div class="form-group row">
                      <label for="mat" class="col-md-4 col-form-label text-md-right" >liballé</label>
                          <div class="col-md-6"><input type="text" class="form-control" name="lib"></div>
                    </div>   
                    <div class="form-group row">
                       <label for="mat" class="col-md-4 col-form-label text-md-right" >Montant</label>
                         <div class="col-md-6"><input type="numbre" class="form-control" name="mont"></div>
                    </div>
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-success" name="btn"> Validation</button>
                   </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
        <h2 class="text-center text-primary">Liste Des Bourse</h2>
              <table class="table table-striped" cellspacing="0" width="100%">
                    <thead>
                            <tr>
                            <th>Lib</th>
                            <th>Montant</th>
                            </tr>
                    </thead>
                    <tbody>
                          <?php
                          $srt->find();
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
 <?php
 if (isset($_POST['btn'])) {
     $lib=$_POST['lib'];
     $mont=$_POST['mont'];
     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
     $typb=new Typebourso($lib,$mont);
     $srt->addTypebourse($typb);
 }
 ?>
</body>
</html>