<?php
	session_start();
	$bdd = new PDO('mysql:host=localhost;dbname=projet_stages;charset=utf8', 'root', '7fec7eces'); 

	try {
	$con = new PDO('mysql:host=localhost;dbname=projet_stages', 'root', '7fec7eces');;
	} catch(Exeption $e) {
		die($e);
	}

		$nom_entreprise = $_POST['nom_entreprise'];
		$ca_entreprise= $_POST['ca_entreprise'];
		$adresse_entreprise = $_POST['adresse_entreprise'];
		$type = $_POST['type'];

		$nouvelle_entreprise = 'INSERT INTO entreprise(id_entreprise, adresse_entreprise, c_a_entreprise, id_type) VALUES ("'.$nom_entreprise.'","'.$adresse_entreprise.'","'.$ca_entreprise.'","'.$type.'")';
		$req = $bdd->query($nouvelle_entreprise);
		$_SESSION['id_entreprise'] = $nom_entreprise;
		$_SESSION['adresse_entreprise'] = $adresse_entreprise;
		$_SESSION['ca_entreprise'] = $ca_entreprise;


		header('Location: /projetgs/entreprises_informations.php'); 
?>