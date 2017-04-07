<?php 
	include '/view/includes/header.php';
	include '/view/includes/menu.php';
	include '/view/includes/menu_vertical.php';
?>
	<div class="container">
		<div id="content">
		<h1>NOM PRENOM DE L'ELEVE</h1>
		<h2>Informations :</h2>
		<center>
			<a href="suivi_associereleve.php"><button>Associer à une nouvelle classe</button></a>
		</center>
			<div class="left">
				<label>Nom :</label>
				<input />
				<br>
				<label>Téléphone :</label>
				<input />
				<br>
				<label>Adresse postale :</label>
				<textarea></textarea>
			</div>
			<div class="right">
				<label>Prénom :</label>
				<input />
				<br>
				<label>Courriel :</label>
				<input />
				<br>
				<label>Annee obtention BAC :</label>
				<input />
				<br>
				<label>Type de BAC</label>
				<select>
					<option></option>
				</select>
			</div>
			<br>
			<a href="suivi_suivi_classe.php"><button>Associer à une nouvelle classe</button></a>
			<br>
			<h2>Historique des classes :</h2>
			<br>
			TABLEAU ICI
		</div>
	</div>
<?php 
	include '/view/includes/footer.php';
?>