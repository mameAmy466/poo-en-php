<?php
    include "../controleur/connection.php";
    $conn = conn();
    function chargerMaClasse($classe)
    {
        require "../controleur/" . $classe . ".php";
    }
    spl_autoload_register('chargerMaClasse');
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  $etuSR = new  EtudiantService($conn);
     //$tab=$etuSR->getListEtudiant();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script> 
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
<?php
    include "menu.php";
    ?>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Matircul</th>
                <th>Name</th>
                <th>Prenom</th>
                <th>Telephone</th>
                <th>Date de naissance</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $etuSR->getListEtudiantnonboursier();
            ?>
       </tbody>
    </table>
    <footer>
    <?php
    include "footer.php";
    ?>
    </footer>
    <script src="style.js"></script>  
</body>
</html>