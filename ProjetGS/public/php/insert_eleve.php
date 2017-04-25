<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet_stages;charset=utf8', 'root', ''); 

try {
$con = new PDO('mysql:host=localhost;dbname=projet_stages', 'root', '');;
} catch(Exeption $e) {
	die($e);
}

$prenom = $_GET['prenom'];
$nom = $_GET['nom'];
$postale = $_GET['postale'];
$telephone = $_GET['telephone'];
$courriel = $_GET['courriel'];
$annee = $_GET['annee'];
$type = $_GET['type'];
$id = $_GET['id'];

$ajout_eleve = 'INSERT INTO etudiant_sup (id_etudiant, nom_etudiant, prenom_etudiant, adresse_etudiant, mail_etudiant, annee_obtention_bac, id_type_bac) VALUES ( "'.$id.'", "'.$nom.'", "'.$prenom.'", "'.$postale.'", "'.$courriel.'", "'.$annee.'", "'.$type.'")';

$req = $bdd->query($ajout_eleve);

var_dump($ajout_eleve);
var_dump($req);
die;

header('Location: /projetgs/suivi_ajouteleve.php');
?>