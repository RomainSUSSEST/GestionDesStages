<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet_stages;charset=utf8', 'root', ''); 

try {
$con = new PDO('mysql:host=localhost;dbname=projet_stages', 'root', '');;
} catch(Exeption $e) {
	die($e);
}

	$idbac = $_GET['id'];
	
	$deletebac = 'DELETE FROM type_bac WHERE id_type_bac = "'.$idbac.'"';
	$req = $bdd->query($deletebac);

	header('Location: /projetgs/suivi_ajoutbac.php'); 
?>