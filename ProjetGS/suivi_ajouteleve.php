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
			<form action="">
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
				<button type="submit">Ajouter</button>
			</form>
		</div>
	</div>
<?php 
	include '/view/includes/footer.php';
?>