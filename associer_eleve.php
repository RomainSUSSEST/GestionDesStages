<?php
	include '/view/includes/header.php';

$bdd = new PDO('mysql:host=localhost;dbname=projet_stages;charset=utf8', 'root', ''); 

try {
$con = new PDO('mysql:host=localhost;dbname=projet_stages', 'root', '');;
} catch(Exeption $e) {
	die($e);
}

$association = 'INSERT INTO inscrit (id_etudiant, date_annee, id_classe) VALUES ("'.$_SESSION['eleve'].'","'.$_GET['annee'].'", "'.$_GET['classe'].'")';
$req = $bdd->query($association);

var_dump($association);
var_dump($req);
	
header('Location: /projetgs/suivi_associereleve.php'); 
