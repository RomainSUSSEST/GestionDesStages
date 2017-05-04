<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet_stages;charset=utf8', 'root', ''); 

try {
$con = new PDO('mysql:host=localhost;dbname=projet_stages', 'root', '');;
} catch(Exeption $e) {
	die($e);
}


$prenom = $_GET['prenom'];
$regexPrenom = '#\D{2,30}#';

$nom = $_GET['nom'];
$regexNom = '#\D{2,30}#';

$postale = $_GET['postale'];

$telephone = $_GET['telephone'];

$courriel = $_GET['courriel'];
$regexCourriel = '#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#';

$annee = $_GET['annee'];
$regexAnneeBac = '#^2\d{3}#';

$type = $_GET['type'];

$id = $_GET['id'];

if(preg_match($regexPrenom, $prenom) && preg_match($regexNom, $nom) && preg_match($regexCourriel, $courriel) && preg_match($regexAnneeBac, $annee))
{
$ajout_eleve = 'INSERT INTO etudiant_sup (id_etudiant, nom_etudiant, prenom_etudiant, adresse_etudiant, mail_etudiant, annee_obtention_bac, id_type_bac) VALUES ( "'.$id.'", "'.$nom.'", "'.$prenom.'", "'.$postale.'", "'.$courriel.'", "'.$annee.'", "'.$type.'")';

$req = $bdd->query($ajout_eleve);
}

var_dump($ajout_eleve);
var_dump($req);
die;

header('Location: /projetgs/suivi_ajouteleve.php');

?>
