  <?php
    include "../controleur/connection.php";
    $conn = conn();
    $req = $conn->prepare('SELECT * FROM typeBourse');
    $req->execute();
    $linge = $req->fetchAll();
    $req1 = $conn->prepare('SELECT * FROM chambre');
    $req1->execute();
    $linge2 = $req1->fetchAll();
    ?>
 <!------  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="style.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  Include the above in your HEAD tag ---------->

  <!doctype html>
  <html lang="en">

  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!--
      <link rel="dns-prefetch" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">



      <link rel="icon" href="Favicon.png">-->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style1.css">
      <link rel="stylesheet" href="css/style.css">
        <title>formulaire d'inscrition</title>
        <script>

        </script>
  </head>

  <body>
  <header>
    <?php
    include "menu.php";
    ?>
  <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/Sonatel-Academy1.jpg" alt="">
                    <div class="signup-img-content">
                        <h2>Formulair D'inscrition</h2>
                        <p>Inscrire l'etudiant!</p>
                    </div>
                </div>
                <div class="signup-form">
                    <form name="my-form"  class="register-form" action="#" method="POST">
                    <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name" class="required">matricul</label>
                                     <input type="text" id="name" class="form-control" name="mat">
                                </div>
                                <div class="form-input">
                                        <label for="last_name" class="required">nom</label>
                                        <input type="text" id="full_name" class="form-control" name="nom">
                                 </div>
                                <div class="form-input">
                                    <label for="company" class="required">prenom</label>
                                    <input type="text" id="user_name" class="form-control" name="prenom">
                               </div>

                               <div class="form-input">
                                    <label for="telephone" class="required">telephone</label>
                                     <input type="number" id="phone_number" class="form-control" name="tel">
                               </div>
                               <div class="form-input">
                                    <label for="date-ns" class="required">date de naissance</label>
                                          <input type="date" id="permanent_address" class="form-control" name="dateNs">
                                  </div>
                                  <div class="form-input">
                                    <label for="email" class="required">E-Mail Address</label>
                                    <input type="text" id="email_address" class="form-control" name="email">
                                  </div>
                                  <div class="form-radio-group">            
                                  <div class="form-radio-item">
                                      <input type="radio" name="typeBoursier"  value="Boursier" id="boursier" onchange="changement(0);">
                                      <label for="cash">Boursier</label>
                                      <span class="check"></span>
                                    </div>
                                   
                                    <div class="form-radio-item">
                                      <input type="radio" name="typeBoursier"  value="Non_Boursier"  id="non_boursier" onchange="changement(1);">
                                      <label for="cash"> NON_Boursier</label>
                                      <span class="check"></span>
                                    </div>
                                 </div>
                                 <div class="form-input" id="adress" style="display:none;">
                                      <label for=" Adresse" class="required"> Adresse</label>
                                          <input type="text" id="address" class="form-control" name="Adresse">
                                  </div>
                                 <div  id="bloc" style="display:none;">
                                  <hr>
                                  <div class="form-input" id="typebs" >
                                  <select class="browser-default custom-select" name="type" id="tpbourse">
                                      <option selected>Type Bourse</option>
                                      <?php
                                        foreach ($linge as $key => $val) {
                                            $id_type[] = $val['id'];
                                            ?>
                                          <option value="<?= $val['id'] ?>"><?= $val['lib'] ?></option>
                                      <?php
                                    }
                                    ?>
                                  </select>
                                  </div>
                                  <div class="form-radio-group logerdiv" id="logerdiv">            
                                  <div class="form-radio-item">
                                      <input class="[ btn-group ]" type="radio" name="loger"  value="loger" id="loger" onchange="changement(2);">
                                      <label for="cash"> Loger</label>
                                      <span class="check"></span>
                                  </div>           
                                  <div class="form-radio-item">
                                      <input class="" type="radio" name="loger"  value="nonloger" id="non_loger">
                                      <label for="cash"> Non_Loger</label>
                                      <span class="check"></span>
                                  </div> 
                                  </div>  
                                  <div class="form-input" id="ch" style="display:none;">
                                  <select class="browser-default custom-select" name="ch" >
                                      <option selected>chambre</option>
                                      <?php
                                        foreach ($linge2 as $key => $val) {
                                            ?>
                                          <option value="<?= $val['id']?>"><?= $val['nom'] ?></option>
                                      <?php
                                    }
                                    ?>
                                  </select>
                                  </div>
                                  </div>
                                  <hr>
                               
                                  <div>
                                  <div class="form-submit">
                                      <button type="submit" class="submit btn-success"  name="valu">
                                          Validation
                                      </button>
                                  </div>
                                  </div>
                          </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
          </div>
      </main>
      <footer>
    <?php
    include "footer.php";
    ?>
    </footer>
      <?php
        function chargerMaClasse($classe)
        {
            require "../controleur/" . $classe . ".php";
        }
        spl_autoload_register('chargerMaClasse');
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
      $etuSR = new  EtudiantService($conn);
 
        if (isset($_POST['valu'])) {
          $mat = $_POST['mat'];
          $nom = $_POST['nom'];
          $prenom = $_POST['prenom'];
          $tel = $_POST['tel'];
          $email = $_POST['email'];
          $dateNs = $_POST['dateNs'];
          $adress = $_POST['Adresse'];
          $id_type = $_POST['type'];
          $id_ch = $_POST['ch'];
            if ($_POST['typeBoursier'] == "Boursier")
            {
              $loge = $_POST['loger'];
              $etudie = new bourcier($mat, $nom, $prenom, $tel, $email, $dateNs, $id_type);
                if ($loge == "loger")
                    {
                    $l= new loger($mat, $nom,$prenom, $tel, $email, $dateNs, $id_type,$id_ch);
                    $etuSR->addLoger($l,$id_ch);
                    }  
            } 
            else 
            {
              $etudie = new  nonbourcier($mat, $nom, $prenom, $tel, $email, $dateNs, $adress);
            }
            $etuSR->addEtudiant($etudie,$id_type);
      }
        ?>
      <script src="style.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    
  </body>
  </html>