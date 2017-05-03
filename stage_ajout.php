<?php 
	include '/view/includes/header.php';
	include '/view/includes/menu.php';
	include '/view/includes/menu_vertical.php';
?>
	<div class="container">
		<div id="content">
			<h1>
				<?php
					echo $_SESSION['nom_etudiant']." ".$_SESSION['prenom_etudiant']." - ".$_SESSION['classe'];
				?>
			</h1>
			<br>
			<form method="POST" action="insert_stage.php">
				<h2>Nouveau stage :</h2>
				<br>
				<label> (Temporaire) ID :</label>
				<input name="id_stage" />
				<br>
				<label> (Temporaire) TYPE :</label>
				<select name="type_stage">
						<?php
							$types = 'SELECT * FROM type';
							$req = $bdd->query($types);

							while ($row = $req->fetch()) {
								echo "<option value = ".$row['id_type'].">";
								echo $row['lib_type'];
								echo "</option>";
							}
						?>
					</select>
				<br>
				<label>Entreprise :</label>
					<select name="entreprise">
						<?php
							$entreprises = 'SELECT * FROM entreprise';
							$req = $bdd->query($entreprises);

							while ($row = $req->fetch()) {
								echo "<option value = ".$row['id_entreprise'].">";
								echo $row['nom_entreprise'];
								echo "</option>";
							}
						?>
					</select>
				<br>
				<label>Resp. pédagogique :</label>
					<select name="ref_peda">
						<?php
							$rypeda = 'SELECT * FROM rf_peda';
							$req = $bdd->query($rypeda);

							while ($row = $req->fetch()) {
								echo "<option value = ".$row['id_rf_peda'].">";
								echo $row['nom_referent'];
								echo "</option>";
							}
						?>
					</select>
				<br>
				<label>Resp. technique :</label>
					<select name="ref_pro">
						<?php
							$rypro = 'SELECT * FROM rf_pro';
							$req = $bdd->query($rypro);

							while ($row = $req->fetch()) {
								echo "<option value = ".$row['id_rf_pro'].">";
								echo $row['nom_referent_pro'];
								echo "</option>";
							}
						?>
					</select>
				<br>
				<label>Technologies pratiquées :</label>
					<select name="technos">
						<?php
							$technos = 'SELECT * FROM techno';
							$req = $bdd->query($technos);

							while ($row = $req->fetch()) {
								echo "<option value = ".$row['Id_techno'].">";
								echo $row['lib_techno'];
								echo "</option>";
							}
						?>
					</select>
				<br>
				<label>Année concernée :</label>
					<select name="annees">
						<?php
							$annees = 'SELECT * FROM annee';
							$req = $bdd->query($annees);

							while ($row = $req->fetch()) {
								echo "<option value = ".$row['date_annee'].">";
								echo $row['date_annee'];
								echo "</option>";
							}
						?>
					</select>
				<br>
				<label>Date début :</label>
					<input name="date_deb" type="date">
				<label>Date fin :</label>
					<input name="date_fin" type="date">
				<br>
				<input type="submit" value="Ajouter">
			</form>
		</div>
	</div>
<?php 
	include '/view/includes/footer.php';
?>