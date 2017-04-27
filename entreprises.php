<?php 
	include '/view/includes/header.php';
	include '/view/includes/menu.php';
	include '/view/includes/menu_vertical.php';
?>
	<div class="container">
		<div id="content">
			<h1>Entreprises :</h1>
			<div class="left">
			<form action="public/php/recherche_entreprise.php" method="POST">
				<h2>Rechercher une entreprise :</h2>
				<br>
				<label>Nom de l'entreprise :</label>
				<select name="id_entreprise">
				<?php
						$nom_entreprise = 'SELECT * FROM entreprise';
						$req = $bdd->query($nom_entreprise);

						while ($row = $req->fetch()) 
						{
							echo "<option value='".$row['id_entreprise']."'>";
							echo $row['id_entreprise'];
							echo "</option>";
						};
						?>
				</select>
				<br>
				<button>Rechercher</button>
			</form>
			</div>
			<div class="right">
			<form action="public/php/insert_entreprise.php" method="POST">
				<h2>Nouvelle Entreprise :</h2>
				<br>
				<label>Nom de l'entreprise :</label>
				<input type="text" name="nom_entreprise">
				<br>
				<label>Chiffre d'affaires :</label>
				<input type="number" name="ca_entreprise">
				<br>
				<label>Adresse postale :</label>
				<textarea type="text" name="adresse_entreprise"></textarea>
				<br>
				<label>Type d'entreprise</label>
				<select name="type">
						<?php
						$type_bac = 'SELECT * FROM type';
						$req = $bdd->query($type_bac);

						while ($row = $req->fetch()) 
						{
							echo "<option value=".$row['lib_type'].">";
							echo $row['lib_type'];
							echo "</option>";
						};
						?>
				</select>
				<button>Valider</button>
			</form>
			</div>
		</div>
	</div>
<?php 
	include '/view/includes/footer.php';
?>