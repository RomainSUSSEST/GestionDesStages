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
	$type_entreprise = $_POST['type_entreprise'];
	$nouveau_type =$_POST['nouveau_type'];
	$telephone_entreprise = $_POST['telephone_entreprise'];
	$resp_technique = $_POST['resp_technique'];
	$nouveau_resp = $_POST ['nouveau_resp_technique'];



	if (isset($nouveau_type)) {

		$lenouveau_type = 'INSERT INTO type(id_type, lib_type) VALUES ([value-1],[value-2])';
		$req = $bdd->query($lenouveau_type);

		$maj_entreprise = 'UPDATE entreprise SET adresse_entreprise="'.$adresse_entreprise.'" , c_a_entreprise ="'.$ca_entreprise.'", id_type="'.$nouveau_type.'", tel_entreprise= "'.$telephone_entreprise.'"" WHERE nom_entreprise = "'.$nom_entreprise.'"';

		$req = $bdd->query($maj_entreprise);
	}

	elseif (isset($nouveau_type) && isset($nouveau_resp)) {
		$lenouveau_type = 'INSERT INTO type(id_type, lib_type) VALUES ([value-1],[value-2])';
		$req = $bdd->query($lenouveau_type);

		$lenouveau_resp = 'INSERT INTO rf_pro(id_rf_pro, fonction_rf_pro, id_entreprise, nom_referent_pro) VALUES ([value-1],[value-2],[value-3],[value-4])';
		$req = $bdd->query($lenouveau_resp);

		$maj_entreprise = 'UPDATE entreprise SET adresse_entreprise=[value-2],c_a_entreprise=[value-3],id_type=[value-4],nom_entreprise=[value-5],tel_entreprise=[value-6] WHERE 1';

		$req = $bdd->query($maj_entreprise);
	}

	elseif (isset($nouveau_resp)) {
		$lenouveau_resp = 'INSERT INTO rf_pro(id_rf_pro, fonction_rf_pro, id_entreprise, nom_referent_pro) VALUES ([value-1],[value-2],[value-3],[value-4])';
		$req = $bdd->query($lenouveau_resp);

		$maj_entreprise = 'UPDATE entreprise SET adresse_entreprise=[value-2],c_a_entreprise=[value-3],id_type=[value-4],nom_entreprise=[value-5],tel_entreprise=[value-6] WHERE 1';

		$req = $bdd->query($maj_entreprise);
	}
	else{
		$maj_entreprise = 'UPDATE entreprise SET adresse_entreprise=[value-2],c_a_entreprise=[value-3],id_type=[value-4],nom_entreprise=[value-5],tel_entreprise=[value-6] WHERE 1';

		$req = $bdd->query($maj_entreprise);
	}








?>