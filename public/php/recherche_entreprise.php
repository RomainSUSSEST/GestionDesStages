<?php
		session_start();
	$bdd = new PDO('mysql:host=localhost;dbname=projet_stages;charset=utf8', 'root', '7fec7eces'); 

	try {
	$con = new PDO('mysql:host=localhost;dbname=projet_stages', 'root', '7fec7eces');;
	} catch(Exeption $e) {
		die($e);
	}

	$id_entreprise= $_POST['id_entreprise'];

	$caentreprise = 'SELECT c_a_entreprise FROM entreprise WHERE id_entreprise = (SELECT id_entreprise from entreprise WHERE id_entreprise ="'.$id_entreprise.'")';
	$adresse_entreprise= 'SELECT adresse_entreprise FROM entreprise WHERE id_entreprise = (SELECT id_entreprise FROM entreprise WHERE id_entreprise =  "'.$id_entreprise.'")';

	$req = $bdd->query($caentreprise);

	while ($row = $req->fetch()) {
		$lecaentreprise = $row['c_a_entreprise'];
	}

	$adresse_entreprise = $bdd->query($adresse_entreprise);

	while ($row = $adresse_entreprise->fetch()) {
		$ladresse_entreprise = $row['adresse_entreprise'];
	}
	$_SESSION['id_entreprise'] = $id_entreprise;
	$_SESSION['caentreprise'] = $lecaentreprise;
	$_SESSION['adresse_entreprise'] = $ladresse_entreprise;


	header('Location: /projetgs/entreprises_informations.php'); 
?>