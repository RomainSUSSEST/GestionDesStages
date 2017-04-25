+
<?php 
	include '/view/includes/header.php';
	include '/view/includes/menu.php';
	include '/view/includes/menu_vertical.php';
	include '/commons/database/database.php';
?>
	<div class="container">
		<div id="content">
			<h1>Gestion des Stages</h1>
			<br>
			<h2>Rechercher un élève :</h2>
			<br>
				<p>
					<form action='#' name="classe" method="GET">
					<label id="classe"> Classe :</label>
					<select name="classe" id="classe">
						<?php
						$id_classe = 'SELECT * FROM classe';
						$req = $bdd->query($id_classe);

						while ($row = $req->fetch()) 
						{
							echo "<option value=".$row['id_classe']."";

								if (isset($_GET['classe'])) {

									$select = $_GET['classe'];
									if($select == $row['id_classe'])
									 	{
									 		echo " selected";
									 	};
								};

							echo ">";
							echo $row['id_classe'];
							echo "</option>";
						};
						?>
					</select>
						<input type="submit" value="Confirmer">
					</form>
				</p>
				<form action="stage_ensemble.php" method="POST">
				<p>
					<label id="eleve"> Eleve :</label>
					<select name="eleve" id="eleve">
						<?php
						$la_classe = $_GET['classe'];

						if ($la_classe != "") {
							$id_etudiant = 'SELECT * FROM etudiant_sup WHERE id_etudiant = (SELECT id_etudiant FROM inscrit WHERE id_classe = "'.$la_classe.'")';
							$req = $bdd->query($id_etudiant);

							while ($row = $req->fetch()) 
							{
								echo "<option value=".$row['nom_etudiant'].$row['prenom_etudiant'].">";
								echo $row['nom_etudiant']." ".$row['prenom_etudiant'];
								echo "</option>";
								$_SESSION['etudiant'] = $row['nom_etudiant']." ".$row['prenom_etudiant'];
								$_SESSION['classe'] = $la_classe;
								$_SESSION['id_etudiant'] = $row['id_etudiant'];
							};
						};
					?>
					</select>
				</p>
				<input type="submit" value="Rechercher">
			</form>
		</div>
	</div>
<?php
	include '/view/includes/footer.php';
?>