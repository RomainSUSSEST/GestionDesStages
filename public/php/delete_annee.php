<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet_stages;charset=utf8', 'root', ''); 

try {
$con = new PDO('mysql:host=localhost;dbname=projet_stages', 'root', '');;
} catch(Exeption $e) {
	die($e);
}

	$idannee = $_GET['id'];
	
	$deleteannee = 'DELETE FROM annee WHERE date_annee = "'.$idannee.'"';
	$req = $bdd->query($deleteannee);

	header('Location: /projetgs/suivi_ajoutannee.php'); 
?>