<?php 
	include '/view/includes/header.php';
	include '/view/includes/menu.php';
	include '/view/includes/menu_vertical.php';
?>
	<div class="container">
		<div id="content">
			<div class="left" > 
				<h1>
					<?php
					echo $_SESSION['etudiant']." - ".$_SESSION['classe'];
					?>
				</h1>
				<br>
				<p>
					<?php
							$un_stage = 'SELECT * FROM stage WHERE id_etudiant = '.$_SESSION['id_etudiant'].' AND id_stage ='.$_GET['stage'].' ';
							$req = $bdd->query($un_stage);

							while ($row = $req->fetch()) 
								{
									echo "Entreprise : ".$row['id_entreprise']."<br> Rép. technique : ".$row['id_rf_pro']."<br> Rép. pédagogique : ".$row['id_rf_peda']."<br> Année concernée : ".$row['annee_concernee'];
								};
					?>
				</p>

				<h2>Visites liées au stage :</h2>

				<?php
					$visites = 'SELECT * FROM visite WHERE id_stage ='.$_GET['stage'].'';
					$req = $bdd->query($visites);

					while ($row = $req->fetch()) {
						echo "<p><h3>".$row['date_visite']."<br> Observations :</h3></p><p>".$row['observation_visite']."</p>";
					}
				?>
			</div>
			<div class="right">
				<p>
					<?php
							$un_stage = 'SELECT * FROM stage WHERE id_etudiant = '.$_SESSION['id_etudiant'].' AND id_stage ='.$_GET['stage'].' ';
							$req = $bdd->query($un_stage);

							while ($row = $req->fetch()) 
								{
									echo "Observations : <br> <h3>".$row['observations_stage']."</h3>";
								};
					?>
				</p>
			</div>
		</div>
	</div>

<?php 
	include '/view/includes/footer.php';
?>