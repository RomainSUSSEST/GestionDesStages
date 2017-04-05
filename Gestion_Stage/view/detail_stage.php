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
			<div class="titre_secondaire">
			Vistes liées au stage
			</div>
			<div class="btn_ajout">
			<input type="button" value="Nouvelle visite" onClick="javascript:document.location.href='#'" />
			</div>
			<div class="visites">
			<?php 
			$requete= $con->query( 'SELECT Date_visite, Observations_visite, Nom_etudiant FROM visite, stage, etudiant where visite.Id_stage = stage.Id_stage and etudiant.Id_etudiant = stage.Id_etudiant and Nom_etudiant like "'.$nom.'"' ); ?>
			<?php  while($donnees=$requete->fetch()) { ?>
			Date de la visite <?php echo ($donnees['Date_visite']); ?>
			<br>
			<br>
			Observations:
			<p>
			<?php echo ($donnees['Observations_visite']); ?>
			</p>
			<br>
			<br>
			<?php } ?>
			</div>
	</div>
</div>
<?php include 'includes/footer.php' ?>