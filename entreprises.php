<?php 
	include '/view/includes/header.php';
	include '/view/includes/menu.php';
	include '/view/includes/menu_vertical.php';
?>
	<div class="container">
		<div id="content">
			<h1>Entreprises :</h1>
			<div class="left">
			<form action="entreprises_informations.php" method="GET">
				<h2>Rechercher une entreprise :</h2>
				<br>
				<label>Nom de l'entreprise :</label>
				<select>
					<option>Ajouter Entreprise</option>
				</select>
				<br>
				<button>Rechercher</button>
			</form>
			</div>
			<div class="right">
			<form action="" method="GET">
				<h2>Nouvelle Entreprise :</h2>
				<br>
				<label>Nom de l'entreprise :</label>
				<input />
				<br>
				<label>Chiffre d'affaires :</label>
				<input />
				<br>
				<label>Adresse postale :</label>
				<textarea></textarea>
				<br>
				<button>Valider</button>
			</form>
			</div>
		</div>
	</div>
<?php 
	include '/view/includes/footer.php';
?>