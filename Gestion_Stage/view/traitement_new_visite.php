<?php
$user = 'root';
$pass = "";
try {
$con = new PDO('mysql:host=localhost;dbname=gestion_stage', $user, $pass);;
} catch(Exeption $e) {
	die($e);
}
$nom = $_GET['etudiant'];
$date = $_POST['date_visite'];
$Observations = $_POST['Observations'];
var_dump($date);
var_dump($Observations)
$requete= $con->query( 'SELECT '
$requete= $con->query( 'INSERT INTO visite VALUES (Date_visite, Observations_visite,Id_referent_peda,Id_stage) SELECT "'.$date.'", "'.$Observation.'", Observations_visite, Id_referent_peda, Id_stage FROM visite,stage,etudiant where visite.Id_stage = stage.Id_stage and etudiant.Id_etudiant = stage.Id_etudiant and  Nom_etudiant like "'.$nom.'"' )

?>