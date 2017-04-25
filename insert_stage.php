<?php 
	include '/view/includes/header.php';
	include '/view/includes/menu.php';

	$bdd = new PDO('mysql:host=localhost;dbname=projet_stages;charset=utf8', 'root', ''); 

	try {
	$con = new PDO('mysql:host=localhost;dbname=projet_stages', 'root', '');;
	} catch(Exeption $e) {
		die($e);
	}

	$id_etudiant = $_SESSION['id_etudiant'];
	$idstage = $_GET['id_stage'];
	$typestage = $_GET['type_stage'];
	$technos = $_GET['technos'];
	$entreprise = $_GET['entreprise'];
	$refpeda = $_GET['ref_peda'];
	$refpro = $_GET['ref_pro'];
	$annee = $_GET['annees'];
	$datedeb = $_GET['date_deb'];
	$datefin = $_GET['date_fin'];

	if (isset($entreprise) && isset($refpeda) && isset($refpro) && isset($annee) && isset($datedeb) && isset($datefin)) {

		$nouveau_stage = 'INSERT INTO stage (id_stage, type_stage, observations_stage, id_etudiant, id_entreprise, id_rf_peda, id_rf_pro, annee_concernee, date_deb_stage, date_fin_stage) VALUES ("'.$idstage.'", "'.$typestage.'", "NULL", "'.$id_etudiant.'","'.$entreprise.'", "'.$refpeda.'","'.$refpro.'","'.$annee.'","'.$datedeb.'","'.$datefin.'")';
		$req = $bdd->query($nouveau_stage);

		if ($req != false)
		{
			header('Location: /projetgs/stage_ajout.php'); 
		}
		else {
			var_dump($nouveau_stage);
			var_dump($req);
			var_dump($id_etudiant);
			var_dump($idstage);
			var_dump($typestage);
			var_dump($technos);
			var_dump($entreprise);
			var_dump($refpeda);
			var_dump($refpro);
			var_dump($annee);
			var_dump($datedeb, $datefin);
		}
	}

	include '/view/includes/footer.php';
?>