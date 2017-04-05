<?php
$nom = $_GET['etudiant'];
$classe = $_GET['classe'];
var_dump($_GET['classe']);
var_dump($_GET['etudiant']);
?>
<?php include 'includes/header.php' ?>
<div class="container_stage">
	<div class="box_menu_accordeon">
		<?php include 'includes/menu_gauche.php' ?>
	</div>
		<div class="contenue_stage_acc">
			<div class="titre_principal">
				<?php echo $nom ?> - <?php echo $classe ?>
			</div>
			<div class="titre_secondaire_visite">
			Ajouter une nouvelle visite
			</div>
			<div class="ajout_visite">
			<form method="post" action="traitement_new_visite.php">
				<label class="label_visite_form">Date de visite :</label>
				<input type="date" name="date_visite" class="input_visite_form">
				<br>
				<br>
				<label class="label_visite_form">Observations :</label>
				<input type="textarea" rows="8" cols="50" class="input_visite_form_observation" name="Observations">
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<div class="submit"><input type="submit" value="valider"></div>
			</form>
			</div>
		</div>
</div>
<?php include 'includes/footer.php' ?>