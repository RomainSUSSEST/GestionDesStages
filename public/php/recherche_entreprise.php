<?php
	session_start();
	$bdd = new PDO('mysql:host=localhost;dbname=projet_stages;charset=utf8', 'root', '7fec7eces'); 

	try {
	$con = new PDO('mysql:host=localhost;dbname=projet_stages', 'root', '7fec7eces');;
	} catch(Exeption $e) {
		die($e);
	}

	$nom_entreprise= $_POST['nom_entreprise'];

	$caentreprise = 'SELECT c_a_entreprise FROM entreprise WHERE nom_entreprise = (SELECT nom_entreprise from entreprise WHERE nom_entreprise ="'.$nom_entreprise.'")';
	$adresse_entreprise= 'SELECT adresse_entreprise FROM entreprise WHERE nom_entreprise = (SELECT nom_entreprise FROM entreprise WHERE nom_entreprise =  "'.$nom_entreprise.'")';
	$tel_entreprise= 'SELECT tel_entreprise FROM entreprise WHERE nom_entreprise = (SELECT nom_entreprise FROM entreprise WHERE nom_entreprise =  "'.$nom_entreprise.'")';

	$req = $bdd->query($caentreprise);

	while ($row = $req->fetch()) {
		$lecaentreprise = $row['c_a_entreprise'];
	}

	$adresse_entreprise = $bdd->query($adresse_entreprise);

	while ($row = $adresse_entreprise->fetch()) {
		$ladresse_entreprise = $row['adresse_entreprise'];
	}

	$tel_entreprise = $bdd->query($tel_entreprise);

	while ($row = $tel_entreprise->fetch()) {
		$letel_entreprise = $row['tel_entreprise'];
	}




	$_SESSION['nom_entreprise'] = $nom_entreprise;
	$_SESSION['caentreprise'] = $lecaentreprise;
	$_SESSION['adresse_entreprise'] = $ladresse_entreprise;
	$_SESSION['tel_entreprise']= $letel_entreprise;


	header('Location: /projetgs/entreprises_informations.php'); 
?>