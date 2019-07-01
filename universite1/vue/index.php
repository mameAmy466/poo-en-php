<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
                html,
            body {
            height: 100%;
            }

            #page-content {
            flex: 1 0 auto;
            }

            #sticky-footer {
            flex-shrink: none;
            }

            /* Other Classes for Page Styling */

            body {
            background: #007bff;
            background: linear-gradient(to right, #13027014, #ffff);
            }
    </style>
</head>
<body class="d-flex flex-column">
    <header>
    <?php
    include "menu.php";
    ?>
    </header>
    <div id="page-content">
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-md-7">
          <h1 class="font-weight-light mt-4 text-dark"> Lorem ipsum dolor sit amet consectetur.</h1>
          <p class="lead text-dark-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, aliquam? Commodi aperiam, autem dolores expedita pariatur quos est molestiae in, tenetur ex iure ullam optio! Eaque iusto laudantium nulla omnis.</p>
        </div>
      </div>
    </div>
  </div>
    <footer>
    <?php
    include "footer.php";
    ?>
    </footer>
</body>
</html>