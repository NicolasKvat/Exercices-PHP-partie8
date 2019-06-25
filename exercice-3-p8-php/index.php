<?php
if (isset($_POST['login']) && isset($_POST['password'])) { 
 setcookie('loginCookie', $_POST['login'], time() + 365*24*3600, '/');
 setcookie('passwordCookie', $_POST['password'], time() + 365*24*3600, '/');
 header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice 3 PHP</title>
  </head>
  <body>
    <div class="container p-0">
      <header>
        <div class="row mb-4 p-4 bg-primary d-flex justify-content-center align-item-center">
          <h1 class="text-white m-2">Exercice 3</h1>
          <h4 class="text-white m-4 text-center">Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation du formulaire, stocker les informations dans un cookie.</h4>
        </div>
      </header>
        <form class="text-center" method="post">
            <input type="text" name="login" placeholder="Identifiant">
            <input type="text" name="password" placeholder="Mot de passe">
            <input type="submit" value="Valider"/>
        </form>
        <p>
            <?php
            if (isset($_COOKIE['loginCookie']) && isset($_COOKIE['passwordCookie'])) {
                echo $_COOKIE['loginCookie'] . ' ' . $_COOKIE['passwordCookie'];
            }
            ?>
        </p>
    </div>
  </body>
</html>
