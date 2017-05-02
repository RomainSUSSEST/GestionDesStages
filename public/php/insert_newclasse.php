<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet_stages;charset=utf8', 'root', ''); 

try {
$con = new PDO('mysql:host=localhost;dbname=projet_stages', 'root', '');;
} catch(Exeption $e) {
	die($e);
}

	$classe = $_POST['classe'];
	$annee = $_POST['annee'];

	$nouvelle_annee = 'INSERT INTO `inscrit`(`id_etudiant`, `date_annee`, `id_classe`) VALUES ("'.$_GET['eleve'].'", "'.$annee.'", "'.$classe.'")';
	$req = $bdd->query($nouvelle_annee);

	header('Location: /projetgs/suivi_associerclasse.php'); 
?>