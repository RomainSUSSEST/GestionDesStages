<?php
$classe = $_GET['classe'];
var_dump($classe)
?>

<?php include 'includes/header.php' ?>
<div class="container_stage">
	<div class="box_menu_accordeon">
		<?php include 'includes/menu_gauche.php' ?>
	</div>
		<div class="contenue_stage_acc">
			<div class="titre_principal">
			Classe <?php echo $classe ?>
			</div>
			<div id="titre_secondaire_annee">
			Historique des élèves par année
			</div>
			<div id="form_mini">
			<?php
				$requete=$con->query('SELECT Annee from annee,appartient,classe where annee.Id_annee = appartient.Id_annee and classe.Id_classe = appartient.Id_classe and Nom_classe = "'.$classe.'" ORDER BY Annee ASC'); ?>
				<form method="post" action="traitement">
				<label class=form_mini_label_left>Année :</label>
				<select name="Annee">
						<?php  while($donnees=$requete->fetch()) { ?>
				           <option value="<?php echo ($donnees['Annee']); ?>">
				           	<?php echo($donnees['Annee']); ?>
				           </option>
				           <?php } ?>
							<option value="">Autre</option>
				</select>
				<label class=form_mini_label_right>ou nouvelle :</label>
				<input type="textarea" rows="8" cols="50">
				<div class="submit">
					<br>
					<input type="submit" value="    Valider   ">
				</div>
				</form>
			</div>
		</div>			
</div>
<?php include 'includes/footer.php' ?>