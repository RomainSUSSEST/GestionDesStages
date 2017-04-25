<?php 
	include '/view/includes/header.php';
	include '/view/includes/menu.php';
	include '/view/includes/menu_vertical.php';
?>
	<div class="container">
		<div id="content">
			<h1>Suivi Scolarité</h1>
			<h2>Ajouter un élève :</h2>
			<br>
			<form action="/projetgs/public/php/insert_eleve.php" method="GET">
				<div class="left">
					<label>Nom :</label>
					<input name="nom" />
					<br>
					<label>Téléphone :</label>
					<input name="telephone" />
					<br>
					<label>Adresse postale :</label>
					<input name="postale" />
					<input name="id" />
				</div>
				<div class="right">
					<label>Prénom :</label>
					<input name="prenom" />
					<br>
					<label>Courriel :</label>
					<input name="courriel" />
					<br>
					<label>Annee obtention BAC :</label>
					<input name="annee" />
					<br>
					<label>Type de BAC</label>
					<select name="type">
						<?php
						$type_bac = 'SELECT * FROM type_bac';
						$req = $bdd->query($type_bac);

						while ($row = $req->fetch()) 
						{
							echo "<option value=".$row['id_type_bac'].">";
							echo $row['id_type_bac'];
							echo "</option>";
						};
						?>
					</select>
				</div>
				<button type="submit">Ajouter</button>
			</form>
		</div>
	</div>
<?php 
	include '/view/includes/footer.php';
?>