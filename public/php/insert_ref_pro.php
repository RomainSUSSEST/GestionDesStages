<?php
	session_start();
	$bdd = new PDO('mysql:host=localhost;dbname=projet_stages;charset=utf8', 'root', '7fec7eces'); 

	try {
	$con = new PDO('mysql:host=localhost;dbname=projet_stages', 'root', '7fec7eces');;
	} catch(Exeption $e) {
		die($e);
	}

		$nom_referent = $_POST['nom_referent_pro'];
		$fonction_referent_pro= $_POST['fonction_referent_pro'];
		$id_entreprise = $_SESSION['id_entreprise'];

		$nouveau_ref_pro = 'INSERT INTO rf_pro(id_rf_pro, fonction_rf_pro, id_entreprise) VALUES ("'.$nom_referent.'","'.$fonction_referent_pro.'","'.$id_entreprise.'")';
		$req = $bdd->query($nouveau_ref_pro);

		header('Location: /projetgs/entreprises_refpro.php'); 
?>