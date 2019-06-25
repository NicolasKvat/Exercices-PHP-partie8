<?php 
session_start();
     // On s'amuse à créer quelques variables de session dans $_SESSION
        $_SESSION['firstname'] = 'Nicolas';
        $_SESSION['lastname'] = 'Kvaternik';
        $_SESSION['age'] = 22;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice 2 PHP</title>
  </head>
  <body>
    <div class="container p-0">
      <header>
        <div class="row mb-4 p-4 bg-primary d-flex justify-content-center align-item-center">
          <h1 class="text-white m-2">Exercice 2</h1>
          <h4 class="text-white m-4 text-center">Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions. Ces variables auront été définies directement dans le code. Il faudra afficher le contenu de ces variables sur la deuxième page.</h4>
        </div>
      </header>
        <main class="d-flex flex-column">
            <p>Salut <?php echo $_SESSION['firstname']; ?> !</p>
            <a href="user.php">Lien vers user.php</a>
            <a href="../index.php">Retour</a>
        </main>
    </div>
  </body>
</html>
