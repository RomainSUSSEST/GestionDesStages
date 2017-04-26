<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet_stages;charset=utf8', 'root', '7fec7eces'); 

try {
$con = new PDO('mysql:host=localhost;dbname=projet_stages', 'root', '7fec7eces');;
} catch(Exeption $e) {
	die($e);
}
	$date_visite=$_POST['date_visite']
	$observation=$_POST['observations'];

	$nouvelle_visite = 'INSERT INTO visite (date_visite, obsevations_visite) VALUES ("'.$date_visite.'","'.$observations.'")';
	$req = $bdd->query($nouvelle_visite);
	
	header('Location: /projetgs/stage_ajoutvisite.php'); 
?>