<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet_stages;charset=utf8', 'root', ''); 

try {
$con = new PDO('mysql:host=localhost;dbname=projet_stages', 'root', '');;
} catch(Exeption $e) {
	die($e);
}

	$annee=$_GET['nouvelle_annee'];
	$regexAnnee = '!\d{4}\/\d{4}!';
	// restriction de la date au format : xxxx/xxxx
	if(preg_match($regexAnnee, $annee))
	{
	$nouvelle_annee = 'INSERT INTO annee (date_annee) VALUES ("'.$annee.'")';
	$req = $bdd->query($nouvelle_annee);
	}
	header('Location: projetgs/suivi_ajoutannee.php'); 
?>
