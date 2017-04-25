<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet_stages;charset=utf8', 'root', ''); 

try {
$con = new PDO('mysql:host=localhost;dbname=projet_stages', 'root', '');;
} catch(Exeption $e) {
	die($e);
}

	$libclasse = $_GET['libclasse'];

	$nouvelle_classe = 'INSERT INTO classe (id_classe) VALUES ("'.$libclasse.'")';
	$req = $bdd->query($nouvelle_classe);

	header('Location: /projetgs/suivi_ajoutclasse.php'); 
?>