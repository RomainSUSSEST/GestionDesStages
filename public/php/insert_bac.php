<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet_stages;charset=utf8', 'root', ''); 

try {
$con = new PDO('mysql:host=localhost;dbname=projet_stages', 'root', '');;
} catch(Exeption $e) {
	die($e);
}

	$idbac = $_GET['nouveau_idbac'];
	$libbac = $_GET['nouveau_libbac'];

	$nouveau_bac = 'INSERT INTO type_bac (id_type_bac, lib_typebac) VALUES ("'.$idbac.'","'.$libbac.'")';
	$req = $bdd->query($nouveau_bac);

	header('Location: /projetgs/suivi_ajoutbac.php'); 
?>