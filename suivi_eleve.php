<?php 
	include '/view/includes/header.php';
	include '/view/includes/menu.php';
	include '/view/includes/menu_vertical.php';
?>
	<div class="container">
		<div id="content">
		<h1>
			<?php 
				$eleve = 'SELECT * FROM etudiant_sup WHERE id_etudiant = '.$_GET['eleve'].'';
				$req = $bdd->query($eleve); 

				while ($row = $req->fetch()) 
						{
							echo $row['nom_etudiant']." ".$row['prenom_etudiant'];
							$_SESSION['eleve'] = $row['id_etudiant'];
						};
			?>
		</h1>
		<br>
		<h2>Informations :</h2>
			<div class="left">
				<label>Nom :</label>
				<input value=
				<?php 
				$eleve = 'SELECT * FROM etudiant_sup WHERE id_etudiant = '.$_GET['eleve'].'';
				$req = $bdd->query($eleve); 

				while ($row = $req->fetch()) 
						{
							echo $row['nom_etudiant'];
						};
				?> />
				<br>
				<label>Mail :</label>
				<input value=
				<?php 
				$eleve = 'SELECT * FROM etudiant_sup WHERE id_etudiant = '.$_GET['eleve'].'';
				$req = $bdd->query($eleve); 

				while ($row = $req->fetch()) 
						{
							echo $row['mail_etudiant'];
						};
				?> />
				<br>
				<label>Adresse postale :</label>
				<input value=
				<?php 
				$eleve = 'SELECT * FROM etudiant_sup WHERE id_etudiant = '.$_GET['eleve'].'';
				$req = $bdd->query($eleve); 

				while ($row = $req->fetch()) 
						{
							echo $row['adresse_etudiant'];
						};
				?> />
			</div>
			<div class="right">
				<label>Prénom :</label>
				<input value=
				<?php 
				$eleve = 'SELECT * FROM etudiant_sup WHERE id_etudiant = '.$_GET['eleve'].'';
				$req = $bdd->query($eleve); 

				while ($row = $req->fetch()) 
						{
							echo $row['prenom_etudiant'];
						};
				?> />
				<br>
				<label>Annee obtention BAC :</label>
				<input value=
				<?php 
				$eleve = 'SELECT * FROM etudiant_sup WHERE id_etudiant = '.$_GET['eleve'].'';
				$req = $bdd->query($eleve); 

				while ($row = $req->fetch()) 
						{
							echo $row['annee_obtention_bac'];
						};
				?> />
				<br>
				<label>Type de BAC</label>
				<select>
					<?php
							$types = 'SELECT * FROM type_bac';
							$req = $bdd->query($types);

							while ($row = $req->fetch()) {
								echo "<option value = ".$row['id_type_bac'].">";
								echo $row['id_type_bac'];
								echo "</option>";
							}
						?>
				</select>
				<br>
				<p>
					<a href="suivi_associereleve.php"><button>Associer à un élève</button></a>
				</p>
			</div>
			<br>
			<p>
				<a href="suivi_classe.php"><button>Associer à une nouvelle classe</button></a>
			</p>
			<br>
			<h2>Historique des classes :</h2>
			<br>
			<table>
					<tr>
					<th>Année</th>
					<th>Classe</th>
					<th>Action</th>
					</tr>
					<?php
						$classes = 'SELECT * FROM inscrit WHERE id_etudiant = '.$_GET['eleve'].'';
						$req = $bdd->query($classes);

						while ($row = $req->fetch()) 
						{
							echo "<tr>";
							echo "<td>".$row['date_annee']."</td> <td>".$row['id_classe']."</td> <td><a href='#?id=".$row['id_classe']."'>Détails</a></td>";
							echo "</tr>";
						};
					?>
				</table>
		</div>
	</div>
<?php 
	include '/view/includes/footer.php';
?>