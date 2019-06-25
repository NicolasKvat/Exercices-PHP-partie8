<?php
 setcookie('loginCookie', 'Cacahuètes', time() + 365*24*3600, '/');
 setcookie('passwordCookie', 'grillées', time() + 365*24*3600, '/');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice 5 PHP</title>
  </head>
  <body>
    <div class="container p-0">
      <header>
        <div class="row mb-4 p-4 bg-primary d-flex flex-column justify-content-center align-item-center">
          <h1 class="text-white m-2 text-center">Exercice 5</h1>
          <h4 class="text-white m-4 text-center">Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.</h4>
        </div>
      </header>
        <p>Rafraîchie la page bro.</p>
        <p class="text-center">
            <?php
                if (isset($_COOKIE['loginCookie']) && isset($_COOKIE['passwordCookie'])) {
                    echo $_COOKIE['loginCookie'] . ' ' . $_COOKIE['passwordCookie'];
                } else {
                    echo 'Veuillez manger des cacahuètes grillées et caramélisées.';
                }
            ?>
        </p>
    </div>
  </body>
</html>
