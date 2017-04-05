<?php
  require 'database.php';
  //require_once('../../view/includes/footer_connexion.html');

// Hachage du mot de passe
$pass = $_POST['mdp'];
$login = $_POST['login'];

// Vérification des identifiants
$req = $con->prepare('SELECT login, mdp FROM utilisateur WHERE login = :login AND mdp = :mdp');
$req->execute(array(
    'login' => $login,
    'mdp' => $pass));

$resultat = $req->fetch();

$user = $resultat['login'];
$password = $resultat['mdp'];

if ($resultat == false) {
  echo "0";
}
else {
  session_start();
  $_SESSION['utilisateur'] = $resultat;
  $_SESSION['login'] = $login;
  setcookie('login',$login,time()+3600*24*31);
  echo "1";
}

/**if (!$resultat)
{
  echo '<meta http-equiv="refresh" content="10;URL=/gestion_stage/index.php">';
  $message =1;
}
else
{
    session_start();
    $_SESSION['utilisateur'] = $resultat;
    $_SESSION['login'] = $login;
    setcookie('login',$login,time()+3600*24*31);
  echo '<meta http-equiv="refresh" content="0;URL=/gestion_stage/template.php">';
}**/
?>