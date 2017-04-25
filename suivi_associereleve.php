<?php 
	include '/view/includes/header.php';
	include '/view/includes/menu.php';
	include '/view/includes/menu_vertical.php';
?>
	<div class="container">
		<div id="content">
			<h1>
			<?php 
				$eleve = 'SELECT * FROM etudiant_sup WHERE id_etudiant = '.$_SESSION['eleve'].'';
				$req = $bdd->query($eleve); 

				while ($row = $req->fetch()) 
						{
							echo $row['nom_etudiant']." ".$row['prenom_etudiant'];
						};
			?>
			</h1>
			<h2>Associer l'élève à une nouvelle classe :</h2>
			<br>
			<form method="GET" action="/projetgs/associer_eleve.php">
				<label>Classe :</label>
				<select name="classe">
					<?php
						$classes = 'SELECT * FROM classe';
						$req = $bdd->query($classes);

						while ($row = $req->fetch()) {
							echo "<option value = ".$row['id_classe'].">";
							echo $row['id_classe'];
							echo "</option>";
						}
					?>
				</select>
				<br>
				<label>Année :</label>
				<select name="annee">
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
				<button>Valider</button>
			</form>
		</div>
	</div>
<?php 
	include '/view/includes/footer.php';
?>