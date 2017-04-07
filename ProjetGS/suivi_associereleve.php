<?php 
	include '/view/includes/header.php';
	include '/view/includes/menu.php';
	include '/view/includes/menu_vertical.php';
?>
	<div class="container">
		<div id="content">
			<h1>NOM DE L'ELEVE</h1>
			<h2>Associer l'élève à une nouvelle classe :</h2>
			<br>
			<form>
				<label>Classe :</label>
				<select>
					<option></option>
				</select>
				<br>
				<label>Année :</label>
				<select>
					<option></option>
				</select>
				<br>
				<button>Valider</button>
			</form>
		</div>
	</div>
<?php 
	include '/view/includes/footer.php';
?>