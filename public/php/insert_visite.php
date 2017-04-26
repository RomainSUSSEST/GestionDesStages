<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet_stages;charset=utf8', 'root', ''); 
try {
$con = new PDO('mysql:host=localhost;dbname=projet_stages', 'root', '');;
} catch(Exeption $e) {
	die($e);
}
	$id_visite=$_POST['idvisite'];
	$date_visite=$_POST['date_visite'];
	$observations=$_POST['observations'];
	$id_stage=$_POST['idstage'];

	$nouvelle_visite = 'INSERT INTO visite (id_visite, date_visite, observation_visite, id_stage) VALUES ("'.$id_visite.'","'.$date_visite.'","'.$observations.'","'.$id_stage.'")';
	$req = $bdd->query($nouvelle_visite);
	
	header('Location: /projetgs/stage_ajoutvisite.php'); 
?>